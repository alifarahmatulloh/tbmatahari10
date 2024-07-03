@extends('admin_dashboard')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>


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
                    <h4 class="page-title">Kasir Umum</h4>
                </div>
            </div>
        </div>     
        <!-- end page title -->

        <div class="row">
            <div class="col-lg-6 col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <div class="tab-pane" id="settings">
                            <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Foto</th>
                                        <th>Nama Barang</th>
                                        <th>Kode Barang</th>
                                        <th>Stok Barang</th>
                                        <th>Harga Ecer</th>
                                        <th> </th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach($barang as $key=>$item)
                                    <tr>
                                        <form method="post" action="{{ url('/cart-add') }}">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $item->id }}">
                                            <input type="hidden" name="nama_barang" value="{{ $item->nama_barang }}">
                                            <input type="hidden" name="jumlah_barang" value="1">
                                            <input type="hidden" name="harga_ecer" value="{{ $item->harga_ecer }}">
                                            <td>{{ $key+1 }}</td>
                                            <td><img src="{{ asset($item->foto_barang) }}" style="width:50px; height: 40px;"></td>
                                            <td>{{ $item->nama_barang }}</td>
                                            <td>{{ $item->kode_barang }}</td>
                                            <td>{{ $item->stok_barang }}</td>
                                            <td>Rp{{ $item->harga_ecer }}</td>
                                            <td><button type="submit" style="font-size: 20px; color: #000;"><i class="fas fa-plus-square"></i> </button></td>
                                        </form>
                                    </tr> 
                                    @endforeach                                           
                                </tbody>
                            </table>
                        </div>
                    </div>                                 
                </div> <!-- end card-->
            </div> <!-- end col-->

            <!-- personal info -->
            <div class="col-lg-6 col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered border-warning mb-0">
                                <thead>
                                    <tr>
                                        <th>Nama Barang</th>
                                        <th>Harga Satuan</th>
                                        <th>Jumlah Barang</th>                            
                                        <th>Harga Total</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>

                                @php
                                $allcart = Cart::content();
                                @endphp
                                <tbody>
                                    @foreach($allcart as $cart)
                                    <tr>
                                        <td>{{ $cart->name }}</td>
                                        <td>Rp{{ $cart->price }}</td>
                                        <td>
                                            <form method="post" action="{{ url('/cart-update/'.$cart->rowId) }}">
                                                @csrf
                                                <input type="number" name="qty" value="{{ $cart->qty }}" style="width:40px" min="1">
                                                <button type="submit" class="btn btn-sm btn-success" style="margin-top: -2px;"><i class="fas fa-check"></i></button>
                                            </form>
                                        </td>
                                        <td>Rp{{ $cart->price * $cart->qty }}</td>
                                        <td><a href="{{ url('/cart-remove/'.$cart->rowId) }}"><i class="fas fa-trash-alt" style="color: #000"></i></a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div> <!-- end .table-responsive-->

                        <div class="bg-warning ">
                            <br>
                            <div class="col-md-12 ">
                                <div class="row">
                                    <div class="col-md-4 ">
                                    </div>
                                    <div class="col-md-2 ">
                                        <p style="font-size:17px; color: #000;">Total Barang</p>
                                    </div>
                                    <div class="col-md-3">
                                        <p style="font-size:17px; color: #000;">{{ Cart::count() }}</p>
                                    </div>
                                    <div class="col-md-3 ">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 ">
                                <div class="row">
                                    <div class="col-md-4 ">
                                    </div>
                                    <div class="col-md-2 ">
                                        <p style="font-size:17px; color: #000;">SubTotal</p>
                                    </div>
                                    <div class="col-md-3">
                                        <p style="font-size:17px; color: #000;">Rp {{ Cart::subtotal() }}</p>
                                    </div>
                                    <div class="col-md-3 ">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 ">
                                <div class="row">
                                    <div class="col-md-4 ">
                                    </div>
                                    <div class="col-md-2 ">
                                        <p style="font-size:17px; color: #000;">PPn 11%</p>
                                    </div>
                                    <div class="col-md-3 ">
                                        <p style="font-size:17px; color: #000;">Rp {{ Cart::tax() }}</p>
                                    </div>
                                    <div class="col-md-3 ">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 ">
                                <div class="row">
                                    <div class="col-md-4">
                                    </div>
                                    <div class="col-md-2 ">
                                        <p style="font-size:17px; color: #000;">Diskon</p>
                                    </div>
                                    <div class="col-md-3 ">
                                        <p style="font-size:17px; color: #000;">Rp
                                            <input type="number" id="diskon" name="diskon" style="width:85px" min="0" value="0"> 
                                        </p>
                                    </div>
                                    <div class="col-md-3 ">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 ">
                                <div class="row">
                                    <div class="col-md-4 ">
                                    </div>
                                    <div class="col-md-2 ">
                                        <p style="font-size:17px; color: #000;">Ongkos Kirim</p>
                                    </div>
                                    <div class="col-md-3 ">
                                        <p style="font-size:17px; color: #000;">Rp
                                            <input type="number" id="ongkos_kirim" name="ongkos_kirim" style="width:85px" min="0" value="0"> 
                                        </p>
                                    </div>
                                    <div class="col-md-3 ">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 text-center">
                                <div class="">
                                    <h2 class="text-black">Total Pembayaran </h2>
                                </div>
                            </div>  
                            <div class="col-md-12 text-center">
                                <div class="">
                                    <h1 class="text-black" id="total_pembayaran" name="total_pembayaran">Rp {{ Cart::total() }}</h1>
                                </div>
                            </div>
                            <br>                           
                        </div>

                        <br>
                        <form id="myForm" method="post" action="{{ url('/create-invoice') }}">
                            @csrf
                            <div class="col-md-12">
                                <div class="form-group mb-3">
                                    <label for="nama_barang" class="form-label">Nama Pembeli</label>
                                    <input type="text" name="nama" class="form-control" value="{{ old('nama') }}">
                                </div>
                            </div>  

                            <div class="col-md-12">
                                <div class="form-group mb-3">
                                    <label for="nomor_telepon" class="form-label">Nomor Telepon</label>
                                    <input type="text" name="nomor_telepon" class="form-control" value="{{ old('nomor_telepon') }}">
                                </div>
                            </div
                            >  
                            <div class="col-md-12 text-center">
                                <div class="row">
                                    <div class="form-group col-md-6 mb-3">
                                        <label for="kirim_barang" class="form-label">Kirim Barang</label><br>
                                        <input type="radio" id="kirim_barang_ya" name="kirim_barang" value="Ya">
                                        <label for="kirim_barang_ya">Ya</label>
                                        <input type="radio" id="kirim_barang_tidak" name="kirim_barang" value="Tidak">
                                        <label for="kirim_barang_tidak">Tidak</label>
                                    </div>
                                    <div class="form-group col-md-6 mb-3">
                                        <label for="titip_barang" class="form-label">Titip Barang</label><br>
                                        <input type="radio" id="titip_barang_ya" name="titip_barang" value="Ya">
                                        <label for="titip_barang_ya">Ya</label>
                                        <input type="radio" id="titip_barang_tidak" name="titip_barang" value="Tidak">
                                        <label for="titip_barang_tidak">Tidak</label>
                                    </div>
                                </div>
                            </div>

                            <div id="shippingDetails">
                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label for="tanggal_kirim" class="form-label">Tanggal Pengiriman</label>
                                        <input type="date" name="tanggal_kirim" class="form-control" value="{{ old('tanggal_kirim') }}">
                                    </div>
                                </div> 
                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label for="alamat_kirim" class="form-label">Alamat Pengiriman</label>
                                        <textarea id="example-textarea" name="alamat_kirim" class="form-control" rows="3">{{ old('alamat_kirim') }}</textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group mb-3">
                                    <label for="catatan" class="form-label">Catatan</label>
                                    <textarea id="example-textarea" name="catatan" class="form-control" rows="3">{{ old('catatan') }}</textarea>
                                </div>
                            </div>

                            <button class="btn btn-warning waves-effect wave-light">Konfirmasi Pembayaran</button>
                        </form>
                    </div>
                </div> <!-- end card-->
            </div> <!-- end col -->
        </div>
        <!-- end row-->
    </div> <!-- container -->
