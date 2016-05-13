<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTypeTwoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    //二级权限表
    //role 为职业二级分类
    //t_id 为顶级分类id
    public function up()
    {
        Schema::create('type_two', function (Blueprint $table) {
            $table->increments('r_id');
            $table->string("role",60);
            $table->integer("t_id");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('type_two');
    }
}
