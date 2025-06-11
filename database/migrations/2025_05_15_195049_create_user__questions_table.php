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
        Schema::create('user__questions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('exam_id');
            $table->foreignId('user_id');
            $table->foreignId('question_id');
            $table->string('a');
            $table->string('b');
            $table->string('c');
            $table->string('d');
            $table->string('ans');
            $table->string('u_ans')->nullable();
            $table->boolean('point')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user__questions');
    }
};
