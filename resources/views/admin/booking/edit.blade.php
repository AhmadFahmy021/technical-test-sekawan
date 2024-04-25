@extends('layout.admindash.main');
@section('main')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0 font-size-18">Edit Data Booking</h4>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ url('admin/booking/'.$booking->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="form-group mb-3">
                                <label for="exampleFormControlSelect1">Select Vehicle</label>
                                <select class="form-control @error('vehicle')
                                    is-invalid
                                @enderror" name="vehicle" id="exampleFormControlSelect1">
                                    @foreach ($vehicle as $item)
                                        @if ($item->status == 'finished_using' ||  $item->id == $booking->vehicle_id)
                                            <option value="{{ $item->id }}" @selected($item->id == $booking->vehicle)>{{ $item->name }}</option>
                                        @endif
                                    @endforeach
                                    @error('vehicle')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label for="driverName" class="form-label">Driver Name</label>
                                <input type="text"
                                    class="form-control @error('driverName')
                                    is-invalid
                                @enderror"
                                    id="driverName" name="driverName" placeholder="Input Driver Name" value="{{ $booking->driver }}">
                                @error('driverName')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="dateStart" class="form-label">Date Start</label>
                                <input type="date"
                                    class="form-control @error('dateStart')
                                    is-invalid
                                @enderror"
                                    id="dateStart" name="dateStart" placeholder="Input Date Start" value="{{ $booking->date_start }}">
                                @error('dateStart')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="dateEnd" class="form-label">Date End</label>
                                <input type="date"
                                    class="form-control @error('dateEnd')
                                    is-invalid
                                @enderror"
                                    id="dateEnd" name="dateEnd" placeholder="Input Date End" value="{{ $booking->date_end }}">
                                @error('dateEnd')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="destination" class="form-label">Destination</label>
                                <input type="text"
                                    class="form-control @error('destination')
                                    is-invalid
                                @enderror"
                                    id="destination" name="destination" placeholder="Input Destination" value="{{ $booking->destination }}">
                                @error('destination')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="tenant" class="form-label">Tenant Name / Borrower Name</label>
                                <input type="text"
                                    class="form-control @error('tenant')
                                    is-invalid
                                @enderror"
                                    id="tenant" name="tenant" placeholder="Input Tenant Name / Borrower Name" value="{{ $booking->tenant_name }}">
                                @error('tenant')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="exampleFormControlSelect2">Select First Approver</label>
                                <select class="form-control @error('fisrtApprover')
                                    is-invalid
                                @enderror" name="firstApprover" id="exampleFormControlSelect2">
                                    @foreach ($user as $item)
                                        @if ($item->role != 'admin')
                                            <option value="{{ $item->id }}" @selected($item->id == $booking->first_approver)>{{ $item->name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                @error('firstApprover')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="exampleFormControlSelect3">Select Second Approver</label>
                                <select class="form-control @error('secondApprover')
                                    is-invalid
                                @enderror" name="secondApprover" id="exampleFormControlSelect3">
                                    @foreach ($user as $item)
                                        @if ($item->role != 'admin')
                                            <option value="{{ $item->id }}" @selected($item->id == $booking->second_approver)>{{ $item->name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                @error('secondApprover')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-primary">Submit Edit Data Booking</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection