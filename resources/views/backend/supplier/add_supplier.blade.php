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
                                                <form method="post" action="{{ route('supplier.store') }}" enctype="multipart/form-data">
                                                    @csrf

                                                    <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle me-1"></i>Tambah Supplier</h5>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="nama_toko" class="form-label">Nama Toko Supplier</label>
                                                                <input type="text" name="nama_toko" class="form-control @error('nama_toko') is-invalid @enderror" value="{{ old('nama_toko') }}">
                                                                @error('nama_toko')
                                                                <span class="text-danger"> {{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="jenis_supplier" class="form-label">Jenis Supplier</label>
                                                                <select name="jenis_supplier" class="form-select @error('jenis_supplier') is-invalid @enderror" id="example-select">
                                                                        <option selected disabled>Pilih Jenis Supplier</option>
                                                                        <option value="Distributor">Distributor</option>
                                                                        <option value="Grosir">Grosir</option>                                              
                                                                    </select>
                                                                @error('jenis_toko')
                                                                <span class="text-danger"> {{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="name" class="form-label">Nama Supplier</label>
                                                                <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}">
                                                                @error('nama')
                                                                <span class="text-danger"> {{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="email" class="form-label">Email Supplier</label>
                                                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
                                                                @error('email')
                                                                <span class="text-danger"> {{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="phone" class="form-label">Nomor Telepon Supplier</label>
                                                                <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}">
                                                                @error('phone')
                                                                <span class="text-danger"> {{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="alamat" class="form-label">Alamat Supplier</label>
                                                                <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" value="{{ old('alamat') }}">
                                                                @error('alamat')
                                                                <span class="text-danger"> {{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="kota" class="form-label">Kota Supplier</label>
                                                                <input type="text" name="kota" class="form-control @error('kota') is-invalid @enderror" value="{{ old('kota') }}">
                                                                @error('kota')
                                                                <span class="text-danger"> {{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>      

                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="bank" class="form-label">Nama Bank Supplier</label>
                                                                <input type="text" name="bank" class="form-control @error('bank') is-invalid @enderror" value="{{ old('bank') }}">
                                                                @error('bank')
                                                                <span class="text-danger"> {{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>         

                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="nama_rekening" class="form-label">Nama Rekening Supplier</label>
                                                                <input type="text" name="nama_rekening" class="form-control @error('nama_rekening') is-invalid @enderror" value="{{ old('nama_rekening') }}">
                                                                @error('nama_rekening')
                                                                <span class="text-danger"> {{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>   

                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="nomor_rekening" class="form-label">Nomor Rekening Supplier</label>
                                                                <input type="text" name="nomor_rekening" class="form-control @error('nomor_rekening') is-invalid @enderror" value="{{ old('nomor_rekening') }}">
                                                                @error('nomor_rekening')
                                                                <span class="text-danger"> {{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>   



                                                        <!-- <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="example-fileinput" class="form-label">Foto Supplier</label>
                                                                <input type="file" name="image" id="image" class="form-control" class="form-control @error('image') is-invalid @enderror">
                                                                @error('image')
                                                                <span class="text-danger"> {{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>  -->
                                                        <!-- end col -->

                                                    </div> <!-- end row -->
                                               
                                                    <div class="text-end">
                                                        <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i class="mdi mdi-content-save"></i>simpan</button>
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