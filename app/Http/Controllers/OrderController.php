<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Order;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class OrderController extends Controller
{
    public function index(){
        return view('pages.check-order');
    }

    public function createOrder(OrderRequest $request){
        $data = $request->all();

        $data['status_id'] = '1';
        $data['order_number'] = 'GLT-' . time();

        Order::create($data);

        Alert::success('Success', 'Order Created!');

        return redirect()->route('order.success', $data['order_number'] = 'GLT-' . time());
    }

    public function orderSuccess($order_number){
        return view('pages.order-success', [
            'order_number' => $order_number
        ]);
    }
}
