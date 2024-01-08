<?php

namespace App\Http\Controllers;

use App\Models\Platinumpurity;
use Illuminate\Http\Request;

class PlatinumpurityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('platinum_purity');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req)
    {
        Platinumpurity::updateOrCreate([
            'id'=>$req->plp_id
        ],[
            'name'=>$req->name,
            'description'=>$req->description,
        ]);
        $msg=$req->plp_id ? 'Updated succesfully' : 'Added succesfully';
        return redirect('platinum_purity')->with('msg',$msg);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function view()
    {
        $Platinumpurities=Platinumpurity::all();
        return view('platinum_purity',compact('Platinumpurities'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Platinumpurity  $platinumpurity
     * @return \Illuminate\Http\Response
     */
    public function show(Platinumpurity $platinumpurity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Platinumpurity  $platinumpurity
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $plat_purity=Platinumpurity::find($id);
        return $plat_purity;

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Platinumpurity  $platinumpurity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Platinumpurity $platinumpurity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Platinumpurity  $platinumpurity
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $req, $id)
    {
        Platinumpurity::find($req->id)->delete();
        return redirect('platinum_purity')->with('msg','Delated successfull');
    }
}
