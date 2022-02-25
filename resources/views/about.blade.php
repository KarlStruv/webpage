@extends('layouts.app')



@section('content')

    <section class="section about-section gray-bg" id="about">
        <div class="container">
            <div class="row align-items-center flex-row-reverse pt-3">
                <div class="col-lg-6">
                    <div class="about-text go-to">
                        <h1 class="dark-color">About Us</h1>
                        <h6 class="theme-color lead">Leading IT services company in Europe</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae lectus dui. Donec eu convallis massa. Donec vestibulum enim a sodales elementum. Fusce eget blandit justo. Donec odio felis, elementum eget ante vel, accumsan vestibulum lorem. Aenean sollicitudin risus non enim semper suscipit. Nunc et lacus aliquam, consectetur ante at, aliquam est.</p>
                        <div class="row about-list">

                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-avatar">
                        <img class="img-fluid" src="{{URL('images/office.jpg')}}" alt="office">
                    </div>
                </div>
            </div>
            <div class="counter pt-5">
                <div class="row justify-content-center">
                    <div class="col-6 col-lg-3">
                        <div class="count-data text-center">
                            <h6 class="count h2">500+</h6>
                            <p class="m-0px font-w-600">Satisfied Clients</p>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div class="count-data text-center">
                            <h6 class="count h2">150</h6>
                            <p class="m-0px font-w-600">Projects Completed</p>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div class="count-data text-center">
                            <h6 class="count h2">250</h6>
                            <p class="m-0px font-w-600">IT Career Contributions</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
