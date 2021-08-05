<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Order;
use App\PaymentSlip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\DataTables\Facades\DataTables;

class OrderController extends Controller
{
    public function orderPlaced(){
        if (request()->ajax()) {
            $query = Order::query();

            return DataTables::of($query)
            ->addIndexColumn()
            ->toJson();
        }

        return view('pages.admin.order.order_placed');
    }

    public function paymentSlip(){
        if (request()->ajax()) {
            $query = Order::with(['payment', 'payment_slip', 'destination'])->where('status_id', '2');

            return DataTables::of($query)
            ->addIndexColumn()
            ->addColumn('aksi', function ($order){
                $data = [
                    'id' => $order->id,
                    'payment_slip_id' => $order->payment_slip_id
                ];
                return view('pages.admin.order.action')->with('data', $data);
            })
            ->addColumn('ticket', function ($order){
                return $order->destination->ticket->price;
            })
            ->addColumn('payment', function ($order){
                return $order->payment->payment;
            })
            ->editColumn('photo', function ($order) {
                return $order->payment_slip->image ? '
                <a href="' . Storage::url($order->payment_slip->image) . '" target="_blank">
                <img src="' . Storage::url($order->payment_slip->image) . '" style="max-height: 200px;"/>
                </a>' : '';
            })
            ->rawColumns(['aksi', 'photo'])
            ->toJson();
        }

        return view('pages.admin.order.payment_slip');
    }

    public function approvePaymentSlip($id){
        // dd(Order::where('id', $id)->first());

        Order::where('id', $id)->update([
            'status_id' => '3'
        ]);

        Alert::success('Success', 'Payment Slip Approved!');
        return redirect()->route('admin.order.payment-verified');
    }

    public function declinePaymentSlip(Request $request){
        Order::where('id', $request->id)->update([
            'status_id' => '4'
        ]);

        PaymentSlip::where('id', $request->payment_slip_id)->update([
            'reason' => $request->reason
        ]);

        Alert::success('Success', 'Payment Slip Not Approved!');
        return redirect()->route('admin.order.payment-decline');
    }

    public function paymentVerified(){
        if (request()->ajax()) {
            $query = Order::with('payment_slip')->where('status_id', '3');

            return DataTables::of($query)
            ->addIndexColumn()
            ->editColumn('photo', function ($order) {
                return $order->payment_slip->image ? '
                <a href="' . Storage::url($order->payment_slip->image) . '" target="_blank">
                <img src="' . Storage::url($order->payment_slip->image) . '" style="max-height: 200px;"/>
                </a>' : '';
            })
            ->rawColumns(['photo'])
            ->toJson();
        }

        return view('pages.admin.order.payment_verified');
    }

    public function paymentDecline(){
        if (request()->ajax()) {
            $query = Order::with('payment_slip')->where('status_id', '4');

            return DataTables::of($query)
            ->addIndexColumn()
            ->editColumn('photo', function ($order) {
                return $order->payment_slip->image ? '
                <a href="' . Storage::url($order->payment_slip->image) . '" target="_blank">
                <img src="' . Storage::url($order->payment_slip->image) . '" style="max-height: 200px;"/>
                </a>' : '';
            })
            ->addColumn('payment_slip', function ($order){
                return $order->payment_slip->reason;
            })
            ->rawColumns(['photo'])
            ->toJson();
        }

        return view('pages.admin.order.payment_decline');
    }
}
