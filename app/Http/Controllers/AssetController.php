<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use Illuminate\Http\Request;
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
         return view('backend.assets.create');
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
            $data->registrationcard=$request->registrationcard;
            $data->gml=$request->gml;
            $data->cml=$request->cml;
            $data->hml=$request->hml;

            if($data->save()){
                Toastr::success('Successfully saved');
                return redirect()->route('assets.index');
            }
        }catch(Exception $p){
            //dd($e);
            return redirect()->back()->withInput()->with('error','Please try again');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Asset $asset)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $asset=Asset::findOrFail(encryptor('decrypt',$id));
        return view('backend.assets.edit',compact('asset'));
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
            $data->registrationcard=$request->registrationcard;
            $data->gml=$request->gml;
            $data->cml=$request->cml;
            $data->hml=$request->hml;

            if($data->save()){
                Toastr::success('Successfully saved');
                return redirect()->route('assets.index');
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
        $asset=Asset::findOrFail(encryptor('decrypt',$id));
        if($asset->delete())
            Toastr::warning('Deleted Permanently!');
            return redirect()->back();
    }
}
