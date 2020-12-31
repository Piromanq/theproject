<?php

namespace App\Http\Controllers;

use App\Models\order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BasketController extends Controller
{

    public function basket()
    {
        $orderId = session('orderId');
        if(!is_null($orderId)) {
            $order = order::findOrFail($orderId);
        }
        return view('basket', compact('order'));
    }

    public function basketConfirm(Request $request){

        $orderId = session('orderId');
        if(is_null($orderId)){
            return redirect()->route('index');
        }
        $order = order::find($orderId);
        $success = $order->saveOrder($request->name, $request->phone);

if($success){
    session()->flash('success', 'Ваш заказ принят в оброботку!');
} else {
    session()->flash('warning', 'Ошибка, попробуйте повторить ваш заказ');
}
        return redirect()->route('index');
    }


    public function basketPlace()
    {
        $orderId = session('orderId');
        if(is_null($orderId)){
            return redirect()->route('index');
        }
        $order = order::find($orderId);
        return view('order', compact('order'));
    }

    public function basketAdd($productId)
    {
        $orderId = session('orderId');
        if(is_null($orderId)){
            $order = order::create();
            session(['orderId' => $order->id]);
        }else{
            $order = order::find($orderId);
        }

        if($order->products->contains($productId)){
            $pivotRow = $order->products()->where('product_id', $productId)->first()->pivot;
            $pivotRow->count++;
            $pivotRow->update();
        } else {
            $order->products()->attach($productId);
        }

        if(Auth::check()){
        $order->user_id = Auth::id();
        $order->save();

        }

        $product = Product::find($productId);

        session()->flash('success', 'Товар ' .$product->name .' добавлен в корзину');


return back();
}




public function basketRemove($productId)
{
    $orderId = session('orderId');
    if(is_null($orderId)){
        return redirect()->route('basket');
    }
    $order = order::find($orderId);

    if ($order->products->contains($productId)){
        $pivotRow = $order->products()->where('product_id', $productId)->first()->pivot;
        if($pivotRow->count < 2)
            $order->products()->detach($productId);
   else{
        $pivotRow->count--;
        $pivotRow->update();
    }

    }
    $product = Product::find($productId);

    session()->flash('warning', 'Удален товар ' .$product->name);

    return redirect()->route('basket');
 }

 public function login()
 {
     return view('login');
 }

}