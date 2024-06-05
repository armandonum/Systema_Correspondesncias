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
        Schema::connection('mongodb')->create('destinatarios', function (Blueprint $collection) {
            $table->index('id');
            $table->string('nombre');
            $table->string('cargo');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dconnection('mongodb')->dropIfExists('destinatarios');
    }
};
