<?php

namespace App\Http\Controllers;

use App\Models\ColorStoneShape;
use Illuminate\Http\Request;

class ColorstoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Color_stone');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req)
    {
        ColorStoneShape::updateOrCreate([
            'id'=>$req->cs_id
        ],[
            'name'=>$req->name,
            'description'=>$req->description,
        ])  ; 
        $msg=$req->cs_id ? 'Updated succesfully' : 'Added succesfully';
        return redirect('Color_stone')->with('msg',$msg);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function view()
    {
        $colorstone_data=ColorStoneShape::all();
        return view('Color_stone',compact('colorstone_data'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ColorStoneShape  $colorstone
     * @return \Illuminate\Http\Response
     */
    public function show(ColorStoneShape $colorstone)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ColorStoneShape  $colorstone
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $colorstone=ColorStoneShape::find($id);
        return $colorstone;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Colorstone  $colorstone
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Colorstone $colorstone)
    {
      //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Colorstone  $colorstone
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $req, $id)
    {
        Colorstone::find($req->id)->delete();
        return redirect('Color_stone')->with('msg','Deleted succesfully');
    }
}
