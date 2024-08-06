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
        'title_en',
        'description_uz',
        'description_ru',
        'description_en',
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
        $discount = $this->discount;

        if ($discount) {
            $now = Carbon::now();
            if ($discount->from && $discount->to) {
                if ($now->between(Carbon::parse($discount->from), Carbon::parse($discount->to))) {
                    return $discount;
                }
            } elseif ($discount->from === null && $discount->to === null) {
                return $discount;
            }
        }
        return null;
    }

    public function getDiscountedPrice()
    {
        $discount = $this->getDiscount();

        if ($discount) {
            if ($discount->percentage) {
                $discountAmount = ($this->price * $discount->percentage) / 100;
            } else {
                $discountAmount = $discount->sum;
            }

            return $this->price - $discountAmount;
        }

        return $this->price;
    }
}
