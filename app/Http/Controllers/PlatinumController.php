<?php

namespace App\Http\Controllers;

use App\Models\Platinum;
use Illuminate\Http\Request;

class PlatinumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('platinum');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req)
    {
        Platinum::updateOrCreate([
            'id'=>$req->pl_id
        ],[
            'name'=>$req->name,
            'description'=>$req->description,
        ]);
        $msg=$req->pl_id ? 'Updated succesfully' : 'Added succesfully';
        return redirect('platinum')->with('msg',$msg);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function view()
    {
        $plat_data=Platinum::all();
        return view('platinum',compact('plat_data'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Platinum  $platinum
     * @return \Illuminate\Http\Response
     */
    public function show(Platinum $platinum)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Platinum  $platinum
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $platinum=Platinum::find($id);
        return $platinum;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Platinum  $platinum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Platinum $platinum)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Platinum  $platinum
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $req, $id)
    {
        Platinum::find($req->id)->delete();
        return redirect('platinum')->with('msg','Delated successfull');
    }
}
