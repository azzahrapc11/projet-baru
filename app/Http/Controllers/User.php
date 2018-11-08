<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelUser;

class User extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = modeluser::all();
		return view ('user',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view ('user_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new modeluser();
	$data->nama = $request->nama;
	$data->email = $request->email;
	$data->username = $request->username;
	$data->password = $request->password;
	$data->save();
	return redirect()->route('user.index')->with('alert-success','Berhasil Menambahkan Data!');
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
       $data = modeluser::where('id',$id)->get();
		return view ('user_edit',compact('data'));
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
         $data = modeluser::where('id',$id)->first();
	$data->nama = $request->nama;
	$data->email = $request->email;
	$data->username = $request->username;
	$data->password = $request->password;
	$data->save();
	return redirect()->route('user.index')->with('alert-success','Data berhasil diubah!');
	}
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = modeluser::where('id',$id)->first();
		$data->delete();
		return redirect()->route('user.index')->with('alert-success','Data berhasil dihapus!');
    }
}
