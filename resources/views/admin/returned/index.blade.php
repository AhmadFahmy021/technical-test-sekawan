@extends('layout.admindash.main')
@section('main')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0 font-size-18">Vehicle Returned</h4>
                    <div class="page-title-right">
                        <a href="{{ url('admin/returned/create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Add
                            Vehicle Returned</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="state-saving-datatable" class="table">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Vehicle</th>
                                        <th>Destination</th>
                                        <th>Borrower Name / Tenant Name</th>
                                        <th>Date Returned</th>
                                        <th>Kilometers</th>
                                        <th>Fuel Oil</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($returned as $item)
                                    
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->booking->vehicle->name }}</td>
                                    <td>{{ $item->booking->destination }}</td>
                                    <td>{{ $item->booking->tenant_name }}</td>
                                    <td>{{ date('d/m/Y', strtotime($item->return_date)) }}</td>
                                    <td>{{ $item->kilometers }}</td>
                                    <td>{{ $item->fuel_oil }}</td>
                                    <td>
                                        <form action="{{ url('admin/returned/'.$item->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{ url('admin/returned/'.$item->id.'/edit') }}" class="btn btn-primary mb-2"><i
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
    </div>
@endsection