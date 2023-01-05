<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Home;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use App\Models\Category;

use Cart;

class CartController extends Controller
{
    /**
     * Hiển thị danh sách tài nguyên.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
       $products = Cart::content();
       $categories = Category::all();
        return view('home.cart', [
            'products' => $products,
            'categories' => $categories
        ]);
    }

    public function add(Request $request, Product $product)
    {
        $id = $product->id;
        $name = $product->name;
        $price = (int)$product->price;
        $quantity = 1;
        if($request->has('quantity'))
        {
            $quantity = $request->post('quantity');
        }

        Cart::add($id, $name, $quantity, $price)->associate('App\Models\Product');
        return redirect('/cart');

    }


    public function checkout(Request $request)
    {
        $order = new Order();
        $order->price =  Cart::priceTotal();

        $order->address = $request->post('address');
        $order->phone = $request->post('phone');
        $order->name = $request->post('name');
        $order->mail = $request->post('mail');
        $order->status_id = 1;

        if($order->save())
        {
            $this->updateOrderProduct($order);
            $this->removeAllCart();
            return redirect('/');
        }else{
            return redirect()->back();
        }
    }

    public function updateOrderProduct(Order $order)
    {
        $products = Cart::content();
        foreach ($products as $product)
        {
            $order->products()->attach($product->id, [
                'quantity' => $product->qty
            ]);
        }
    }

    public function removeAllCart()
    {
        $products = Cart::content();
        foreach ($products as $product)
        {
            Cart::remove($product->rowId);
        }
    }
}
