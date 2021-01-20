<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Api;
use Illuminate\Support\Facades\Validator;


use function PHPUnit\Framework\isNull;

class ApiController extends Controller
{
    public function orders()
    {
        return response()->json(Api::get(), 200);
    }
    public function orderById($id){
        $order = Api::find($id);
        if(is_null($order)){
            return response()->json('Record not found',404);
        }
        return response()->json(Api::find($id),200);
    }
    public function orderSave(Request $request){
        $rules =[
            'product'=>'required',
            'orderaddress'=>'required',
            'ordernumber'=>'required',
            'orderemail'=>'required'
        ];
        $validator = Validator::make($request->all(),$rules);
        if($validator->fails()){
            return response()->json($validator->errors(),400);

        }
        $apiorder=Api::create($request->all());
        return response($apiorder,201);
    }
    public function orderUpdate(Request $request,$Id){
        $order =Api::find($Id);
        if(is_null($order)){
            return response()->json('Record not found',404);
        }
        $order->update( $request->all());
        return response($order,201);

    }
    public function orderDelete(Request $request, $Id){
        $order =Api::find($Id);
        if(is_null($order)){
            return response()->json(["message"=>"Record not found"],404);
        }
        $order->delete();
        return response(null,204);

    }
}
