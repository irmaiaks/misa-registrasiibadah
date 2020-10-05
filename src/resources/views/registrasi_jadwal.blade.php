@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default" style="background-color: #edcfa9;">
                <div class="panel-heading" style="background-color:#e89f71;">
                    <h3 style="text-align: center; font-family:Arial, Helvetica, sans-serif"><strong> Registrasi Ibadah Terjadwal </strong></h3>
                </div>

                <div class="panel-body" id="form-jenis">
                    <div style="text-align: center; color:black; font-family:Arial, Helvetica, sans-serif">

                        <h4>Pilih Jadwal Ibadah</h4>
                        <h5>Perhatikan! Sisa Kuota Jemaat, pihak Gereja hanya menerima <strong> 50 kuota </strong>!</h5>

                        @foreach ($jadwal as $jadwal)
                        <div class="row">
                            <a style="width: 445px; height: 56px; background-color:#e89f71; color:black; font-family:Arial, Helvetica, sans-serif" href="{{ route('form.registrasi', $jadwal->id) }}" class="btn btn">
                                <strong> {{ $jadwal->jadwal }} (@if ($jadwal->hari) {{ $jadwal->hari }}, @endif {{ date('H:i', strtotime($jadwal->mulai)) }} - {{ date('H:i', strtotime($jadwal->selesai)) }} ) </strong>
                                <br>
                                <strong> Kuota Jemaat: {{ \App\Kuota::where(array('jadwal_ibadah_id' => $jadwal->id))->first()->kuota }}/{{ $jadwal->kuota }}</strong>
                            </a>
                            <br>
                        </div>
                        <br>
                        @endforeach
                    </div>
                    <div style="text-align:center">
                        <a style="width: 100px; height: 40px; background-color:#aa4a30;color:white; font-family:Arial, Helvetica, sans-serif" class="btn btn" href="{{ url('/registrasi') }}"><strong> Kembali </strong></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('javascript')
@endsection