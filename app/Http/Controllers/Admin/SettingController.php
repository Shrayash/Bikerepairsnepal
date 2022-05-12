<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Auth;
use Hash;
use DB;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.setting.setting');
    }


    public function changePassword(Request $request)
    {
        $this->validate($request, [
            'current_password' => 'required',
            'new_password' => 'required',
            'confirm_password' => 'required'
        ]);

        $id = Auth::user()->id;
        $db_password = Auth::user()->password;
        $current_password = $request->current_password;
        $new_password = $request->new_password;
        $confirm_password = $request->confirm_password;

        if(Hash::check($current_password, $db_password)){

            if($new_password === $confirm_password){

                DB::table('users')->where('id', $id)->update([
                    'password' => Hash::make($request->new_password)
                ]);
                return redirect()->back()->with('message', 'Password is updated successfully');

            }else{
                return redirect()->back()->with('error', 'New password and confirm password did not match');
            }

        }else{
            return redirect()->back()->with('error', 'Current password does not match');
        }
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