</div> <!-- content -->

<script>
$(document).ready(function() {
    function formatCurrency(number) {
        return 'Rp' + number.toLocaleString('id-ID', {
            minimumFractionDigits: 0,
            maximumFractionDigits: 0
        });
    }

    function updateTotalPayment() {
        var subtotal = parseFloat("{{ str_replace(',', '', Cart::subtotal()) }}");
        var ppn = parseFloat("{{ str_replace(',', '', Cart::tax()) }}");
        var diskon = parseFloat($('#diskon').val()) || 0;
        var ongkosKirim = parseFloat($('#ongkos_kirim').val()) || 0;

        // Perhitungan Total
        var totalSebelumDiskonDanOngkir = subtotal + ppn;
        var totalDiskon = totalSebelumDiskonDanOngkir - diskon;
        var totalPembayaran = totalDiskon + ongkosKirim;

        $('#total_pembayaran').text(formatCurrency(totalPembayaran));
    }

    $('#diskon, #ongkos_kirim').on('input', function() {
        updateTotalPayment();

        var diskon = $('#diskon').val();
        var ongkosKirim = $('#ongkos_kirim').val();

        $.post('{{ url('/discount/apply') }}', { 
            _token: '{{ csrf_token() }}', 
            diskon: diskon 
        });

        $.post('{{ url('/shipping/apply') }}', { 
            _token: '{{ csrf_token() }}', 
            ongkos_kirim: ongkosKirim
        });
    });

    // Initial calculation
    updateTotalPayment();
});
</script>

