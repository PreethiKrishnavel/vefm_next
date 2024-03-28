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
        Schema::create('setup_details', function (Blueprint $table) {
            $table->id();
            $table->string('bank_name', 250);
            $table->string('state', 25);
            $table->string('country', 25);
            $table->dateTime('created_at')->nullable();
            $table->dateTime('updated_at')->nullable();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('setup_details');
    }
};
