<?php

namespace App\Http\Controllers;

use App\Models\Approval;
use App\Models\Booking;
use App\Models\Returned;
use App\Models\User;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Booking::all();
        return view('admin.booking.index', compact(['data']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $vehicle = Vehicle::all();
        $user = User::all();
        return view('admin.booking.create', compact(['vehicle', 'user']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'vehicle' => 'required',
            'driverName' => 'required',
            'dateStart' => 'required',
            'dateEnd' => 'required',
            'destination' => 'required',
            'tenant' => 'required',
            'firstApprover' => 'required',
            'secondApprover' => 'required',
        ]);
        if ($request->firstApprover == $request->secondApprover) {
            return redirect()->back()->withInput();
        }
        $vehicle = Vehicle::find( $request->vehicle);
        Booking::create([
            'vehicle_id' => $request->vehicle,
            'driver' => $request->driverName,
            'date_start' => $request->dateStart,
            'date_end' => $request->dateEnd,
            'kilometers' => $vehicle->kilometers,
            'fuel_oil' => $vehicle->fuel_oil,
            'destination' => $request->destination,
            'tenant_name' => $request->tenant,
            'first_approver' => $request->firstApprover,
            'second_approver' => $request->secondApprover,
            'user_id' => Auth::user()->id,
        ]);
        $vehicle->update(['status' => 'submission']);
        return redirect('admin/booking');
    }

    /**
     * Display the specified resource.
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Booking $booking)
    {
        $vehicle = Vehicle::all();
        $user = User::all();
        return view('admin.booking.edit', compact(['booking', 'vehicle', 'user']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Booking $booking)
    {
        $request->validate([
            'vehicle' => 'required',
            'driverName' => 'required',
            'dateStart' => 'required',
            'dateEnd' => 'required',
            'destination' => 'required',
            'tenant' => 'required',
            'firstApprover' => 'required',
            'secondApprover' => 'required',
        ]);
        if ($request->firstApprover == $request->secondApprover) {
            return redirect()->back()->withInput();
        }
        if ($request->vehicle != $booking->vehicle_id) {
            $vehiclefind = Vehicle::find($booking->vehicle_id);
            $vehiclefind->update(['status' => 'finished_using']);
            $vehicle = Vehicle::find($request->vehicle);
            $vehicle->update(['status' => 'submission']);
            $booking->update([
                'vehicle_id' => $request->vehicle,
                'driver' => $request->driverName,
                'date_start' => $request->dateStart,
                'date_end' => $request->dateEnd,
                'kilometers' => $vehicle->kilometers,
                'fuel_oil' => $vehicle->fuel_oil,
                'destination' => $request->destination,
                'tenant_name' => $request->tenant,
                'first_approver' => $request->firstApprover,
                'second_approver' => $request->secondApprover,
            ]);
            return redirect('admin/booking');
        } else {
            $booking->update([
                'vehicle_id' => $request->vehicle,
                'driver' => $request->driverName,
                'date_start' => $request->dateStart,
                'date_end' => $request->dateEnd,
                'destination' => $request->destination,
                'tenant_name' => $request->tenant,
                'first_approver' => $request->firstApprover,
                'second_approver' => $request->secondApprover,
            ]);
            return redirect('admin/booking');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Booking $booking)
    {
      $approval = Approval::where('booking_id', $booking->id)->get();
      $returned = Returned::where('booking_id', $booking->id)->get();
      Approval::deleted($approval);
      Returned::deleted($returned);
      $booking->delete();
      return redirect('admin/booking');
    }
}
