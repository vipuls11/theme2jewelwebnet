<?php

namespace App\Http\Controllers;

use App\Models\Ringsize;
use Illuminate\Http\Request;

class RingsizeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('ring-size');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req)
    {
        Ringsize::updateOrCreate([
            'id'=>$req->rs_id
        ],[
            'ring_size'=>$req->ring_size,
            'gender'=>$req->gender,
            'description'=>$req->description,
        ]);
        $msg=$req->rs_id ? 'Updated succesfully' : 'Added succesfully';
        return redirect('ring-size')->with('msg',$msg);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function view()
    {
        $ringsizes=Ringsize::all();
        return view('ring-size',compact('ringsizes')) ;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ringsize  $ringsize
     * @return \Illuminate\Http\Response
     */
    public function show(Ringsize $ringsize)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ringsize  $ringsize
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sizes=Ringsize::find($id);
        return $sizes;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ringsize  $ringsize
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ringsize $ringsize)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ringsize  $ringsize
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $req, $id)
    {
        Ringsize::find($req->id)->delete();
        return redirect('ring-size')->with('msg','Deleted succesfully');
    }
}
