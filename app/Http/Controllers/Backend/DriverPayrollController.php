<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Driver_payroll;
use App\Models\User;
use Illuminate\Http\Request;
use Toastr;

class DriverPayrollController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $data=Driver_payroll::paginate(10);
        return view('backend.driver_payroll.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $driver = User::get();
        return view('backend.driver_payroll.create',compact('driver'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Driver_payroll $driver_payroll)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
         $driver_payroll=Driver_payroll::findOrFail(encryptor('decrypt',$id));
        return view('backend.driver_payroll.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Driver_payroll $driver_payroll)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
          $driver_payroll=Driver_payroll::findOrFail(encryptor('decrypt',$id));
        if($driver_payroll->delete())
            Toastr::warning('Deleted Permanently!');
            return redirect()->back();
    }
}
