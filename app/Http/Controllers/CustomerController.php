<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Toastr;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=Customer::paginate(10);
        return view('backend.customers.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('backend.customers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       try{
            $data=new Customer();
            $data->name=$request->name;
            $data->contactperson=$request->contactperson;
            $data->contactnumber=$request->contactnumber;
            $data->email=$request->email;
            $data->address=$request->address;

            if($data->save()){
                Toastr::success('Successfully saved');
                return redirect()->route('customers.index');
            }
        }catch(Exception $p){
            //dd($e);
            return redirect()->back()->withInput()->with('error','Please try again');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $customer=Customer::findOrFail(encryptor('decrypt',$id));
        return view('backend.customers.edit',compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try{
            $data=Customer::findOrFail(encryptor('decrypt',$id));
            $data->name=$request->name;
            $data->contactperson=$request->contactperson;
            $data->contactnumber=$request->contactnumber;
            $data->email=$request->email;
            $data->address=$request->address;
            
          
            if($data->save()){
                Toastr::success('Successfully saved');
                return redirect()->route('customers.index');
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
        $customer=Customer::findOrFail(encryptor('decrypt',$id));
        if($customer->delete())
            Toastr::warning('Deleted Permanently!');
            return redirect()->back();
    }
}
