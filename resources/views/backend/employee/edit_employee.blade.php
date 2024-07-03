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
                                    <h4 class="page-title">Manajemen Karyawan</h4>
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
                                                <form method="post" action="{{ route('employee.update') }}" enctype="multipart/form-data">
                                                    @csrf

                                                    <input type="hidden" name="id" value="{{ $employee->id }}">

                                                    <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle me-1"></i>Edit Karyawan</h5>
                                                    <div class="row">

                                                        <div class="col-md-12">
                                                            <div class="mb-3">
                                                                <label for="example-fileinput" class="form-label"></label>
                                                                <img type="showImage" src="{{ asset($employee->image) }}" class="rounded-circle avatar-lg img-thumbnail" alt="profile image">
                                                            </div>
                                                        </div> <!-- end col -->

                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="name" class="form-label">Edit Nama Karyawan</label>
                                                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ $employee->name }}">
                                                                @error('name')
                                                                <span class="text-danger"> {{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <!-- <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="age" class="form-label">Usia Karyawan</label>
                                                                <input type="number" name="age" class="form-control @error('age') is-invalid @enderror" value="{{ old('age') }}">
                                                                @error('age')
                                                                <span class="text-danger"> {{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div> -->

                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="email" class="form-label">Edit Email Karyawan</label>
                                                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ $employee->email }}">
                                                                @error('email')
                                                                <span class="text-danger"> {{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="phone" class="form-label">Edit Nomor Telepon Karyawan</label>
                                                                <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" value="{{ $employee->phone }}">
                                                                @error('phone')
                                                                <span class="text-danger"> {{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="address" class="form-label">Edit Alamat Karyawan</label>
                                                                <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" value="{{ $employee->address }}">
                                                                @error('address')
                                                                <span class="text-danger"> {{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="salary" class="form-label">Edit Gaji Karyawan</label>
                                                                <input type="text" name="salary" class="form-control @error('salary') is-invalid @enderror" value="{{ $employee->salary }}">
                                                                @error('salary')
                                                                <span class="text-danger"> {{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>                                         

                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="example-fileinput" class="form-label">Edit Foto Karyawan</label>
                                                                <input type="file" name="image" id="image" class="form-control">
                                                            </div>
                                                        </div> <!-- end col -->
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

            <script type="text/javascript">

                $(document).ready(function(){
                    $('#image').change(function(e){
                        var reader = new FileReader();
                        reader.onload = function(e){
                            $('#showImage').attr('scr', e.target.result);
                        }
                        reader.readAsDataURL(e.target.files['0']);
                    });
                });

            </script>










@endsection