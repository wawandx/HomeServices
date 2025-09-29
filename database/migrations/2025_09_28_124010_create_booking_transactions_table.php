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
        Schema::create('booking_transactions', function (Blueprint $table) {
            $table->id();
            $table->string('booking_trx_id')->unique();
            $table->string('name');
            $table->string('phone');
            $table->string('email');
            $table->string('started_time');
            $table->date('schedule_at');
            $table->string('proof');
            $table->string('post_code');
            $table->string('city');
            $table->string('address');
            $table->unsignedBigInteger('subtotal');
            $table->unsignedBigInteger('total_amount');
            $table->unsignedBigInteger('total_tax_amount');
            $table->boolean('is_paid')->default(false);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booking_transactions');
    }
};
