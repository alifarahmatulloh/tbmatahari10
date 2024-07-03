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
                                    <h4 class="page-title">Ubah Kata Sandi</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title -->

                        <div class="row">
                        
                            <!-- personal info -->
                            <div class="col-lg-8 col-xl-8">
                                <div class="card">
                                    <div class="card-body">
                                            <div class="tab-pane" id="settings">
                                                <form method="post" action="{{ route('update.password') }}">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="mb-3">
                                                                <label for="name" class="form-label">Kata Sandi Lama</label>
                                                                <input type="password" name="old_password" class="form-control @error('old_password') is-invalid @enderror" id="old_password">
                                                                @error('old_password')
                                                                <span class="text-danger"> {{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="col-md-12">
                                                            <div class="mb-3">
                                                                <label for="name" class="form-label">Kata Sandi Baru</label>
                                                                <input type="password" name="new_password" class="form-control @error('new_password') is-invalid @enderror" id="new_password">
                                                                @error('new_password')
                                                                <span class="text-danger"> {{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="col-md-12">
                                                            <div class="mb-3">
                                                                <label for="name" class="form-label">Konfirmasi Kata Sandi Baru</label>
                                                                <input type="password" name="new_password_confirmation" class="form-control" id="new_password_confirmation">
                                                            </div>
                                                        </div>
                                                    </div> <!-- end row -->
                                               
                                                    <div class="text-end">
                                                        <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i class="mdi mdi-content-save"></i> Simpan</button>
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