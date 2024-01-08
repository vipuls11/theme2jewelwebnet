<?php

namespace App\Http\Livewire;
namespace App\Http\Controllers;
use Livewire\WithPagination;
use App\Models\Categorytype;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('subcategory');
        
    }
    public function categoryType($category_id)
    {
      return Categorytype::where('category_id',$category_id)->get();
    }    
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req)
    {
        $subimage=null;
        $subpath=null;
      
        if($req->file)
        {
            $file=$req->file;
            $subimage=$file->getClientOriginalName();
            $subpath=$req->file->storeAs('public/files', $subimage);
        }
        else{
            $img=Subcategory::find($req->subctype_id );
            if($img)
            {
              $subimage=$img->subcategory_image;
              $subpath=$img->subcategory_image_path;
            }
        }
        
        Subcategory::updateOrCreate([
            'id'=>$req->subctype_id   
        ],[
            'category_id'=>$req->category_name,
            'category_type_id'=>$req->category_type_id,
            'subcategory_name'=>$req->subcategory_name,
            'subcategory_image'=>$subimage,
            'subcategory_image_path'=>$subpath,
        ]);
        $msg=$req->subctype_id ? 'Updated succesfully' : 'Added succesfully';
        return redirect('subcategory')->with('msg',$msg);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function view()
    {
        $subc_data=Subcategory::all();
        $subc_data=Subcategory::paginate(4);
        return view('subcategory' ,compact('subc_data'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function show(Subcategory $subcategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subcategorys=Subcategory::find($id);
        return $subcategorys;
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subcategory $subcategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $req, $id)
    {
        Subcategory::find($req->id)->delete();
        return redirect('subcategory')->with('msg', 'Deleted succesfully');
    }
}
