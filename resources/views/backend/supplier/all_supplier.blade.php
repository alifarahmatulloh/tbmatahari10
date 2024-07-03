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
                                            <a href="{{ route('add.supplier') }}" class="btn btn-warning waves-effect waves-light">Tambah Supplier</a>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Manajemen Supplier</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Daftar Supplier</h4>
                                        <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <!-- <th>Foto</th> -->
                                                    <th>Nama Toko</th>
                                                    <th>Jenis Supplier</th>
                                                    <th>Nama</th>
                                                    <th>Email</th>
                                                    <th>Nomor Telepon</th>
                                                    <th>Kota</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                        
                                        
                                            <tbody>
                                                @foreach($supplier as $key=>$item)
                                                <tr>
                                                    <td>{{ $key+1 }}</td>
                                                    <!-- <td><img src="{{ asset($item->image) }}" style="width:50px; height: 40px;"></td> -->
                                                    <td>{{ $item->nama_toko }}</td>
                                                    <td>{{ $item->jenis_supplier }}</td>
                                                    <td>{{ $item->nama }}</td>
                                                    <td>{{ $item->email }}</td>
                                                    <td>{{ $item->phone }}</td>
                                                    <td>{{ $item->kota }}</td>
                                                    <td>
                                                        <a href="{{ route('detail.supplier',$item->id ) }}" class="btn btn-info waves-effect waves-light">Detail</a>
                                                        <a href="{{ route('edit.supplier',$item->id ) }}" class="btn btn-blue waves-effect waves-light">Edit</a>
                                                        <a href="{{ route('delete.supplier',$item->id ) }}" class="btn btn-danger waves-effect waves-light" id="delete">Hapus</a>
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