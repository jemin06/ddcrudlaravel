<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\Log;

class Category extends Model
{
    use HasFactory;
    protected $table = 'category';
    protected $fillable = [
        'name',
        'price',
        'description',
        'tag',
        'image',
    ];

    public function product(){
        return $this->hasMany(Product::class);
    }
    protected static function boot()
    {
        parent::boot();
        static::deleted(function ($category) {
            $category->product()->delete();
            Log::info("Category with ID {$category->id} and its products have been deleted.");
        });
    }
}
