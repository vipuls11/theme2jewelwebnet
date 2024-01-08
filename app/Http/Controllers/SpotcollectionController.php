<?php

namespace App\Http\Controllers;

use App\Models\Spotcollection;
use Illuminate\Http\Request;

class SpotcollectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('spotlightcollection');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(request $req)
    {
        
        $name=null;
        $path=null;
    
        if($req->file){
            $file=$req->file;
            $name = $file->getClientOriginalName();
            $path = $req->file->storeAs('public/Spotlights', $name); 
                  
        }
        
        else{
            $img=Spotcollection::find($req->col_id);
            
            if($img)
            {
                $name=$img->image_name;
                $path=$img->image_path;
            }
        }

        Spotcollection::updateOrCreate([
            'id' => $req->col_id
        ],[
            'image_name'=>$name,
            'image_path'=>$path,
            'collection_name'=>$req->collection_name,
            'about_collection'=>$req->about_collection,
           
        ]);
        $msg=$req->col_id ? 'Updated succesfully' : 'Added succesfully';
        return redirect('spotlightcollection')->with('msg',$msg);
        }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Spotcollection  $spotcollection
     * @return \Illuminate\Http\Response
     */
    public function view()
    {
        $collectiondata= Spotcollection::all();
        return view('spotlightcollection', compact('collectiondata'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Spotcollection  $spotcollection
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $collections=Spotcollection::find($id);
        return $collections;
      
    }

   
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Spotcollection  $spotcollection
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $req ,$id)
    {
        Spotcollection::find($req->id)->delete();
        return redirect('spotlightcollection')->with('msg','Deleted succesfully');
    }
}
