@extends('admin_dashboard')
@section('admin')


<div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <a href="{{ route('add.employee') }}" class="btn btn-warning waves-effect waves-light">Tambah Karyawan</a>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Manajemen Karyawan</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Daftar Karyawan</h4>
                                        <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Foto</th>
                                                    <th>Nama</th>
                                                    <th>Email</th>
                                                    <th>Nomor Telepon</th>
                                                    <th>Alamat</th>
                                                    <th>Gaji</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                        
                                        
                                            <tbody>
                                                @foreach($employee as $key=>$item)
                                                <tr>
                                                    <td>{{ $key+1 }}</td>
                                                    <td><img src="{{ asset($item->image) }}" style="width:50px; height: 40px;"></td>
                                                    <td>{{ $item->name }}</td>
                                                    <td>{{ $item->email }}</td>
                                                    <td>{{ $item->phone }}</td>
                                                    <td>{{ $item->address }}</td>
                                                    <td>{{ $item->salary }}</td>
                                                    <td>
                                                        <a href="{{ route('edit.employee',$item->id ) }}" class="btn btn-blue waves-effect waves-light">Edit</a>
                                                        <a href="{{ route('delete.employee',$item->id ) }}" class="btn btn-danger waves-effect waves-light" id="delete">Hapus</a>
                                                    </td>
                                                </tr> 
                                                @endforeach                                           
                                            </tbody>
                                        </table>
                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div><!-- end col-->
                        </div>
                        <!-- end row-->
                        
                    </div> <!-- container -->

                </div> <!-- content -->







@endsection