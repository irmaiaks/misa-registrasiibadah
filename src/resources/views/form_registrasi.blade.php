@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default" style="background-color: #edcfa9;">
                <div class="panel-heading" style="background-color:#e89f71;">
                    <h3 style="text-align: center; font-family:Arial, Helvetica, sans-serif"><strong>Registrasi Ibadah</strong></h3>
                </div>

                <div class="panel-body" id="form-registrasi">
                    <h4 style="text-align: center; color: black; margin-bottom: 2%; font-family:Arial, Helvetica, sans-serif"><strong>{{ $jadwal->jadwal }} (@if ($jadwal->hari) {{ $jadwal->hari }}, @endif {{ date('H:i', strtotime($jadwal->mulai)) }} - {{ date('H:i', strtotime($jadwal->selesai)) }} )</strong></h4>
                    <h4 style="text-align: center; color: black; margin-bottom: 5%; font-family:Arial, Helvetica, sans-serif"><strong> SISA : {{ $kuota->kuota }}/{{ $jadwal->kuota }} Kuota</strong></h4>
                    <hr>
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('store.registrasi') }}">
                        {{ csrf_field() }}
                        <input type="hidden" name="jadwal_ibadah_id" value="{{ Request::segment(2) }}">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label for="alamat" style="color: black; font-family:Arial, Helvetica, sans-serif">NIK</label>
                                <input style="background-color: beige; color: black; font-family:Arial, Helvetica, sans-serif" type="text" class="form-control" name="nik" @if ($profil) value="{{ $profil->nik }}" @endif required autofocus maxlength="16">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <label for="alamat" style="color: black; font-family:Arial, Helvetica, sans-serif">Nama Lengkap (Sesuai KTP)</label>
                                <input style="background-color: beige; color: black; font-family:Arial, Helvetica, sans-serif" type="text" class="form-control" name="nama_lengkap" @if ($profil) value="{{ $profil->nama_lengkap }}" @endif required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <label for="alamat" style="color: black; font-family:Arial, Helvetica, sans-serif">Tempat/Tanggal Lahir</label>
                                <input style="background-color: beige; color: black; font-family:Arial, Helvetica, sans-serif" type="text" class="form-control" name="tempat_lahir" required autofocus @if ($profil) value="{{ $profil->tempat_lahir }}" @endif>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <label for="alamat" style="color: black; font-family:Arial, Helvetica, sans-serif">Alamat (Sesuai KTP)</label>
                                <input style="background-color: beige; color: black; font-family:Arial, Helvetica, sans-serif" type="text" class="form-control" name="alamat" required autofocus @if ($profil) value="{{ $profil->alamat }}" @endif>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <label for="alamat" style="color: black; font-family:Arial, Helvetica, sans-serif">Jenis Kelamin</label>
                                <select style="background-color: beige; color: black; font-family:Arial, Helvetica, sans-serif" class="form-control" name="jenis_kelamin" required>
                                    <option value=""> -- Pilih Jenis Kelamin -- </option>
                                    @if ($profil)
                                    <option @if ($profil->jenis_kelamin == 'Laki-laki') selected @endif value="Laki-laki">Laki-laki</option>
                                    <option @if ($profil->jenis_kelamin == 'Perempuan') selected @endif value="Perempuan">Perempuan</option>
                                    @else
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <label for="alamat" style="color: black; font-family:Arial, Helvetica, sans-serif">No. Telp/Handphone</label>
                                <input minlength="12" maxlength="13" style="background-color: beige; color: black; font-family:Arial, Helvetica, sans-serif" type="text" class="form-control" name="no_hp" required autofocus @if ($profil) value="{{ $profil->no_hp }}" @endif>
                            </div>
                        </div>

                        <br>
                        <div class="form-group">
                            <div style="text-align:center;">
                                <a style=" width: 100px; height: 40px; background-color: #aa4a30; color:white; font-family:Arial, Helvetica, sans-serif" class="btn btn" href="{{ route('registrasi') }}">
                                    <strong>Kembali</strong></a>
                                &ensp; &ensp;
                                <p style=" width: 100px; height: 40px; background-color: #aa4a30; color:white; font-family:Arial, Helvetica, sans-serif" class="btn btn" id="next-form" href="">
                                    <strong>Lanjut</strong></p>
                            </div>
                        </div>
                </div>
                <!------------------------------------------------------------------------------------------------------------------->
                <div class="panel-body" id="form-keluhan">
                    <p style="text-align: center; color:black; font-family:Arial, Helvetica, sans-serif"><strong>Keluhan Penyakit</strong></p>
                    <h5 style="text-align: center; color: black; font-family:Arial, Helvetica, sans-serif">Perhatikan! Klik pada kolom Ya/Tidak</h5><br>

                    <div class="form-group row" style="text-align:center">
                        <label class="col-md-6 control-label" style=" text-align:center; color: black; font-family:Arial, Helvetica, sans-serif">Demam</label>

                        <div class="col-md-5" style="color: black; font-family:Arial, Helvetica, sans-serif">
                            <input type="radio" name="demam" value="Ya" required> Ya &nbsp;
                            <input type="radio" name="demam" value="Tidak" required> Tidak
                        </div>
                    </div>
                    <hr>

                    <div class="form-group row" style="text-align:center">
                        <label class="col-md-6 control-label" style="color: black; font-family:Arial, Helvetica, sans-serif">Sakit Tenggorokan</label>

                        <div class="col-md-5" style="color: black; font-family:Arial, Helvetica, sans-serif">
                            <input type="radio" name="tenggorokan" value="Ya" required> Ya &nbsp;
                            <input type="radio" name="tenggorokan" value="Tidak" required> Tidak
                        </div>
                    </div>
                    <hr>

                    <div class="form-group row" style="text-align:center;">
                        <label for="username" class="col-md-6 control-label" style="color: black; font-family:Arial, Helvetica, sans-serif">Batuk</label>

                        <div class="col-md-5" style="color: black; font-family:Arial, Helvetica, sans-serif">
                            <input type="radio" name="batuk" value="Ya" required> Ya &nbsp;
                            <input type="radio" name="batuk" value="Tidak" required> Tidak
                        </div>
                    </div>
                    <hr>

                    <div class="form-group row" style="text-align:center">
                        <label class="col-md-6 control-label" style="color: black; font-family:Arial, Helvetica, sans-serif">Pilek</label>

                        <div class="col-md-5" style="color: black; font-family:Arial, Helvetica, sans-serif">
                            <input type="radio" name="pilek" value="Ya" required> Ya &nbsp;
                            <input type="radio" name="pilek" value="Tidak" required> Tidak
                        </div>
                    </div>
                    <hr>

                    <div class="form-group row" style="text-align:center">
                        <label class="col-md-6 control-label" style="color: black; font-family:Arial, Helvetica, sans-serif">Sesak Napas</label>

                        <div class="col-md-5" style="color: black; font-family:Arial, Helvetica, sans-serif">
                            <input type="radio" name="sesak" value="Ya" required> Ya &nbsp;
                            <input type="radio" name="sesak" value="Tidak" required> Tidak
                        </div>
                    </div>

                    <div class="form-group">
                        <div style="text-align:center;">
                            <a style=" width: 100px; height: 40px; background-color: #aa4a30; color:white; font-family:Arial, Helvetica, sans-serif" class="btn btn" id="prev-keluhan" href="">
                                <strong> Kembali</strong></a>
                            &ensp; &ensp;
                            <button style="width: 100px; height: 40px; background-color: #aa4a30; color:white; font-family:Arial, Helvetica, sans-serif" type="submit" class="btn btn confirmation">
                                <strong>Kirim</strong>
                            </button>

                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('javascript')
