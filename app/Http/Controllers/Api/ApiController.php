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
                    'amount'=>$p->amount
                );
            }
        }
        return response($data, 200);
    }

}
