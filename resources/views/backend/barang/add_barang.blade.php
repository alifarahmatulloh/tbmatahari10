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
                                    <h4 class="page-title">Barang</h4>
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
                                                <form id="myForm" method="post" action="{{ route('barang.store') }}" enctype="multipart/form-data">
                                                    @csrf
                                                    <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle me-1"></i>Tambah Barang</h5>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group mb-3">
                                                                <label for="nama_barang" class="form-label">Nama Barang</label>
                                                                <input type="text" name="nama_barang" class="form-control" value="{{ old('nama_barang') }}">
                                                            </div>
                                                        </div>   

                                                        <div class="col-md-6">
                                                            <div class="form-group mb-3">
                                                                <label for="firstname" class="form-label">Kategori Barang</label>
                                                                <select name="kategori_id" class="form-select" id="example-select">
                                                                        <option selected disabled>Pilih Kategori Barang</option>
                                                                        @foreach($kategori as $kat)
                                                                        <option value="{{ $kat->id }}">{{ $kat->nama_kategori }}</option>
                                                                        @endforeach                                
                                                                    </select>
                                                            </div>
                                                        </div>      

                                                        <div class="col-md-6">
                                                            <div class="form-group mb-3">
                                                                <label for="firstname" class="form-label">Supplier Barang</label>
                                                                <select name="supplier_id" class="form-select" id="example-select">
                                                                        <option selected disabled>Pilih Supplier Barang</option>
                                                                        @foreach($supplier as $sup)
                                                                        <option value="{{ $sup->id }}">{{ $sup->nama_toko }}</option>
                                                                        @endforeach                                
                                                                    </select>
                                                            </div>
                                                        </div>         

                                                        <div class="col-md-6">
                                                            <div class="form-group mb-3">
                                                                <label for="kode_barang" class="form-label">Kode Barang</label>
                                                                <input type="text" name="kode_barang" class="form-control" value="{{ old('kode_barang') }}">
                                                            </div>
                                                        </div>  

                                                        <div class="col-md-6">
                                                            <div class="form-group mb-3">
                                                                <label for="stok_barang" class="form-label">Stok Barang</label>
                                                                <input type="text" name="stok_barang" class="form-control" value="{{ old('stok_barang') }}">
                                                            </div>
                                                        </div> 

                                                        <div class="col-md-6">
                                                            <div class="form-group mb-3">
                                                                <label for="harga_ecer" class="form-label">Harga Ecer</label>
                                                                <input type="text" name="harga_ecer" class="form-control" value="{{ old('harga_beli') }}">
                                                            </div>
                                                        </div>  

                                                        <div class="col-md-6">
                                                            <div class="form-group mb-3">
                                                                <label for="harga_grosir" class="form-label">Harga Grosir</label>
                                                                <input type="text" name="harga_grosir" class="form-control" value="{{ old('harga_jual') }}">
                                                            </div>
                                                        </div>       

                                                        <div class="col-md-12">
                                                            <div class="form-group mb-3">
                                                                <label for="example-fileinput" class="form-label">Foto Barang</label>
                                                                <input type="file" name="foto_barang" id="image" class="form-control">
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
                    $(document).ready(function (){
                        $('#myForm').validate({
                            rules: {
                                nama_barang: {
                                    required : true,
                                },
                                kategori_id: {
                                    required : true,
                                },
                                supplier_id: {
                                    required : true,
                                },
                                kode_barang: {
                                    required : true,
                                },
                                stok_barang: {
                                    required : true,
                                },
                                harga_beli: {
                                    required : true,
                                },
                                harga_ecer: {
                                    required : true,
                                },
                                foto_grosir: {
                                    required : true,
                                },

                            },
                            messages :{
                                nama_barang: {
                                    required : 'Kolom nama barang wajib diisi',
                                }, 
                                kategori_id: {
                                    required : 'Kolom kategori barang wajib diisi',
                                },
                                supplier_id: {
                                    required : 'Kolom supplier barang wajib diisi',
                                },
                                kode_barang: {
                                    required : 'Kolom kode barang wajib diisi',
                                },
                                stok_barang: {
                                    required : 'Kolom stok barang wajib diisi',
                                },
                                harga_ecer: {
                                    required : 'Kolom harga beli wajib diisi',
                                },
                                harga_grosir: {
                                    required : 'Kolom harga jual wajib diisi',
                                },
                                foto_barang: {
                                    required : 'Foto barang wajib diisi',
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