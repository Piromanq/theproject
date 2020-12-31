<?php

namespace App\Http\Middleware;

use App\Models\order;
use Closure;
use Illuminate\Http\Request;

class BasketIsNotEmpty
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $orderId = session('orderId');
        if(!is_null($orderId)) {
            $order = order::findOrFail($orderId);
            if ($order->products->count() > 0){
                return $next($request);
            }

        }
        session()->flash('warning', 'Корзина пуста');
        return redirect()->route('index');

    }
}
