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
                                            <a href="{{ route('import.barang') }}" class="btn btn-info waves-effect waves-light">Import Data</a>
                                            &nbsp;&nbsp;&nbsp;
                                            <a href="{{ route('export') }}" class="btn btn-primary waves-effect waves-light">Export Data</a>
                                            &nbsp;&nbsp;&nbsp;
                                            <a href="{{ route('add.barang') }}" class="btn btn-warning waves-effect waves-light">Tambah Barang</a>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Barang</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Daftar Barang</h4>
                                        <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Foto</th>
                                                    <th>Nama Barang</th>
                                                    <th>Kategori</th>
                                                    <th>Supplier</th>
                                                    <th>Kode Barang</th>
                                                    <th>Stok Barang</th>
                                                    <th>Harga Ecer</th>
                                                    <th>Harga Grosir</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                        
                                        
                                            <tbody>
                                                @foreach($barang as $key=>$item)
                                                <tr>
                                                    <td>{{ $key+1 }}</td>
                                                    <td><img src="{{ asset($item->foto_barang) }}" style="width:50px; height: 40px;"></td>
                                                    <td>{{ $item->nama_barang }}</td>
                                                    <td>{{ $item['kategori']['nama_kategori'] }}</td>
                                                    <td>{{ $item['supplier']['nama_toko'] }}</td>
                                                    <td>{{ $item->kode_barang }}</td>
                                                    <td>{{ $item->stok_barang }}</td>
                                                    <td>Rp{{ $item->harga_ecer }}</td>
                                                    <td>Rp{{ $item->harga_grosir }}</td>
                                                    <td>
                                                        <a href="{{ route('edit.barang',$item->id ) }}" class="btn btn-blue waves-effect waves-light">Edit</a>
                                                        <a href="{{ route('delete.barang',$item->id ) }}" class="btn btn-danger waves-effect waves-light" id="delete">Hapus</a>
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