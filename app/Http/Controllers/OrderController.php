<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;

class OrderController extends Controller
{
    public function addOrder(Request $request) {
        $product = Product::where('productID', $request->productID)->get();

        $productAmount = $product[0]->naStanju;
        $amountOrder = (int)$request->amount;

        if($amountOrder <= 0 ) {
            return redirect()->route('product', ['id' => $request->productID]);
        }

        if($productAmount >= $amountOrder) {
            Order::create([
                'productID' => $request->productID,
                'userID' => $request->userID,
                'amount' => $request->amount
            ]);

            Product::where('productID', $request->productID)->update([
                'naStanju' => $productAmount - $amountOrder
            ]);
        }

        return redirect()->route('product', ['id' => $request->productID]);
    }

    public function updateOrders() {
        if(!Gate::allows('update')) {
            abort(403);
        }

        Order::query()->update([
            'status' => 'Odobreno'
        ]);

        return redirect()->route('dashboard');
    }

    public function updateOrder($id) {
        $order = Order::where('orderID', $id)->get();
        if(!Gate::allows('update', $order[0])) {
            abort(403);
        }

        Order::where('orderID', $id)->update([
            'status' => 'Odobreno'
        ]);

        return redirect()->route('dashboard');
    }

    public function deleteOrder($id) {
        $order = Order::where('orderID', $id)->get();
        if(!Gate::allows('delete', $order[0])) {
            abort(403);
        }
        Order::where('orderID', $id)->delete();

        return redirect()->back();
    }
}
