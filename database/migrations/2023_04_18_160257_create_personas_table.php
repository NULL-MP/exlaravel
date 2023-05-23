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
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->integer('ide');
            $table->string('nombre', 30);
            $table->string('segNom', 30);
            $table->string('paterno', 30);
            $table->string('materno', 30);
            $table->string('telefono', 10);
            $table->string('email', 30);
            $table->date('fechaNac');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personas');
    }
};
