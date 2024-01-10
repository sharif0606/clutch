<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Load;
use Illuminate\Support\Facades\Hash;

use Exception;

class ApiController extends Controller
{

    public function signInCheck(Request $request){
        $error=array('error'=>'Your phone number or password is wrong!');
        $user=User::where('contact_no_en',$request->username)
                        ->orWhere('email',$request->username)->first();
        if($user){
            if(Hash::check($request->password , $user->password)){
                $data=array('id'=>encryptor('encrypt',$user->id));
                return response($data, 200);
            }else
                return response($error, 204);
        }else
            return response($error, 204);
    }

    public function orders($id){
        $order=Load::where('driver_id',encryptor('decrypt',$id))->oldest()->get();
        $data=array();
        $status=array('Pending','Picked Up','Delivered');
        if($order){
            foreach($order as $p){
                $data[]=array(
                    'id'=>$p->id,
                    'contract'=>$p->contracts?->contractnumber,
                    'asset'=>$p->assets?->registrationnumber,
                    'product'=>$p->products?->name,
                    'startdate'=>$p->startdate,
                    'finishdate'=>$p->finishdate,
                    'starttime'=>$p->starttime,
                    'finishtime'=>$p->finishtime,
                    'totalweight'=>$p->totalweight,
                    'totaldistance'=>$p->totaldistance,
                    'chargetype'=>$p->chargetype,
                    'amount'=>$p->amount,
                    'status'=>$status[$p->status]
                );
            }
        }
        return response($data, 200);
    }

    public function single_load($id){
        $order=Load::find($id);
        $data=array();
        $status=array('Pending','Picked Up','Delivered');
        if($order){
            $data=array(
                'id'=>$order->id,
                'contract'=>$order->contracts?->contractnumber,
                'asset'=>$order->assets?->registrationnumber,
                'product'=>$order->products?->name,
                'startdate'=>$order->startdate,
                'finishdate'=>$order->finishdate,
                'starttime'=>$order->starttime,
                'finishtime'=>$order->finishtime,
                'totalweight'=>$order->totalweight,
                'totaldistance'=>$order->totaldistance,
                'chargetype'=>$order->chargetype,
                'amount'=>$order->amount,
                'status'=>$order->status
            );
            
        }
        return response($data, 200);
    }

    public function save_load(Request $r){
        $load=Load::find($r->order_id);
        $load->status=$r->status;
        $load->save();
        return response($load, 200);
        
    }

}
