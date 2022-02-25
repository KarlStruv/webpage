@extends('layouts.app')



@section('content')

    <section class="mb-4">
        <div class="container">
            <h1 class="font-weight-bold text-center my-4">Contact us</h1>
            <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us.</p>

            <div class="row">

                <div class="col-md-9 mb-md-0 mb-5">
                    <form id="contact-form" name="contact-form" action="#" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" id="name" name="name" class="form-control">
                                    <label for="name" class="">Your name</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" id="email" name="email" class="form-control">
                                    <label for="email" class="">Your email</label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form">
                                    <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                                    <label for="message">Your message</label>
                                </div>

                            </div>
                        </div>

                    </form>

                    <div class="text-center text-md-left">
                        <a href="" class="btn btn-primary font-weight-bold btn-lg active" role="button" aria-pressed="true" style="background-color: #92adff; border: white; border-radius: 40px; min-width: 50px;">Send</a>
                    </div>
                    <div class="status"></div>
                </div>

                <div class="col-md-3 text-center">
                    <ul class="list-unstyled mb-0">
                        <li><i class="fas fa-map-marker-alt fa-2x"></i>
                            <p>Aleksandra Čaka iela 33, Rīga</p>
                        </li>

                        <li><i class="fas fa-phone mt-4 fa-2x"></i>
                            <p>+371 28663271</p>
                        </li>

                        <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                            <p>struve3@gmail.com</p>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </section>

@endsection
