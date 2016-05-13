<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTypeOneTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    //顶级权限表
    //type_name 职业顶级分类
    public function up()
    {
        Schema::create('type_one', function (Blueprint $table) {
            $table->increments('t_id');
            $table->string("type_name",40);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('type_one');
    }
}
