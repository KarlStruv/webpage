
@extends('layouts.app')



@section('content')

    <section class="mb-4">
        <div class="container">
            <h2 class="font-weight-bold text-center my-4">Sign up</h2>
            <p class="text-center w-responsive mx-auto mb-5">Sign up to our weekly newsletter about new work opportunities</p>

            <div class="row justify-content-center">

                <div class="col-md-9 mb-md-0 mb-5">
                    <form id="contact-form" name="contact-form" action="{{ route('signUp.submit') }}" method="POST">
                        @csrf
                        @method('POST')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" id="name" name="name" class="form-control">
                                    <label for="name" class="">Your name</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="email" id="email" name="email" class="form-control">
                                    <label for="email" class="">Your email</label>
                                </div>
                            </div>
                        </div>

                        @if(session()->has('message'))
                            <div class="alert-message">
                                {{ session()->get('message') }}
                            </div>
                        @endif
                        <div class="text-center pt-5">
                            <input href="sign-up/submit" class="btn btn-primary font-weight-bold btn-lg active" role="button" aria-pressed="true" style="background-color: #92adff; border: white; border-radius: 40px; min-width: 135px;" value="Subscribe" type="submit"></input>
                        </div>

                    </form>


                </div>


            </div>
        </div>
    </section>

@endsection
