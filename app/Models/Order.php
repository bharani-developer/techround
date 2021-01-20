<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{public $timestamps = false;


    use HasFactory;
    protected $fillable = [

        
          'product_id',
          'product',
          'CustomerID',
          'OrderAmount',
          'OrderShipName',
          'OrderShipAddress',
          'OrderShipAddress2',
          'OrderCity',
          'OrderState',
          'OrderZip',
          'OrderCountry',
          'OrderPhone',
          'OrderFax',
          'OrderShipping',
          'OrderTax	',
          'OrderEmail',
          
          'OrderShipped',
          'OrderTrackingNumber',
             
    ];
}
