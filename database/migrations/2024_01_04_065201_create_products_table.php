<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Category;
use App\Models\Supplier;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string("destination", 255);
            $table->string("product_title", 255);
            $table->foreignIdFor(Category::class, "category_id");
            $table->string("review", 255)->nullable();
            $table->foreignIdFor(Supplier::class, "supplier_id");
            $table->string("image")->nullable();
            $table->string("in_evidence", 255)->nullable();
            $table->string("adult_amount", 11)->nullable();
            $table->string("adult_age", 11)->nullable();
            $table->string("adult_price", 11)->nullable();

            $table->string("boy_amount", 11)->nullable();
            $table->string("boy_age", 11)->nullable();
            $table->string("boy_price", 11)->nullable();

            $table->string("infant_amount", 11)->nullable();
            $table->string("infant_age", 11)->nullable();
            $table->string("infant_price", 11)->nullable();

            $table->string("total_price", 11)->nullable();

            $table->string("discount_adult_amount", 11)->nullable();
            $table->string("discount_adult_discount", 11)->nullable();
            $table->string("discount_adult_from_date", 11)->nullable();
            $table->string("discount_adult_to_date", 11)->nullable();

            $table->string("discount_boy_amount", 11)->nullable();
            $table->string("discount_boy_discount", 11)->nullable();
            $table->string("discount_boy_from_date", 11)->nullable();
            $table->string("discount_boy_to_date", 11)->nullable();

            $table->string("discount_infant_amount", 11)->nullable();
            $table->string("discount_infant_discount", 11)->nullable();
            $table->string("discount_infant_from_date", 11)->nullable();
            $table->string("discount_infant_to_date", 11)->nullable();

            // $table->string("in_evidence", 255)->nullable();
            $table->string("meeting_point", 255)->nullable();
            $table->string("destination_address")->nullable();
            $table->string("address", 255)->nullable();

            $table->string("cancellation", 255)->nullable();
            $table->string("duration_of_service", 255)->nullable();
            $table->json("languages")->nullable();

            $table->string("includes", 255)->nullable();
            $table->string("operation_from_date", 255)->nullable();
            $table->string("operation_to_date", 255)->nullable();
            $table->string("opening_closing", 255)->nullable();
            $table->boolean("flight_included")->default(false);
            $table->boolean("subject_to_reconfirmation")->default(false);
            $table->boolean("immediate_reconfirmation")->default(false);

            $table->json("timetables")->nullable();



        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
