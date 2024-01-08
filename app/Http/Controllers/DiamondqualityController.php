<?php

namespace App\Http\Controllers;

use App\Models\Diamondquality;
use Illuminate\Http\Request;

class DiamondqualityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('diamond-quality');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req)
    {
        Diamondquality::updateOrCreate([
            'id'=>$req->dq_id
        ],[
            'name'=>$req->name,
            'description'=>$req->description,
          
        ]);
        $msg=$req->dq_id ? 'Updated succesfully' : 'Added succesfully';
        return redirect('diamond-quality')->with('msg',$msg);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function view()
    {
        $diamons=Diamondquality::all();
        return view('diamond-quality',compact('diamons'));
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Diamondquality  $diamondquality
     * @return \Illuminate\Http\Response
     */
    public function show(Diamondquality $diamondquality)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Diamondquality  $diamondquality
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $diamonsqua=Diamondquality::find($id);
        return $diamonsqua;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Diamondquality  $diamondquality
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Diamondquality $diamondquality)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Diamondquality  $diamondquality
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $req, $id)
    {
        Diamondquality::find($req->id)->delete();
        return redirect('diamond-quality')->with('msg','Deleted succesfully');
    }
}
