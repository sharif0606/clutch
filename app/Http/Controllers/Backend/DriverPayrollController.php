<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Driver_payroll;
use App\Models\DriverPayrollDetail;
use App\Models\User;
use App\Models\Load;
use Illuminate\Http\Request;
use Toastr;

class DriverPayrollController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $data=Driver_payroll::paginate(10);
        return view('backend.driver_payroll.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(){
        $driver = User::get();
        return view('backend.driver_payroll.create',compact('driver'));
    }

    public function get_load(Request $r){
        $startdate=$r->p_year.'-'.$r->p_month.'-01';
        $enddate=$r->p_year.'-'.$r->p_month.'-31';
        $loads = Load::where('driver_id',$r->driver)
        ->whereBetween('startdate',[$startdate,$enddate])->get();
        $datas="";
        $totalamt=0;
        if($loads){
            foreach($loads as $i=>$l){
                $amt=($l->amount*0.20);
                $totalamt+=$amt;
                $datas.="<tr>
                            <td>
                                ".++$i."
                                <input value='".$l->id."' type='hidden' name='load_id[]'>
                                <input value='".$amt."' type='hidden' name='amount[]'>
                            </td>
                            <td>".$l->startdate."</td>
                            <td>".$l->starttime."-".$l->finishtime."</td>
                            <td>".$l->totalweight."</td>
                            <td>".$l->totaldistance."</td>
                            <td>".$amt."</td>
                        </tr>";
            }
            $datas.="<tr>
                        <td colspan='5'>
                            Total 
                            <input value='".$totalamt."' type='hidden' name='total_amount'>
                            <input value='".$i."' type='hidden' name='number_of_load'>
                        </td>
                        <td>".$totalamt."</td>
                    </tr>";
        }else{
            $datas.="<tr>
                        <td colspan='6'>
                            No load found
                        </td>
                    </tr>";
        }
        echo json_encode($datas);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
        try{
            $data=new Driver_payroll();
            $data->total_amount=$request->total_amount;
            $data->number_of_load=$request->number_of_load;
            $data->year=$request->p_year;
            $data->month=$request->p_month;
            $data->driver_id=$request->driver_id;
            if($data->save()){
                foreach($request->load_id as $i=>$lid){
                    $ddata=new DriverPayrollDetail();
                    $ddata->driver_payroll_id=$data->id;
                    $ddata->load_id=$lid;
                    $ddata->amount=$request->amount[$i];
                    $ddata->save();
                }
                Toastr::success('Successfully saved');
                return redirect()->route('driver_payroll.index');
            }
        }catch(Exception $p){
            //dd($e);
            return redirect()->back()->withInput()->with('error','Please try again');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Driver_payroll $driver_payroll){
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id){
         $driver_payroll=Driver_payroll::findOrFail(encryptor('decrypt',$id));
        return view('backend.driver_payroll.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Driver_payroll $driver_payroll){
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
          $driver_payroll=Driver_payroll::findOrFail(encryptor('decrypt',$id));
          DriverPayrollDetail::where('driver_payroll_id',$driver_payroll->id)->delete();
            $driver_payroll->delete();
            Toastr::warning('Deleted Permanently!');
            return redirect()->back();
    }
}
