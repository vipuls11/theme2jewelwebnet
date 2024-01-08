<?php

namespace App\Http\Controllers;
use App\Models\Galleryfilter;
use Illuminate\Http\Request;

class GalleryfilterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Gallery-filter');
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
        $path=$req->image->storeAs('public/Galler_filter', $name); 
        }
        else{
            $img=Galleryfilter::find($req->gf_id);
            if($img)
            {
                $name=$img->image_name;
                $path=$img->image_path;
            }
        }

       
        Galleryfilter::updateOrCreate([
            'id'=>$req->gf_id
        ],[
            'image_name'=>$name,
            'image_path'=>$path,
            'product_type'=>$req->product_type,

            'category_id'=>$req->category_id,
           
        ]);
        $msg=$req->gf_id ? 'Updated succesfully' : 'Added succesfully';
        return redirect('Gallery-filter')->with('msg',$msg);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function view()
    {
        $gallerys=Galleryfilter::all();
        return view('Gallery-filter',compact('gallerys'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Galleryfilter  $galleryfilter
     * @return \Illuminate\Http\Response
     */
    public function show(Galleryfilter $galleryfilter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Galleryfilter  $galleryfilter
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gall_data=Galleryfilter::find($id);
        return $gall_data;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Galleryfilter  $galleryfilter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Galleryfilter $galleryfilter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Galleryfilter  $galleryfilter
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $req, $id )
    {
        Galleryfilter::find($req->id)->delete();
        return redirect('Gallery-filter')->with('msg','Delete successfully');
    }
}
