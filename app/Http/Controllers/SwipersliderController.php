<?php

namespace App\Http\Controllers;

use App\Models\Swiperslider;
use Illuminate\Http\Request;

class SwipersliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('swiper-slider');
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
            $path = $req->file->storeAs('public/Sliders', $name);       
        }
        
        else{
            $img=Swiperslider::find($req->swip_id);
            if($img)

            {
            $name=$img->image_name;
            $path=$img->image_path;
            }
        }
        Swiperslider::updateOrCreate([
            'id' => $req->swip_id
        ],[
            'image_name'=>$name,
            'image_path'=>$path,
            'swiper_content'=>$req->swiper_content,
            'swiper_price'=>$req->swiper_price,
           
        ]);
       
        $msg=$req->swip_id ? 'Updated succesfully' : 'Added succesfully';
        return redirect('swiper-slider')->with('msg',$msg);
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
     * @param  \App\Models\Swiperslider  $swiperslider
     * @return \Illuminate\Http\Response
     */
    public function view()
    {
        $swiperdata=Swiperslider::all();    
        return view('swiper-slider',compact('swiperdata'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Swiperslider  $swiperslider
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $swipers=Swiperslider::find($id);
        return $swipers;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Swiperslider  $swiperslider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Swiperslider $swiperslider)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Swiperslider  $swiperslider
     * @return \Illuminate\Http\Response
     */

    public function delete(Request $req , $id)
    {
        Swiperslider::find($req->id)->delete();
     return redirect('swiper-slider')->with('msg','Deleted succesfully');
    }

}
