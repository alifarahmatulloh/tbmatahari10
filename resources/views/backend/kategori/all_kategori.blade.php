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
                                            <button type="button" class="btn btn-warning waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#add_kategori">Tambah Kategori Barang</button>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Kategori Barang</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Daftar Kategori Barang</h4>
                                        <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama Kategori Barang</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                        
                                        
                                            <tbody>
                                                @foreach($kategori as $key=>$item)
                                                <tr>
                                                    <td>{{ $key+1 }}</td>
                                                    <td>{{ $item->nama_kategori }}</td>
                                                    <td>
                                                        <a href="{{ route('edit.kategori',$item->id ) }}" class="btn btn-blue waves-effect waves-light">Edit</a>
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


                <!-- add kategori -->
                <div id="add_kategori" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <div class="modal-body">
                                <form class="px-3" method="post" action="{{ route('kategori.store') }}">
                                    @csrf

                                    <div class="mb-3">
                                        <label for="name" class="form-label">Nama Kategori Barang</label>
                                        <input class="form-control" type="text" name="nama_kategori" placeholder="Masukkan Nama Kategori Barang">
                                    </div>

                                    <div class="mb-3 text-center">
                                        <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i class="mdi mdi-content-save"></i>Tambah</button>
                                    </div>

                                </form>

                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->







@endsection