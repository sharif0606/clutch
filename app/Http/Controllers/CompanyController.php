<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Toastr;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=Company::paginate(10);
        return view('backend.companies.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.companies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         try{
            $data=new Company();
            $data->name=$request->Name;
            $data->contactperson=$request->contactperson;
            $data->contactnumber=$request->contactnumber;
            $data->address=$request->address;

            if($request->hasFile('logo')){
                $imageName = rand(111,999).time().'.'.$request->logo->extension();
                $request->logo->move(public_path('uploads/users'), $imageName);
                $data->logo=$imageName;
            }
            $data->created_by=currentUserId();
            if($data->save()){
                Toastr::success('Successfully saved');
                return redirect()->route('backend.companies.index');
            }
        }catch(Exception $p){
            //dd($e);
            return redirect()->back()->withInput()->with('error','Please try again');
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $company=Company::findOrFail(encryptor('decrypt',$id));
        return view('backend.companies.edit',compact('company'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try{
            $data=Company::findOrFail(encryptor('decrypt',$id));
            $data->name=$request->name;
            $data->contactperson=$request->contactperson;
            $data->contactnumber=$request->contactnumber;
            $data->address=$request->address;
            if($request->hasFile('logo')){
                $imageName = rand(111,999).time().'.'.$request->logo->extension();
                $request->logo->move(public_path('uploads/users'), $imageName);
                $data->logo=$imageName;
            }
            $data->Updated_by=currentUserId();
            if($data->save()){
                Toastr::success('Successfully saved');
                return redirect()->route('companies.index');
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
        $company=Company::findOrFail(encryptor('decrypt',$id));
        if($company->delete())
            Toastr::warning('Deleted Permanently!');
            return redirect()->back();
    }
}
