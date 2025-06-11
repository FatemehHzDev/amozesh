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
        Schema::create('exams', function (Blueprint $table) {
            $table->id();
            $table->foreignId('skill_id');
            $table->foreignId('teacher_id');
            $table->foreignId('organ_id');
            $table->string('e_day');
            $table->string('e_month');
            $table->string('e_year');
            $table->string('e_date');
            $table->string('s_time');
            $table->string('zaman');
            $table->string('que_qty');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exams');
    }
};
