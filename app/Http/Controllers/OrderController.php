<?php

namespace App\Http\Controllers;

use DB;
use App\Order;
use App\OrderDetail;
use App\Product;
use App\Category;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Session;

// use Illuminate\Database\Eloquent\Model;

class OrderController extends Controller
{
    public function index()
    {
        return view('orderindex');
    }

    public function create(Request $request)
    {
        // create method
        // return view only
        $data = [];

        $category = Category::where('group_by', 'product')->get();
        $data['category'] = $category;
        // dd($request->keyword);

        $product = Product::get();

        if (isset($request->category_id)) {
            $product = Product::where('category_id', $request->category_id)->get();
        }

        $data['product'] = $product;

        return view('ordercreate', ['data' => $data]);
    }
    
    public function store(Request $request)
    {
        $order = Order::findOrNew($request->id);
        $order->no_order = $this->generateNoOrder();
        $order->customer_id = $request->customer_id;
        $order->user_id = Auth::user()->id;
        $order->payment_id = $request->payment_id;
        $order->table_id = $request->table_id;
        $order->outlet_id = $request->outlet_id;
        $order->category_order_type_id = $request->category_order_type_id;
        $order->sub_total = $request->sub_total;
        $order->coupon_id = $request->coupon_id;
        $order->total = $request->total;
        $order->paid = $request->paid;
        $order->config_tax_id = $request->config_tax_id;
        $order->is_paid = $request->is_paid;
        $order->printed_at = $request->printed_at;
        if(is_null($order->created_at))
            $order->created_at = new DateTime();
        $order->updated_at = new DateTime();
        

        // store method
        // saving order then redirect to show($id)

        if(isset($request->detail)){
            foreach($request->detail as $detail){
                $orderDetail = OrderDetail::findOrNew($detail->id);
                $orderDetail->order_id = $request->id;
                $orderDetail->item_id = $detail->item_id;
                $orderDetail->qty = $detail->qty;
                $orderDetail->order_detail_notes = $detail->order_detail_notes;
                $orderDetail->created_at = new DateTime('now');
                $orderDetail->updated_at = new DateTime('now');
            }
        }

        // validate fisrt then save
        $order->save();
        $orderDetail->save();

        return route('order.detail', [ 'id' => $order->id ]);
    }

    public function show($id)
    {
        // show method
        $order = Order::find($id)->toArray();

        $orderDetail = OrderDetail::where($order->id)->get();

        return view('orderdetail');
    }

    public function destroy()
    {
        // delete method
    }

    /**
     * Add product to the cart
     *
     * @return success message
     */
    public function addToCart($id){
        $product = Product::find($id);
 
        if(!$product) {
            abort(404);
        }

        $cart = session()->get('cart');

        // if cart is empty then this the first product
        if(!$cart) {
            $cart = [
                $id => [
                    "name" => $product->name,
                    "quantity" => 1,
                    "price" => $product->price,
                    "photo" => $product->photo
                ]
            ];
 
            session()->put('cart', $cart);
 
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
 
        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id])) {
 
            $cart[$id]['quantity']++;
 
            session()->put('cart', $cart);
 
            return redirect()->back()->with('success', 'Product added to cart successfully!');
 
        }
 
        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "name" => $product->name,
            "quantity" => 1,
            "price" => $product->price,
            "photo" => $product->photo
        ];
 
        session()->put('cart', $cart);
 
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    /**
     * Update product at the cart list
     *
     * @return success message
     */
    public function updateCart(Request $request)
    {
        if($request->id && $request->quantity)
        {
            $cart = session()->get('cart');
 
            $cart[$request->id]["quantity"] = $request->quantity;
 
            session()->put('cart', $cart);
 
            session()->flash('success', 'Cart updated successfully');
        }
    }

    /**
     * Remove product from the cart list
     *
     * @return success message
     */
    public function removeFromCart(Request $request)
    {
        if($request->id) {
 
            $cart = session()->get('cart');
 
            if(isset($cart[$request->id])) {
 
                unset($cart[$request->id]);
 
                session()->put('cart', $cart);
            }
 
            session()->flash('success', 'Product removed successfully');
        }
    }

    /**
     * Remove all products from the cart list (cancel order)
     *
     * @return success message
     */
    public function emptyCart() 
    {
        // session()->flush();
    }

    public function generateNoOrder()
    {
        $prefix = $this->prefix();
        $postfix = $this->postfix();
        $no = null;
        // $no = cek dari tabel order

        $noOrder = $prefix . $no . $postfix;

        return $noOrder;
    }

    public function prefix()
    {
        $prefix = 'SOGE-INV-';
        return $prefix;
    }

    public function postfix()
    {
        $postfix = '';
        return $postfix;
    }
}
