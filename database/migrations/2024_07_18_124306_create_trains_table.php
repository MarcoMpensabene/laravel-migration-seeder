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
            $table->string("Stazione di partenza", 40);
            $table->string("Stazione di arrivo", 40);
            $table->dateTime("Orario di partenza");
            $table->dateTime("Orario di arrivo");
            $table->string("Codice Treno", 20);
            $table->unsignedTinyInteger("Numero Carrozze");
            $table->boolean("In orario");
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
