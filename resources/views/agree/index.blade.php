@extends('layout.dashagreement.main')
@section('main')
     <!-- start page title -->
     <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">Dashboard</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Xacton</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
                
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">

        <div class="col-md-6 col-xl-4">
            <div class="card bg-success border-success">
                <div class="card-body">
                    <div class="mb-4">
                        <h5 class="card-title mb-0 text-white">Order Submission</h5>
                    </div>
                    <div class="row d-flex align-items-center mb-4">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center text-white mb-0">
                                {{$order}}
                            </h2>
                        </div>
                    </div>

                </div>
            </div>
        </div> <!-- end col-->

        <div class="col-md-6 col-xl-4">
            <div class="card bg-warning border-warning">
                <div class="card-body">
                    <div class="mb-4">
                        <h5 class="card-title mb-0 text-white">Waiting For Order Approval</h5>
                    </div>
                    <div class="row d-flex align-items-center mb-4">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center text-white mb-0">
                                {{ $approval }}
                            </h2>
                        </div>
                    </div>

                </div>
            </div>
        </div> <!-- end col-->

        <div class="col-md-6 col-xl-4">
            <div class="card bg-info border-info">
                <div class="card-body">
                    <div class="mb-4">
                        <h5 class="card-title mb-0 text-white">Vehicle In Application</h5>
                    </div>
                    <div class="row d-flex align-items-center mb-4">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center text-white mb-0">
                                {{ $vehicle }}
                            </h2>
                        </div>
                    </div>

                </div>
            </div>
        </div> <!-- end col-->
    </div>
    <!-- end row -->
  
    


@endsection