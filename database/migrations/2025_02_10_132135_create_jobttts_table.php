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
        Schema::create('jobttts', function (Blueprint $table) {
            $table->id();
            $table->string('job_title');
            $table->unsignedBigInteger('company_id');
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');

            $table->unsignedBigInteger('job_region_id');
            $table->foreign('job_region_id')->references('id')->on('regions')->onDelete('cascade');
            
            
            $table->string('job_type');
            $table->string('vacancy');
            $table->string('experience');
            $table->string('salary');
            $table->string('gender');
            $table->string('application_deadline');
            $table->string('job_description');
            $table->string('responsibilities');
            $table->string('education_experience');
            $table->string('other_benefits');
            $table->string('image');
            $table->string('category_id');
            $table->timestamps();
            $table->softDeletes();
        });
    }       

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobttts');
    }
};
