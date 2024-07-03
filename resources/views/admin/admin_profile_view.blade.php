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
                                    <h4 class="page-title">Profil Admin</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-lg-4 col-xl-4">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <img src="{{ (!empty($adminData->photo)) ? url('upload/admin_image/'.$adminData->photo) : url('upload/no_image.jpg')}}" class="rounded-circle avatar-lg img-thumbnail"
                                        alt="profile-image">

                                        <h4 class="mb-0">{{ $adminData->name }}</h4>
                                        <p class="text-muted mb-0">{{ $adminData->email }}</p>
                                        <p class="text-muted mb-0">{{ $adminData->phone }}</p>
                                 
                                    </div>                                 
                                </div> <!-- end card -->

                            </div> <!-- end col-->

                            <!-- personal info -->
                            <div class="col-lg-8 col-xl-8">
                                <div class="card">
                                    <div class="card-body">
                                            <div class="tab-pane" id="settings">
                                                <form method="post" action="{{ route('admin.profile.store') }}" enctype="multipart/form-data">
                                                    @csrf
                                                    <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle me-1"></i>Ubah Data Diri</h5>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="mb-3">
                                                                <label for="name" class="form-label">Nama</label>
                                                                <input type="text" name="name" class="form-control" id="name" value="{{ $adminData->name }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="mb-3">
                                                                <label for="email" class="form-label">Email</label>
                                                                <input type="email" name="email" class="form-control" id="email" value="{{ $adminData->email }}">
                                                            </div>
                                                        </div> <!-- end col -->

                                                        <div class="col-md-12">
                                                            <div class="mb-3">
                                                                <label for="phone" class="form-label">Nomor Telepon</label>
                                                                <input type="text" name="phone" class="form-control" id="phone" value="{{ $adminData->phone }}">
                                                            </div>
                                                        </div> <!-- end col -->

                                                        <div class="col-md-12">
                                                            <div class="mb-3">
                                                                <label for="example-fileinput" class="form-label">Foto Profil</label>
                                                                <input type="file" name="photo" id="image" class="form-control">
                                                            </div>
                                                        </div> <!-- end col -->



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