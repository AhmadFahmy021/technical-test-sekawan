@extends('layout.dashagreement.main')
@section('main')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">Booking Approval</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table" id="state-saving-datatable">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Vehicle Name</th>
                                    <th>Tenant Name / Borrower Name</th>
                                    <th>Destination</th>
                                    <th>Kilometers</th>
                                    <th>Fuel Oil</th>
                                    <th>Date Start</th>
                                    <th>Date End</th>
                                    <th>Driver Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($booking as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}.</td>
                                        <td>{{ $item->vehicle->name }}</td>
                                        <td>{{ $item->tenant_name }}</td>
                                        <td>{{ $item->destination }}</td>
                                        <td>{{ $item->kilometers }}</td>
                                        <td>{{ $item->fuel_oil }}</td>
                                        <td>{{ date('d/m/Y', strtotime($item->date_start)) }}</td>
                                        <td>{{ date('d/m/Y', strtotime($item->date_end)) }}</td>
                                        <td>{{ $item->driver }}</td>
                                        <td>
                                            @if ($item->first_approver == Auth::user()->id)
                                                First Approver
                                                <a href="{{ url('agree/approval/'.$item->id) }}" class="btn btn-primary mb-2">Approve</a>
                                                <a href="{{ url('agree/approval/rejected/'.$item->id) }}" class="btn btn-danger mb-2">Rejected</a>
                                            @elseif($item->second_approver == Auth::user()->id)
                                                Second Approver
                                                <a href="{{ url('agree/approval/'.$item->id, []) }}" class="btn btn-primary mb-2">Approve</a>
                                                <a href="{{ url('agree/approval/rejected/'.$item->id, []) }}" class="btn btn-danger mb-2">Rejected</a>
                                            @else
                                            Your account does not have access here
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
