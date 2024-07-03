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
                                    <h4 class="page-title">Manajemen Pengeluaran</h4>
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
                                                <form id="myForm" method="post" action="{{ route('pengeluaran.update') }}" enctype="multipart/form-data">
                                                    @csrf

                                                    <input type="hidden" name="id" value="{{ $pengeluaran->id}}">

                                                    <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle me-1"></i>Edit Pengeluaran</h5>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group mb-3">
                                                                <label for="name" class="form-label">Nama Pengeluaran</label>
                                                                <textarea id="example-textarea" name="nama_pengeluaran" class="form-control" rows="3">{{  $pengeluaran->nama_pengeluaran }}</textarea>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-12">
                                                            <div class="form-group mb-3">
                                                                <label for="jumlah_pengeluaran" class="form-label">Jumlah Pengeluaran</label>
                                                                <input type="text" name="jumlah_pengeluaran" class="form-control" value="{{ $pengeluaran->jumlah_pengeluaran }}">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-12">
                                                            <div class="mb-3">
                                                                <input type="hidden" name="tanggal" class="form-control" value="{{ date('d-m-Y') }}">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-12">
                                                            <div class="mb-3">
                                                                <input type="hidden" name="bulan" class="form-control" value="{{ date('F') }}">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-12">
                                                            <div class="mb-3">
                                                                <input type="hidden" name="tahun" class="form-control" value="{{ date('Y') }}">
                                                            </div>
                                                        </div>
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
                    $(document).ready(function (){
                        $('#myForm').validate({
                            rules: {
                                nama_pengeluaran: {
                                    required : true,
                                },
                                jumlah_pengeluaran: {
                                    required : true,
                                },

                            },
                            messages :{
                                nama_pengeluaran: {
                                    required : 'Kolom nama barang wajib diisi',
                                }, 
                                jumlah_pengeluaran: {
                                    required : 'Kolom nama barang wajib diisi',
                                }, 

                            },
                            errorElement : 'span', 
                            errorPlacement: function (error,element) {
                                error.addClass('invalid-feedback');
                                element.closest('.form-group').append(error);
                            },
                            highlight : function(element, errorClass, validClass){
                                $(element).addClass('is-invalid');
                            },
                            unhighlight : function(element, errorClass, validClass){
                                $(element).removeClass('is-invalid');
                            },
                        });
                    });
                    
                </script>

@endsection