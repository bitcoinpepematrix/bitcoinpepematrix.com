<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('raffle_participants', function (Blueprint $table) {
            $table->id();
            $table->string('twitter_username');
            $table->string('wallet_address');
            $table->integer('assigned_tickets_count')->default(0)->unsigned();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('raffle_participants');
    }
};
