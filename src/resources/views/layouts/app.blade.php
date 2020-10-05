<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>MJ GKE Rajawali Gereja Asi</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Sweet Alert -->
    <link rel="stylesheet" href="{{ asset('template/sweetalert/dist/sweetalert.css') }}">

    <style type="text/css">
        .panel {
            padding-bottom: 5%;
        }

        .center {
            text-align: center;
        }

        /* Modal Header */
        .modal-header {
            padding: 2px 16px;
            background-color: #5cb85c;
            color: white;
        }

        /* Modal Body */
        .modal-body {
            padding: 2px 16px;
        }

        /* Modal Footer */
        .modal-footer {
            padding: 2px 16px;
            background-color: #5cb85c;
            color: white;
        }

        /* The Modal (background) */
        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1050;
            /* Sit on top */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4);
            /* Black w/ opacity */
        }

        /* Modal Content/Box */
        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            /* 15% from the top and centered */
            padding: 20px;
            border: 1px solid #888;
            width: 50%;
            /* Could be more or less, depending on screen size */
        }

        /* The Close Button */
        .close {
            color: black;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        /* Add Animation */
        @keyframes animatetop {
            from {
                top: -300px;
                opacity: 0
            }

            to {
                top: 0;
                opacity: 1
            }
        }
    </style>
    <!-- <script src="{{ asset('template/vendor/jquery/jquery.min.js') }}"></script> -->
    <script src="{{ asset('template/instascan.min.js') }}"></script>
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
                                'csrfToken' => csrf_token(),
                            ]); ?>
    </script>
</head>

<body style="background-image: url({{ asset('template/img/back11.png') }})">
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top" style="background-color: #edcfa9;">
            <div class="container">
                <div class="navbar-header" style="background-color: #edcfa9;">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <p><img href="{{ url('/') }}" src="{{ asset('template/img/1satu.png') }}" style="float: left;" width="45px" height="45px">
                        <a class="navbar-brand" href="{{ url('/') }}" style="color:black; font-family:Arial, Helvetica, sans-serif">
                            GKE RAJAWALI
                        </a>
                    </p>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse" style="background-color: #edcfa9;">


                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        <!--USER DAN ADMIN-->
                        @if (Auth::guest())
                        <li>
                            <a style="color:black; font-family:Arial, Helvetica, sans-serif; font-size:medium" href="{{ url('/login') }}">Masuk</strong>
                                <!--<img src="{{ asset('template/img/loginn.png') }}" style="float:left;  background-color:#e8e8e8" width="20px" height="20px">--->
                            </a>
                        </li>
                        <li><a style="color:black; font-family:Arial, Helvetica, sans-serif; font-size:medium" href="{{ url('/register') }}">Daftar Akun</strong></a></li>
                        <li><a style="color:black; font-family:Arial, Helvetica, sans-serif; font-size:medium" href="{{ route('cara.penggunaan') }}">Panduan Penggunaan</a></li>
                        @else
                        <li>
                            <a style="color:black;font-family:Arial, Helvetica, sans-serif; font-size:medium" href="{{ url('/home') }}">Utama</a>
                        </li>
                        <li>
                            <a style="color:black;font-family:Arial, Helvetica, sans-serif; font-size:medium" href="{{ url('/tentang') }}">Visi & Misi Gereja</a>
                        </li>
                        <li>
                            <a style="color:black;font-family:Arial, Helvetica, sans-serif; font-size:medium" href="{{ url('/registrasi') }}">Registrasi Ibadah</a>
                        </li>
                        <li>
                            <a style="color:black;font-family:Arial, Helvetica, sans-serif; font-size:medium" href="{{ url('/info') }}">Informasi Ibadah</a>
                        </li>
                        <li>
                            <a style="color:black;font-family:Arial, Helvetica, sans-serif; font-size:medium" href="{{ url('/data_registrasi') }}">Data Diri</a>
                        </li>
                        <li>
                            <a style="color:black;font-family:Arial, Helvetica, sans-serif; font-size:medium" href="{{ url('/kontak') }}">Kontak</a>
                        </li>
                        <li>
                            <a style="color:black;font-family:Arial, Helvetica, sans-serif; font-size:medium" href="{{ url('/qrcode') }}">QR Code</a>
                        </li>

                        @if (Auth::user()->role_id == 1)
                        <li>
                            <a style="color:black; font-family:Arial, Helvetica, sans-serif;font-size:medium" href="{{ url('/scan') }}">Scanner</a>
                        </li>
                        @endif

                        <!--LogOut-->

                        <li>
                            <a href="{{ url('/logout') }}" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                <p><img href="{{ url('/') }}" src="{{ asset('template/img/18delapanbelas.png') }}" style="float: right; background-color:#decbc5; font-family:Arial, Helvetica, sans-serif" width="25px" height="25px">
                                </p>
                            </a>

                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>

                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')


    </div>

    <!-- Scripts -->
    <script src="{{ asset('/js/app.js') }}"></script>
    <!-- Sweet Alert -->
    <script src="{{ asset('template/sweetalert/dist/sweetalert.min.js') }}"></script>
    <!-- <script src="{{ asset('template/vendor/jquery/jquery.min.js') }}"></script> -->
    @include('sweet::alert')

    @yield('javascript')


    <!--- #footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: white;
            padding-top: 1%;
            padding-bottom: 1%;
            text-align: center;
        }-->
</body>

</html>