<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Items extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table)
        {
            $table->id();
            $table->string('item_name',50)->unique();
            $table->string('item_content',200);
            $table->string('item_description',200);
            $table->string('item_teacher',50);
            $table->string('item_time',20);
            $table->string('item_price',20);
            $table->string('item_img_src',100);
            $table->string('item_category',60);
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
        Schema::dropIfExists('items');
    }
}
