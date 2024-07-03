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
                                    <h4 class="page-title">Manajemen Supplier</h4>
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
                                                <form method="post" action="{{ route('supplier.update') }}" enctype="multipart/form-data">
                                                    @csrf

                                                    <input type="hidden" name="id" value="{{ $supplier->id }}">

                                                    <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle me-1"></i>Detail Supplier</h5>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="nama_toko" class="form-label">Nama Toko Supplier</label>
                                                                <p class="text-danger">{{ $supplier->nama_toko }}</p>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="jenis_supplier" class="form-label">Jenis Supplier</label>
                                                                <p class="text-danger">{{ $supplier->jenis_supplier }}</p>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="nama" class="form-label">Nama Customer</label>
                                                                <p class="text-danger">{{ $supplier->nama }}</p>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="email" class="form-label">Email Customer</label>
                                                                <p class="text-danger">{{ $supplier->email }}</p>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="phone" class="form-label">Nomor Telepon Customer</label>
                                                                <p class="text-danger">{{ $supplier->phone }}</p>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="alamat" class="form-label">Alamat Customer</label>
                                                                <p class="text-danger">{{ $supplier->alamat }}</p>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="kota" class="form-label">Kota Customer</label>
                                                                <p class="text-danger">{{ $supplier->kota }}</p>
                                                            </div>
                                                        </div>      

                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="bank" class="form-label">Nama Bank Customer</label>
                                                                <p class="text-danger">{{ $supplier->bank }}</p>
                                                            </div>
                                                        </div>         

                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="nama_rekening" class="form-label">Nama Rekening Customer</label>
                                                                <p class="text-danger">{{ $supplier->nama_rekening }}</p>
                                                            </div>
                                                        </div>   

                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="nomor_rekening" class="form-label">Nomor Rekening Customer</label>
                                                                <p class="text-danger">{{ $supplier->nomor_rekening }}</p>
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