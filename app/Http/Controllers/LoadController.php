<?php

namespace App\Http\Controllers;

use App\Models\Load;
use Illuminate\Http\Request;
use Toastr;

class LoadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $data=Load::paginate(10);
        return view('backend.loads.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('backend.loads.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       try{
            $data=new Load();
            $data->contract_id=$request->contract_id;
            $data->driver_id=$request->driver_id;
            $data->customer_id=$request->customer_id;
            $data->asset_id=$request->asset_id;
            $data->product_id=$request->product_id;
            $data->startdate=$request->startdate;
            $data->finishdate=$request->finishdate;
            $data->starttime=$request->starttime;
            $data->finishtime=$request->finishtime;
            $data->totalweight=$request->totalweight;
            $data->totaldistance=$request->totaldistance;
            $data->chargetype=$request->chargetype;
            $data->amount=$request->amount;

            if($data->save()){
                Toastr::success('Successfully saved');
                return redirect()->route('loads.index');
            }
        }catch(Exception $p){
            //dd($e);
            return redirect()->back()->withInput()->with('error','Please try again');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Load $load)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
         $load=Load::findOrFail(encryptor('decrypt',$id));
        return view('backend.loads.edit',compact('load'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
       try{
            $data=Load::findOrFail(encryptor('decrypt',$id));
            $data->contract_id=$request->contract_id;
            $data->driver_id=$request->driver_id;
            $data->customer_id=$request->customer_id;
            $data->asset_id=$request->asset_id;
            $data->product_id=$request->product_id;
            $data->startdate=$request->startdate;
            $data->finishdate=$request->finishdate;
            $data->starttime=$request->starttime;
            $data->finishtime=$request->finishtime;
            $data->totalweight=$request->totalweight;
            $data->totaldistance=$request->totaldistance;
            $data->chargetype=$request->chargetype;
            $data->amount=$request->amount;

            if($data->save()){
                Toastr::success('Successfully saved');
                return redirect()->route('loads.index');
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
         $load=Load::findOrFail(encryptor('decrypt',$id));
        if($load->delete())
            Toastr::warning('Deleted Permanently!');
            return redirect()->back();
    }
}
