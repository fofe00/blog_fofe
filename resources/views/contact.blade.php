@extends('app')
@section('content')
    <div class="centered" >
        <h4 class="ui horizontal divider header">
            <i class="envelope icon"></i>
            Contact Us
        </h4>
        <div>
            <form action="" class="ui grid form">
                <div class="six wide column animate__animated animate__fadeInLeft">
                    <div class="field">
                        <label>Name</label>
                        <input type="text" name="name" placeholder="Name">
                    </div>
                    <div class="field">
                        <label>Email</label>
                        <input type="email" name="email" placeholder="Email">
                    </div>
                    <div class="field">
                        <label>Subject</label>
                        <input type="text" name="subject" placeholder="Subject">
                    </div>
                    <div class="ui animated button primary fluid animate__animated animate__bounceInLeft " tabindex="0">
                        <div class="visible content">Send</div>
                        <div class="hidden content">
                            <i class="paper plane icon"></i>
                        </div>
                    </div>
                </div>
                <div class="ten wide column animate__animated animate__fadeInRight">
                    <div class="field ">
                        <label>Message</label>
                        <textarea></textarea>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
