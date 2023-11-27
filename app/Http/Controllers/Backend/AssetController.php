<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Asset;
use App\Models\User;

use Exception;
use File;
use Toastr;

class AssetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=Asset::paginate(10);
        return view('backend.assets.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user=User::get();
        return view('backend.assets.create',compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $data=new Asset();
            $data->name=$request->name;
            $data->registrationnumber=$request->registrationnumber;
            $data->driver_id=$request->driver_id;
            if($request->hasFile('registrationcard')){
                $imageName = rand(111,999).time().'.'.$request->registrationcard->extension();
                $request->registrationcard->move(public_path('uploads/asset'), $imageName);
                $data->registrationcard=$imageName;
            }
            $data->gml=$request->gml;
            $data->cml=$request->cml;
            $data->hml=$request->hml;

            if($data->save()){
                Toastr::success('Successfully updated');
                return redirect()->route('assets.index')->with('success','Successfully saved');
            }
        }catch(Exception $e){
            dd($e);
            return redirect()->back()->withInput()->with('error','Please try again');
        }
    }
    

    /**
     * Display the specified resource.
     */
    public function show(asset $asset){
        return view('backend.assets.show', compact('asset'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id){
        $user=User::get();
        $asset=Asset::findOrFail(encryptor('decrypt',$id));
        return view('backend.assets.edit',compact('asset','user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try{
            $data=Asset::findOrFail(encryptor('decrypt',$id));
            $data->name=$request->name;
            $data->registrationnumber=$request->registrationnumber;
            $data->driver_id=$request->driver_id;
            if($request->hasFile('registrationcard')){
                $imageName = rand(111,999).time().'.'.$request->registrationcard->extension();
                $request->registrationcard->move(public_path('uploads/asset'), $imageName);
                $data->registrationcard=$imageName;
            }
            $data->gml=$request->gml;
            $data->cml=$request->cml;
            $data->hml=$request->hml;

            if($data->save()){
                Toastr::success('Successfully updated');
                return redirect()->route('assets.index');
            }
        }catch(Exception $e){
            Toastr::error('Please try again');
           // dd($e);
            return redirect()->back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data= Asset::findOrFail(encryptor('decrypt',$id));
        $image_path=public_path('uploads/asset/').$data->registrationcard;
        
        if($data->delete()){
            if(File::exists($image_path)) 
                File::delete($image_path);
            
            Toastr::warning('Deleted Permanently!');
            return redirect()->back();
        }else{
            Toastr::error('Please try again');
            return redirect()->back();
        }
        
    }
}