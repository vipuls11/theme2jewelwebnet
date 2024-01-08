<?php

namespace App\Http\Controllers;

use App\Models\Homeheadcontent;
use Illuminate\Http\Request;

class HomeheadcontentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home_heading_content');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req)
    {
        Homeheadcontent::updateOrCreate([
            'id'=>$req->hc_id
        ],[
            'heading'=>$req->heading,
            'content'=>$req->content,
        ])  ; 
        $msg=$req->hc_id ? 'Updated succesfully' : 'Added succesfully';
        return redirect('home_heading_content')->with('msg',$msg);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function view()
    {
        $homeheadcontent_data=Homeheadcontent::all();
        return view('home_heading_content',compact('homeheadcontent_data'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Homeheadcontent  $homeheadcontent
     * @return \Illuminate\Http\Response
     */
    public function show(Homeheadcontent $homeheadcontent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Homeheadcontent  $homeheadcontent
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $homeheadcontents=Homeheadcontent::find($id);
        return $homeheadcontents;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Homeheadcontent  $homeheadcontent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Homeheadcontent $homeheadcontent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Homeheadcontent  $homeheadcontent
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $req, $id)
    {
        Homeheadcontent::find($req->id)->delete();
        return redirect('home_heading_content')->with('msg',"Deleted succesfully");
    }
}
