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
        Schema::create('skills', function (Blueprint $table) {
            $table->id();
            $table->foreignId('organ_course_id');
            $table->string('fa_name');
            $table->string('en_name');
            $table->string('pishniaz');
            $table->string('tahsilat');
            $table->string('amali');
            $table->string('nazari');
            $table->string('sum');
            $table->string('sum_a');
            $table->string('karvarzi');
            $table->string('project');
            $table->string('isco');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('skills');
    }
};
