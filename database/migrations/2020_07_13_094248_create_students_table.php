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
            $table->string('first_name');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('address');
            $table->string('email');
            //$table->string('phone');
            $table->string('personuid')->unique();
            //$table->string('level');
            $table->date('apply_date');
            $table->date('call_date')->nullable();
            $table->string('call_ruslt')->nullable();
            $table->date('test_date')->nullable();
            $table->string('test_ruslt')->nullable();
            $table->date('join_date')->nullable();
            $table->date('leave_at')->nullable();
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
        Schema::dropIfExists('students');
    }
}
