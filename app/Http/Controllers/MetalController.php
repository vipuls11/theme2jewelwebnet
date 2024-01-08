<?php

namespace App\Http\Controllers;

use App\Models\Metal;
use Illuminate\Http\Request;

class MetalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('metal');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req)
    {
        Metal::updateOrCreate([
            'id'=>$req->met_id
        ],[
            'metal_name'=>$req->metal_name,
            'description'=>$req->description,
        ]);
        $msg=$req->met_id ? 'Updated succesfully' : 'Added succesfully';
        return redirect('metal')->with('msg',$msg);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function view()
    {
        $metals=Metal::all();
        return view('metal',compact('metals')) ;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Metal  $metal
     * @return \Illuminate\Http\Response
     */
    public function show(Metal $metal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Metal  $metal
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $metal=Metal::find($id);
        return $metal;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Metal  $metal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Metal $metal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Metal  $metal
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $req, $id)
    {
        Metal::find($req->id)->delete();
        return redirect('metal')->with('msg', 'Deleted succesfully');
    }
}
