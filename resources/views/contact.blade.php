@extends('app')
@section('content')
    <h1>Contact form</h1>
    <div class="ui grid">
        <form class=" ui form" action="">
            <div class="six wide column">
                <div class="field">
                    <label>First Name</label>
                    <input type="text" name="first-name" placeholder="First Name">
                </div>
            </div>
            <div class="six wide column">
                <div class="field">
                    <label>Email</label>
                    <input type="email" name="email" placeholder="Email">
                </div>
            </div>
            <div class="six wide column">
                <div class="field">
                    <label>Subject</label>
                    <input type="text" name="subject" placeholder="Subject">
                </div>
            </div>
        </form>

    </div>
@endsection
