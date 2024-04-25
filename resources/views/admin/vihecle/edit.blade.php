@extends('layout.admindash.main');
@section('main')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0 font-size-18">Edit Data Vehicle</h4>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ url('admin/vehicle/'.$data->id) }}">
                            @csrf
                            @method("PUT")
                            <div class="form-group mb-3">
                                <label for="nameVehicle" class="form-label">Name Vehicle</label>
                                <input type="text" class="form-control @error('nameVehicle')
                                    is-invalid
                                @enderror" id="nameVehicle" name="nameVehicle" placeholder="Input Name Vehicle" value="{{ $data->name }}">
                                @error('nameVehicle')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                  </div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="merkVehicle" class="form-label">Merk Vehicle</label>
                                <input type="text" class="form-control @error('merkVehicle')
                                    is-invalid
                                @enderror" id="merkVehicle" name="merkVehicle" placeholder="Input Merk Vehicle" value="{{ $data->merk }}">
                                @error('merkVehicle')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="typeVehicle" class="form-label">Type Vehicle</label>
                                <input type="text" class="form-control @error('typeVehicle')
                                    is-invalid
                                @enderror" id="typeVehicle" name="typeVehicle" placeholder="Input Vehicle Type" value="{{ $data->type }}">
                                @error('typeVehicle')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                  </div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="kilometersVehicle" class="form-label">Kilometers Vehicle</label>
                                <input type="number" class="form-control @error('kilometersVehicle')
                                    is-invalid
                                @enderror" id="kilometersVehicle" name="kilometersVehicle" placeholder="Input Kilometers Vehicle" value="{{ $data->kilometers }}">
                                @error('kilometersVehicle')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                  </div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="fuelOilVehicle" class="form-label">Fuel Oil Vehicle</label>
                                <input type="text" class="form-control @error('fuelOilVehicle')
                                    is-invalid
                                @enderror" id="fuelOilVehicle" name="fuelOilVehicle" placeholder="Input Type Of Fuel Oil" value="{{ $data->fuel_oil }}">
                                @error('fuelOilVehicle')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                  </div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="seatVehicle" class="form-label">Seat Vehicle</label>
                                <input type="number" class="form-control @error('seatVehicle')
                                    is-invalid
                                @enderror" id="seatVehicle" name="seatVehicle" placeholder="Input Seat Vehicle" value="{{ $data->seat }}">
                                @error('seatVehicle')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                  </div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="repairDateVehicle" class="form-label">Repair Date Vehicle</label>
                                <input type="date" class="form-control @error('rapairDateVehicle')
                                    is-invalid
                                @enderror" id="repairDateVehicle" name="repairDateVehicle" placeholder="Input Repair Date Vehicle" value="{{ $data->repair_date }}">
                                @error('repairDateVehicle')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                  </div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-primary">Submit Edit Vehicle</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection