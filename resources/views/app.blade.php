@include('partials._head')
<div class="ui  container">
    @include('partials._menu')
    @include('partials._slide')
    @yield("content")
</div>
<div class="ui modal ">
    <i class="close icon"></i>
    <div class="">
        <img class="image ui small centered" src="{{ asset('img/devWus.png') }}">
    </div>
    <div class="content">
        <div class="ui placeholder segment">
            <div class="ui two column very relaxed stackable grid">
                <div class="column">
                    <div class="ui form">
                        <div class="field">
                            <label>Email</label>
                            <div class="ui left icon input">
                                <input type="text" placeholder="email">
                                <i class="user icon"></i>
                            </div>
                        </div>
                        <div class="field">
                            <label>Password</label>
                            <div class="ui left icon input">
                                <input type="password">
                                <i class="lock icon"></i>
                            </div>
                        </div>
                        <div class="ui blue submit button">Login</div>
                    </div>
                </div>
                <div class="middle aligned column">
                    <div class="ui big button">
                        <i class="signup icon"></i>
                        Sign Up
                    </div>
                </div>
                <div class="column">
                    oki
                </div>
            </div>
            <div class="ui vertical divider">
                Or
            </div>
        </div>
    </div>
</div>
@include("partials._tfooter")
@include('partials._footer')
