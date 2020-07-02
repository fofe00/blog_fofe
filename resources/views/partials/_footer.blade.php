<script src="{{ asset('Semantic/jquery.js') }}"></script>
<script src="{{ asset('Semantic/semantic.js') }}"></script>
<script src="{{ asset('js/owl.carousel.js') }}"></script>
<script !src="">
    $(document).ready(function(){
        $(".owl-carousel").owlCarousel({
            loop:true,
            margin:3,
            nav:true,
            autoplay:true,
            autoplayTimeout:2000,
            autoplayHoverPause:false
        });
    });
</script>

@yield('js')
</body>
</html>
