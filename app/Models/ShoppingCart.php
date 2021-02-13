<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class ShoppingCart extends Model
{
    use HasFactory;

    protected $table = "shoping_carts";

    protected $fillable = ['product_id', 'user_id', 'created_at', 'updated_at'];

    public function getCount($product_id, $user_id) {
        return ShoppingCart::where('user_id', $user_id)->where('product_id', $product_id)->count();
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
