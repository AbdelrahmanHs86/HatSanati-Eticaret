<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class AdminController extends Controller
{
    //
    public function product()
    {
        return view('admin.products');
    }

    public function uploadproduct(Request $request)
    {
        $data = new product;
        $image = $request->img;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->img->move('productimage', $imagename);
        $data->image = $imagename;

        $data->title = $request->title;
        $data->price = $request->price;
        $data->description = $request->des;
        $data->quantity = $request->quantity;

        $data->save();

        return redirect()->back()->with('message', 'Ürün başarıyla eklendi');
    }
}