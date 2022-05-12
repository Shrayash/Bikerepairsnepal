<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\NewsRegion;
use Carbon\Carbon;
use DB;

class NewsRegionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $regions = DB::table('news_regions')->get();
        return view('admin.news.region.index',['regions' => $regions]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.region.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $slug = str::slug($request->region_name, '-');

        $news_region_data_to_store = array();
        $news_region_data_to_store['region_name'] = $request->region_name;
        $news_region_data_to_store['status'] = $request->status;
        $news_region_data_to_store['slug'] = $slug;
        $news_region_data_to_store['created_at'] = Carbon::now();

        $duplicate_slug = NewsRegion::where('slug', $slug)->get('created_at');

        if(count($duplicate_slug) >= 1){
            return redirect()->route('admin.news.regions')->with('error','News Region with this name already exists!');
        }

        $status = DB::table('news_regions')->insert($news_region_data_to_store);

        if ($status){
            return redirect()->route('admin.news.regions')->with('message','News Region Sucessfully Added!');
        }else{
            return redirect()->route('admin.news.regions')->with('error','News Region Not Added. Please Try Again!');
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
        $editRegion = NewsRegion::find($id);

        return view('admin.news.region.edit',['editRegion'=>$editRegion]);
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
        $slug = Str::slug($request->region_name, '-');

        $updateRegion = NewsRegion::find($id);

        $updateRegion->region_name = $request->region_name;
        $updateRegion->slug = $slug;
        $updateRegion->status = $request->status;
        $updateRegion->created_at = now();

        $updateRegion->update();


        return redirect()->route('admin.news.regions')->with('message','News Region is Updated!');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $region = NewsRegion::find($id);

        $region->delete();

        return redirect()->route('admin.news.regions')->with('error','Deleted Successfully!');
    }
}
