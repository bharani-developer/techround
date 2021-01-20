<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $orders = Order::all();
        return view('orders.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::all();
        return view('orders.create',compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            
          'product_id'=>'required',
          'product'=>'required',
          'CustomerID'=>'required',
          'OrderAmount'=>'required',
          'OrderShipName'=>'required',
          'OrderShipAddress'=>'required',
          'OrderShipAddress2'=>'required',
          'OrderCity'=>'required',
          'OrderState'=>'required',
          'OrderZip'=>'required',
          'OrderCountry'=>'required',
          'OrderPhone'=>'required',
          'OrderFax'=>'required',
          'OrderShipping'=>'required',
          
          'OrderEmail'=>'required',
          
          'OrderShipped'=>'required',
          'OrderTrackingNumber'=>'required',
        ]);
        $order = new Order([
            
       'product_id'=>$request->get('product_id'),
          'product'=>$request->get('product'),
       'CustomerID'=>$request->get('CustomerID'),
      'OrderAmount'=>$request->get('OrderAmount'),
    'OrderShipName'=>$request->get('OrderShipName'),
 'OrderShipAddress'=>$request->get('OrderShipAddress'),
'OrderShipAddress2'=>$request->get('OrderShipAddress2'),
        'OrderCity'=>$request->get('OrderCity'),
       'OrderState'=>$request->get('OrderState'),
         'OrderZip'=>$request->get('OrderZip'),
     'OrderCountry'=>$request->get('OrderCountry'),
       'OrderPhone'=>$request->get('OrderPhone'),
         'OrderFax'=>$request->get('OrderFax'),
    'OrderShipping'=>$request->get('OrderShipping'),
    
       'OrderEmail'=>$request->get('OrderEmail'),
       
       'OrderShipped'=>$request->get('OrderShipped'),
       'OrderTrackingNumber'=>$request->get('OrderTrackingNumber'),
        ]);
        $order->save();
        return redirect('/orders')->with('success', 'Order saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit($id )
    {
        $order = DB::table('orders')->find($id );
        return view('orders.edit', compact('order'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            
            'product_id'=>'required',
            'product'=>'required',
            'CustomerID'=>'required',
            'OrderAmount'=>'required',
            'OrderShipName'=>'required',
            'OrderShipAddress'=>'required',
            'OrderShipAddress2'=>'required',
            'OrderCity'=>'required',
            'OrderState'=>'required',
            'OrderZip'=>'required',
            'OrderCountry'=>'required',
            'OrderPhone'=>'required',
            'OrderFax'=>'required',
            'OrderShipping'=>'required',
            
            'OrderEmail'=>'required',
            
            'OrderShipped'=>'required',
            'OrderTrackingNumber'=>'required',
          ]);
          $order = Order::find($id );
            
          $order-> product_id=$request->get('product_id');
          $order-> product=$request->get('product');
        
          $order->  CustomerID=$request->get('CustomerID');
          $order->   OrderAmount=$request->get('OrderAmount');
          $order-> OrderShipName=$request->get('OrderShipName');
          $order-> OrderShipAddress=$request->get('OrderShipAddress');
          $order-> OrderShipAddress2=$request->get('OrderShipAddress2');
          $order->   OrderCity=$request->get('OrderCity');
          $order-> OrderState=$request->get('OrderState');
          $order->   OrderZip=$request->get('OrderZip');
          $order-> OrderCountry=$request->get('OrderCountry');
          $order->  OrderPhone=$request->get('OrderPhone');
          $order->   OrderFax=$request->get('OrderFax');
          $order->OrderShipping=$request->get('OrderShipping');
         
          $order-> OrderEmail=$request->get('OrderEmail');
            
          $order-> OrderShipped=$request->get('OrderShipped');
          $order-> OrderTrackingNumber=$request->get('OrderTrackingNumber');
             
             $order->save();
             return redirect('/orders')->with('success', 'Order saved!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = Order::find($id);
        $order->delete();
        return redirect('/orders')->with('success', 'order deleted!');
    }
}
