@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default" style="background-color: #edcfa9;">
                <div class="panel-heading" style="background-color:#e89f71; text-align: center; font-size:larger; font-family:Arial, Helvetica, sans-serif"><strong>Daftar Akun</strong></div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('nik') ? ' has-error' : '' }}">
                            <label for="nik" class="col-md-4 control-label" style="color: black; font-family:Arial, Helvetica, sans-serif">NIK</label>

                            <div class="col-md-6">
                                <input style="background-color:beige; font-family:Arial, Helvetica, sans-serif" id="nik" type="text" class="form-control" name="nik" value="{{ old('nik') }}" placeholder="Nomor Induk Kependudukan" required autofocus maxlength="16">

                                @if ($errors->has('nik'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('nik') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('nama_lengkap') ? ' has-error' : '' }}">
                            <label for="nama_lengkap" class="col-md-4 control-label" style="color: black; font-family:Arial, Helvetica, sans-serif">Nama Lengkap (Sesuai KTP)</label>

                            <div class="col-md-6">
                                <input style="background-color:beige; font-family:Arial, Helvetica, sans-serif" id="nama_lengkap" type="text" class="form-control" name="nama_lengkap" value="{{ old('nama_lengkap') }}" placeholder="Nama Lengkap Sesuai KTP" required autofocus>

                                @if ($errors->has('nama_lengkap'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('nama_lengkap') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('tanggal_lahir') ? ' has-error' : '' }}">
                            <label for="tanggal_lahir" class="col-md-4 control-label" style="color: black; font-family:Arial, Helvetica, sans-serif">Tempat/Tanggal Lahir</label>

                            <div class="col-md-6">
                                <input style="background-color:beige; font-family:Arial, Helvetica, sans-serif" id="tanggal_lahir" type="text" class="form-control" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}" placeholder="Tempat/Tanggal Lahir" required autofocus>

                                @if ($errors->has('tanggal_lahir'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('tanggal_lahir') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('jenis_kelamin') ? ' has-error' : '' }}">
                            <label for="jenis_kelamin" class="col-md-4 control-label" style="color: black; font-family:Arial, Helvetica, sans-serif">Jenis Kelamin</label>

                            <div class="col-md-6">
                                <select style="background-color:beige; font-family:Arial, Helvetica, sans-serif" class="form-control" name="jenis_kelamin" required autofocus>
                                    <option value=""> Pilih Jenis Kelamin </option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>

                                @if ($errors->has('jenis_kelamin'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('jenis_kelamin') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('alamat') ? ' has-error' : '' }}">
                            <label for="alamat" class="col-md-4 control-label" style="color: black; font-family:Arial, Helvetica, sans-serif">Alamat (Sesuai KTP)</label>

                            <div class="col-md-6">
                                <input style="background-color:beige; font-family:Arial, Helvetica, sans-serif" id="alamat" type="text" class="form-control" name="alamat" value="{{ old('alamat') }}" placeholder="Alamat (Sesuai KTP)" required autofocus>

                                @if ($errors->has('alamat'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('alamat') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('rtrw') ? ' has-error' : '' }}">
                            <label for="rtrw" class="col-md-4 control-label" style="color: black; font-family:Arial, Helvetica, sans-serif">RT/RW</label>

                            <div class="col-md-6">
                                <input style="background-color:beige; font-family:Arial, Helvetica, sans-serif" id="rtrw" type="text" class="form-control" name="rtrw" value="{{ old('rtrw') }}" placeholder="Contoh: 01/02" required autofocus>

                                @if ($errors->has('rtrw'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('rtrw') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('kelurahan') ? ' has-error' : '' }}">
                            <label for="kelurahan" class="col-md-4 control-label" style="color: black; font-family:Arial, Helvetica, sans-serif">Kelurahan</label>

                            <div class="col-md-6">
                                <input style="background-color:beige; font-family:Arial, Helvetica, sans-serif" id="kelurahan" type="text" class="form-control" name="kelurahan" value="{{ old('kelurahan') }}" placeholder="Kelurahan" required autofocus>

                                @if ($errors->has('kelurahan'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('kelurahan') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('kecamatan') ? ' has-error' : '' }}">
                            <label for="kecamatan" class="col-md-4 control-label" style="color: black; font-family:Arial, Helvetica, sans-serif">Kecamatan</label>

                            <div class="col-md-6">
                                <input style="background-color:beige; font-family:Arial, Helvetica, sans-serif" id="kecamatan" type="text" class="form-control" name="kecamatan" value="{{ old('kecamatan') }}" placeholder="Kecamatan" required autofocus>

                                @if ($errors->has('kecamatan'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('kecamatan') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>


                        <hr>
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label" style="color: black; font-family:Arial, Helvetica, sans-serif">Nama Pengguna</label>

                            <div class="col-md-6">
                                <input style="background-color:beige; font-family:Arial, Helvetica, sans-serif" id="name" type="text" class="form-control" name="username" value="{{ old('name') }}" placeholder="Nama Pengguna" required autofocus>

                                @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label" style="color: black; font-family:Arial, Helvetica, sans-serif">Kata Sandi</label>

                            <div class="col-md-6">
                                <input style="background-color:beige; font-family:Arial, Helvetica, sans-serif" id="password" type="password" class="form-control" name="password" placeholder="Kata Sandi" required maxlength="12" minlength="8">

                                @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label" style="color: black; font-family:Arial, Helvetica, sans-serif">Konfirmasi Kata Sandi</label>

                            <div class="col-md-6">
                                <input style="background-color:beige; font-family:Arial, Helvetica, sans-serif" id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Konfirmasi Kata Sandi" required maxlength="12" minlength="8">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button style="background-color:#aa4a30; color:black; font-family:Arial, Helvetica, sans-serif" type="submit" class="btn btn">
                                    <strong> Daftar </strong>
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