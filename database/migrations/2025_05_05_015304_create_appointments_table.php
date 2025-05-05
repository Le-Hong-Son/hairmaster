<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('barber_id')->nullable();
            $table->unsignedBigInteger('service_id')->nullable();
            $table->dateTime('appointment_time')->nullable();
            $table->enum('status', ['pending', 'confirmed', 'cancelled', 'completed'])->nullable();
            $table->enum('payment_status', ['unpaid', 'paid'])->nullable();
            $table->text('note')->nullable();
            $table->boolean('is_free')->default(0);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('barber_id')->references('id')->on('barbers')->onDelete('cascade');
            $table->foreign('service_id')->references('id')->on('services')->onDelete('cascade');
            
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};