<?php

namespace App\Http\Controllers;

use App\Models\Branch;
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
        return view('branch.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('branch.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $data=new Branch();
            $data->company_id=1;
            $data->name=$request->Name;
            $data->contactperson=$request->ContactPerson;
            $data->contactnumber=$request->ContactNumber;
            $data->address=$request->address;

            if($request->hasFile('logo')){
                $imageName = rand(111,999).time().'.'.$request->logo->extension();
                $request->logo->move(public_path('uploads/users'), $imageName);
                $data->logo=$imageName;
            }
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
        $branch=Branch::findOrFail(encryptor('decrypt',$id));
        return view('branch.edit',compact('branch'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try{
            $data=Branch::findOrFail(encryptor('decrypt',$id));
            $data->name=$request->Name;
            $data->contactperson=$request->ContactPerson;
            $data->contactnumber=$request->contactNumber;
            $data->address=$request->address;
            if($request->hasFile('logo')){
                $imageName = rand(111,999).time().'.'.$request->logo->extension();
                $request->logo->move(public_path('uploads/users'), $imageName);
                $data->logo=$imageName;
            }
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
