<?php

namespace App\Http\Controllers;
use App\Models\Kitco;
use Illuminate\Http\Request;

class KitcoController extends Controller
{
   public function index()
   {
    return view('kitco');
   }
   public function create(Request $req)
    {
        // dd($req);
        Kitco::updateOrCreate([
            'id'=>$req->kt_id
        ],[
            'metal_type'=>(int)$req->metal_id,
            'gram'=>$req->gram,
            'rate'=>$req->rate,
            'kt10'=>$req->kt10,
            'kt14'=>$req->kt14,
            'kt18'=>$req->kt18,
            'kt22'=>$req->kt22,
        ])  ; 
        $msg=$req->kt_id ? 'Updated succesfully' : 'Added succesfully';
        return redirect('kitcos')->with('msg',$msg);
    }


    public function view()
    {
        $kitcos_data=Kitco::all();
         return view('kitco',compact('kitcos_data')) ;
    }


    public function edit($id){
        {
        $kitco=Kitco::find($id);
        return $kitco;
    }
    }

    public function delete(Request $req, $id)
    {
        Kitco::find($req->id)->delete();
        return redirect('kitcos')->with('msg', 'Deleted succesfully');
    }
}