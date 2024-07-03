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
                                            <a href="{{ route('export') }}" class="btn btn-primary waves-effect waves-light">Export Excel</a>
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
                                                <form id="myForm" method="post" action="{{ route('import') }}" enctype="multipart/form-data">
                                                    @csrf

                                                    <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle me-1"></i>Import Barang</h5>

                                                    <label for="information" class="form-label">Format Urutan Kolom Tabel</label>
                                                    <p class="text-danger">| Nama Barang | Kategori ID | Supplier ID | Kode Barang | Stok Barang | Harga Ecer | Harga Grosir |</p>

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group mb-3">
                                                                <label for="import_file" class="form-label">Import File Excel</label>
                                                                <input type="file" name="import_file" class="form-control">
                                                            </div>
                                                        </div>        
                                                    </div> <!-- end row -->
                                               
                                                    <div class="text-end">
                                                        <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i class="mdi mdi-content-save"></i>Upload</button>
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
                                import_file: {
                                    required: true,
                                    extension: "xls|xlsx",
                                },

                            },
                            messages: {
                                import_file: {
                                    required: 'Kolom file Excel wajib dilampirkan',
                                    extension: 'File yang dilampirkan harus berformat .xls atau .xlsx',
                                },
                                
                            },
                            errorElement: 'span',
                            errorPlacement: function (error, element) {
                                error.addClass('invalid-feedback');
                                element.closest('.form-group').append(error);
                            },
                            highlight: function (element, errorClass, validClass) {
                                $(element).addClass('is-invalid');
                            },
                            unhighlight: function (element, errorClass, validClass) {
                                $(element).removeClass('is-invalid');
                            }
                        });
                    });
                </script>

                
@endsection