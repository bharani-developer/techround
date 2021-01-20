<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            
            $table->id('ProductID');
            $table->string('ProductName');
            $table->float('ProductPrice');
            $table->float('ProductWeight'); 
            $table->text('ProductLongDesc');
            $table->string('ProductThumb');
            $table->string('ProductImage');
            $table->integer('ProductCategoryID');
            $table->timestamps();
            $table->float('ProductStock')->nullable();
            $table->string('ProductLocation');
            
            
        });
        DB::connection('mysql')->table('products')->insert([
            [
                'ProductName' => 'monitor',
                'ProductPrice' => '67',
                'ProductWeight' => '450',
                'ProductLongDesc'=>'LhbsxahbkbckbHKB',
                'ProductThumb'=>'thumb.jpg',
                'ProductImage'=>'img.jpg',
                'ProductCategoryID'=>'1223',
                'ProductStock'=>'1',
                'ProductLocation'=>'pdkt',
                
            ],
            [
                'ProductName' => 'monitor',
                'ProductPrice' => '67',
                'ProductWeight' => '450',
                'ProductLongDesc'=>'LhbsxahbkbckbHKB',
                'ProductThumb'=>'thumb.jpg',
                'ProductImage'=>'img.jpg',
                'ProductCategoryID'=>'1224',
                
                
                'ProductStock'=>'1',
                'ProductLocation'=>'pdkt',
            ],
            [
                'ProductName' => 'monitor',
                'ProductPrice' => '67',
                'ProductWeight' => '450',
                
                'ProductLongDesc'=>'LhbsxahbkbckbHKB',
                'ProductThumb'=>'thumb.jpg',
                'ProductImage'=>'img.jpg',
                'ProductCategoryID'=>'1226',
                
                
                'ProductStock'=>'1',
                'ProductLocation'=>'pdkt',
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
