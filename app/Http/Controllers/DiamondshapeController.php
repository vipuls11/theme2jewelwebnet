<?php

namespace App\Http\Controllers;

use App\Models\Diamondshape;
use Illuminate\Http\Request;

class DiamondshapeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('diamond_shape');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req)
    {
        Diamondshape::updateOrCreate([
            'id'=>$req->dsh_id
        ],[
            'name'=>$req->name,
            'description'=>$req->description,
          
        ]);
        $msg=$req->dsh_id ? 'Updated succesfully' : 'Added succesfully';
        return redirect('diamond_shape')->with('msg',$msg);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   
    public function view()
    {
        $diamond_sh=Diamondshape::all();
        return view('diamond_shape',compact('diamond_sh'));
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Diamondshape  $diamondshape
     * @return \Illuminate\Http\Response
     */
    public function show(Diamondshape $diamondshape)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Diamondshape  $diamondshape
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $diamondshapes=Diamondshape::find($id);
        return $diamondshapes;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Diamondshape  $diamondshape
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Diamondshape $diamondshape)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Diamondshape  $diamondshape
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $req, $id)
    {
        Diamondshape::find($req->id)->delete();
        return redirect('diamond_shape')->with('msg','Deleted succesfully');
    }
}
