@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default" style="background-color: #edcfa9; font-family:Arial, Helvetica, sans-serif;">
                <div class="panel-heading" style="background-color: #e89f71; font-family:Arial, Helvetica, sans-serif;">
                    <h3 style="text-align: center; font-family:Arial, Helvetica, sans-serif">
                        @if ($qrcode)
                        <strong>Registrasi Berhasil</strong>
                        @else
                        <strong> Harap Melakukan Registrasi </strong>
                        @endif
                    </h3>
                </div>

                <div class="panel-body">
                    <div style="text-align: center;">
                        @if ($qrcode)
                        <p style="text-align: center; color: black; font-family:Arial, Helvetica, sans-serif; font-size:20px"><strong> Perhatikan! </strong></p>
                        <p style="text-align: center; color: black; font-family:Arial, Helvetica, sans-serif; font-size:16px">Berikan QR Code Anda kepada petugas Gereja minimal 10 menit
                            sebelum ibadah <br> dimulai untuk melakukan Registrasi Ulang. </p>
                        <!-- <img style="width: 200px; height: auto;" src="{{ asset('template/qrcode/'.$qrcode->qr_code) }}"> -->
                        {!! QrCode::size(300)->generate($qrcode->id); !!}
                        @else
                        <h5 style="text-align: center; color:black; font-size:medium"><strong> Anda Belum Melakukan Registrasi Ibadah! </strong></h5>
                        @endif
                    </div>

                    @if ($qrcode)
                    <p style="text-align: center; color: black; font-family:Arial, Helvetica, sans-serif; font-size:medium">QR Code ini hanya bisa digunakan 1 kali saja dan <br>
                        tidak bisa digunakan di minggu berikutnya!</p>
                    <!--- <p style="text-align: center; color: black; font-family:Arial, Helvetica, sans-serif"> Silahkan Download QRCode!</p>--->
                    @endif
                    <div class="form-group">
                        <div style="text-align: center;">
                            @if ($qrcode)
                            <!--  <form method="POST" action="{{ route('cancel', $qrcode->id) }}">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button class="btn btn-danger cancel-confirmation">Hapus</button>
                        </form> -->
                            <a href="{{ route('cancel', $qrcode->id) }}" class="btn btn cancel-confirmation" style="background-color:#aa4a30; color:white; width: 100px; height: 40px; font-family:Arial, Helvetica, sans-serif"><strong> Hapus </strong></a>
                            @endif
                            &ensp; &ensp;
                            <!---@if ($qrcode)
                            <a href=" {{ route('download') }}" class="btn btn" style="background-color:#aa4a30; color:white; width: 100px; height: 40px; font-family:Arial, Helvetica, sans-serif"><strong> Download </strong></a>--->
                            @endif
                            </>

                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection

@section('javascript')
<script>
    $('.cancel-confirmation').on('click', function(e) {
        var c = confirm('Apakah Anda yakin ingin membatalkan jadwal ibadah?');
        return c;
    });
</script>
@endsection