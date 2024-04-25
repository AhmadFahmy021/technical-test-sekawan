@extends('layout.admindash.main')
@section('main')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0 font-size-18">Vehicle</h4>
                    <div class="page-title-right">
                        <a href="{{ url('admin/vehicle/create', []) }}" class="btn btn-primary"><i class="fas fa-plus"></i> Add
                            Vehicle</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="state-saving-datatable" class="table">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Name </th>
                                        <th>Merk </th>
                                        <th>Type </th>
                                        <th>Kilometers </th>
                                        <th>Fuel Oil </th>
                                        <th>Seat </th>
                                        <th>Repair Date </th>
                                        <th>Status </th>
                                        <th>Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $dataItem)
                                        <tr>
                                            <td>{{ $loop->iteration }}.</td>
                                            <td>{{ $dataItem->name }}</td>
                                            <td>{{ $dataItem->merk }}</td>
                                            <td>{{ $dataItem->type }}</td>
                                            <td>{{ $dataItem->kilometers }}</td>
                                            <td>{{ $dataItem->fuel_oil }}</td>
                                            <td>{{ $dataItem->seat }}</td>
                                            @if ($dataItem->repair_date !== null)
                                            <td>{{ date("d/m/Y", strtotime($dataItem->repair_date)) }}</td>
                                            @else
                                            <td>Never Been Repaired</td>
                                            @endif
                                            <td>{{ $dataItem->status }}</td>
                                            <td>
                                                <form action="{{ url('admin/vehicle/'.$dataItem->id) }}" method="POST">
                                                    @csrf
                                                    @method("DELETE")
                                                    <a href="{{ url('admin/vehicle/'.$dataItem->id.'/edit', []) }}" class="btn btn-primary"><i
                                                            class="mdi mdi-lead-pencil"></i></a>
                                                    <button type="submit" class="btn btn-danger"><i
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
