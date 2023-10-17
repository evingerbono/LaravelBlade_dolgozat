<?php

use App\Models\User;
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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        User::create(["name"=>"Béla","email"=>"valami1@gmail.com","password"=>"1234Aa"]);
        User::create(["name"=>"Bence","email"=>"valami2@gmail.com","password"=>"1234ba"]);
        User::create(["name"=>"Máté","email"=>"valami3@gmail.com","password"=>"1234Bc"]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
