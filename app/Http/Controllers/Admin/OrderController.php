<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Order;
use Illuminate\Http\Request;
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
}
