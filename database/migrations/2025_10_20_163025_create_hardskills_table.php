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
        Schema::create('hardskills', function (Blueprint $table) {
            $table->id();
            $table->string('skill_name')->nullable();
            $table->enum('category', ['back-end', 'front-end', 'design', 'network', 'cybersecurity','framework','library','operating-system','programming-language','other'])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hardskills');
    }
};
