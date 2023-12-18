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
        Schema::create('ejes', function (Blueprint $table) {
            $table->id();
            $table->string('codigoproveedor');
            $table->float('cantidad');
            $table->integer('unidaddemedida');
            $table->string('nroserie');
            $table->string('nrolote')->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ejes');
    }
};
