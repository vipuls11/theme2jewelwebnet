<?php

namespace App\Http\Controllers;

use App\Models\Metalpurity;
use Illuminate\Http\Request;

class MetalpurityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('metal-purity');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req)
    {
        Metalpurity::updateOrCreate([
            'id'=>$req->mp_id
        ],[
            'name'=>$req->name,
            'purity_name'=>$req->purity_name,
          
        ]);
        $msg=$req->mp_id ? 'Updated succesfully' : 'Added succesfully';
        return redirect('metal-purity')->with('msg',$msg);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function view()
    {
        $metalpurity_data=Metalpurity::all();
        return view('metal-purity',compact('metalpurity_data'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Metalpurity  $metalpurity
     * @return \Illuminate\Http\Response
     */
    public function show(Metalpurity $metalpurity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Metalpurity  $metalpurity
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $metal=Metalpurity::find($id);
        return $metal;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Metalpurity  $metalpurity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Metalpurity $metalpurity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Metalpurity  $metalpurity
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $req, $id)
    {
        Metalpurity::find($req->id)->delete();
        return redirect('metal-purity')->with('msg','Deleted succesfully');
    }
}
