<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\NewsCategory;
use App\Models\NewsRegion;
use App\Models\News;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Auth;
use Image;
use File;
use DB;


class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = DB::table('news as n')
                    ->select('n.*','c.category_title as cat_name','r.region_name as reg_name')
                    ->leftJoin('news_categories as c','n.category_id','=','c.id')
                    ->leftJoin('news_regions as r','n.region_id','=','r.id')
                    ->get();
        // dd($news);
        return view('admin.news.index',['news' => $news]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $newsCategory = NewsCategory::all();
        $newsRegion = NewsRegion::all();
        // dd($newsCategory, $newsRegion);
        return view('admin.news.add',['newsCategory' => $newsCategory, 'newsRegion' => $newsRegion]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function storeImage(Request $request)
    {
        if($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = date("Y_m_d_H_m_s") . 'news_img.'.$extension;
            $img = Image::make($request->file('image'))->save('uploads/news_images/'.$filename, 60);
        } else {
            $filename = "noimage.jpg";
        }

        return response()->json(['image_name'=>$filename], 200);
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request,[
            'title' => 'required',
            // 'title' => array('Regex:/^[A-Za-Z0-9]+$/'),
            'description' => 'required',
            'image' => 'image|required',
            'category_id' => 'required',
            'region_id' => 'required',
            'highlight' => 'nullable'
        ]);

        if($request->hasFile('image')) {

            $file = $request->file('image');

            $extension = $file->getClientOriginalExtension();
            $filename = date("Y_m_d_H_m_s") . '_news_img.'.$extension;
            $img = Image::make($request->file('image'))->save('uploads/news_images/'.$filename, 60);

        } else {
            $filename = "noimage.jpg";
        }

        $slug = Str::slug($request->title);
            $duplicate = News::where('slug', $slug)->first();
            if($duplicate){
                return redirect()->route('admin.news.index')->with('error','Slug already exists!');
            }
        
        // $user = Auth::user()->name;
        // dd($user);
        
        $news_data_to_store = [];
        $news_data_to_store['title'] = $request->title;
        // dd($news_data_to_store);
        $news_data_to_store['description'] = $request->description;
        $news_data_to_store['highlight'] = $request->highlight;
        $news_data_to_store['region_id'] = $request->region_id;
        $news_data_to_store['category_id'] = $request->category_id;
        $news_data_to_store['status'] = $request->status;
        // $news_data_to_store['author_id'] = $user;
        $news_data_to_store['slug'] = $slug;
        $news_data_to_store['image'] = $filename;
        $news_data_to_store['created_at'] = Carbon::now();
        

        // if($request->has('save')){
        //     $news_data_to_store['active'] = 0;
        //     $message = 'News saved sucessfully';
        // }else{
        //     $news_data_to_store['active'] = 1;
        //     $message = 'News published sucessfully';
        // }

        $status = DB::table('news')->insert($news_data_to_store);

        return redirect()->route('admin.news')->with('message','News is added successfully');
        
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
        $news = News::find($id);
        // dd($news);
        $newsCategory = NewsCategory::all();
        $newsRegion = NewsRegion::all();
        return view('admin.news.edit',['news' => $news, 'newsCategory' => $newsCategory, 'newsRegion' => $newsRegion]);
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
            'title' => 'required',
            'description' => 'required',
            'image' => 'image|nullable',
            'category_id' => 'required',
            'region_id' => 'required',
            'highlight' => 'nullable'
        ]);

        $news = News::find($id);

        if($request->hasFile('image')) {

            if($news->image !='noimage.jpg'){
                //delete Image
                File::delete('uploads/news_images/' . $news->image);
            }

            $file = $request->file('image');

            $extension = $file->getClientOriginalExtension();
            $filename = date("Y_m_d_H_m_s") . '_news_img.'.$extension;
            $img = Image::make($request->file('image'))->save('uploads/news_images/'.$filename, 60);

        } else {
            $filename = "noimage.jpg";
        }
        
        $news->title = $request->title;
        $news->description = $request->description;
        $news->highlight = $request->highlight;
        $news->image = $filename;
        $news->region_id = $request->region_id;
        $news->category_id = $request->category_id;
        $news->status = $request->status;
        $news->updated_at = Carbon::now();
        
        $news->update();

        return redirect()->route('admin.news')->with('message','News Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = News::find($id);

        $news->delete();

        return redirect()->route('admin.news')->with('error','Deleted Successfully!');
    }
}
