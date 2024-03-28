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
        Schema::create('setup_region', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('company_id');
            $table->unsignedBigInteger('division_id');
            $table->unsignedBigInteger('division_id_BU')->default(0);
            $table->unsignedBigInteger('division_id_BU_23');
            $table->string('unit');
            $table->unsignedBigInteger('unit_id_new');
            $table->string('region_name');
            $table->string('region_code');
            $table->string('invoice_code_old')->nullable();
            $table->string('invoice_code');
            $table->integer('BU')->default(0);
            $table->unsignedBigInteger('div_bu_new')->default(0);
            $table->unsignedBigInteger('div_bu_new_23');
            $table->string('BU_new')->nullable();
            $table->integer('division_fy_21_22')->default(0);
            $table->integer('division_fy_23_24');
            $table->tinyInteger('flag')->default(0);
            $table->dateTime('created_at')->nullable();
            $table->dateTime('updated_at')->nullable();

            // Define foreign key constraints
            $table->foreign('company_id')->references('id')->on('setup_company');
            $table->foreign('division_id_BU_23')->references('id')->on('setup_division');
            $table->foreign('unit_id_new')->references('id')->on('setup_units');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('setup_region');
    }
};
