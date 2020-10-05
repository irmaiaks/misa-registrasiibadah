@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default" style="background-color: #edcfa9;">
                <div class="panel-heading" style="background-color:#e89f71; text-align: center; font-size:larger; font-family:Arial, Helvetica, sans-serif"><strong> Selamat Datang di Majelis Rajawali GKE Palangka Raya "Gereja Asi"</strong></div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <br>
                            <br>
                            <br>
                            <!----<h4 style="color: black; text-align:center"> <strong> Masuk </strong> </h4>----->
                            <br>


                            <label for="username" class="col-md-4 control-label" style="color:black; font-family:Arial, Helvetica, sans-serif">Nama Pengguna</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Nama Pengguna" required autofocus style="background-color: beige; font-family:Arial, Helvetica, sans-serif;">

                                @if ($errors->has('username'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('username') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label" style="color: black; font-family:Arial, Helvetica, sans-serif">Kata Sandi</label>

                            <div class="col-md-6">
                                <input id="password" type="password" max="12" class="form-control" name="password" placeholder="Kata Sandi" required style="background-color: beige; font-family:Arial, Helvetica, sans-serif" maxlength="12" minlength="8">

                                @if ($errors->has('password'))
                                <span class=" help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <!-- <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : ''}}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div> -->

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type=" submit" class="btn btn" style="background-color: #aa4a30; color:black; font-family:Arial, Helvetica, sans-serif">
                                    <strong>Masuk</strong>
                                </button>

                                <!-- <a class="btn btn-link" href="{{ url('/password/reset') }}">
                                    Forgot Your Password?
                                </a> -->
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-18 offset-md-4">
                                <p style="text-align: center; color:black; font-family:Arial, Helvetica, sans-serif">Belum memiliki akun ?
                                    <a class="btn btn-link" href="{{ route('register') }}" style="color:black; font-family:Arial, Helvetica, sans-serif">
                                        <strong>Daftar Akun!</strong>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </form>
                    <br>
                    <br>
                    <br>
                    <br>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection