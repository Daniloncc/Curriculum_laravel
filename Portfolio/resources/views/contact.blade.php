@extends('master')
@section('title', 'Contactez-moi')
@section('content')

<!-- Signup-->
<section class="signup-section" id="signup">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5">
            <div class="col-md-10 col-lg-6 mx-auto text-center sticky-top">
                <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
                <h1 class="text-white mb-5">Contactez-moi!</h1>
                @isset($data)
                {{-- comentaire dans blade --}}
                <div class="my-5">
                    <h2 class="text-red mb-5">Votre message a ete bien enovoie !
                    </h2>
                    <p><strong>{{$data->name}}</strong></p>
                    <p><strong>{{$data->email}}</strong></p>
                    <p><strong>{{$data->phone}}</strong></p>
                    <p><strong>{{$data->message}}</strong></p>
                </div>
                @else
                <div class="my-5">
                    <form id="contactForm" method="post" action="/contact">
                        @csrf
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls">
                                <label>Name</label>
                                <input type="text" class="form-control" placeholder="Name" id="name" name="name" required data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls">
                                <label>Email Address</label>
                                <input type="email" class="form-control" placeholder="Email Address" id="email" name="email" required data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Phone Number</label>
                                <input type="tel" class="form-control" placeholder="Phone Number" id="phone" name="phone" required data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls">
                                <label>Message</label>
                                <textarea rows="5" class="form-control" placeholder="Message" id="message" name="message" required data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary" id="sendMessageButton">Envoyer</button>
                        </div>
                    </form>
                </div>
                @endisset
            </div>
        </div>
    </div>
</section>
@section('lienJSValidation')
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
@endsection('liensJSValidation')

@endsection('content')