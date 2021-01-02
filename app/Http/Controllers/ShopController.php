<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Stock;
use App\Models\Cart;

class ShopController extends Controller
{
    public function index()
    {
        $stocks = Stock::Paginate(6);
        return view('shop' , compact('stocks'));
    }

    public function myCart(Request $request)
    {
        $sesdata = $request->session()->get('cart_item');
        return view('mycart' , ['session_cart' => $sesdata]);    }

    public function cart_put(Request $request)
    {
        $user_id = Auth::id();
        $request->session()->push('cart_item' , $request->input('stock_id'));
        return redirect('mycart')->with('user_id' , $user_id);
    }
}
