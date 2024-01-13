<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $fillable = [
        "name", "landline_number", "mobile_phone", "email", "city", "address", "longitude", "latitude", "google_map_link",
        "is_active", "descrption", "image", "condition_of_sale", "privacy_consent"
    ];

    public function gallery()
    {
        return $this->belongsTo(Gallery::class);
    }

    public function product()
    {
        return $this->hasMany(App\Models\Product::class);
    }
}
