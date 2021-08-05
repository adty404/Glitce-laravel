<?php

namespace App\Http\Controllers\Admin;

use App\Destination;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Destination\DestinationUpdateRequest;
use App\Http\Requests\Admin\Destination\DestinationRequest;
use App\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;

class DestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            $query = Destination::with('ticket');

            return DataTables::of($query)
            ->addIndexColumn()
            ->addColumn('aksi', 'pages.admin.destination.action')
            ->addColumn('ticket', function ($destination){
                return \App\Utilities\Helpers::formatCurrency($destination->ticket->price, 'Rp.');
            })
            ->editColumn('photo', function ($destination) {
                return $destination->photo ? '
                <a href="' . Storage::url($destination->photo) . '" target="_blank">
                <img src="' . Storage::url($destination->photo) . '" style="max-height: 200px;"/>
                </a>' : '';
            })
            ->rawColumns(['aksi', 'photo'])
            ->toJson();
        }

        return view('pages.admin.destination.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.destination.create', [
            'tickets' => Ticket::orderBy('id', 'ASC')->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DestinationRequest $request)
    {
        $data = $request->all();

        $data['slug'] = Str::slug($request->name);
        $data['photo'] = $request->file('photo')->store('assets/destination', 'public');

        Destination::create($data);

        Alert::success('Success', 'Data Destination Successfully Created');
        return redirect()->route('destination.index');
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
        $destination = Destination::findOrFail($id);

        return view('pages.admin.destination.edit', [
            'destination' => $destination,
            'tickets' => Ticket::orderBy('id', 'ASC')->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.;
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DestinationUpdateRequest $request, Destination $destination)
    {
        $data = $request->all();

        if($request->hasFile('photo') && $request->has('photo')){
            $photo = $request->file('photo')->store('assets/destination', 'public');
        }else{
            $photo = $destination->photo;
        }

        $data['slug'] = Str::slug($request->name);
        $data['photo'] = $photo;
        // $data['photo'] = $request->file('photo')->store('assets/destination', 'public');

        $destination->update($data);

        Alert::success('Success', 'Data Destination Successfully Updated');
        return redirect()->route('destination.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Destination $destination)
    {
        $destination->delete();

        return redirect()->route('destination.index');
    }
}
