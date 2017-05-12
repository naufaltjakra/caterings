<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Caterings</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ elixir('css/app.css') }}" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">

</head>
<body id="app-layout">
    <nav class="navigation navigation-basic">
        <div class="container-fluid">
            <!-- Branding Image -->
            <a class="logo-control" href="{{ url('/') }}">
                <img src="{{ url('/image/logo_main.svg') }}" alt="" class="logo-main">
            </a>
                {{-- Admin Navigation --}}
                @if (Auth::check())
                    @can('admin-access')
                        <div class="navigation-left">
                            <a href="{{ url('/home') }}">Dashboard</a>
                            {{-- Dropdown style --}}
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Manage <span class="caret"></span>
                            </a>
                            {{-- Dropdown menu --}}
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ route('categories.index') }}"><i class="fa fa-btn fa-tabs"></i>Category</a></li>
                            </ul>
                            </div>
                        </div>

                        <div class="navigation-right">
                            {{-- Dropdown style --}}
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            {{-- Dropdown menu --}}
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}">Logout</a></li>
                            </ul>
                            </div>
                        </div>
                    @endcan
                @endif
                
                {{-- Customer Navigation --}}
                @if (Auth::check())
                    @can('customer-access')
                        <div class="navigation-left">
                        <a href="{{ url('/') }}">Dapur Mitra</a>
                        <a href="{{ url('/') }}">Cara Pesan</a>
                        <a href="{{ url('/') }}">Informasi</a>
                        </div>

                        <div class="navigation-right">
                            <a href="{{ url('/') }}">Paket Acara</a>
                            <a href="{{ url('/') }}">Paket Katering</a>
                            {{-- Dropdown style --}}
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            {{-- Dropdown menu --}}
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/home') }}">Profil</a></li>
                                <li><a href="{{ url('/logout') }}">Logout</a></li>
                            </ul>
                            </div>
                        </div>
                    @endcan
                @endif

                {{-- Guest Navigation --}}
                @if (Auth::guest())
                    <div class="navigation-left">
                        <a href="{{ url('/') }}">Dapur Mitra</a>
                        <a href="{{ url('/') }}">Cara Pesan</a>
                        <a href="{{ url('/') }}">Informasi</a>
                    </div>

                    <div class="navigation-right">
                        <a href="{{ url('/') }}">Paket Acara</a>
                        <a href="{{ url('/') }}">Paket Katering</a>
                        <a href="{{ url('/login') }}" class="login" >Masuk</a>
                    </div>
                @endif
            </div>
    </nav>

    @if (session()->has('flash_notification.message'))
        <div class="container">
            <div class="alert alert-{{ session()->get('flash_notification.level') }}">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                {{ session()->get('flash_notification.message') }}
            </div>
        </div>
    @endif
    
    @yield('content')
    
    <footer>
        <div class="container-fluid footer-control">
            <div class="row top-footer">
                <div class="col-md-3">
                    <img src="{{ url('image/logo_main.svg') }}" alt="" class="logo-footer">
                    <div class="tagline">Praktis &#8212 Hemat &#8212 Lezat</div>
                </div>
                <div class="col-md-3">
                    <ul class="list-footer">
                        <li class="title-list-footer">Tentang Catering</li>
                        <li><a href="">Cara Pesan</a></li>
                        <li><a href="">Syarat dan Ketentuan</a></li>
                        <li><a href="">Kebijakan Privasi</a></li>
                        <li><a href="">FAQ</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="list-footer">
                        <li class="title-list-footer">Informasi Catering</li>
                        <li><a href="">Dapur Mitra</a></li>
                        <li><a href="">Gabung di Dapur Mitra</a></li>
                        <li><a href="">Program Referral</a></li>
                        <li><a href="">Kontak Caterings</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="list-footer">
                        <li class="title-list-footer">Metode Pembayaran</li>
                        <li><img src="{{ url('/image/payment_method.png') }}" class="payment-method"></li>
                        <hr>
                        <li class="info-whatsapp"><span class="title-info">Whatsapp </span>+6285740062767</li>
                        <li class="hari-kerja">(Hari kerja jam 9am &#8212 5pm)</li>
                    </ul>
                </div>
            </div>
            <div class="row bottom-footer">
                <div class="col-md-6 copyright-left">
                    Dibuat dengan <i class="fa fa-heart heart"></i> dari Semarang. &copy 2017 &#8212 Caterings &#8212 All rights reserved.
                </div>
                <div class="col-md-6 copyright-right">
                    <a href="https://www.instagram.com/cozquette/" ><img class="social-instagram" src="{{ url('image/social_instagram.svg') }}" alt=""></a>
                    <a href="https://www.facebook.com/cozquette/" ><img class="social-facebook" src="{{ url('image/social_facebook.svg') }}" alt=""></a>
                    <a href="http://line.me/ti/p/%40wpp7575u" ><img class="social-line" src="{{ url('image/social_line.svg') }}" alt=""></a>
                </div>
            </div>
        </div>
    </footer>

    <!-- JavaScripts -->
    <script src="{{ elixir('js/all.js') }}"></script>
</body>
</html>
