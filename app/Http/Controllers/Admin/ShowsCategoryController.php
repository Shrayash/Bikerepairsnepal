<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ShowsCategory;
use Illuminate\Support\Str;
use Carbon\Carbon;
use DB;

class ShowsCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $showsCategory = DB::table('shows_categories')->get();
        return view('admin.shows.category.index',['showsCategory' => $showsCategory]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.shows.category.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $slug = Str::slug($request->category_title, '-');

        $shows_category_data_to_store = array();
        $shows_category_data_to_store['category_title'] = $request->category_title;
        $shows_category_data_to_store['status'] = $request->status;
        $shows_category_data_to_store['slug'] = $slug;
        $shows_category_data_to_store['created_at'] =Carbon::now();

        $duplicate_slug = ShowsCategory::where('slug',$slug)->get();

        if(count($duplicate_slug) >= 1){
            return redirect()->route('admin.shows.categories')->with(['error'=>'Shows Category with this title already exists!']);
        }

        $status = DB::table('shows_categories')->insert($shows_category_data_to_store);

        if ($status){
            return redirect()->route('admin.shows.categories')->with(['message'=>'Shows Category Successfully Added!']);
        }else{
            return redirect()->route('admin.shows.categories')->with(['error'=>'Shows Category Not Added. Please Try Again!']);

        }
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
        $editShows = ShowsCategory::find($id);
        // dd($editShows);
        return view('admin.shows.category.edit',['editShows' => $editShows]);
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
        $slug = Str::slug($request->category_title, '-');

        $upadteCategory = ShowsCategory::find($id);

        $upadteCategory->category_title = $request->category_title;
        $upadteCategory->slug = $slug;
        $upadteCategory->status = $request->status;
        $upadteCategory->updated_at = now();

        $upadteCategory->update();

        return redirect()->route('admin.shows.categories')->with('message','Category is Updated!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $shows = ShowsCategory::find($id);
        $shows->delete();

        return redirect()->route('admin.shows.categories')->with('error','Deleted Successfully!');

    }
}
