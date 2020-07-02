@include('partials._head')
<div class="ui  container">
    @include('partials._menu')
    @include('partials._slide')
    @yield("content")
</div>
<div class="ui modal ">
    <i class="close icon"></i>
    <div class=" header"> Login</div>
    <div class="content">
        <form class="ui form">
            <div class="field">
                <label>Email</label>
                <input type="email" name="email" placeholder="Email">
            </div>
            <div class="field">
                <label>Password</label>
                <input type="password" name="pwd" placeholder="Password">
            </div>
            <button class="ui button primary" type="submit">Login</button>
        </form>
    </div>
</div>
@include("partials._tfooter")
@include('partials._footer')
