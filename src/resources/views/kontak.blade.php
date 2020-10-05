@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default" style="background-color: #edcfa9; font-family:Arial, Helvetica, sans-serif;">
                <div class="panel-heading" style="background-color: #e89f71; font-family:Arial, Helvetica, sans-serif;">
                    <h3 style="text-align: center;"><strong>Kontak</strong></h3>
                </div>

                <div class="panel-body">
                    <div class="text-center">
                        <img style="text-align: center;" src="{{ asset('template/img/12duabelas.png') }}" width="100px" height="100px">
                    </div>
                    <br>
                    <p style="text-align: center; color:black; font-size:medium"><strong>Majelis Rajawali GKE Palangka Raya (Kantor Pusat)</strong>
                    </p>


                    <p><img href="{{ url('/') }}" src="{{ asset('template/img/13tigabelas.png') }}" style="float: left;" width="20px" height="20px;">
                        <p style="text-align: left; color:black"> &ensp; +62 823-5494-1653</p>


                        <p><img href="{{ url('/') }}" src="{{ asset('template/img/14empatbelas.png') }}" style="float: left;" width="20px" height="20px"></p>
                        <p style="text-align: left; color:black">&ensp; sinodeasisekretariat@gmail.com</p>
                        <p><img href="{{ url('/') }}" src="{{ asset('template/img/15limabelas.png') }}" style="float: left;" width="20px" height="20px">
                            <p style="text-align: left; color:black"> &ensp; Jl. Sapan VII B No.01, Bukit Tunggal, Kec. Jekan Raya, Kota Palangka Raya, Kalimantan Tengah 73112</p>
                            <hr>
                            <p style="text-align: left; color:black"><strong>Sosial Media</strong>
                                <p><img href="{{ url('/') }}" src="{{ asset('template/img/16enambelas.png') }}" style="float: left;" width="20px" height="20px"></p>
                                <p style="text-align: left; color:black">&ensp; @mjgkerajawali</p>

                                <p><img href="{{ url('/') }}" src="{{ asset('template/img/17tujuhbelas.png') }}" style="float: left;" width="20px" height="20px"></p>
                                <p style="text-align: left; color:black">&ensp; Majelis Jemaat Gke Rajawali Palangka Raya </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection