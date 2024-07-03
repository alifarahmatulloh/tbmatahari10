@extends('admin_dashboard')
@section('admin')

@php
    $date = date("d-m-Y");
    $pengeluaran_today = App\Models\Pengeluaran::where('tanggal',$date)->sum('jumlah_pengeluaran');
@endphp

<div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <a href="{{ route('add.pengeluaran') }}" class="btn btn-warning waves-effect waves-light">Tambah Pengeluaran</a>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Pengeluaran</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 



                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Pengeluaran Hari Ini</h4>
                                        <h4 style="color: black; font-size: 30px;">Rp.{{ $pengeluaran_today }}</h4>
                                        <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama Pengeluaran</th>
                                                    <th>Jumlah Pengeluaran</th>
                                                    <th>Tanggal</th>
                                                    <th>Bulan</th>
                                                    <th>Tahun</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                        
                                        
                                            <tbody>
                                                @foreach($today as $key=>$item)
                                                <tr>
                                                    <td>{{ $key+1 }}</td>
                                                    <td>{{ $item->nama_pengeluaran }}</td>
                                                    <td>{{ $item->jumlah_pengeluaran }}</td>
                                                    <td>{{ $item->tanggal }}</td>
                                                    <td>{{ $item->bulan }}</td>
                                                    <td>{{ $item->tahun }}</td>
                                                    <td>
                                                        <a href="{{ route('edit.pengeluaran',$item->id ) }}" class="btn btn-blue waves-effect waves-light">Edit</a>
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