<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('wallets', function (Blueprint $table) {
            $table->id();
            $table->string('ticker');
            $table->string('address');
            $table->integer('balance')->unsigned();
            $table->timestamps();

            $table->unique(['ticker', 'address']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('wallets');
    }
};
