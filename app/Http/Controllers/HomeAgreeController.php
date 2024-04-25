<?php

namespace App\Http\Controllers;

use App\Models\Approval;
use App\Models\Booking;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class HomeAgreeController extends Controller
{
    public function index() {
        $vehicle = Vehicle::where('status', 'submission')->get()->count();
        $approval = Approval::where('second_approver', null)->get()->count();
        $order = Booking::where('status', 'review')->count();
        return view('agree.index', compact(['vehicle', 'approval', 'order']));
    }
}
