<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Customers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers',function (Blueprint $table)
        {
            $table->increments('id');
            $table->string('fname');
            $table->string('lname');
            $table->string('email');
            $table->string('phone');
            $table->timestamps();
            $table->softDeletes();
            // softDeletets = เพิ่ม field deleted_at ให้อัตโนมัติ เพิ่มเมื่อต้องการใช้ softDelete
            // default จะเป็น created_at กับ updated_at ให้เอง ถ้าเราใส่ $table->timestamps()
        });
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
