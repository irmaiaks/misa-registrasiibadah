@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default" style="background-color: #edcfa9;">
                <div class="panel-heading" style="background-color:#e89f71;">
                    <h3 style="text-align: center; font-family:Arial, Helvetica, sans-serif"><strong>Registrasi Ibadah</strong></h3>
                </div>
                <div class="panel-body" id="tata-cara">
                    <h4 style="text-align: center; color: black; margin-bottom: 1%; font-family:Arial, Helvetica, sans-serif"><strong> Peraturan Ibadah New Normal </strong></h4>
                    <h5 style="text-align: center; color: black; margin-bottom: 5%; font-family:Arial, Helvetica, sans-serif"><strong> Diharapkan Anda membaca peraturan ibadah terlebih dahulu sebelum melakukan registrasi ibadah & pastikan Anda telah menyetujui peraturan tersebut </strong></h5>
                    <hr>
                    <hr>
                    <div style="text-align: center; color: black; font-family:Arial, Helvetica, sans-serif">
                        <img style="width: 50px;  height: auto;" src="{{ asset('template/img/22duadua.png') }}">
                        &ensp;
                        <img style="width: 50px;  height: auto;" src="{{ asset('template/img/22duadua.png') }}">
                        &ensp;
                        <img style="width: 50px;  height: auto;" src="{{ asset('template/img/22duadua.png') }}">
                        <p> 1. Pada Ibadah Umum pihak Gereja hanya menerima <br>
                            100 Kouta Jemaat & Pada Ibadah Terjadwal Pihak <br>
                            Gereja hanya menerima 50 Kouta Jemaat</p>
                    </div>
                    <br>
                    <div style="text-align: center; color: black; font-family:Arial, Helvetica, sans-serif">
                        <img style="width: 50px;  height: auto;" src="{{ asset('template/img/3tiga.png') }}">
                        &ensp;
                        <img style="width: 50px;  height: auto;" src="{{ asset('template/img/3tiga.png') }}">
                        &ensp;
                        <img style="width: 50px;  height: auto;" src="{{ asset('template/img/3tiga.png') }}">
                        <p> 2. Pastikan Anda dalam Kondisi Sehat</p>
                    </div>
                    <br>
                    <div style="text-align: center; color: black; font-family:Arial, Helvetica, sans-serif">
                        <img style="width: 50px; height: auto;" src="{{ asset('template/img/4empat.png') }}">
                        &ensp;
                        <img style="width: 50px; height: auto;" src="{{ asset('template/img/4empat.png') }}">
                        &ensp;
                        <img style="width: 50px; height: auto;" src="{{ asset('template/img/4empat.png') }}">
                        <p> 3. Meyakini bahwa Gereja telah memiliki <br>
                            surat keterangan aman Covid-19 dari pihak berwenang </p>
                    </div>
                    <br>
                    <div style="text-align: center; color: black; font-family:Arial, Helvetica, sans-serif">
                        <img style="width: 50px; height: auto;" src="{{ asset('template/img/5lima.png') }}">
                        &ensp;
                        <img style="width: 50px; height: auto;" src="{{ asset('template/img/5lima.png') }}">
                        &ensp;
                        <img style="width: 50px; height: auto;" src="{{ asset('template/img/5lima.png') }}">
                        <p> 4. Menggunakan masker sejak keluar rumah <br>
                            dan selama berada di area Gereja </p>
                    </div>
                    <br>
                    <div style="text-align: center; color: black; font-family:Arial, Helvetica, sans-serif">
                        <img style="width: 50px; height: auto;" src="{{ asset('template/img/6enam.png') }}">
                        &ensp;
                        <img style="width: 50px; height: auto;" src="{{ asset('template/img/6enam.png') }}">
                        &ensp;
                        <img style="width: 50px; height: auto;" src="{{ asset('template/img/6enam.png') }}">
                        <p>5. Menjaga kebersihan tangan dengan sering <br>
                            mencuci tangan menggunakan sabun atau hand sanitizer</p>
                    </div>
                    <br>
                    <div style="text-align: center; color: black; font-family:Arial, Helvetica, sans-serif">
                        <img style="width: 50px;  height: auto;" src="{{ asset('template/img/7tujuh.png') }}">
                        &ensp;
                        <img style="width: 50px;  height: auto;" src="{{ asset('template/img/7tujuh.png') }}">
                        &ensp;
                        <img style="width: 50px;  height: auto;" src="{{ asset('template/img/7tujuh.png') }}">
                        <p> 6. Menghindari kontak fisik, seperti <br>
                            bersalaman atau berpelukan dan menjaga jarak <br>
                            antar Jemaat minimal 1 meter(Physical Distancing)</p>
                    </div>
                    <br>
                    <div style="text-align: center; color: black; font-family:Arial, Helvetica, sans-serif">
                        <img style="width: 50px;  height: auto;" src="{{ asset('template/img/8delapan.png') }}">
                        &ensp;
                        <img style="width: 50px;  height: auto;" src="{{ asset('template/img/8delapan.png') }}">
                        &ensp;
                        <img style="width: 50px;  height: auto;" src="{{ asset('template/img/8delapan.png') }}">
                        <p>7. Jemaat wajib menyiapkan persembahan syukur di dalam amplop</p>
                    </div>
                    <br>
                    <div style="text-align: center; color: black; font-family:Arial, Helvetica, sans-serif">
                        <img style="width: 50px; height: auto;" src="{{ asset('template/img/19sembilanbelas.png') }}">
                        &ensp;
                        <img style="width: 50px; height: auto;" src="{{ asset('template/img/19sembilanbelas.png') }}">
                        &ensp;
                        <img style="width: 50px; height: auto;" src="{{ asset('template/img/19sembilanbelas.png') }}">
                        <p> 8. Menghindari berdiam lama dan berkumpul di area Gereja, <br>
                            selain untuk kepentingan ibadah yang wajib </p>
                    </div>
                    <br>
                    <div style="text-align: center; color: black; font-family:Arial, Helvetica, sans-serif">
                        <img style="width: 50px; height: auto;" src="{{ asset('template/img/9sembilan.png') }}">
                        &ensp;
                        <img style="width: 50px; height: auto;" src="{{ asset('template/img/9sembilan.png') }}">
                        &ensp;
                        <img style="width: 50px; height: auto;" src="{{ asset('template/img/9sembilan.png') }}">
                        <p> 9. Melarang beribadah di Gereja bagi anak-anak <br>
                            warga lanjut usia yang rentan tertular penyakit, serta <br>
                            orang dengan sakit bawaan yang berisiko tinggi terhadap Covid-19 </p>
                    </div>
                    <br>
                    <div style="text-align: center; color: black; font-family:Arial, Helvetica, sans-serif">
                        <img style="width: 50px; height: auto;" src="{{ asset('template/img/10sepuluh.png') }}">
                        &ensp;
                        <img style="width: 50px; height: auto;" src="{{ asset('template/img/10sepuluh.png') }}">
                        &ensp;
                        <img style="width: 50px; height: auto;" src="{{ asset('template/img/10sepuluh.png') }}">
                        <p> 10. Pengecekan suhu tubuh menggunakan Termometer Digital </p>
                    </div>
                    <br>
                    <div style="text-align: center; color: black; font-family:Arial, Helvetica, sans-serif">
                        <img style="width: 50px; height: auto;" src="{{ asset('template/img/11sebelas.png') }}">
                        &ensp;
                        <img style="width: 50px; height: auto;" src="{{ asset('template/img/11sebelas.png') }}">
                        &ensp;
                        <img style="width: 50px; height: auto;" src="{{ asset('template/img/11sebelas.png') }}">
                        <p> 11. Ikut peduli terhadap penerapan pelaksanaan <br>
                            protokol kesehatan di Gereja sesuai dengan ketentuan </p>
                    </div>

                    <br>
                    <div style="text-align:right; color: black; font-family:Arial, Helvetica, sans-serif">
                        <input type="checkbox" id="setuju" required> Saya setuju dengan peraturan yang sudah ditentukan &ensp;
                        <br>
                        <br>
                    </div>

                    <div style="text-align: center; color: black; font-family:Arial, Helvetica, sans-serif">
                        <a style="width: 100px; height: 40px; background-color:#aa4a30; color:white;" class="btn btn" id="next-tata-cara" href=""><strong> Lanjut </strong></a>
                    </div>
                </div>
                <!---------------------------------------------------------------------------------------------------------------------->
                <div class="panel-body" id="form-jenis">
                    <h2 style="text-align: center; font-family:Arial, Helvetica, sans-serif; color:black; font-size:20px; margin-bottom:4%"><strong>PILIH IBADAH</strong></h2>
                    <div style="text-align: center; color:black">
                        <div class="row">
                            <a style="width: 445px; height: 40px; background-color:#e89f71; color:black; font-family:Arial, Helvetica, sans-serif" href="{{ route('ibadah.umum') }}" class="btn btn"><strong> IBADAH UMUM</strong></a>
                        </div>
                        <br>
                        <div class="row">
                            <a style="width: 445px; height: 40px; background-color:#e89f71; color:black; font-family:Arial, Helvetica, sans-serif;" href="{{ route('ibadah.jadwal') }}" class="btn btn"><strong> IBADAH TERJADWAL</strong></a>
                        </div>
                    </div>
                    <br>
                    <div style="text-align:center">
                        <a style="width: 100px; height: 40px;background-color:#aa4a30; color:white; font-family:Arial, Helvetica, sans-serif" class="btn btn" id="prev-jenis" href=""><strong> Kembali </strong></a>
                    </div>
                </div>

                <!-- <div class="panel-body" id="form-registrasi">
                    <h4 style="text-align: center; color: red; margin-bottom: 5%">Perhatikan! Hanya menerima 100 kuota</h4>
                    <h4 style="text-align: center; color: red; margin-bottom: 5%">Sisa :  Kuota</h4>

                	<form class="form-horizontal" role="form" method="POST" action="{{ route('store.registrasi') }}">
                    {{ csrf_field() }}
                    <div class="form-group">
	                    <div class="col-md-12">
	                        <input type="text" class="form-control" name="nik" placeholder="NIK/NIM" @if ($profil) value="{{ $profil->nik }}" @endif required autofocus>
	                    </div>
	                </div>
                    <div class="form-group">
	                    <div class="col-md-12">
	                        <input type="text" class="form-control" name="nama_lengkap" placeholder="Nama Lengkap" @if ($profil) value="{{ $profil->nama_lengkap }}" @endif required autofocus>
	                    </div>
	                </div>
                    <div class="form-group">
	                    <div class="col-md-12">
	                        <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir/Tanggal Lahir" required autofocus @if ($profil) value="{{ $profil->tempat_lahir }}" @endif>
	                    </div>
	                </div>
                    <div class="form-group">
	                    <div class="col-md-12">
	                        <input type="text" class="form-control" name="alamat" placeholder="Alamat" required autofocus @if ($profil) value="{{ $profil->alamat }}" @endif>
	                    </div>
	                </div>
                    <div class="form-group">
	                    <div class="col-md-12">
	                    	<select class="form-control" name="jenis_kelamin" required>
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
	                        <input type="text" class="form-control" name="no_hp" placeholder="No. Tlp/Handphone" required autofocus @if ($profil) value="{{ $profil->no_hp }}" @endif>
	                    </div>
	                </div>

                	<br>
                    <div style="float: right;">
                    	<a class="btn btn-default" id="prev-form" href="">Kembali</a>
                    	<a class="btn btn-primary" id="next-form" href="">Next</a>
                    </div>
                </div>

                <div class="panel-body" id="form-keluhan">
                	<h4 style="text-align: center; color: red; margin-bottom: 5%">Perhatikan! Klik pada kolom Ya/Tidak</h4>
                	<p style="text-align: center;"><strong>Keluhan Penyakit</strong></p><br>

                	<div class="form-group row">
                        <label class="col-md-4 control-label">Demam</label>

                        <div class="col-md-6">
                            <input type="radio" name="demam" value="Ya" required> Ya &nbsp;
                            <input type="radio" name="demam" value="Tidak" required> Tidak
                        </div>
                    </div>
                	<div class="form-group row">
                        <label class="col-md-4 control-label">Sakit Tenggorokan</label>

                        <div class="col-md-6">
                            <input type="radio" name="tenggorokan" value="Ya" required> Ya &nbsp;
                            <input type="radio" name="tenggorokan" value="Tidak" required> Tidak
                        </div>
                    </div>
                	<div class="form-group row">
                        <label for="username" class="col-md-4 control-label">Batuk</label>

                        <div class="col-md-6">
                            <input type="radio" name="batuk" value="Ya" required> Ya &nbsp;
                            <input type="radio" name="batuk" value="Tidak" required> Tidak
                        </div>
                    </div>
                	<div class="form-group row">
                        <label class="col-md-4 control-label">Pilek</label>

                        <div class="col-md-6">
                            <input type="radio" name="pilek" value="Ya" required> Ya &nbsp;
                            <input type="radio" name="pilek" value="Tidak" required> Tidak
                        </div>
                    </div>
                	<div class="form-group row">
                        <label class="col-md-4 control-label">Sesak Napas</label>

                        <div class="col-md-6">
                            <input type="radio" name="sesak" value="Ya" required> Ya &nbsp;
                            <input type="radio" name="sesak" value="Tidak" required> Tidak
                        </div>
                    </div>

                	<div class="form-group">
                		<div style="float: right;">
	                		<a class="btn btn-default" id="prev-keluhan" href="">Kembali</a>
		                    <button type="submit" class="btn btn-primary confirmation">
		                        Kirim
		                    </button>
                		</div>
                    </div>
                	</form>
                </div> -->
            </div>
        </div>
    </div>
</div>
@endsection

@section('javascript')
<script>
    $(document).ready(function() {
        $('#form-jenis').hide();
        $('#form-registrasi').hide();
        $('#form-keluhan').hide();

        $('#next-tata-cara').click(function(e) {
            e.preventDefault();
            if ($('#setuju').is(':checked')) {
                $('#tata-cara').fadeOut();
                $('#form-jenis').fadeIn();
            } else {
                alert('Harap menyetujui peraturan selama beribadah');
            }
        });

        $('#btn-ibadah-umum').click(function(e) {
            e.preventDefault();
            $('#form-jenis').fadeOut();
            $('#form-registrasi-umum').fadeIn();
        });

        $('#btn-ibadah-jadwal').click(function(e) {
            e.preventDefault();
            $('#form-jenis').fadeOut();
            $('#form-registrasi-jadwal').fadeIn();
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