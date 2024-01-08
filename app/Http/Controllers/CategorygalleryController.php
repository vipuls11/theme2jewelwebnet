<?php

namespace App\Http\Controllers;

use App\Models\Categorygallery;
use Illuminate\Http\Request;

class CategorygalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('categorygallery');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(request $req)
    {
        $left_image=null;
        $left_image_path=null;
        $right_image=null;
        $right_image_path=null;
        $bottom_left_image=null;
        $bottom_left_image_path=null;
        $bottom_right_image=null;
        $bottom_right_image_path=null;
  
    if($req->fileleft){
        $file=$req->fileleft;
        $left_image = $file->getClientOriginalName();
        $left_image_path = $req->fileleft->storeAs('public/Gallery_4', $left_image);       
    }
    else{
        $img=Categorygallery::find($req->gal_id);
        if($img)
        {
            $left_image=$img->left_image;
            $left_image_path=$img->left_image_path;
        }
    }
    if($req->fileright){
        $file=$req->fileright;
        $right_image = $file->getClientOriginalName();
        $right_image_path = $req->fileright->storeAs('public/Gallery_4', $right_image);       
    }
    else{
        $img=Categorygallery::find($req->gal_id);
        if($img)
        {
            $right_image=$img->right_image;
            $right_image_path=$img->right_image_path;
        }
    }
    if($req->filebotleft){
        $file=$req->filebotleft;
        $bottom_left_image = $file->getClientOriginalName();
        $bottom_left_image_path = $req->filebotleft->storeAs('public/Gallery_4', $bottom_left_image);       
    }
    else{
        $img=Categorygallery::find($req->gal_id);
        if($img)
        {
            $bottom_left_image=$img->bottom_left_image;
            $bottom_left_image_path=$img->bottom_left_image_path;
        }
    }
    if($req->filebotright){
        $file=$req->filebotright;
        $bottom_right_image = $file->getClientOriginalName();
        $bottom_right_image_path = $req->filebotright->storeAs('public/Gallery_4', $bottom_right_image);       
    }
    else{
        $img=Categorygallery::find($req->gal_id);
        if($img)
        {
            $bottom_right_image=$img->bottom_right_image;
            $bottom_right_image_path=$img->bottom_right_image_path;
        }
    }

    Categorygallery::updateOrCreate([
        'id' => $req->gal_id
    ],[
        'left_image'=>$left_image,
        'left_image_path'=>$left_image_path,
        'right_image'=>$right_image,
        'right_image_path'=>$right_image_path,
        'bottom_left_image'=>$bottom_left_image,
        'bottom_left_image_path'=>$bottom_left_image_path,
        'bottom_right_image'=>$bottom_right_image,
        'bottom_right_image_path'=>$bottom_right_image_path,
       
    ]);
  
    $msg=$req->gal_id ? 'Updated succesfully' : 'Added succesfully';
    return redirect('categorygallery')->with('msg',$msg);

}
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categorygallery  $categorygallery
     * @return \Illuminate\Http\Response
     */
    public function view()
    {
        $gallerydata= Categorygallery::all();
        return view('categorygallery',compact('gallerydata'));
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categorygallery  $categorygallery
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gallery=Categorygallery::find($id);
        return $gallery;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categorygallery  $categorygallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categorygallery $categorygallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categorygallery  $categorygallery
     * @return \Illuminate\Http\Response
     */
   

    public function delete(Request $req , $id)
    {
        Categorygallery::find($req->id)->delete();
     return redirect('categorygallery')->with('msg','Deleted succesfully');
    }
}
