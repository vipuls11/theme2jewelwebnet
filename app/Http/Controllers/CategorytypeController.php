<?php

namespace App\Http\Controllers;

use App\Models\Categorytype;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategorytypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('category-type');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req)
    {
        Categorytype::updateOrCreate([
            'id'=>$req->ctype_id
        ],[
            
            'category_id'=>$req->category_id,
            'category_type'=>$req->category_type,
            'slug'=> Str::slug($req->category_type),
            
        ]);
        $msg=$req->ctype_id ? 'Updated succesfully' : 'Added succesfully';
        return redirect('category-type')->with('msg',$msg);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function view()
    {
        $ctype_data=Categorytype::all();
        // dd($ctype_data->category);
        return view('category-type' ,compact('ctype_data'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categorytype  $categorytype
     * @return \Illuminate\Http\Response
     */
    public function show(Categorytype $categorytype)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categorytype  $categorytype
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categorytypes =Categorytype::find($id);
        return $categorytypes;
    }  
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categorytype  $categorytype
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categorytype $categorytype)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categorytype  $categorytype
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $req, $id)
    {
        Categorytype::find($req->id)->delete();
        return redirect('category-type')->with('msg','Deleted successfully');
    }
    
}
