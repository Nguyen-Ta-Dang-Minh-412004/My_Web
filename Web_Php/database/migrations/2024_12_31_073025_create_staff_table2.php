<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff2', function (Blueprint $table) {
            $table->bigIncrements('staff_id'); // Khóa chính tự tăng
            $table->string('name'); // Cột tên nhân viên
            $table->decimal('salary', 10, 2); // Cột lương với tối đa 10 chữ số, 2 số thập phân
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
        Schema::dropIfExists('staff2');
    }
}
