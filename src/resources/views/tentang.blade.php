@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default" style="background-color: #edcfa9;">
                <div class="panel-heading" style="background-color:#e89f71;">
                    <h3 style="text-align: center; color:black; font-family:Arial, Helvetica, sans-serif"><strong>Visi & Misi Gereja</strong></h3>
                </div>

                <div class="panel-body">
                    <div class="text-center">
                        <img style="text-align: center;" src="{{ asset('template/img/2dua.png') }}" width="100px" height="100px">
                    </div>
                    <br>
                    <p style="text-align: center; color:black; font-family:Arial, Helvetica, sans-serif; font-size:medium;"><strong>Visi</strong></p>
                    <p style="text-align: center; color:black; font-family:Arial, Helvetica, sans-serif; margin-bottom: 0%">"TERWUJUDNYA LANGIT YANG BARU DAN BUMI YANG BARU"</p>
                    <p style="text-align: center; color:black; font-family:Arial, Helvetica, sans-serif; margin-bottom: 0%"> (Wahyu 21 : 1-3)</p>
                </div>

                <div class="panel-body">
                    <p style="text-align: center; color:black; font-family:Arial, Helvetica, sans-serif; font-size:medium"><strong>Misi</strong></p>
                    <p style="text-align: center; color:black; font-family:Arial, Helvetica, sans-serif">Segenap jajaran GKE siap menjadi alat dalam tangan Tuhan untuk mendirikan tanda-tanda Kerajaan Allah di Kalimantan khususnya dan Indonesia umumnya.</p>
                </div>
                <!--------<div class="panel-body">
                    <p style="text-align: center;"></p>--------->
            </div>
        </div>
    </div>
</div>
</div>
@endsection