<?php

use App\Models\Subject;
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
        Schema::create('subjects', function (Blueprint $table) {
            $table->id('subject_id');
            $table->string('name');
            $table->string('description');
            $table->integer('limit');
            $table->timestamps();
        });

        Subject::create(["name"=>"Matek","description"=>"Számolás","limit"=>20]);
        Subject::create(["name"=>"Magyar","description"=>"Olvasás","limit"=>40]);
        Subject::create(["name"=>"Töri","description"=>"Múlt","limit"=>15]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subjects');
    }
};
