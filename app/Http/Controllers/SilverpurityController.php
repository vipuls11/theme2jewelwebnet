<?php

namespace App\Http\Controllers;

use App\Models\Silverpurity;
use Illuminate\Http\Request;

class SilverpurityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('silver_purity');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req)
    {
        Silverpurity::updateOrCreate([
            'id'=>$req->sp_id
        ],[
            'name'=>$req->name,
            'description'=>$req->description,
        ]);
        $msg=$req->sp_id ? 'Updated succesfully' : 'Added succesfully';
        return redirect('silver_purity')->with('msg',$msg);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function view()
    {
        $silverp_data=Silverpurity::all();
        return view('silver_purity',compact('silverp_data'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Silverpurity  $silverpurity
     * @return \Illuminate\Http\Response
     */
    public function show(Silverpurity $silverpurity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Silverpurity  $silverpurity
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $s_purity=Silverpurity::find($id);
        return  $s_purity;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Silverpurity  $silverpurity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Silverpurity $silverpurity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Silverpurity  $silverpurity
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $req, $id)
    {
        Silverpurity::find($req->id)->delete();
        return redirect('silver_purity')->with('msg','Delated successfull');
    }
}
