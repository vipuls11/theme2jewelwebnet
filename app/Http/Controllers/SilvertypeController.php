<?php

namespace App\Http\Controllers;

use App\Models\Silvertype;
use Illuminate\Http\Request;

class SilvertypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('silvertype');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req)
    {
        Silvertype::updateOrCreate([
            'id'=>$req->sl_id
        ],[
            'name'=>$req->name,
            'description'=>$req->description,
        ]);
        $msg=$req->sl_id ? 'Updated succesfully' : 'Added succesfully';
        return redirect('silvertype')->with('msg',$msg);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function view()
    {
        $silver_data=Silvertype::all();
        return view('silvertype',compact('silver_data'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Silvertype  $silvertype
     * @return \Illuminate\Http\Response
     */
    public function show(Silvertype $silvertype)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Silvertype  $silvertype
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $silvers=Silvertype::find($id);
        return $silvers;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Silvertype  $silvertype
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Silvertype $silvertype)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Silvertype  $silvertype
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $req, $id)
    {
        Silvertype::find($req->id)->delete();
        return redirect('silvertype')->with('msg','Deleted succesfully');
    }
}
