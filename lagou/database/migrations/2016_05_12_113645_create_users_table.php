<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    //用户注册表
    //username 用户名
    //password 密码
    //email 邮箱
    //phone 手机号
    //is_sele 选择找人 还是找工作
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('u_id');
            $table->string("username",60);
            $table->string("password",60);
            $table->string("email",40);
            $table->string("phone",40);
            $table->integer("is_sele");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
