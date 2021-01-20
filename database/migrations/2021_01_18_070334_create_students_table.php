<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->timestamps();
        });
        DB::connection('mysql')->table('students')->insert([
            [
                'name'=>'bharani',
                'email'=>'bharani.developer@gmail.com'
            ],
            [
                'name'=>'karthi',
                'email'=>'karthi.developer@gmail.com'
            ],
            [
                'name'=>'demo',
                'email'=>'demo.developer@gmail.com'
            ],
            [
                'name'=>'bharanikarthikeyan',
                'email'=>'bharani.developer@gmail.com'
            ],
            [
                'name'=>'bharanidev',
                'email'=>'bharani.developer@gmail.com'
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
