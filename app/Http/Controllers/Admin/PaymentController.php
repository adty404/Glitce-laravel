<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PaymentRequest;
use App\Http\Requests\Admin\PaymentUpdateRequest;
use App\Payment;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\DataTables\Facades\DataTables;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            $query = Payment::query();

            return DataTables::of($query)
            ->addColumn('aksi', 'pages.admin.payment.action')
            ->addIndexColumn()
            ->rawColumns(['aksi'])
            ->toJson();
        }

        return view('pages.admin.payment.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.payment.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PaymentRequest $request)
    {
        Payment::create([
            'payment' => $request->payment,
            'number' => $request->number
        ]);

        Alert::success('Success', 'Data Payment Successfully Created');
        return redirect()->route('payment.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $payment = Payment::findOrFail($id);

        return view('pages.admin.payment.edit', [
            'payment' => $payment
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PaymentUpdateRequest $request, Payment $payment)
    {
        $data = $request->all();

        $payment->update($data);

        Alert::success('Success', 'Data Payment Successfully Updated');
        return redirect()->route('payment.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {
        $payment->delete();

        return redirect()->route('payment.index');
    }
}
