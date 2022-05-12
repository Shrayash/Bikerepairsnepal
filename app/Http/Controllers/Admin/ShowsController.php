<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Shows;
use App\Models\ShowsCategory;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Image;
use DB;

class ShowsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shows = DB::table('shows as s')
                        ->leftJoin('shows_categories as c','s.category_id','=','c.id')
                        ->select('s.*','c.category_title as cat_title')
                        ->get();
        // dd($shows);
        return view('admin.shows.index',['shows'=>$shows]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $showsCategory = ShowsCategory::all();
        return view('admin.shows.add',['showsCategory'=>$showsCategory]);
    }

    public function storeImage(Request $request)
    {
        if($request->hasFile('featured_image')) {
            $file = $request->file('featured_image');
            $extension = $file->getClientOriginalExtension();
            $filename = date("Y_m_d_H_m_s") . 'shows_img.'.$extension;
            $img = Image::make($request->file('featured_image'))->save('uploads/shows_images/'.$filename, 60);
        } else {
            $filename = "noimage.jpg";
        }

        return response()->json(['image_name'=>$filename], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //dd($request->all());
        $this->validate($request,[
            'show_title' => 'required',
            // 'title' => array('Regex:/^[A-Za-Z0-9]+$/'),
            'description' => 'required',
            'featured_image' => 'image|required',
            'category_id' => 'required',
            'youtube_video_url' => 'nullable'
        ]);

        if($request->hasFile('featured_image')) {

            $file = $request->file('featured_image');

            $extension = $file->getClientOriginalExtension();
            $filename = date("Y_m_d_H_m_s") . '_shows_img.'.$extension;
            $img = Image::make($request->file('featured_image'))->save('uploads/shows_images/'.$filename, 60);

        } else {
            $filename = "noimage.jpg";
        }

        $slug = Str::slug($request->show_title);
            $duplicate = Shows::where('slug', $slug)->first();
            if($duplicate){
                return redirect()->route('admin.shows')->with('error','Slug already exists!');
            }
        
        // $user = Auth::user()->name;
        // dd($user);
        
        $news_data_to_store = [];
        $news_data_to_store['show_title'] = $request->show_title;
        // dd($news_data_to_store);
        $news_data_to_store['description'] = $request->description;
        $news_data_to_store['category_id'] = $request->category_id;
        $news_data_to_store['status'] = $request->status;
        $news_data_to_store['slug'] = $slug;
        $news_data_to_store['featured_image'] = $filename;
        $news_data_to_store['youtube_video_url'] = $request->youtube_video_url;
        $news_data_to_store['created_at'] = Carbon::now();
        

        // if($request->has('save')){
        //     $news_data_to_store['active'] = 0;
        //     $message = 'News saved sucessfully';
        // }else{
        //     $news_data_to_store['active'] = 1;
        //     $message = 'News published sucessfully';
        // }

        $status = DB::table('shows')->insert($news_data_to_store);

        return redirect()->route('admin.shows')->with('message','News is added successfully');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $shows = Shows::find($id);

       $showsCategory = ShowsCategory::all();

        return view('admin.shows.edit',['shows'=>$shows,'showsCategory'=>$showsCategory]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request->all());
        $this->validate($request,[
            'show_title' => 'required',
            // 'title' => array('Regex:/^[A-Za-Z0-9]+$/'),
            'description' => 'required',
            'featured_image' => 'image|nullable',
            'category_id' => 'required',
            'youtube_video_url' => 'nullable'
        ]);

        $shows = Shows::find($id);

        if($request->hasFile('featured_image')) {

            if($shows->image !='noimage.jpg'){
                //delete Image
                File::delete('uploads/shows_images/' . $shows->image);
            }

            $file = $request->file('featured_image');

            $extension = $file->getClientOriginalExtension();
            $filename = date("Y_m_d_H_m_s") . '_shows_img.'.$extension;
            $img = Image::make($request->file('featured_image'))->save('uploads/shows_images/'.$filename, 60);

        } else {
            $filename = "noimage.jpg";
        }
        
        $shows->show_title  = $request->show_title;
        $shows->description = $request->description;
        $shows->category_id = $request->category_id;
        $shows->featured_image = $filename;
        $shows->youtube_video_url = $request->youtube_video_url;
        $shows->status = $request->status;
        $shows->updated_at = Carbon::now();

        $shows->update();

        return redirect()->route('admin.shows')->with('message','Shows Updated Successfully');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $show = Shows::Find($id);

        $show->delete();

        return redirect()->route('admin.shows')->with('error','Deleted Successfully!');

    }
}
