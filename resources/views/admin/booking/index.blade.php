@extends('layout.admindash.main')\
@section('main')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0 font-size-18">Booking</h4>
                    <div class="page-title-right">
                        <a href="{{ url('admin/booking/create', []) }}" class="btn btn-primary"><i class="fas fa-plus"></i> Add
                            Booking</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <table id="state-saving-datatable" class="table table-responsive">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Vihecle Name</th>
                                    <th>Driver Name</th>
                                    <th>Date Start</th>
                                    <th>Date End</th>
                                    <th>Kilometers</th>
                                    <th>Fuel Oil</th>
                                    <th>Destination</th>
                                    <th>Tenant Name</th>
                                    <th>First Approver</th>
                                    <th>Second Approver</th>
                                    <th>Status Approval</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->vehicle->name }}</td>
                                        <td>{{ $item->driver }}</td>
                                        <td>{{date('d/m/Y', strtotime($item->date_start))}}</td>
                                        <td>{{date('d/m/Y', strtotime($item->date_end))}}</td>
                                        <td>{{ $item->kilometers }}</td>
                                        <td>{{ $item->fuel_oil }}</td>
                                        <td>{{ $item->destination }}</td>
                                        <td>{{ $item->tenant_name }}</td>
                                        <td>{{ $item->firstApprover->name }}</td>
                                        <td>{{ $item->secondApprover->name }}</td>
                                        <td>{{ $item->status }}</td>
                                        <td>
                                            <form action="{{ url('admin/booking/'.$item->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <a href="{{ url('admin/booking/'.$item->id.'/edit', []) }}" class="btn btn-primary mb-2"><i
                                                        class="mdi mdi-lead-pencil"></i></a>
                                                <button type="submit" class="btn btn-danger mb-2"><i
                                                        class="mdi mdi-trash-can"></i></button>
                                            </form>
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
