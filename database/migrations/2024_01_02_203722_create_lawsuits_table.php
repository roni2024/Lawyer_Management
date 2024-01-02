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
        Schema::create('lawsuits', function (Blueprint $table) {
            $table->id();
            $table->string('number', 100)->unique();
            $table->string('title', 100);
            $table->text("description")->nullable();
            $table->string('status', 20)->nullable();
            $table->foreignId('client_id')->constrained()->onDelete('null')->onUpdate('cascade')->nullable();
            $table->string('category', 20)->nullable();
            $table->date('date_opened')->default(now());
            $table->date('date_closed')->nullable();
            $table->string('court', 100)->nullable();
            $table->string('judge', 100)->nullable();
            $table->string('outcome', 100)->nullable();
            $table->string('priority', 20)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lawsuits');
    }
};
