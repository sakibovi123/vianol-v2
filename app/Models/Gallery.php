<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    protected $tablename = "gallery";

    protected $fillable = [
        "description", "image", "supplier_id"
    ];

    public function supplier()
    {
        return $this->hasMany(Supplier::class);
    }
}
