@include('partials._head')
<div class="ui  container">
    @include('partials._menu')
    @include('partials._slide')
    @yield("content")
</div>
@include("partials._tfooter")
@include('partials._footer')
