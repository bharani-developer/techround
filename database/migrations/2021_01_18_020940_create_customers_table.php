<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('customers', function (Blueprint $table) {
            $table->id('customer_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->integer('phone');
            $table->string('address');
            $table->string('city');
            $table->string('country');
            $table->timestamps();
            
        });
        DB::connection('mysql')->table('customers')->insert([
            [
                
                'first_name' => 'customer',
                'last_name' => 'one',
                'email' => 'customer1@mail.com',
                'phone'=>'1234567890',
                'address' => 'address',
                'city' => 'Pudukkottai',
                'country' => 'India'
            ],
            [
                'first_name' => 'customer',
                'last_name' => 'two',
                'email' => 'customer2@mail.com',
                'phone'=>'1234567890',
                'address' => 'address',
                'city' => 'Pudukkottai',
                'country' => 'India'
            ],
            [
                'first_name' => 'customer',
                'last_name' => 'three',
                'email' => 'customer3@mail.com',
                'phone'=>'1234567890',
                'address' => 'address',
                'city' => 'Pudukkottai',
                'country' => 'India'
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
        Schema::dropIfExists('customers');
    }
}
