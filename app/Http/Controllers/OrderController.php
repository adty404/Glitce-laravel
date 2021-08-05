<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Order;
use App\PaymentSlip;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class OrderController extends Controller
{
    public function index(){
        return view('pages.order-check');
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

    public function orderStatus(Request $request){
        if(Order::where('order_number', $request->order_number)->count() > 0){
            return view('pages.order-status', [
                'order' => Order::with(['destination', 'payment', 'payment_slip'])->where('order_number', $request->order_number)->first()
            ]);
        }

        Alert::error('Not Found', 'Order Number Not Found!');
        return redirect()->route('order.check');
    }

    public function resetPaymentSlip(Request $request){
        
        
        PaymentSlip::where('id', $request->payment_slip_id)->delete();
        
        $order = Order::where('order_number', $request->order_number)->first();
        $order->status_id = '1';
        $order->save();

        Alert::success('Success', 'Payment Slip reseted!');
        return redirect()->route('order.check');
    }

    public function paymentSlip(Request $request){
        
        $data['image'] = $request->file('image')->store('assets/payment_slip', 'public');
        $data['reason'] = '';

        PaymentSlip::create($data);

        $latest_ps = PaymentSlip::latest()->first();
        Order::where('order_number', $request->order_number)->update([
            'payment_slip_id' => $latest_ps['id'],
            'status_id' => '2'
        ]);

        Alert::success('Success', 'Payment Slip Uploaded!');
        return redirect()->route('order.check');
    }
}