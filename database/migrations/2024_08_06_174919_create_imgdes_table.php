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
        Schema::create('imgdes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_destinasi')->constrained('destinasis'); // Assuming destinasis table exists
            $table->binary('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('imgdes');
    }
};
