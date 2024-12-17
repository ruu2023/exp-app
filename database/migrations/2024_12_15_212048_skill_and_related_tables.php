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
            $table->unsignedBigInteger('user_id'); //外部キー
            $table->string('name', 20);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
        Schema::create('skill_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('skill_id'); //外部キー
            $table->integer('level');
            $table->integer('exp');
            $table->timestamps();

            $table->foreign('skill_id')->references('id')->on('skills')->onDelete('cascade');
        });
        Schema::create('exp_calendars', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('skill_id'); //外部キー
            $table->integer('exp');
            $table->timestamps();

            $table->foreign('skill_id')->references('id')->on('skills')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
