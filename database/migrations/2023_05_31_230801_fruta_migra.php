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
        Schema::create('frutamodel', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre');
            $table->integer('Cantidad');
            $table->string('Proveedor');
            $table->boolean('estado')->default(true);
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
