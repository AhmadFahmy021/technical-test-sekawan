<?php

namespace App\Http\Controllers;

use App\Models\Approval;
use App\Models\Booking;
use Illuminate\Http\Request;

class ApprovalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $booking = Booking::all();
        $booking = Booking::where('status', 'review')->get();
        $approval = Approval::all();
        return view('agree.approval.index', compact(['booking', 'approval']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Approval $approval)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Approval $approval)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Approval $approval)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Approval $approval)
    {
        //
    }

    public function approve($approval)  {
        $booking = Booking::find($approval);
        if ($booking->first_approver == "9be1c510-27a8-4c01-80a1-ab49e181e179") {
            Approval::create([
                'booking_id' => $booking->id,
                'first_approver' => 'approve',
            ]);
            return redirect('agree/approval');
        }  elseif ($booking->second_approver == "9be1c510-27a8-4c01-80a1-ab49e181e179") {
            $approval = Approval::where('booking_id',$booking->id)->first();
            if ($approval != null) {
                $approval->update(['second_approver' => "approve"]);
                $booking->update(['status' => 'approve']);
            } else {
                return redirect()->back();
            }
        }
    }
    public function rejected($approval)  {
        $booking = Booking::find($approval);
        if ($booking->first_approver == "9be1c510-27a8-4c01-80a1-ab49e181e179") {
            Approval::create([
                'booking_id' => $booking->id,
                'first_approver' => 'rejected',
            ]);
            return redirect('agree/approval');
        }  elseif ($booking->second_approver == "9be1c510-27a8-4c01-80a1-ab49e181e179") {
            $approval = Approval::where('booking_id',$booking->id)->first();
            if ($approval != null) {
                $approval->update(['second_approver' => "rejected"]);
                $booking->update(['status' => 'rejected']);
            } else {
                return redirect()->back();
            }
        }
    }
}
