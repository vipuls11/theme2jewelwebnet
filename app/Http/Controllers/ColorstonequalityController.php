<?php

namespace App\Http\Controllers;

use App\Models\Colorstonequality;
use Illuminate\Http\Request;

class ColorstonequalityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('color_stone_quality');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req)
    {
        Colorstonequality::updateOrCreate([
            'id'=>$req->csq_id
        ],[
            'name'=>$req->name,
            'description'=>$req->description,
        ])  ; 
        $msg=$req->csq_id ? 'Updated succesfully' : 'Added succesfully';
        return redirect('color_stone_quality')->with('msg',$msg);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function view()
    {
        $colorsq_data=Colorstonequality::all();
        return view('color_stone_quality' , compact('colorsq_data'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Colorstonequality  $colorstonequality
     * @return \Illuminate\Http\Response
     */
    public function show(Colorstonequality $colorstonequality)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Colorstonequality  $colorstonequality
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $colorstonequa=Colorstonequality::find($id);
        return($colorstonequa);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Colorstonequality  $colorstonequality
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Colorstonequality $colorstonequality)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Colorstonequality  $colorstonequality
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $req, $id)
    {
        Colorstonequality::find($req->id)->delete();
        return redirect('color_stone_quality')->with('msg','Deleted Successfully');
    }
}
