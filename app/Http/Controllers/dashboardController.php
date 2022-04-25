<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Product;

class dashboardController extends Controller
{

    public function redirect()
    {
        $usertype = Auth::user()->usertype;
        if ($usertype == 1) {
            return view('admin.admin');
        } else {
            $data = product::paginate(9);
            return view('user.dashboard', compact('data'));
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
        if (Auth::id()) {
            return redirect('home');
        } else {

            $data = product::paginate(9);
            return view('user.products', compact('data'));
        }
    }
}
