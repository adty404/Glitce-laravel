<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Order;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class DashboardController extends Controller
{
    public function index(){

        $order_placed = Order::where('status_id', '1')->count();
        $payment_slip_request = Order::where('status_id', '2')->count();
        $payment_verified = Order::where('status_id', '3')->count();
        $total_order = Order::all()->count();

        if (request()->ajax()) {
            $query = Order::where('status_id', '1');

            return DataTables::of($query)
            ->addIndexColumn()
            ->toJson();
        }

        return view('pages.admin.dashboard', [
            'order_placed' => $order_placed,
            'payment_slip_request' => $payment_slip_request,
            'payment_verified' => $payment_verified,
            'total_order' => $total_order
        ]);
    }
}
