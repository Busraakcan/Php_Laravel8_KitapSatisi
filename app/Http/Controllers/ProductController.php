<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductComment;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function detail($id)
    {
        return view("product.detail", [
            'product' => Product::find($id)
        ]);
    }

    public function makeComment(Request $request)
    {
        $newComment = ProductComment::create($request->only(['product_id', 'user_id', 'text']));
        return redirect()->back();
    }

    public function deleteComment($id)
    {
        $comment = ProductComment::find($id);
        $comment->delete();
        return redirect()->back();
    }
}
