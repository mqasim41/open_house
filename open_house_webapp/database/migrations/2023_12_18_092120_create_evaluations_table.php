<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
    Schema::create('evaluators', function (Blueprint $table) {
        $table->unsignedBigInteger('user_id')->primary();
        $table->foreign('user_id')->references('id')->on('users');
        $table->string('preferred_project_category');
        $table->string('speciality');
        $table->boolean('is_max_evaluations');
        $table->timestamps();
    });
    }   



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluators');
    }
};
