<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Api extends Model
{public $timestamps = false;
    use HasFactory;
    protected $table ='apiorders';
    protected $fillable=[
        'product',
        'orderaddress',
        'ordernumber',
        'orderemail'

    ];
}
