<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('business_info', function (Blueprint $table) {
            $table->id(); // Primary key, auto-incrementing
            $table->string('phone', 15); // Mobile number, varchar(15)
            $table->string('business_name'); // Full business_name, varchar(255)
            $table->string('photo'); // Full Photo, varchar(255)
            $table->string('address'); // Full Photo, varchar(255)
            $table->string('shortd_discription'); // shortd_discription, varchar(255)
            $table->text('full_discription'); // shortd_discription, text
            $table->unsignedBigInteger('district_id'); // Foreign key to districts table
            $table->unsignedBigInteger('created_by'); // User ID who created the record
            $table->unsignedBigInteger('updated_by')->nullable(); // User ID who last updated the record, nullable
            $table->timestamps(); // Adds created_at and updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('business_info');
    }
};
