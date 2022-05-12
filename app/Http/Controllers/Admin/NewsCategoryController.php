<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Str;
use Carbon\Carbon;
use App\Models\NewsCategory;

class NewsCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = DB::table('news_categories')->get();
        return view('admin.news.category.index',['categories' => $category]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     return view('admin.news.category.add');
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

        $news_category_data_to_store = array();
        $news_category_data_to_store['category_title'] = $request->category_title;
        $news_category_data_to_store['status'] = $request->status;
        $news_category_data_to_store['slug'] = $slug;
        $news_category_data_to_store['created_at'] =Carbon::now();

        $duplicate_slug = NewsCategory::where('slug',$slug)->get();

        if(count($duplicate_slug) >= 1){
            return redirect()->route('admin.news.categories')->with(['error'=>'News Category with this title already exists!']);
        }

        $status = DB::table('news_categories')->insert($news_category_data_to_store);

        if ($status){
            return redirect()->route('admin.news.categories')->with(['message'=>'News Category Successfully Added!']);
        }else{
            return redirect()->route('admin.news.categories')->with(['error'=>'News Category Not Added. Please Try Again!']);

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
        $editCategory = NewsCategory::find($id);

        return view('admin.news.category.edit',['editCategory'=>$editCategory]);
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

        $upadteCategory = NewsCategory::find($id);

        $upadteCategory->category_title = $request->category_title;
        $upadteCategory->slug = $slug;
        $upadteCategory->status = $request->status;
        $upadteCategory->created_at = now();

        $upadteCategory->update();

        return redirect()->route('admin.news.categories')->with('message','Category is Updated!!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = NewsCategory::find($id);
        $category->delete();

        return redirect()->route('admin.news.categories')->with(['error'=> 'Deleted Successfully!']);
    }
}
