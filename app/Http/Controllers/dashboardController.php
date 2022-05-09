<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Product;
use App\Models\cart;

class dashboardController extends Controller
{

    public function redirect()
    {
        $usertype = Auth::user()->usertype;
        if ($usertype == 1) {
            return view('admin.admin');
        } else {
            $data = product::paginate(9);
            $user = auth()->user();
            $count = cart::where('name', $user->name)->count();
            return view('user.dashboard', compact('data', 'count'));
        }
    }

    public function index()
    {
        if (Auth::id()) {
            return redirect('home');
        } else {
            $data = product::paginate(9);
            return view('user.dashboard', compact('data'));
        }
    }


    public function product()
    {
        $data = product::paginate(9);
        $user = auth()->user();
        $count = cart::where('name', $user->name)->count();
        return view('user.products', compact('data', 'count'));
    }

    // public function product()
    // {
    //     if (Auth::id()) {
    //         return redirect('home');
    //     } else {

    //         $data = product::paginate(9);
    //         return view('user.products', compact('data'));
    //     }
    // }

    public function searchproduct(Request $request)
    {
        $search = $request->search;
        if ($search == "") {
            $data = product::paginate(9);
            return view('user.products', compact('data'));
        }
        $data = product::where('title', 'like', '%' . $search . '%')->get();
        return view('user.products', compact('data'));
    }


    public function singleproduct($id)
    {
        $data = product::find($id);
        $user = auth()->user();
        $count = cart::where('name', $user->name)->count();
        return view('user.singleproduct', compact('data', 'count'));
    }

    public function addcart(Request $request, $id)
    {
        if (Auth::id()) {
            $user = auth()->user();
            $product = product::find($id);
            $cart = new cart;
            $cart->name = $user->name;
            $cart->product_title = $product->title;
            $cart->price = $product->price;
            $cart->quantity = $request->quantity;
            $cart->save();
            return redirect()->back()->with('message', 'Ürün başarıyla eklendi');
        } else {
            return redirect('login');
        }
    }

    public function showcart()
    {

        $user = auth()->user();
        $count = cart::where('name', $user->name)->count();
        $carts = cart::where('name', $user->name)->get();
        return view('user.cart', compact('count', 'carts'));
    }
}
