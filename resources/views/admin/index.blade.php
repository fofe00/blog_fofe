<!DOCTYPE html>
<html>
<head>
    <title>BeAwesome | Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/semantic.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/animate.css') }}">
</head>

<body id="loginBackground">
<div class="ui container">
    <div class="ui centered stackable grid">
        <div class="six wide column">
            <div class="ui segments" align="center">
                <div class="ui inverted blue padded segment">
                    <span class="ui header">Hello! Welcome in DevWus</span>
                </div>
                <div class="ui segment">
                    <form class="ui form" action="{{ route('admin.dashboard') }}" method="GET">
                        <div class="field">
                            <div class="ui left icon input">
                                <input type="text" name="" placeholder="Email">
                                <i class="mail icon"></i>
                            </div>
                        </div>
                        <div class="field">
                            <div class="ui left icon input">
                                <input type="password" name="" placeholder="Password">
                                <i class="lock icon"></i>
                            </div>
                        </div>
                        <div class="field">
                            <div class="ui checkbox">
                                <input type="checkbox" tabindex="0" class="hidden">
                                <label>Remember Me</label>
                            </div>
                        </div>
                        <button class="ui big fluid blue icon button" type="submit">Sign In <i class="sign in icon"></i></button>
                    </form>
                </div>
                <div class="ui secondary segment">
                    <a href="">Forgot Password?</a>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{ asset('admin/assets/js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/assets/js/semantic.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/assets/js/main.js') }}"></script>
</body>
</html>
