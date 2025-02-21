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
        Schema::create('employers', function (Blueprint $table) {
            $table->id();
            

            $table->string('user_id');
            $table->string('phone')->nullable();
            $table->unsignedBigInteger('address_id');
            $table->foreign('address_id')->references('id')->on('regions')->onDelete('cascade');
            $table->string('social_media')->nullable();
            $table->string('cv')->nullable();
            $table->string('skill')->nullable();
            $table->string('workexperience')->nullable();
            $table->text('bio')->nullable();
            $table->string('image')->nullable();
            $table->date('date_of_birth')->nullable();  
            $table->string('role')->default('user');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employers');
    }
};
