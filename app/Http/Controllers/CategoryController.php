<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('category');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req)
    {
        $mimage=null;
        $mpath=null;
        $wimage=null;
        $wpath=null;
        $c_banner=null;
        $c_banner_path=null;
        if($req->file1)
        {
            $file=$req->file1;
            $mimage=$file->getClientOriginalName();
            $mpath=$req->file1->storeAs('public/Categories', $mimage);
        }
        else{
            $img=Category::find($req->cat_id);
            if($img)
            {
                $mimage=$img->man_image;
                $mpath=$img->man_image_path;
            }
        }

        if($req->file2)
        {
            $file=$req->file2;
            $wimage=$file->getClientOriginalName();
            $wpath=$req->file2->storeAs('public/Categories', $wimage);
        }
        else{
            $img=Category::find($req->cat_id);
            if($img)
            {
               $wimage=$img->women_image;
               $wpath=$img->women_image_path;
            }
        }
        if($req->file3)
        {
            $file=$req->file3;
            $c_banner=$file->getClientOriginalName();
            $c_banner_path=$req->file3->storeAs('public/Categories', $c_banner);
        }
        else{
            $img=Category::find($req->cat_id);
            if($img)
            {
               $c_banner=$img->c_banner;
               $c_banner_path=$img->c_banner_path;
            }
        }
        Category::updateOrCreate([
            'id'=>$req->cat_id
        ],[
            'man_image'=>$mimage,
            'man_image_path'=>$mpath,
            'women_image'=>$wimage,
            'women_image_path'=>$wpath,
            'c_banner'=>$c_banner,
            'c_banner_path'=>$c_banner_path,
            'category_name'=>$req->category_name,
            'image_title'=>$req->image_title,
            'image_titles'=>$req->image_titles,
           
        ]);
        $msg=$req->cat_id ? 'Updated succesfully' : 'Added succesfully';
        return redirect('category')->with('msg',$msg);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function view()
    {
        $category_data=Category::all();
        return view('category',compact('category_data'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cat_data=Category::find($id);
        return $cat_data;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $req, $id)
    {
        Category::find($req->id)->delete();
        return redirect('category')->with('msg','Deleted successfully');
    }
}
