@include('Layouts.header')
@extends('Layouts.header')

<link rel="stylesheet" href="{{ asset('css/ads.css') }}">

<section class="ads-wrapper">
    <div class="container d-flex justify-content-center">
        <div class="img-container w-100">

            <!-- TOP TEXT -->
            <div class="ads-top d-flex justify-content-between align-items-center flex-wrap text-center text-lg-start">
                <div class="ads-left">
                    <div class="ads-small">Sell Faster with</div>
                    <div class="ads-bold">WhatsApp Ads</div>
                </div>

                <div class="ads-right">
                    Click. <span class="green">Chat.</span> Close.
                </div>
            </div>

            <!-- GREEN LINE -->
            <div class="tick">
                <img src="{{ asset('img/green-line.png') }}" alt="line">
            </div>

            <!-- PHONE IMAGE -->
            <div class="phone-wrapper">
                <img src="{{ asset('img/phone.png') }}" alt="mobile" class="ads-phone">
            </div>

            <!-- LOGO SLIDER -->
            <div class="logo-slider">
                <div class="logo-track">
                    <img src="{{ asset('img/ad-1.png') }}">
                    <img src="{{ asset('img/ad-2.png') }}">
                    <img src="{{ asset('img/ad-3.png') }}">
                    <img src="{{ asset('img/ad-4.png') }}">
                    <img src="{{ asset('img/ad-5.png') }}">

                    <!-- duplicate -->
                    <img src="{{ asset('img/ad-1.png') }}">
                    <img src="{{ asset('img/ad-2.png') }}">
                    <img src="{{ asset('img/ad-3.png') }}">
                    <img src="{{ asset('img/ad-4.png') }}">
                    <img src="{{ asset('img/ad-5.png') }}">
                </div>
            </div>

        </div>
    </div>
</section>

@include('Layouts.footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
