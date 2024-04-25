<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class APIController extends Controller
{
    public function find(Request $request){
        $dateyear = date('Y');
        $datemonth = date('m');
        for ($i=0; $i <= $datemonth ; $i++) {
            $booking = Booking::where('vehicle_id', $request->value)->where('status', 'approve')->whereMonth('date_start', $i)->whereYear('date_start', $dateyear)->get();
            $dataBook[] = $booking->count();
        }
        return response()->json($dataBook);
    }
}
