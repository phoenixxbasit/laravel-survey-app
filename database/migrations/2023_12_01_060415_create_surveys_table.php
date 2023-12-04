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
        Schema::create('surveys', function (Blueprint $table) {
            $table->id();
            $table->string('industry');
            $table->string('title');
            $table->string('body');
            $table->unsignedBigInteger('user_id');
            $table->boolean('completed');
            $table->integer('reward');
            $table->integer('expiryreward');
            $table->timestamps();
            $table->timestamp('expiry_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surveys');
    }
};
