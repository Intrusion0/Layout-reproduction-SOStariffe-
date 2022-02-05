@extends('layouts.main-layout')
@section('content')
    
    {{-- Sezione Services --}}
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-8 ml-6">
                    <h2 class="title-services mb-2">
                        Confronto tariffe mobile, internet casa, luce, gas, assicurazioni, conti, carte, pay TV, prestiti e mutui
                    </h2>   
                </div>
                <div class="container-card d-flex flex-column col-7">
                    <div class="container-number-services mx-auto">
                        <div>
                            <span>
                                <img src="{{ asset('storage/asset/svgexport-10.svg') }}" alt="choose the service">
                            </span>
                            <h2 class="first-service">Scegli il servizio</h2>
                        </div>
                        <div>
                            <span>
                                <img src="{{ asset('storage/asset/svgexport-11.svg') }}" alt="compare the offers">
                            </span>
                            <h2>Confronta le offerte</h2>
                        </div>
                        <div>
                            <span>
                                <img src="{{ asset('storage/asset/svgexport-12.svg') }}" alt="save now">
                            </span>
                            <h2>Risparmia ora</h2>
                        </div>
                    </div>
                    <div class="container-card-services mx-auto">
                        <div>
                            <a href="#">
                                <div class="d-flex">
                                    <span class="d-flex flex-column align-items-center justify-content-center mx-auto">
                                        <div>
                                            <img src="{{ asset('storage/asset/svgexport-13.svg') }}" alt="icon1 card">
                                        </div>
                                        <span>
                                            <img class="mini-card" src="{{ asset('storage/asset/svgexport-14.svg') }}" alt="internet casa">
                                        </span>
                                        <div class="text-card">
                                            INTERNET CASA
                                        </div>
                                    </span>
                                </div>
                            </a>    
                        </div>
                        <div>
                            <a href="#">
                                <div class="d-flex">
                                    <span class="d-flex flex-column align-items-center justify-content-center mx-auto">
                                        <div>
                                            <img src="{{ asset('storage/asset/svgexport-13.svg') }}" alt="icon2 card">
                                        </div>
                                        <span>
                                            <img class="mini-card" src="{{ asset('storage/asset/svgexport-15.svg') }}" alt="luce">
                                        </span>
                                        <div class="text-card">
                                            LUCE
                                        </div>
                                    </span>
                                </div>        
                            </a>    
                        </div>
                        <div>
                            <a href="#">
                                <div class="d-flex">
                                    <span class="d-flex flex-column align-items-center justify-content-center mx-auto">
                                        <div>
                                            <img src="{{ asset('storage/asset/svgexport-13.svg') }}" alt="icon3 card">
                                        </div>
                                        <span>
                                            <img class="mini-card" src="{{ asset('storage/asset/svgexport-16.svg') }}" alt="gas">
                                        </span>
                                        <div class="text-card">
                                            GAS
                                        </div>
                                    </span>
                                </div>
                            </a>    
                        </div>
                        <div>
                            <a href="#">
                                <div class="d-flex">
                                    <span class="d-flex flex-column align-items-center justify-content-center mx-auto">
                                        <div>
                                            <img src="{{ asset('storage/asset/svgexport-13.svg') }}" alt="icon4 card">
                                        </div>
                                        <span>
                                            <img class="mini-card" src="{{ asset('storage/asset/svgexport-17.svg') }}" alt="mobile">
                                        </span>
                                        <div class="text-card">
                                            MOBILE
                                        </div>
                                    </span>
                                </div>
                            </a>    
                        </div>
                        <div>
                            <a href="#">
                                <div class="d-flex">
                                    <span class="d-flex flex-column align-items-center justify-content-center mx-auto">
                                        <div>
                                            <img src="{{ asset('storage/asset/svgexport-13.svg') }}" alt="icon5 card">
                                        </div>
                                        <span>
                                            <img class="mini-card" src="{{ asset('storage/asset/svgexport-18.svg') }}" alt="conti e carte">
                                        </span>
                                        <div class="text-card">
                                            CONTI E CARTE
                                        </div>
                                    </span>
                                </div>
                            </a>    
                        </div>
                        <div>
                            <a href="#">
                                <div class="d-flex">
                                    <span class="d-flex flex-column align-items-center justify-content-center mx-auto">
                                        <div>
                                            <img src="{{ asset('storage/asset/svgexport-13.svg') }}" alt="icon6 card">
                                        </div>
                                        <span>
                                            <img class="mini-card" src="{{ asset('storage/asset/svgexport-19.svg') }}" alt="prestiti e mutui">
                                        </span>
                                        <div class="text-card">
                                            PRESTITI E MUTUI
                                        </div>
                                    </span>
                                </div>
                            </a>    
                        </div>
                        <div>
                            <a href="#">
                                <div class="d-flex">
                                    <span class="d-flex flex-column align-items-center justify-content-center mx-auto">
                                        <div>
                                            <img src="{{ asset('storage/asset/svgexport-13.svg') }}" alt="icon7 card">
                                        </div>
                                        <span>
                                            <img class="mini-card" src="{{ asset('storage/asset/svgexport-20.svg') }}" alt="tv">
                                        </span>
                                        <div class="text-card">
                                            TV
                                        </div>
                                    </span>
                                </div>
                            </a>    
                        </div>
                        <div>
                            <a href="#">
                                <div class="d-flex">
                                    <span class="d-flex flex-column align-items-center justify-content-center mx-auto">
                                        <div>
                                            <img src="{{ asset('storage/asset/svgexport-13.svg') }}" alt="icon8 card">
                                        </div>
                                        <span>
                                            <img class="mini-card" src="{{ asset('storage/asset/svgexport-21.svg') }}" alt="assicurazioni">
                                        </span>
                                        <div class="text-card">
                                            ASSICURAZIONI
                                        </div>
                                    </span>
                                </div>
                            </a>    
                        </div>
                    </div>
                </div>
                <div class="col-5">
                    <img src="{{ asset('storage/asset/header-img.png') }}" class="img-fluid" alt="boat">
                </div>
            </div>
        </div>
    </section>

@endsection