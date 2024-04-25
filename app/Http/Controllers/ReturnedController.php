<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Returned;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class ReturnedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $returned = Returned::with('booking')->get();
        return view('admin.returned.index', compact(['returned']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $booking = Booking::all();
        return view('admin.returned.create', compact(['booking']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'booking' => 'required',
            'dateReturned' => 'required',
            'kilometers' => 'required',
            'fuelOil' => 'required',
        ]);

        $booking = Booking::where('id', $request->booking)->first();
        $vehicle = Vehicle::where('id', $booking->vehicle_id)->first();
        $vehicle->update(['status' => 'finished_using']);
        Returned::create([
            'booking_id' => $request->booking,
            'return_date' => $request->dateReturned,
            'kilometers' => $request->kilometers,
            'fuel_oil' => $request->fuelOil,
        ]);
        return redirect('admin/returned');
    }

    /**
     * Display the specified resource.
     */
    public function show(Returned $returned)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Returned $returned)
    {
        $booking = Booking::all();
        return view('admin.returned.edit', compact('booking', 'returned'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Returned $returned)
    {
        $request->validate([
            'booking' => 'required',
            'dateReturned' => 'required',
            'kilometers' => 'required',
            'fuelOil' => 'required',
        ]);
        if ($request->booking !=  $returned->booking_id) {
            $booking = Booking::find($returned->booking_id);
            $vehicle = Vehicle::find($booking->vehicle_id);
            $vehicle->update(['status' => 'in_using']);

            $bookingRt = Booking::find($request->booking);
            $vehicleRt = Vehicle::find($bookingRt->vehicle_id);
            $vehicleRt->update(['status' => 'finished_using']);
            $returned->update([
                'booking_id' => $request->booking,
                'return_date' => $request->dateReturned,
                'kilometers' => $request->kilometers,
                'fuel_oil' => $request->fuelOil,
            ]);
            return redirect('admin/returned');
        } else {
            $returned->update([
                'booking_id' => $request->booking,
                'return_date' => $request->dateReturned,
                'kilometers' => $request->kilometers,
                'fuel_oil' => $request->fuelOil,
            ]);
            return redirect('admin/returned');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Returned $returned)
    {
        $booking = Booking::find($returned->booking_id);
        $vehicle = Vehicle::find($booking->vehicle_id);
        $vehicle->update(['status' => 'In Using']);
        $returned->delete();

        return redirect('admin/returned');
    }
}
