<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use App\Models\Company;
use Illuminate\Http\Request;
use Toastr;

class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=Branch::paginate(10);
        return view('backend.branch.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $company=Company::get();
        return view('backend.branch.create',compact('company'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $data=new Branch();
            $data->company_id=$request->company_id;
            $data->name=$request->Name;
            $data->contactperson=$request->ContactPerson;
            $data->contactnumber=$request->ContactNumber;
            $data->address=$request->address;
            $data->created_by=currentUserId();
            if($data->save()){
                Toastr::success('Successfully saved');
                return redirect()->route('branch.index');
            }
        }catch(Exception $p){
            //dd($e);
            return redirect()->back()->withInput()->with('error','Please try again');
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Branch $branch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $company=Company::get();
        $branch=Branch::findOrFail(encryptor('decrypt',$id));
        return view('backend.branch.edit',compact('branch','company'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try{
            $data=Branch::findOrFail(encryptor('decrypt',$id));
            $data->company_id=$request->company_id;
            $data->contactperson=$request->ContactPerson;
            $data->contactnumber=$request->contactNumber;
            $data->address=$request->address;
            $data->Updated_by=currentUserId();
            if($data->save()){
                Toastr::success('Successfully saved');
                return redirect()->route('branch.index');
            }
        }catch(Exception $p){
            //dd($e);
            return redirect()->back()->withInput()->with('error','Please try again');
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $branch=Branch::findOrFail(encryptor('decrypt',$id));

        Toastr::warning('Deleted Permanently!');
        return redirect()->back();
    }
}
