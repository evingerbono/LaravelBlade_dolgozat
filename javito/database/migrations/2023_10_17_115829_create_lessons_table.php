<?php

use App\Models\Lesson;
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
        Schema::create('lessons', function (Blueprint $table) {
            $table->id('lesson_id');
            $table->boolean('status');
            $table->foreignId('subject_id')->references('subject_id')->on('subjects');
            $table->foreignId('user_id')->references('id')->on('users');
            $table->timestamps();
        });

        Lesson::create(["status"=>false,"subject_id"=>1,"user_id"=>1]);
        Lesson::create(["status"=>true,"subject_id"=>2,"user_id"=>2]);
        Lesson::create(["status"=>true,"subject_id"=>3,"user_id"=>3]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lessons');
    }
};
