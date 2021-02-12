<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Setting;
use http\Client\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public static function detail($id)
    {
        return view("product.detail", [
            'product' => Product::find($id)
        ]);
    }
}
