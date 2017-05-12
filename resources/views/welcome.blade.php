@extends('layouts.app')

@section('content')
<div class="container-fluid box-inner">
    {{-- Header Content --}}
    <div class="row box-outter header-box control-margin">
        <div class="image-header-box">
            <img src="{{ url('/image/image_top.png') }}" alt="" class="image-header">
        </div>
        <div class="col-md-6 col-md-offset-6 header-content">
            <h1 class="header-menu">Menu berbeda setiap hari, dijamin tidak akan bosan.</h1>
            <div class="subtitle-header">
                Kami menyediakan pilihan menu menarik untuk anda
            </div>
            <div class="control-menu-top">
                <div class="col-md-6 box-inner">
                    <a href="">
                        <div class="box-menu">
                            <img src="{{ url('/image/paket_katering.svg') }}" alt="" class="paket">
                            <div class="title-paket">
                                Katering
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 box-inner">
                    <a href="">
                        <div class="box-menu">
                            <img src="{{ url('/image/paket_acara.svg') }}" alt="" class="paket">
                            <div class="title-paket">
                                Acara
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="video-box">
                <div class="col-md-3 box-inner">
                    <a href=""><img src="{{ url('image/play_video.svg') }}" alt="" class="video-player"><span class="play-video">Play Video</span></a>
                </div>
                <div class="col-md-9 box-inner">
                    <hr class="hr-dash">
                </div>
            </div>
        </div>
    </div>

    {{-- Section Paket Menu Katering --}}
    <div class="background-section-paket">
        <div class="row control-margin section-foo">
            <div class="col-md-5 left-content-paket">
                <h1 class="paket-katering-title">Menu Katering</h1>
                <div class="content-section">Langganan makan siang dan malam bisa dipilih sesuai seleramu</div>
                <a href="" class="button-outline-bg foo-button">Lihat Semua Menu</a>
            </div>
            <div class="col-md-7 ">
                <div class="paket-box-katering">
                    <img src="{{ url('/image/bento.jpg') }}" class="preview-paket" alt="">
                    <div class="title-box-katering">Deluxe Bento Box</div>
                    <div class="content-paket">Paket makan siang dengan menu beragam, lengkap, dan porsi yang pas.</div>
                    <div class="harga-paket">Rp 20.000<span class="per-hari">/hari</span></div>
                    <a href=""><div class="button-solid-sm">Lihat Menu</div></a>
                </div>
                <div class="paket-box-acara">
                    <img src="{{ url('/image/bento.jpg') }}" class="preview-paket" alt="">
                    <div class="title-box-katering">Deluxe Bento Box</div>
                    <div class="content-paket">Pakte makan siang dengan menu beragam, lengkap, dan porsi yang pas.</div>
                    <div class="harga-paket">Rp 20.000<span class="per-hari">/hari</span></div>
                    <a href=""><div class="button-solid-sm">Lihat Menu</div></a>
                </div>
            </div>
        </div>

        <hr class="separator">

        <div class="row paket-acara-box control-margin">
            <div class="col-md-6 box-inner">
                <img src="{{ url('/image/bentos.jpg') }}" alt="" class="preview-paket-acara">
            </div>
            <div class="col-md-6 section-foo">
                <div class="control-box-acara">
                    <h1 class="title-paket-acara">Paket Menu Acara</h1>
                    <div class="subset-pake-acara">Bisa pesan banyak untuk 1 hari saja</div>
                    <ul>
                        <li>Kamu bisa memilih beragam menu lezat dari dapur pilihan. Pemesanan minimal 20 box</li>
                        <li>Proses pemesanan lebih praktisdan mudah</li>
                        <li>Pemesanan maksimal 2 hari sebelum pengantaran</li>
                        <li>Harga sudah termasuk ongkir</li>
                    </ul>
                    <a href="" class="button-solid-sm pesan-seka">Pesan sekarang</a>
                </div>
            </div>
        </div>

        <div class="row control-margin box-outter background-note section-foo">
            <div class="col-md-4">
                <div class="col-md-3">
                    <img src="{{ url('/image/icon_shield.svg') }}" alt="" class="note-icon">
                </div>
                <div class="col-md-9">
                    <div class="note-content-1">
                        Garansi uang kembali
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="col-md-3">
                    <img src="{{ url('/image/icon_calendar.svg') }}" alt="" class="note-icon">
                </div>
                <div class="col-md-9">
                    <div class="note-content-1">
                        Garansi uang kembali
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="col-md-3">
                    <img src="{{ url('/image/icon_cargo.svg') }}" alt="" class="note-icon">
                </div>
                <div class="col-md-9">
                    <div class="note-content-1">
                        Garansi uang kembali
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
@endsection
