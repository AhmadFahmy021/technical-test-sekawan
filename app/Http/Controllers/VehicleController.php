<?php

namespace App\Http\Controllers;

use App\Models\Approval;
use App\Models\Booking;
use App\Models\Returned;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Vehicle::all();
        return view('admin.vihecle.index', compact(['data']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.vihecle.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "nameVehicle" => "required",
            "merkVehicle" => "required",
            "typeVehicle" => "required",
            "kilometersVehicle" => "required",
            "fuelOilVehicle" => "required",
            "seatVehicle" => "required",
        ]);

        Vehicle::create([
            "name" => $request->nameVehicle,
            "merk" => $request->merkVehicle,
            "type" => $request->typeVehicle,
            "kilometers" => $request->kilometersVehicle,
            "fuel_oil" => $request->fuelOilVehicle,
            "seat" => $request->seatVehicle,
            "repair_date" => $request->repairDateVehicle,
        ]);
        return redirect('/admin/vehicle');
    }

    /**
     * Display the specified resource.
     */
    public function show(Vehicle $vehicle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vehicle $vehicle)
    {
        $data = $vehicle;
        return view('admin.vihecle.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vehicle $vehicle)
    {
        $request->validate([
            "nameVehicle" => "required",
            "merkVehicle" => "required",
            "typeVehicle" => "required",
            "kilometersVehicle" => "required",
            "fuelOilVehicle" => "required",
            "seatVehicle" => "required",
        ]);

        $vehicle->update([
            'name' => $request->nameVehicle,
            'merk' => $request->merkVehicle,
            'type' => $request->typeVehicle,
            'kilometers' => $request->kilometersVehicle,
            'fuel_oil' => $request->fuelOilVehicle,
            'seat' => $request->seatVehicle,
            'repair_date' => $request->repairDateVehicle,
        ]);
        return redirect('admin/vehicle');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vehicle $vehicle)
    {
        $booking = Booking::where("vehicle_id", $vehicle->id)->get();
        $approval = Approval::where('booking_id', $booking->id)->get();
        $returned = Returned::where('booking_id', $booking->id)->get();
        Approval::deleted($approval);
        Returned::deleted($returned);
        Booking::deleted($booking);
        $vehicle->delete();
        return redirect('admin/vehicle');
    }
}
