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
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string("name", 255);
            $table->string("landline_number", 255)->nullable();
            $table->string("mobile_phone", 255)->nullable();
            $table->string("email", 255);
            $table->string("city", 255);
            $table->string("address", 255);
            $table->string("longitude", 255)->nullable();
            $table->string("latitude", 255)->nullable();
            $table->string("google_map_link", 255)->nullable();

            $table->string("is_active")->default(true);
            $table->string("description", 1000)->nullable();
            $table->string("image", 255)->nullable();
            $table->string("condition_of_sale", 255)->nullable();
            $table->string("privacy_consent")->default(false);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suppliers');
    }
};
