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
            $table->string('student_job')->nullable();
            $table->enum('education_type', ['عام', 'أزهري'])->nullable();
            $table->string('school')->nullable();
            $table->string('school_level')->nullable();
            $table->enum('parents_status', ['مستقرة', 'منفصلين', 'مطلقين'])->nullable();
            $table->text('description')->nullable();
            $table->string('father_name');
            $table->string('father_job')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('mother_job')->nullable();
            $table->longText('full_name')->virtualAs( "CONCAT(first_name,' ',father_name)" );
            $table->longText('address')->nullable();
            //$table->string('email');
            //$table->string('phone');
            $table->string('personuid')->unique();
            //$table->string('level');
            $table->date('apply_date')->nullable();
            $table->date('call_date')->nullable();
            $table->string('call_ruslt')->nullable();
            $table->date('test_date')->nullable();
            $table->string('test_ruslt')->nullable();
            $table->date('join_date')->nullable();
            $table->date('leave_at')->nullable();
            // $table->integer('leave_count')->default(0);
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
