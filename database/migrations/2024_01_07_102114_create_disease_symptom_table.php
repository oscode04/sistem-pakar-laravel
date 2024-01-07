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
        Schema::create('disease_symptom', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_disease');
            $table->unsignedBigInteger('id_symptom');
            $table->timestamps();

            $table->foreign('id_disease')->references('id_disease')->on('diseases')->onDelete('cascade');
            $table->foreign('id_symptom')->references('id_symptoms')->on('symptoms')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('disease_symptom');
    }
};
