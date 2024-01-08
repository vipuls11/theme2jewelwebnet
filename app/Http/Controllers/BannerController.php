<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('banner');
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
            $path = $req->file->storeAs('public/banners', $name);       
        }
        else{
            $img=Banner::find($req->ban_id);
            if($img)
            {
                $name=$img->image_name;
                $path=$img->image_path;
            }
        }

        Banner::updateOrCreate([
            'id' => $req->ban_id
        ],[
            'image_name'=>$name,
            'image_path'=>$path,
           
        ]);
        $msg=$req->ban_id ? 'Updated succesfully' : 'Added succesfully';
        return redirect('banner')->with('msg',$msg);
        }
   
        
    
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function view()
    {
        $bannerdata = Banner::all();
        return view('banner',compact('bannerdata'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $banners=Banner::find($id);
        return $banners;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Banner $banner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
   {
    Banner::find($id)->delete();
    return redirect('banner')->with('msg','Deleted succesfully');
   }
}
