<?php

namespace App\Http\Controllers;

use App\Product;
use DateTime;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('admin.productindex');
    }

    public function create()
    {
        // create method
        // return view only
        return view('admin.productdetail');
    }
    
    public function store(Request $request)
    {
        // store method
        // saving product then redirect to show($id)
        $product = Product::findOrNew($request->id);
        $product->category_id = $request->category_id;
        $product->outlet_id = $request->outlet_id;
        $product->product_name = $request->product_name;
        $product->sku = $request->sku;
        $product->barcode = $request->barcode;
        $product->qty = $request->qty;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->is_active = $request->is_active;
        $product->created_at = $request->created_at;
        $product->updated_at = new DateTime('now');

        $field = [];
        $rules = [];

        $product->save();

    }

    public function show($id)
    {
        // show method
        $product = Product::findOrNew($id);

        return view('admin.productdetail');
    }

    public function destroy()
    {
        // delete method
    }
}
