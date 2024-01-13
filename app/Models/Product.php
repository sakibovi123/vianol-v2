<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = "products";

    protected $fillable = [
        "destination", "product_title", "category_id", "review", "supplier_id", "image", "in_evidence",
        "adult_amount", "adult_age", "adult_price", "boy_amount", "boy_age", "boy_price", "infant_amount",
        "infant_age", "infant_price", "total_price", "discount_adult_amount", "discount_adult_discount", "discount_adult_from_date",
        "discount_adult_to_date", "discount_boy_amount", "discount_boy_discount", "discount_boy_from_date", "discount_boy_to_date",
        "discount_infant_amount", "discount_infant_discount", "discount_infant_from_date", "discount_infant_to_date", "in_evidence",
        "meeting_point", "address", "cancellation", "duration_of_service", "languages", "includes", "operation_from_date", "operation_to_date",
        "opening_closing", "flight_included", "subject_to-reconfirmation", "immediate_reconfirmation", "timetables"
    ];

    protected $casts = [
        "timetable" => "array",
        "languages" => "array"
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function supplier(){
        return $this->belongsTo(Supplier::class);
    }


}
