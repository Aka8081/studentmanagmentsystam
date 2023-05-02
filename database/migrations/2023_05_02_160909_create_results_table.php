<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('results', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained('students')->onDelete('cascade');
            $table->integer('maths');
            $table->integer('science');
            $table->integer('english');
            $table->integer('gujarati');
            $table->integer('computer');
            $table->integer('exam_year');
            $table->integer('obtained_marks');
            $table->integer('total_marks');
            $table->decimal('percentage', 5, 2);
            $table->integer('percentile');
            $table->string('record_added_by');
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
        Schema::dropIfExists('results');
    }
};
