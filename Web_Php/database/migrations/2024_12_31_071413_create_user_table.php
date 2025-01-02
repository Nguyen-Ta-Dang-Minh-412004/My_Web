<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // tạo table khác đi cái này có trong db r thì trùng là đúng r
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('UserID'); // Khóa chính tự tăng
            $table->string('Role'); // Vai trò
            $table->string('Username')->unique(); // Tên đăng nhập, đảm bảo duy nhất
            $table->string('Password'); // Mật khẩu
            $table->timestamps(); // Thêm cột created_at và updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
