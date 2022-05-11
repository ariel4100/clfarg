<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participants', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('surname')->nullable();
            $table->string('email')->unique();
            $table->string('dni')->unique();
            $table->string('nationality')->nullable();
            $table->string('phone')->nullable();
            $table->string('wp')->nullable();
            $table->string('genre')->nullable();
            $table->string('age')->nullable();
            $table->string('church')->nullable();
            $table->string('address')->nullable();
            $table->string('position')->nullable();
            $table->string('country')->nullable();
            $table->string('province')->nullable();
            $table->string('status')->nullable()->default('pending');
            $table->string('payment')->nullable();
            $table->string('option')->nullable();
            $table->json('data')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('participants');
    }
};
