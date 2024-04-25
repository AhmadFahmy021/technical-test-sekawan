@extends('layout.admindash.main')
@section('main')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0 font-size-18">Edit Data Vehicle Returned</h4>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ url('admin/returned/'.$returned->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group mb-3">
                                <label for="booking" class="form-label">Select Booking</label>
                                <select
                                    class="form-control @error('booking')
                                    is-invalid
                                @enderror"
                                    name="booking" id="booking">
                                    @foreach ($booking as $item)
                                        @if ($item->status == 'approve')
                                            <option value="{{ $item->id }}" @selected($item->id == $returned->booking_id)>{{ $item->vehicle->name }} |
                                                {{ $item->destination }} | {{ $item->tenant_name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                @error('booking')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="dateReturned" class="form-label">Date Returned</label>
                                <input type="date" class="form-control" id="dateReturned" name="dateReturned" value="{{ $returned->return_date }}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="kilometers" class="form-label">Kilometers</label>
                                <input type="number" class="form-control" id="kilometers" name="kilometers" value="{{ $returned->kilometers }}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="fuelOil" class="form-label">Fuel Oil</label>
                                <input type="text" class="form-control" id="fuelOil" name="fuelOil" value="{{ $returned->fuel_oil }}">
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-primary">Submit Edit Data Vehicle Returned</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection