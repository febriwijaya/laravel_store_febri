<?php

namespace App\Http\Controllers;

use App\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $carts = Cart::where('users_id', Auth::user()->id)->get();
        return view('pages.cart', [
          'carts' => $carts
        ]);
    }

    public function delete(Request $request, $id)
    {
      $cart = Cart::findOrFail($id);

      $cart->delete();

      return redirect()->route('cart');
    }

    public function success()
    {
        return view('pages.success');
    }
}
