<?php

namespace App\Http\Controllers;

use App\Models\Diamondcuts;
use Illuminate\Http\Request;

class DiamondcutsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('diamond_cuts');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req)
    {
        Diamondcuts::updateOrCreate([
            'id'=>$req->dc_id
        ],[
            'name'=>$req->name,
            'description'=>$req->description,
        ])  ; 
        $msg=$req->dc_id ? 'Updated succesfully' : 'Added succesfully';
        return redirect('diamond_cuts')->with('msg',$msg);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function view(Request $request)
    {
        $diamondcuts_data=Diamondcuts::all();
        return view('diamond_cuts',compact('diamondcuts_data'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Diamondcuts  $diamondcuts
     * @return \Illuminate\Http\Response
     */
    public function show(Diamondcuts $diamondcuts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Diamondcuts  $diamondcuts
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $diamondcuts=Diamondcuts::find($id);
        return $diamondcuts;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Diamondcuts  $diamondcuts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Diamondcuts $diamondcuts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Diamondcuts  $diamondcuts
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $req, $id)
    {
        Diamondcuts::find($req->id)->delete();
        return redirect('diamond_cuts')->with('msg','Deleted succesfully');
    }
}
