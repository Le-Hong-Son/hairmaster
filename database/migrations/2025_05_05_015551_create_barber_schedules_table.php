<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('barber_schedules', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('barber_id')->nullable();
            $table->date('date')->nullable();
            $table->time('time_slot')->nullable();
            $table->boolean('is_available')->nullable();
            $table->timestamps();

            $table->foreign('barber_id')->references('id')->on('barbers')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('barber_schedules');
    }
};