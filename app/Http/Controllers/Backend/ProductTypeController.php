<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\ProductType;
use Illuminate\Http\Request;
use Toastr;

class ProductTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=ProductType::paginate(10);
        return view('backend.product_types.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('backend.product_types.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         try{
            $data=new ProductType();
            $data->name=$request->name;

            
            if($data->save()){
                Toastr::success('Successfully saved');
                return redirect()->route('product_types.index');
            }
        }catch(Exception $p){
            //dd($e);
            return redirect()->back()->withInput()->with('error','Please try again');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(ProductType $productType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
       $productType=ProductType::findOrFail(encryptor('decrypt',$id));
        return view('backend.product_types.edit',compact('productType'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
       try{
            $data=ProductType::findOrFail(encryptor('decrypt',$id));
            $data->name=$request->name;
            
          
            if($data->save()){
                Toastr::success('Successfully saved');
                return redirect()->route('product_types.index');
            }
        }catch(Exception $p){
            //dd($e);
            return redirect()->back()->withInput()->with('error','Please try again');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $productType=ProductType::findOrFail(encryptor('decrypt',$id));
        if($productType->delete())
            Toastr::warning('Deleted Permanently!');
            return redirect()->back();
    }
}
