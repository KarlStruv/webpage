@extends('layouts.app')



@section('content')




    <div class="content-box">
        <div class="content-text">
            <div class="headers">
                <p class="header-first">DIGITAL</p>
                <p class="header-second">MARKETING</p>
            </div>
            <p class="content-textbox">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Maecenas sed suscipit dolor, sit amet pharetra arcu.
                Mauris fringilla lacus vitae lectus dictum lobortis.
            </p>
            <div class="learn-more-btn">
                <a href="/about">LEARN MORE</a>
            </div>

        </div>
        <img src="{{URL('images/illustration.jpg')}}" alt="marketing" class="home-image">
    </div>




@endsection
