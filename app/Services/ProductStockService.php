<?php

namespace App\Services;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\sizingProducts;

class ProductStockService
{
    public function checkStock($product, Request $request)
    {
        if ($product->quantity === 0) {
            $sizes = $product->sizes;
            if ($sizes->isEmpty()) {
                return redirect()->back()->with('error', 'تعداد محصول مورد نظر بیشتر از موجودی می باشد');
            }

            if ($request->filled('size') && !$request->filled('color')) {
                return redirect()->back()->with('error', 'لطفا در صورت انتخاب سایز، رنگ را نیز انتخاب کنید.');
            } elseif (!$request->filled('size') && !$request->filled('color')) {
                return redirect()->back()->with('error', 'لطفا سایز و رنگ محصول را انتخاب کنید.');
            }

            $query = sizingProducts::query();

            if ($request->filled('size')) {
                $query->where('size', $request->size);
            }

            if ($request->filled('color')) {
                $query->where('color', $request->color);
            }

            $item = $query->first();

            if (!$item) {
                return redirect()->back()->with('error', 'اطلاعات ناقص ارسال شده است! لطفاً رنگ و یا سایز انتخابی را دوباره چک کنید.');
            }

            if ($request->qty > $item->quantity) {
                return redirect()->back()->with('error', 'تعداد محصول مورد نظر بیشتر از موجودی می باشد');
            }
        }

        return null; // برگرداندن null اگر هیچ مشکلی نباشد
    }
    public function checkStockIOrder($product, $orderItem)
    {
        if ($product->quantity === 0) {
            $sizes = $product->sizes;
            if ($sizes->isEmpty()) {
                return redirect()->route('cart.index')->with('error', 'تعداد محصول "' . $orderItem['name'] . '" بیشتر از موجودی می باشد');
            }

            if ($orderItem['size'] != null && $orderItem['color'] == null) {
                return redirect()->route('cart.index')->with('error', 'اطلاعات محصول "' . $orderItem['name'] . '" ناقص ارسال شده است! لطفاً رنگ و یا سایز انتخابی را دوباره چک کنید.');
            } elseif ($orderItem['size'] == null && $orderItem['color'] == null) {
                return redirect()->route('cart.index')->with('error', 'اطلاعات محصول "' . $orderItem['name'] . '" ناقص ارسال شده است! لطفاً رنگ و یا سایز انتخابی را دوباره چک کنید.');
            }

            $query = sizingProducts::query();

            if ($orderItem['size'] != null) {
                $query->where('size', $orderItem['size']);
            }

            if ($orderItem['color'] != null) {
                $query->where('color', $orderItem['color']);
            }

            $item = $query->first();

            if (!$item) {
                return redirect()->route('cart.index')->with('error', 'اطلاعات ناقص ارسال شده است! لطفاً رنگ و یا سایز انتخابی را دوباره چک کنید.');
            }

            if ($orderItem['qty'] > $item->quantity) {
                return redirect()->route('cart.index')->with('error', 'تعداد محصول "' . $orderItem['name'] . '" بیشتر از موجودی می باشد');
            }
        }

        return null; // برگرداندن null اگر هیچ مشکلی نباشد
    }
    public function productInStock($id)
    {
        $product = Product::findOrFail($id);

        if ($product->quantity === 0) {
            $sizeEntry = sizingProducts::where('quantity', '>', 1)
                ->where('product_id', $id)
                ->first();
            if (!$sizeEntry) {
                return redirect()->back()->with('error', 'محصول موجود نیست!!');
            }
            return ['size' => $sizeEntry->size, 'color' => $sizeEntry->color];
        } elseif($product->quantity > 0) {
            return true;
        }else{
            return redirect()->back()->with('error', 'محصول موجود نیست!!');
        }
    }
}
