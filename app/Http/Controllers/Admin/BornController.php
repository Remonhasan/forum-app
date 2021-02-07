<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Born;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class BornController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $borns = Born::latest()->get();
        return view ('admin.born.index',compact('borns'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.born.create');
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
            'name' => 'required'
        ]);
        $born = new Born();
        $born->name = $request->name;
        $born->slug = str_slug($request->name);
        $born->date = $request->date;
        $born->save();
        Toastr::success('Born Entry Successfully Saved :)' ,'Success');
        return redirect()->route('admin.born.index');
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
        $born = Born::find($id);
        return view('admin.born.edit',compact('born'));
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
        $born = Born::find($id);
        $born->name = $request->name;
        $born->slug = str_slug($request->name);
        $born->date = $request->date;
        $born->save();
        Toastr::success('Born Entry Successfully Updated :)','Success');
        return redirect()->route('admin.born.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Born::find($id)->delete();
        Toastr::success('Born Entry Successfully Deleted :)','Success');
        return redirect()->back();
    }
}
