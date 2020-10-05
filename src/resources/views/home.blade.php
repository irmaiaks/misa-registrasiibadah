@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default" style="background-color: #edcfa9;">
                <div class="panel-heading" style="background-color: #e89f71;">
                    <p style="text-align: center; color:black; font-size:medium; font-family:Arial, Helvetica, sans-serif">
                        Halo <strong>{{ Auth::user()->username }}</strong>, Selamat Datang!<br>
                        <strong> Tuhan Yesus Memberkati!</strong>
                    </p>
                </div>

                <div class="panel-body">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe width="644" height="365" src="https://youtube.com/embed/lkuYfY4w8U4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="panel-body">
                        <p style="text-align: center; color:black; font-family:Arial, Helvetica, sans-serif; margin-bottom:0%"><strong> Persembahan Pujian </strong></p>
                    </div>
                    <hr>
                    <hr>
                    <div class="panel-body">
                        <p style="text-align: center;color:black; font-family:Arial, Helvetica, sans-serif; font-size:16px"><strong>SEJARAH GEREJA KALIMANTAN EVANGELIS</strong></p>
                        <p style="text-align:justify;color:black; font-family:Arial, Helvetica, sans-serif">Sejarah Gereja Kalimantan Evangelis (GKE) dimulai pada abad ke-19 ketika di Eropa terjadi kebangkitan kesadaran untuk mengabarkan Injil ke seluruh dunia. Abad ini dikenal sebagai "The Great Century"
                            (Abad Agung) untuk Pengkabaran Injil (PI).</p>
                        <p style="text-align:justify;color:black; font-family:Arial, Helvetica, sans-serif">Pada tahun 1830-an tersiar kabar mengenai pulau Kalimantan di tanah Jerman. Dalam cerita-cerita itu digambarkan mengenai raturan ribu orang Dayak masih tertinggal dalam peradaban: sering terjadi perang antar suku,
                            praktek pengayauan, masyarakatnya tidak mengenal pendidikan dan pelayanan kesehatan. Orang0orang Dayak tersebut tinggal dalam "kegelapan", karena belum menerima Injil.
                            karena itu muncul kerinduan, kesadaran dan semnagat yan menggebu-gebu dikalangan umat Kristen di Jerman untuk memberitakan Injil ke Kalimantan.</p>
                    </div>

                    <hr>
                    <hr>

                    <div class="panel-body">
                        <p style="text-align: center; color:black; font-family:Arial, Helvetica, sans-serif; margin-bottom:0%; font-size:16px"><strong>SINODE GEREJA KALIMANTAN EVANGELIS</strong></p>
                        <p style="text-align: center; color:black; font-family:Arial, Helvetica, sans-serif ; font-size:15px"><strong> "Gereja Asi"</strong></p>
                        <p style="text-align:justify; color:black; font-family:Arial, Helvetica, sans-serif">Majelis GKE Rajawali Gereja Asi adalah sebuah sinode atau persekutuan Gereja Kalimantan Evangelis yang berpusat di Kota Palangka Raya.</p>

                        <p style="text-align: left; color:black; font-family:Arial, Helvetica, sans-serif"> Singkatan : GKE</p>
                        <hr>
                        <p style="text-align: left; color:black; font-family:Arial, Helvetica, sans-serif"> Klasifikasi : Majelis Gereja Kalimantan Evangelis Rajawali Gereja Asi</p>
                        <hr>
                        <p style="text-align: left; color:black; font-family:Arial, Helvetica, sans-serif"> Naskah Agama : Kitab Suci (Alkitab) Perjanjian Baru & Lama</p>
                        <hr>
                        <p style="text-align: left; color:black; font-family:Arial, Helvetica, sans-serif"> Bahasa : Indonesia, Dayak Ngaju, dan Dayak Ma'anyan</p>
                        <hr>
                        <p style="text-align: left; color:black; font-family:Arial, Helvetica, sans-serif"> Kantor Pusat : Jl. Sapan, Palangka Raya, Kalimantan Tengah</p>
                        <hr>
                        <p style="text-align: left; color:black; font-family:Arial, Helvetica, sans-serif"> Pendiri : Pdt. Yannie S.th.</p>
                        <hr>
                        <p style="text-align: left; color:black; font-family:Arial, Helvetica, sans-serif"> Jemaat : 5.000 (2019)</p>
                    </div>

                    <hr>
                    <hr>

                    <div class="panel-body">
                        <p style="text-align: center;color:black; font-family:Arial, Helvetica, sans-serif; font-size:16px"><strong>STRUKTUR ORGANISASI</strong></p>
                        <br>
                        <div class="float: center">
                            <img style="width: 85px; height: auto;" src="{{ asset('template/img/21duasatu.png') }}">
                            &ensp;
                            &ensp;
                            &ensp;
                            <img style="width: 85px; height: auto;" src="{{ asset('template/img/20duapuluh.png') }}">
                            &ensp;
                            &ensp;
                            &ensp;
                            <img style="width: 85px; height: auto;" src="{{ asset('template/img/21duasatu.png') }}">
                            &ensp;
                            &ensp;
                            &ensp;
                            <img style="width: 85px; height: auto;" src="{{ asset('template/img/20duapuluh.png') }}">
                            &ensp;
                            &ensp;
                            &ensp;
                            <img style="width: 85px; height: auto;" src="{{ asset('template/img/21duasatu.png') }}">
                        </div>

                        <!--<div class="col-md-6 col-md-offset-4">
                            <img style="width: 65px; height: auto;" src="{{ asset('template/img/ce.png') }}">
                            <p style="text-align: left; color:black;">sekretaris</p>
                        </div>---->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection