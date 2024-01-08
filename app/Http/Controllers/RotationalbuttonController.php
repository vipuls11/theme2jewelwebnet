<?php

namespace App\Http\Controllers;

use App\Models\Rotationalbutton;
use Illuminate\Http\Request;

class RotationalbuttonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Rotational-button');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req)
    {
        $name=null;
        $path=null;
        
        if($req->image)
        {
        $file=$req->image;
        $name=$file->getClientOriginalName();
        $path=$req->image->storeAs('public/files', $name); 
        }
        else{
            $img=Rotationalbutton::find($req->rot_id);
            if($img)
            {
             $name=$img->image_name;
             $path=$img->image_path; 
            }
        }

       
        Rotationalbutton::updateOrCreate([
            'id'=>$req->rot_id
        ],[
            'image_name'=>$name,
            'image_path'=>$path,
            'category_id'=>$req->category_id,
            'button_name'=>$req->button_name,
        ]);
        $msg=$req->rot_id ? 'Updated succesfully' : 'Added succesfully';
        return redirect('Rotational-button')->with('msg',$msg);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function view()
    {
        $Rotationaldata=Rotationalbutton::all();
        return view('Rotational-button',compact('Rotationaldata'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rotationalbutton  $rotationalbutton
     * @return \Illuminate\Http\Response
     */
    public function show(Rotationalbutton $rotationalbutton)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rotationalbutton  $rotationalbutton
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rotation=Rotationalbutton::find($id);
        return $rotation;
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rotationalbutton  $rotationalbutton
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rotationalbutton $rotationalbutton)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rotationalbutton  $rotationalbutton
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $req, $id)
    {
        Rotationalbutton::find($req->id)->delete();
        return redirect('Rotational-button')->with('msg','Delete successfully');
    }
}
