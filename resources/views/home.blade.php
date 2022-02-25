@extends('layouts.app')



@section('content')


        <section class="bg-trasparent text-dark py-5 px-0 mx-0 text-center text-sm-left">
            <div class="container">
                <div class="d-lg-flex p-0">
                    <div>
                        <h1><span class="font-weight-bold" style="font-size: 75px; margin-left: -5px;">DIGITAL</span></h1>
                        <h3><span class="text-warning" style="letter-spacing: 10px; margin-left: -2px;">MARKETING</span></h3>
                        <p class="lead my-5 col-lg" style="padding-left: 0; font-size: 16px">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Maecenas sed suscipit dolor, sit amet pharetra arcu.
                            Mauris fringilla lacus vitae lectus dictum lobortis.

                        </p>
                        <a href="/about" class="btn btn-primary font-weight-bold btn-lg active" role="button" aria-pressed="true" style="background-color: #92adff; border: white; border-radius: 40px; min-width: 100px;">LEARN MORE</a>
                    </div>
                    <img class="img-fluid" src="{{URL('images/illustration.jpg')}}" alt="marketing" width="150%">
                </div>
            </div>
        </section>




@endsection
