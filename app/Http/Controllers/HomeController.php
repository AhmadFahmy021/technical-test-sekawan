<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return redirect('/admin/dashboard');
    }

    /**
     * undocumented function summary
     *
     * Undocumented function long description
     *
     * @param Type $var Description
     * @return type
     * @throws conditon
     **/
    public function show()
    {
        $vehicle = Vehicle::all()->count();
        $vehicleApprov = Booking::where('status', 'approve')->get()->count();
        $vehicleRejected = Booking::where('status', 'rejected')->get()->count();
        $vehicleBooking = Booking::all()->count();
        $vehicleData = Vehicle::all();

       
        return view('admin.index', compact(['vehicle', 'vehicleApprov', 'vehicleBooking', 'vehicleRejected', 'vehicleData']));
    }
}
