@extends('app')
@section('content')
    <div>
        <h1>Contact Us</h1>
        <div>
            <form action="" class="ui grid form">
                <div class="six wide column">
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
                    <div class="ui animated button primary fluid" tabindex="0">
                        <div class="visible content">Send</div>
                        <div class="hidden content">
                            <i class="paper plane icon"></i>
                        </div>
                    </div>
                </div>
                <div class="ten wide column">
                    <div class="field">
                        <label>Message</label>
                        <textarea></textarea>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
