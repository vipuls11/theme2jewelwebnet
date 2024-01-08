<?php

namespace App\Http\Controllers;

use App\Models\Bottombanner;
use Illuminate\Http\Request;

class BottombannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('bottom-banner');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(request $req)
    {
        
        $desktop_image=null;
        $desktopimg_path=null;
        $mobile_image=null;
        $mobileimg_path=null;
    
        if($req->filedesktop){
            $file=$req->filedesktop;
            $desktop_image = $file->getClientOriginalName();
            $desktopimg_path = $req->filedesktop->storeAs('public/bottombanners', $desktop_image);       
        }
        else
        {
            $img = Bottombanner::find($req->botban_id);
            if($img)
            {
                $desktop_image = $img->desktop_image;
                $desktopimg_path = $img->desktopimg_path;
            }

        }
        

        if($req->filemobile){
            $file=$req->filemobile;
            $mobile_image = $file->getClientOriginalName();
            $mobileimg_path = $req->filemobile->storeAs('public/bottombanners', $mobile_image);       
        }
        else
        {
            $img = Bottombanner::find($req->botban_id);
            if($img)
            {
                $mobile_image = $img->mobile_image;
                $mobileimg_path = $img->mobileimg_path;
            }

        }
        Bottombanner::updateOrCreate([
            'id' => $req->botban_id
        ],[
            'desktop_image'=>$desktop_image,
            'desktopimg_path'=>$desktopimg_path,
            'mobile_image'=>$mobile_image,
            'mobileimg_path'=>$mobileimg_path,
           
        ]);
      
        $msg=$req->botban_id ? 'Updated succesfully' : 'Added succesfully';
        return redirect('bottom-banner')->with('msg',$msg);
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
     * @param  \App\Models\Bottombanner  $bottombanner
     * @return \Illuminate\Http\Response
     */
    public function view()
    {
        $bottombannerdata = Bottombanner::all();
        return view('bottom-banner',compact('bottombannerdata'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bottombanner  $bottombanner
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bottombanners=Bottombanner::find($id);
        return $bottombanners;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bottombanner  $bottombanner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bottombanner $bottombanner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bottombanner  $bottombanner
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $req , $id)
    {
        Bottombanner::find($req->id)->delete();
     return redirect('bottom-banner')->with('msg','Deleted succesfully');
    }
}
