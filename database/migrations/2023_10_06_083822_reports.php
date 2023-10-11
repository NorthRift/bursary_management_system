<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
        Schema::create('reports',function(Blueprint $table){
            $table->id();
            $table->string('report_id');
            $table->string('report_name');
            $table->string('student_name');
            $table->string('parent');
            $table->string('school_level');
            $table->string('school_name');
            $table->bigInteger('Amount_awarded');
            $table->bigInteger('total_amount_awarded');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('reports');
    }
};
