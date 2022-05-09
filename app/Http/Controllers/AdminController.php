<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class AdminController extends Controller
{
    //
    public function addproducts()
    {
        return view('admin.addproducts');
    }

    public function showproducts()
    {
        $data = product::all();
        return view('admin.showproducts', compact('data'));
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

    public function deleteproducts($id)
    {
        $data = product::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Ürün başarıyla silindi');
    }

    public function updateproduct($id)
    {
        $data = product::find($id);
        return view('admin.updateproduct', compact('data'));
    }

    public function editproduct(Request $request, $id)
    {
        $data = product::find($id);
        $image = $request->img;
        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->img->move('productimage', $imagename);
            $data->image = $imagename;
        }

        $data->title = $request->title;
        $data->price = $request->price;
        $data->description = $request->des;
        $data->quantity = $request->quantity;

        $data->save();

        return redirect()->back()->with('message', 'Ürün başarıyla güncellendi');
    }
}
