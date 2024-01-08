<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Celebration;


class CelebrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     return view('Celebration');
    // }

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
            $path = $req->file->storeAs('public/Celebrations', $name);       
        }
        else{
            $img=Celebration::find($req->cel_id);
            if($img){
                $name= $img->image_name;
                $path= $img->image_path;
        }
        }


    Celebration::updateOrCreate([
        'id' => $req->cel_id
    ],[
        'image_name'=>$name,
        'image_path'=>$path,
        'ring_name'=>$req->ring_name,
    ]);
    $msg=$req->cel_id ? 'Updated succesfully' : 'Added succesfully';
    return redirect('Celebration')->with('msg',$msg);
    }


    // public function fatchdata($id)
    // {
    //    $mydata = Celebration::find($id);
    
    //   return view('Celebration',compact('mydata'));
    // }

    public function view()
    {
        $mydata = Celebration::all();
        return view('Celebration',compact('mydata'));
    }


    // public function webedit($id)
    // {
        
    //     $website = Celebration::find($id);
    //     return view('websiteformedit',compact('website'));
    // }

    public function delete(Request $req , $id)
   {
    Celebration::find($req->id)->delete();
    return redirect('Celebration')->with('msg','Deleted succesfully');
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
     * @param  \App\Models\Celebration  $celebration
     * @return \Illuminate\Http\Response
     */
    public function show(Celebration $celebration)
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Celebration  $celebration
     * @return \Illuminate\Http\Response
     */
    
    public function edit($id)
    {
        $Celebrat=Celebration::find($id);
        return $Celebrat;
    }

    
    // public function update(Request $req)
    // {
    //     $path=null;
    //     $url=null;
    //     $name=null;
        
    //     if($req->file!=null){
            
    //         $file=$req->file;
    //         $name = $file->getClientOriginalName();
    //         $path=$req->file->storeAs('public/files', $name);
    //     }

    //     if(empty($name)){
    //        $Celebrat = Celebration::find($req->id);
    //        $name = $Celebrat->image_name;
    //        $path = $Celebrat->image_path;
           
    //     }

        

    //     $Celebrat=Celebration::find($req->id)->update([
    //         'image_name'=>$name,
    //         'image_path'=>$path,
    //         'ring_name'=>$req->ring_name,
    //     ]);
    //     return redirect('Celebration')->with('msg',' Updated successfully');

    // }

   

   
}
