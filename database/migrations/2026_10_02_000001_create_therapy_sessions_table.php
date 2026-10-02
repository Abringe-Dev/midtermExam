<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('therapy_sessions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('song_title');
            $table->enum('difficulty', ['easy', 'medium', 'hard'])->default('easy');
            $table->enum('hand_used', ['left', 'right', 'both'])->default('right');
            $table->unsignedInteger('score')->default(0);
            $table->unsignedInteger('max_combo')->default(0);
            $table->decimal('accuracy', 5, 2)->default(0);
            $table->unsignedInteger('duration_seconds')->default(60);
            $table->unsignedInteger('gestures_hit')->default(0);
            $table->unsignedInteger('gestures_missed')->default(0);
            $table->text('notes')->nullable();
            $table->timestamp('played_at')->useCurrent();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('therapy_sessions');
    }
};