<script type="text/javascript">
    $(document).ready(function (){
        $('#shippingDetails').hide();

        $('input[name="kirim_barang"]').change(function(){
            if($(this).val() == 'Ya'){
                $('#shippingDetails').show();
            } else {
                $('#shippingDetails').hide();
            }
        });

        $('#myForm').validate({
            rules: {
                nama: {
                    required: true,
                },
                nomor_telepon: {
                    required: true,
                },
                kirim_barang: {
                    required: true,
                }, 
                titip_barang: {
                    required: true,
                },
                tanggal_kirim: {
                    required: function(element) {
                        return $("input[name='kirim_barang']:checked").val() == 'Ya';
                    },
                },
                alamat_kirim: {
                    required: function(element) {
                        return $("input[name='kirim_barang']:checked").val() == 'Ya';
                    },
                },
            },
            messages: {
                nama: {
                    required: 'Kolom nama wajib diisi',
                }, 
                nomor_telepon: {
                    required: 'Kolom nomor telepon wajib diisi',
                },
                kirim_barang: {
                    required: 'Kolom kirim barang wajib diisi',
                },
                titip_barang: {
                    required: 'Kolom titip barang wajib diisi',
                },
                tanggal_kirim: {
                    required: 'Kolom tanggal kirim wajib diisi jika kirim barang dipilih Ya',
                },
                alamat_kirim: {
                    required: 'Kolom alamat kirim wajib diisi jika kirim barang dipilih Ya',
                },
            },
            errorElement: 'span', 
            errorPlacement: function (error, element) {
                error.addClass('invalid-feedback');
                if (element.attr("type") === "radio") {
                    error.insertAfter(element.closest('.form-group').find('label').last());
                } else {
                    element.closest('.form-group').append(error);
                }
            },
            highlight: function(element, errorClass, validClass) {
                $(element).addClass('is-invalid');
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).removeClass('is-invalid');
            },
        });
    });
</script>
@endsection
