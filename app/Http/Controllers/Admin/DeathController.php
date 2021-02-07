<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Death;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class DeathController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $deaths = Death::latest()->get();
        return view ('admin.death.index',compact('deaths'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.death.create');
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
        $death = new Death();
        $death->name = $request->name;
        $death->slug = str_slug($request->name);
        $death->date = $request->date;
        $death->save();
        Toastr::success('Death Entry Successfully Saved :)' ,'Success');
        return redirect()->route('admin.death.index');
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
        $death = Death::find($id);
        return view('admin.death.edit',compact('death'));
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
        $death = Death::find($id);
        $death->name = $request->name;
        $death->slug = str_slug($request->name);
        $death->date = $request->date;
        $death->save();
        Toastr::success('Death Entry Successfully Updated :)','Success');
        return redirect()->route('admin.death.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Death::find($id)->delete();
        Toastr::success('Death Entry Successfully Deleted :)','Success');
        return redirect()->back();
    }
}
