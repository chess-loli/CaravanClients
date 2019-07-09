<?php

namespace App\Http\Controllers;

use App\Reservation;
use App\Client;
use App\StorageSpot;
use Illuminate\Http\Request;

class ReservationsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservations = Reservation::all();
        $clients = Client::all();

        return view('reservations.home', compact('reservations', 'clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $clients = Client::all();
        $storageSpots = StorageSpot::all();

        return view('reservations.create', compact('clients', 'storageSpots'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reservation = new Reservation();
        $reservation->type_vehicle = request('type_vehicle');
        $reservation->agenda_from = request('agenda_from');
        $reservation->agenda_until = request('agenda_until');
        $reservation->costs_spot = request('costs_spot');
        $reservation->length_vehicle = request('length_vehicle');
        $reservation->client_id = request('client_id');
        $reservation->storage_spot_id = request('storage_spot_id');
        $reservation->plan_add = request('plan_add');
        
        // $reservation->storage_spot_id = 1;

        $reservation->save();

        return redirect('/reservations');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(reservation $reservation)
    {
    

        return view('reservations.show', compact('reservation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(reservation $reservation)
    {
        
        $clients = Client::all();
        $storageSpots = StorageSpot::all();

        return view('reservations.edit', compact('reservation', 'clients', 'storageSpots'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, reservation $reservation)
    {
        $reservation->type_vehicle = request('type_vehicle');
        $reservation->agenda_from = request('agenda_from');
        $reservation->agenda_until = request('agenda_until');
        $reservation->costs_spot = request('costs_spot');
        $reservation->length_vehicle = request('length_vehicle');
        $reservation->client_id = request('client_id');
        $reservation->storage_spot_id = request('storage_spot_id');
        $reservation->plan_add = request('plan_add');

        $reservation->save();

        return redirect('/reservations');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation)
    {
        $reservation->delete();
        
        return redirect('/reservations');
    }
}
