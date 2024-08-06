<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_uz',
        'title_ru',
        'title_en' ,
        'description_uz',
        'description_ru',
        'description_en' ,
        'image', 
        'category_id', 
        'price', 
        'best_seller',
        'stock'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function discount()
    {
        return $this->hasOne(Discount::class);
    }

    public function getDiscount()
    {
        if ($this->discount) {
            if ($this->discount->from == null && $this->discount->to == null) {
                return $this->discount;
            }

            if (Carbon::now()->between(Carbon::parse($this->discount->from), Carbon::parse($this->discount->to))) {
                return $this->discount;
            }
        }
        return null;
    }
}
