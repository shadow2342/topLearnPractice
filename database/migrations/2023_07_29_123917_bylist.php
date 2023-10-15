<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Bylist extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bylist',function (Blueprint $table){
           $table->id();
           $table->string('name',80)->unique();
           $table->string('price',20);
           $table->string('teacher',60);
           $table->string('time',20);
           $table->string('content',200);
           $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bylist');
    }
}
