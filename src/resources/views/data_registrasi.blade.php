@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default" style="background-color: #edcfa9;">
                <div class="panel-heading" style="background-color: #e89f71;">
                    <h3 style="text-align: center; font-family:Arial, Helvetica, sans-serif;"><strong>Data Diri</strong></h3>
                </div>

                <div class="panel-body">
                    <table style="margin-left: auto; margin-right: auto; color:black; font-family:Arial, Helvetica, sans-serif;">
                        <tr>
                            <td>NIK/NIM</td>
                            <td> &ensp; &ensp;: {{ $data->profil->nik }}</td>
                        </tr>
                        <tr>
                            <td>Nama Lengkap</td>
                            <td> &ensp; &ensp;: {{ $data->profil->nama_lengkap }}</td>
                        </tr>
                        <tr>
                            <td>Tempat/Tanggal Lahir</td>
                            <td> &ensp; &ensp;: {{ $data->profil->tempat_lahir }}</td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td> &ensp; &ensp;: {{ $data->profil->alamat }}</td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td> &ensp; &ensp;: {{ $data->profil->jenis_kelamin }}</td>
                        </tr>
                        <tr>
                            <td>RT/RW</td>
                            <td> &ensp; &ensp;: {{ $data->profil->rtrw }}</td>
                        </tr>
                        <tr>
                            <td>Kecamatan</td>
                            <td> &ensp; &ensp;: {{ $data->profil->kecamatan }}</td>
                        </tr>
                        <tr>
                            <td>Kelurahan</td>
                            <td> &ensp; &ensp;: {{ $data->profil->kelurahan }}</td>
                        </tr>
                        <tr>
                            <td>No. Handphone</td>
                            <td> &ensp; &ensp;: {{ $data->profil->no_hp }}</td>
                        </tr>
                    </table>
                    <br>

                    <table class="table table-bordered table-striped" style="color: black; font-family:Arial, Helvetica, sans-serif;">
                        <thead>
                            <tr>
                                <td class="center" style="width: 10%; background-color:#e89f71; color:black;"><strong>No</strong></td>
                                <td class="center" style="width: 25%; background-color:#e89f71; color:black;"><strong>Jenis Ibadah</strong></td>
                                <td class="center" style="width: 25%; background-color:#e89f71; color:black;"><strong>Jadwal Ibadah</strong></td>

                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            use Illuminate\Support\Facades\Auth;

                            $no = 1; ?>
                            <?php $tes = \App\Profil::where('user_id', Auth::user()->id)->first(); ?>
                            @foreach (\App\Registrasi::where('profil_id', $tes->id)->orderBy('id', 'DESC')->limit(1)->get() as $regist)
                            <tr>
                                <td class="center" style="background-color: #edcfa9; color:black; font-family:Arial, Helvetica, sans-serif;">{{ $no }}</td>
                                <td class="center" style="background-color: #edcfa9; color:black; font-family:Arial, Helvetica, sans-serif;">{{ $regist->jadwal->jenis->jenis }}</td>
                                <td class="center" style="background-color: #edcfa9; color:black; font-family:Arial, Helvetica, sans-serif;">{{ $regist->jadwal->jadwal }}
                                    (@if ($regist->jadwal->hari) {{ $regist->jadwal->hari }}, @endif {{ date('H:i', strtotime($regist->jadwal->mulai)) }} - {{ date('H:i', strtotime($regist->jadwal->selesai)) }} )</td>
                            </tr>
                            <?php $no++ ?>
                            @endforeach
                        </tbody>
                    </table>

                </div>


            </div>
        </div>
    </div>
</div>
@endsection