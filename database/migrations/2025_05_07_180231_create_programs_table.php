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
        Schema::create('programs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('organ_id');
            $table->foreignId('skill_id');
            $table->foreignId('teacher_id');
            $table->foreignId('room_id');
            $table->string('s_time');
            $table->string('e_time');
            $table->string('s_day');
            $table->string('s_month');
            $table->string('s_year');
            $table->string('e_day');
            $table->string('e_month');
            $table->string('e_year');
            $table->string('s_date');
            $table->string('e_date');
            $table->string('num');
            $table->string('c_room');
            $table->boolean('sat')->default(false)->nullable(false);
            $table->boolean('sun')->default(false)->nullable(false);
            $table->boolean('mon')->default(false)->nullable(false);
            $table->boolean('tue')->default(false)->nullable(false);
            $table->boolean('wen')->default(false)->nullable(false);
            $table->boolean('thr')->default(false)->nullable(false);
            $table->boolean('fri')->default(false)->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programs');
    }
};
