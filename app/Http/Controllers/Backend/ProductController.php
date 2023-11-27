<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Toastr;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=Product::paginate(10);
        return view('backend.products.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('backend.products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $data=new Product();
            $data->name=$request->name;
            $data->product_type_id=$request->product_type_id;
            $data->unit_id=$request->unit_id;

            if($data->save()){
                Toastr::success('Successfully saved');
                return redirect()->route('products.index');
            }
        }catch(Exception $p){
            //dd($e);
            return redirect()->back()->withInput()->with('error','Please try again');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $product=Product::findOrFail(encryptor('decrypt',$id));
        return view('backend.products.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
       try{
            $data=Product::findOrFail(encryptor('decrypt',$id));
            $data->name=$request->name;
            $data->product_type_id=$request->product_type_id;
            $data->unit_id=$request->unit_id;

            if($data->save()){
                Toastr::success('Successfully saved');
                return redirect()->route('products.index');
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
        $product=Product::findOrFail(encryptor('decrypt',$id));
        if($product->delete())
            Toastr::warning('Deleted Permanently!');
            return redirect()->back();
    }
}
