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
        Schema::create('employee_lists', function (Blueprint $table) {
            $table->id();
            $table->string('Fname');
            $table->string('Mname');
            $table->string('Lname');
            $table->string('Age');
            $table->string('Email')->unique();
            $table->string('Contnum')->unique();
            $table->string('Idnum')->unique();
            $table->string('Position')->nullable();
            $table->string('Dept');
            $table->string('Password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_lists');
    }
};
