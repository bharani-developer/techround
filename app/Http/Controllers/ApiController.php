<?php

namespace App\Http\Controllers;

use App\Models\Api;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Api::get(), 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Api  $api
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = Api::find($id);
        if(is_null($order)){
            return response()->json('Record not found',404);
        }
        return response()->json(Api::find($id),200);
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Api  $api
     * @return \Illuminate\Http\Response
     */
    public function edit(Api $api)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Api  $api
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$Id)
    {
        $order =Api::find($Id);
        if(is_null($order)){
            return response()->json('Record not found',404);
        }
        $order->update( $request->all());
        return response($order,201);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Api  $api
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $Id)
    {
         $order =Api::find($Id);
        if(is_null($order)){
            return response()->json(["message"=>"Record not found"],404);
        }
        $order->delete();
        return response(null,204);
    }
}