<script>
    $(document).ready(function() {
        $('#form-keluhan').hide();

        $('#next-tata-cara').click(function(e) {
            e.preventDefault();
            $('#tata-cara').fadeOut();
            $('#form-jenis').fadeIn();
        });

        $('#prev-jenis').click(function(e) {
            e.preventDefault();
            $('#form-jenis').fadeOut();
            $('#tata-cara').fadeIn();
        });

        $('#prev-form').click(function(e) {
            e.preventDefault();
            $('#form-registrasi').fadeOut();
            $('#tata-cara').fadeIn();
        });

        $('#prev-keluhan').click(function(e) {
            e.preventDefault();
            $('#form-keluhan').fadeOut();
            $('#form-registrasi').fadeIn();
        });

        <?php if (1 == 0) : ?>
            $('#next-form').attr('disabled', 'disabled');
            $('#next-form').click(function(e) {
                e.preventDefault();
                alert('Mohon maaf kuota minggu ini telah habis');
            });
        <?php else : ?>
            $('#next-form').click(function(e) {
                e.preventDefault();
                $('#form-registrasi').fadeOut();
                $('#form-keluhan').fadeIn();
            });
        <?php endif; ?>
    });

    $('.confirmation').on('click', function(e) {
        var c = confirm('Apakah Anda akan mengikuti protokol kesehatan selama ibadah berlangsung?');
        return c;
    });
</script>
@endsection