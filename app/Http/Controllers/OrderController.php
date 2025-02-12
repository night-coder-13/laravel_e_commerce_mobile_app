<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\sizingProducts;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public static function create($cart, $coupon, $amounts, $token)
    {
        DB::beginTransaction();

        $order = Order::create([
            'user_id' => Auth::id(),
            'total_amount' => $amounts['totalAmount'],
            'coupon_amount' => $amounts['couponAmount'],
            'paying_amount' => $amounts['payingAmount'],
            'coupon_id' => $coupon == null ? null : $coupon->id
        ]);

        foreach ($cart as $key => $orderItem) {
            $product = Product::findOrFail($key);

            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $product->id,
                'price' => $product->is_sale ? $product->sale_price : $product->price,
                'quantity' => $orderItem['qty'],
                'size' => $orderItem['size'],
                'color' => $orderItem['color'],
                'subtotal' => $product->is_sale ? ($product->sale_price * $orderItem['qty']) : ($product->price * $orderItem['qty'])
            ]);
        }

        Transaction::create([
            'user_id' => Auth::id(),
            'order_id' => $order->id,
            'amount' => $amounts['payingAmount'],
            'token' => $token
        ]);
        
        DB::commit();
    }

    public static function update($token, $refNumber)
    {
        DB::beginTransaction();

        $transaction = Transaction::where('token', $token)->firstOrFail();

        $transaction->update([
            'status' => 1,
            'ref_number' => $refNumber
        ]);

        $order = Order::findOrFail($transaction->order_id);

        $order->update([
            'status' => 1,
            'payment_status' => 1
        ]);

        foreach (OrderItem::where('order_id', $order->id)->get() as $item) {
            $product = Product::find($item->product_id);
            if($product->quantity === 0){
                $product_s= sizingProducts::where('product_id' , $item->product_id)->where('size' , $item->size)->where('color' ,$item->color)->first();
                $product_s->update([
                    'quantity' => ($product_s->quantity -  $item->quantity)
                ]);
            }else{
                $product->update([
                    'quantity' => ($product->quantity -  $item->quantity)
                ]);
            }
        }

        DB::commit();
    }
}
