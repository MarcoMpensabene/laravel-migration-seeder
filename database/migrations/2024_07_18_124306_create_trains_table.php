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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string("Azienda", 20);
            $table->string("Stazione_di_partenza", 40);
            $table->string("Stazione_di_arrivo", 40);
            $table->time("Orario_di_partenza");
            $table->time("Orario_di_arrivo");
            $table->string("Codice_Treno", 20);
            $table->unsignedTinyInteger("Numero_Carrozze");
            $table->boolean("In_orario");
            $table->boolean("Cancellato");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
