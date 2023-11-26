<?php

namespace App\Http\Controllers;

use App\Models\Contract;
use Illuminate\Http\Request;
use Toastr;

class ContractController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=Contract::paginate(10);
        return view('backend.contracts.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.contracts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $data=new Contract();
            $data->contractnumber=$request->contractnumber;
            $data->customer_id=$request->customer_id;
            $data->product_id=$request->product_id;
            $data->chargetype=$request->chargetype;
            $data->amount=$request->amount;
            $data->startdate=$request->startdate;
            $data->finishdate=$request->finishdate;
            $data->collectform=$request->collectform;
            $data->deliveredto=$request->deliveredto;
            $data->totalweight=$request->totalweight;
            $data->totaldistance=$request->totaldistance;

            if($data->save()){
                Toastr::success('Successfully saved');
                return redirect()->route('contracts.index');
            }
        }catch(Exception $p){
            //dd($e);
            return redirect()->back()->withInput()->with('error','Please try again');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Contract $contract)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
         $contract=Contract::findOrFail(encryptor('decrypt',$id));
        return view('backend.contracts.edit',compact('contract'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
       try{
            $data=Contract::findOrFail(encryptor('decrypt',$id));
            $data->contractnumber=$request->contractnumber;
            $data->customer_id=$request->customer_id;
            $data->product_id=$request->product_id;
            $data->chargetype=$request->chargetype;
            $data->amount=$request->amount;
            $data->startdate=$request->startdate;
            $data->finishdate=$request->finishdate;
            $data->collectform=$request->collectform;
            $data->deliveredto=$request->deliveredto;
            $data->totalweight=$request->totalweight;
            $data->totaldistance=$request->totaldistance;

            if($data->save()){
                Toastr::success('Successfully saved');
                return redirect()->route('contracts.index');
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
        $contract=Contract::findOrFail(encryptor('decrypt',$id));
        if($contract->delete())
            Toastr::warning('Deleted Permanently!');
            return redirect()->back();
    }
}
