@extends('layout.admindash.main');
@section('main')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0 font-size-18">Create Data Booking</h4>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ url('admin/booking') }}">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="exampleFormControlSelect1">Select Vehicle</label>
                                <select class="form-control @error('vehicle')
                                    is-invalid
                                @enderror" name="vehicle" id="exampleFormControlSelect1">
                                    @foreach ($vehicle as $item)
                                        @if ($item->status == 'finished_using')
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                @error('vehicle')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="driverName" class="form-label">Driver Name</label>
                                <input type="text"
                                    class="form-control @error('driverName')
                                    is-invalid
                                @enderror"
                                    id="driverName" name="driverName" placeholder="Input Driver Name" value="{{ old('driverName') }}">
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
                                    id="dateStart" name="dateStart" placeholder="Input Date Start" value="{{ old('dateStart') }}">
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
                                    id="dateEnd" name="dateEnd" placeholder="Input Date End" value="{{ old('dateEnd') }}">
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
                                    id="destination" name="destination" placeholder="Input Destination" value="{{ old('destination') }}">
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
                                    id="tenant" name="tenant" placeholder="Input Tenant Name / Borrower Name" value="{{ old('tenant') }}">
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
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
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
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
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
                                <button type="submit" class="btn btn-primary">Submit Create Booking</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
