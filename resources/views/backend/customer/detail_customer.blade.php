@extends('admin_dashboard')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Manajemen Customer</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title -->

                        <div class="row">
                            <!-- personal info -->
                            <div class="col-lg-8 col-xl-12">
                                <div class="card">
                                    <div class="card-body">
                                            <div class="tab-pane" id="settings">
                                                <form method="post" action="{{ route('customer.update') }}" enctype="multipart/form-data">
                                                    @csrf

                                                    <input type="hidden" name="id" value="{{ $customer->id }}">

                                                    <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle me-1"></i>Detail Customer</h5>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="name" class="form-label">Nama Customer</label>
                                                                <p class="text-danger">{{ $customer->nama }}</p>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="name" class="form-label">Nama Toko Customer</label>
                                                                <p class="text-danger">{{ $customer->nama_toko }}</p>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="email" class="form-label">Email Customer</label>
                                                                <p class="text-danger">{{ $customer->email }}</p>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="phone" class="form-label">Nomor Telepon Customer</label>
                                                                <p class="text-danger">{{ $customer->phone }}</p>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="address" class="form-label">Alamat Customer</label>
                                                                <p class="text-danger">{{ $customer->alamat }}</p>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="salary" class="form-label">Kota Customer</label>
                                                                <p class="text-danger">{{ $customer->kota }}</p>
                                                            </div>
                                                        </div>      

                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="salary" class="form-label">Nama Bank Customer</label>
                                                                <p class="text-danger">{{ $customer->bank }}</p>
                                                            </div>
                                                        </div>         

                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="salary" class="form-label">Nama Rekening Customer</label>
                                                                <p class="text-danger">{{ $customer->nama_rekening }}</p>
                                                            </div>
                                                        </div>   

                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="salary" class="form-label">Nomor Rekening Customer</label>
                                                                <p class="text-danger">{{ $customer->nomor_rekening }}</p>
                                                            </div>
                                                        </div>   



                                                        <!-- <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="example-fileinput" class="form-label">Foto Customer</label>
                                                                <input type="file" name="image" id="image" class="form-control" class="form-control @error('image') is-invalid @enderror">
                                                                @error('image')
                                                                <span class="text-danger"> {{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>  -->
                                                        <!-- end col -->

                                                    </div> <!-- end row -->
                                                </form>
                                            </div>
                                            <!-- end settings content-->
    
                                    </div>
                                </div> <!-- end card-->

                            </div> <!-- end col -->
                        </div>
                        <!-- end row-->

                    </div> <!-- container -->

                </div> <!-- content -->

@endsection