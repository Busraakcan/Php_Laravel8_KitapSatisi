<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductComment;
use App\Models\Setting;
use App\Models\ShoppingCart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShoppingCartController extends Controller
{
    public static function countShoppingCart(){
        if (Auth::check()) {
            return ShoppingCart::where('user_id', Auth::user()->id)->count();
        }
        return 0;
    }

    public function index()
    {
        $datalist = ShoppingCart::select('product_id')->where('user_id', Auth::user()->id)->groupBy('product_id')->get();
        return view('home.shopping-cart',['datalist'=>$datalist]);
    }

    public function store(Request $request, $id)
    {
        for ($i = 0; $i < $request->input('count'); $i++) {
            $data = new ShoppingCart();
            $data -> product_id = $id;
            $data -> user_id = Auth::user()->id;
            $data -> save();
        }

        return redirect()->back()->with('success','Ürün başarıyla sepete eklendi!');
    }

    public function destroy()
    {
        $data = ShoppingCart::where('user_id', Auth::user()->id)->get();
        $data->delete();
        return redirect()->back()->with('success','sepet başarıyla silindi!');
    }

    public function removeProduct($product_id)
    {
        ShoppingCart::where('product_id', $product_id)->where('user_id', Auth::user()->id)->delete();
        return redirect()->back()->with('success','Ürün başarıyla silindi!');
    }
}
