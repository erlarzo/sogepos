<?php

namespace App\Http\Controllers;

use App\Category;
use DateTime;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function indexProduct()
    {
        $data = Category::where('group_by', 'product')->get();
        return view('admin.categoryproductindex', [ 'data' => $data ]);
    }

    public function indexPayment()
    {
        $data = Category::where('group_by', 'payment')->get();
        return view('admin.categorypaymentindex', [ 'data' => $data ]);
    }

    public function indexOrderType()
    {
        $data = Category::where('group_by', 'order_type')->get();
        return view('admin.categoryordertypeindex', [ 'data' => $data ]);
    }

    // public function create()
    // {
    //     // create method
    //     // return view only

    //     return view('admin.categorydetail');
    // }

    public function createProduct()
    {
        // create method
        // return view only

        return view('admin.categoryproductdetail');
    }

    public function createPayment()
    {
        // create method
        // return view only

        return view('admin.categorypaymentdetail');
    }

    public function createOrderType()
    {
        // create method
        // return view only

        return view('admin.categoryordertypedetail');
    }
    
    public function store(Request $request)
    {
        // store method
        // saving category then redirect to show($id)
        $category = Category::findOrNew($request->id);
        $category->category_id = $request->category_id;
        $category->category_name = $this->generateNameLabel($request->category_label);
        $category->category_label = $request->category_label;
        $category->group_by = $request->group_by;
        $category->is_active = $request->is_active;
        if(is_null($category->created_at))
            $category->created_at = new DateTime();
        $category->updated_at = new DateTime();
        dd($category);
        // $category->save();

        if ($category->group_by == 'product') {
            return route('admin.category.product');
        } elseif ($category->group_by == 'payment') {
            return route('admin.category.payment');
        } elseif ($category->group_by == 'order_type') {
            return route('admin.category.payment');
        }
    }

    public function show($id)
    {
        // show method
        var_dump($id);die;
    }

    public function destroy()
    {
        // delete method
    }
}
