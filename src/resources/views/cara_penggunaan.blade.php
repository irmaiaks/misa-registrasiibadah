@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default" style="background-color: #edcfa9;">
                <div class="panel-heading" style="background-color: #e89f71;">
                    <h4 style="text-align: center; font-family:Arial, Helvetica, sans-serif"><strong> Panduan Penggunaan Aplikasi</strong></h4>
                </div>

                <div class="panel-body">
                    <!-- <h4 style="text-align: left; color:black"><strong> Penjelasan </strong></h4>
                    <h5 style="text-align: left; color:black">Aplikasi E-Registration ini adalah Aplikasi Elektronik Registrasi Ibadah yang sangat dibutuhkan oleh masyarakat, khususnya pelayan gerejawi.
                        Aplikasi ini akan digunakan oleh jemaat untuk masuk beribadah secara offline di dalam Gereja pada saat Era New Normal. Aplikasi ini akan membatasi jemaat yang awalnya pihak
                        Gerejawi memperbolehkan semua jemaat masuk kedalam Gereja, dengan aplikasi ini jemaat akan dibatasi untuk beribadah offline di dalam Gereja.</h5>
                    <hr>
                    <hr>
                    <h4 style="text-align: left; color:black"><strong> Panduan Masuk E-Registration</strong></h4>

                    <h5 style="text-align: left; color:black">1. Jika Anda sudah memiliki akun, maka Anda dipersilahkan masuk menggunakan Nama Pengguna dan Password yang sudah Anda buat sebelumnya (Kotak Merah).
                        Jika Anda belum memiliki akun, maka Anda dipersilahkan membuat akun terlebih dahulu di Daftar Akun (Kotak Hitam) dan silahkan mengisi identitas sesuai KTP Anda</h5>
                    <img style="width: 100%; height: auto;" src="{{ asset('template/img/p1.png') }}">
                    <br>
                    <br>
                    <img style="width: 100%; height: auto;" src="{{ asset('template/img/p2..png') }}">

                    <hr>
                    <h5 style="text-align: left; color:black">2. Setelah Anda melakukan login atau Daftar Akun, maka Anda akan masuk ke halaman utama E-registration Worship. Terlihat beberapa menu yang bisa Anda kunjungi seperti Visi & Misi Gereja,
                        Registrasi Ibadah, Informasi Ibadah, Data Diri, Kontak, QrCode, dan Logout</h5>
                    <img style="width: 100%; height: auto;" src="{{ asset('template/img/p3.png') }}">

                    <hr>
                    <h5 style="text-align: left; color:black">3. Tampilan pada menu Visi & Misi Gereja </h5>
                    <img style="width: 100%; height: auto;" src="{{ asset('template/img/p4.png') }}">
                    <hr>
                    <h5 style="text-align: left; color:black">4. Tampilan pada menu Registrasi Ibadah </h5>
                    <img style="width: 100%; height: auto;" src="{{ asset('template/img/p10.png') }}">
                    <hr>
                    <h5 style="text-align: left; color:black">5. Tampilan pada menu Informasi Ibadah </h5>
                    <img style="width: 100%; height: auto;" src="{{ asset('template/img/p5.png') }}">
                    <hr>
                    <h5 style="text-align: left; color:black">6. Tampilan pada menu Data Diri </h5>
                    <img style="width: 100%; height: auto;" src="{{ asset('template/img/p6.png') }}">
                    <hr>
                    <h5 style="text-align: left; color:black">7. Tampilan pada menu Kontak </h5>
                    <img style="width: 100%; height: auto;" src="{{ asset('template/img/p7.png') }}">
                    <hr>
                    <h5 style="text-align: left; color:black">8. Tampilan pada menu QrCode </h5>
                    <img style="width: 100%; height: auto;" src="{{ asset('template/img/p8.png') }}">
                    <hr>
                    <h5 style="text-align: left; color:black">9. Menu Logout </h5>
                    <img style="width: 100%; height: auto;" src="{{ asset('template/img/p9.png') }}">
                    <hr>
                    <hr>
                    <h4 style="text-align: left; color:black"><strong> Panduan Registrasi Ibadah </strong></h4>

                    <h5 style="text-align: left; color:black">1. Pergi ke menu Registrasi Ibadah. Diharapkan Anda membaca peraturan ibadah terlebih dahulu dibawah ini sebelum melakukan
                        registrasi ibadah dan pastikan Anda telah menyetujui peraturan tersebut (Kolom Merah). Setelah Anda menyetujui peraturan ibadah, silahkan Anda klik Lanjut untuk tahap pemilihan kategori ibadah (Kolom Merah).</h5>
                    <img style="width: 100%; height: auto;" src="{{ asset('template/img/p10.png') }}">
                    <br>
                    <br>
                    <img style="width: 100%; height: auto;" src="{{ asset('template/img/r1.png') }}">

                    <hr>
                    <h5 style="text-align: left; color:black">2. Selanjutnya, silahkan Anda memilih kategori yang Anda ingin datangi (Sebagai contoh Kategori Ibadah Umum). </h5>
                    <img style="width: 100%; height: auto;" src="{{ asset('template/img/r22.png') }}">

                    <hr>
                    <h5 style="text-align: left; color:black">3. Lalu, Anda di minta memilih beberapa katagori ibadah umum kembali, seperti Ibadah subuh, pagi, dan sore.
                        yang mana masing-masing kategori memiliki batas kouta yaitu <strong> 100 kouta.</strong> Perhatikan sisa Kouta yang tersisa (sebagai contoh Ibadah Subuh) </h5>
                    <img style="width: 100%; height: auto;" src="{{ asset('template/img/r3 umum.png') }}">

                    <hr>
                    <h5 style="text-align: left; color:black">4. Kemudian, silahkan Anda melakukan pengisian data terlebih dahulu, lalu klik Lanjut. (Perhatikan sisa kouta)</h5>
                    <img style="width: 100%; height: auto;" src="{{ asset('template/img/r4.png') }}">

                    <hr>
                    <h5 style="text-align: left; color:black">5. lalu, Anda diminta mengisi keluhan penyakit yang diderita, jika Anda merasakan penyakit yang tertera di halaman tersebut, maka Anda klik di button <strong> Ya </strong>, jika tidak merasakan keluhan penyakit tersebut, maka klik button <strong> Tidak</strong>.
                        Kemudian klik <strong>Kirim</strong></h5>
                    <img style="width: 100%; height: auto;" src="{{ asset('template/img/r5.png') }}">

                    <hr>
                    <h5 style="text-align: left; color:black">5. Kemudian, akan menampilkan QrCode. Lalu, silahkan Anda download QrCode tersebut untuk akses masuk beribadah secara offline.</h5>
                    <img style="width: 100%; height: auto;" src="{{ asset('template/img/r6.png') }}">

                    <hr>
                    <h5 style="text-align: left; color:black">6. Sama halnya jika Anda ingin melakukan registrasi ibadah terjadwal, langkah-langkahnya sama seperti ketika Anda melakukan registrasi ibadah umum.</h5>

                    <hr>
                    <h5 style="text-align: left; color:black">7. Lalu, silahkan Anda datang ke Gereja sesuai dengan jadwal yang sudah tertera dan berikan gambar QrCode yang sudah anda download sebelumnya untuk mengakses Anda beribadah secara offline di dalam Gereja.</h5>------>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection