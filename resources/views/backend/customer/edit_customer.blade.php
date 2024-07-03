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

                                                    <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle me-1"></i>Edit Customer</h5>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="name" class="form-label">Edit Nama Customer</label>
                                                                <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ $customer->nama }}">
                                                                @error('nama')
                                                                <span class="text-danger"> {{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="name" class="form-label">Nama Toko Customer</label>
                                                                <input type="text" name="nama_toko" class="form-control @error('nama_toko') is-invalid @enderror" value="{{ $customer->nama_toko }}">
                                                                @error('nama_toko')
                                                                <span class="text-danger"> {{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="email" class="form-label">Email Customer</label>
                                                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ $customer->email }}">
                                                                @error('email')
                                                                <span class="text-danger"> {{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="phone" class="form-label">Nomor Telepon Customer</label>
                                                                <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" value="{{ $customer->phone }}">
                                                                @error('phone')
                                                                <span class="text-danger"> {{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="address" class="form-label">Alamat Customer</label>
                                                                <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" value="{{ $customer->alamat }}">
                                                                @error('alamat')
                                                                <span class="text-danger"> {{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="salary" class="form-label">Kota Customer</label>
                                                                <input type="text" name="kota" class="form-control @error('kota') is-invalid @enderror" value="{{ $customer->kota }}">
                                                                @error('kota')
                                                                <span class="text-danger"> {{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>      

                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="salary" class="form-label">Nama Bank Customer</label>
                                                                <input type="text" name="bank" class="form-control @error('bank') is-invalid @enderror" value="{{ $customer->bank }}">
                                                                @error('bank')
                                                                <span class="text-danger"> {{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>         

                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="salary" class="form-label">Nama Rekening Customer</label>
                                                                <input type="text" name="nama_rekening" class="form-control @error('nama_rekening') is-invalid @enderror" value="{{ $customer->nama_rekening }}">
                                                                @error('nama_rekening')
                                                                <span class="text-danger"> {{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>   

                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="salary" class="form-label">Nomor Rekening Customer</label>
                                                                <input type="text" name="nomor_rekening" class="form-control @error('nomor_rekening') is-invalid @enderror" value="{{ $customer->nomor_rekening }}">
                                                                @error('nomor_rekening')
                                                                <span class="text-danger"> {{ $message }}</span>
                                                                @enderror
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
                                               
                                                    <div class="text-end">
                                                        <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i class="mdi mdi-content-save"></i>Simpan</button>
                                                    </div>
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