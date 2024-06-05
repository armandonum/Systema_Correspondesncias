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
        Schem::connection('mongodb')->create('correspondencias', function (Blueprint $collection) {
            $table->date('fecha');
            $table->string('remitente');
            $table->string('asunto');
            $table->string('cite');
        
            $table->foreignId('destinatario_id')->constrained('destinatarios');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('mongodb')->dropIfExists('correspondencias');
    }
};
