<?php

namespace App\Http\Controllers\Author;

use App\Http\Controllers\Controller;
use App\Info;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $infos = Info::latest()->get();
        return view ('author.info.index',compact('infos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('author.info.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'fname' => 'required',
            'mname' => 'required',
            'rname' => 'required',
            'gender' => 'required',
            'phone' => 'required',
            'age' => 'required',
            'division' => 'required',
            'district' => 'required',
            'upazila' => 'required',
            'psova' => 'required'
        ]);
        $info = new Info();
        $info->fname = $request->fname;
        $info->mname = $request->mname;
        $info->rname = $request->rname;
        $info->gender = $request->gender;
        $info->phone = $request->phone;
        $info->age = $request->age;
        $info->division = $request->division;
        $info->district = $request->district;
        $info->upazila = $request->upazila;
        $info->psova = $request->psova;
        $info->save();
        Toastr::success('User Info Successfully Saved :)' ,'Success');
        return redirect()->route('author.info.index');
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
        $info = Info::find($id);
        return view('author.info.edit',compact('info'));
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
        $info = Info::find($id);
        $info->fname = $request->fname;
        $info->mname = $request->mname;
        $info->rname = $request->rname;
        $info->gender = $request->gender;
        $info->phone = $request->phone;
        $info->age = $request->age;
        $info->division = $request->division;
        $info->district = $request->district;
        $info->upazila = $request->upazila;
        $info->psova = $request->psova;
        $info->save();
        Toastr::success('User Info Successfully Updated :)','Success');
        return redirect()->route('author.info.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Info::find($id)->delete();
        Toastr::success('User Info. Successfully Deleted :)','Success');
        return redirect()->back();
    }
}


