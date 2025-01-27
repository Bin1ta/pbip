<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">

<head>
    <title>{{ config('app.name') }}</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/style.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
          crossorigin="anonymous">
    @stack('style')
    @livewireStyles
</head>
<body>
<button onclick="topFunction()" id="backToTop" title="Go to top">
    <i class="fa fa-arrow-up" aria-hidden="true"></i>
</button>
<div class="container-fluid">
    <div class="sub-header-card d-none d-sm-block">
        <div class="row">
            <div class="col-md-6">
                <div class="sub-header-dt-card">
                    <p>
                        <span class="date-text">
                            <iframe scrolling="no" border="0" frameborder="0" marginwidth="0" marginheight="0"
                                    allowtransparency="true"
                                    src="https://www.ashesh.com.np/linknepali-time.php?time_only=no&font_color=000&aj_time=yes&font_size=14&line_brake=0&bikram_sambat=0&api=741198k444"
                                    width="308" height="25">

                            </iframe>
                        </span>
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="header-navbar-language">
                    <ul>
                        <li>
                            <a href="{{route('login')}}" target="_blank">
                                <p class="active">LOGIN</p>
                            </a>
                        </li>
{{--                        <li>--}}
{{--                            <a href="/en">--}}
{{--                                <p class="active">ENGLISH</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="/ne">--}}
{{--                                <p class="">नेपाली</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
                    </ul>
                    @include('frontend.search.search')
                </div>
            </div>
        </div>
    </div>
</div>
<header>
    <div class="container-fluid">
        @if(request()->language == 'en')
            <img src="{{ asset('storage/'.$header->en_header) }}" style="width:100%;" alt="">
        @else
            <img src="{{ asset('storage/'.$header->ne_header) }}" style="width:100%;" alt="">
        @endif
    </div>
    @include('frontend.partials.nav')

</header>

@yield('content')

@include('frontend.partials.footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
<script src="{{ asset('assets/frontend/js/app.js') }}"></script>
@stack('script')
@livewireScripts

<script>
    document.addEventListener("DOMContentLoaded", function(){
        if (window.innerWidth > 992) {
            document.querySelectorAll('.navbar .nav-item').forEach(function(everyitem){
                everyitem.addEventListener('mouseover', function(e){
                    let el_link = this.querySelector('a[data-bs-toggle]');
                    if(el_link != null){
                        let nextEl = el_link.nextElementSibling;
                        el_link.classList.add('show');
                        nextEl.classList.add('show');
                    }
                });
                everyitem.addEventListener('mouseleave', function(e){
                    let el_link = this.querySelector('a[data-bs-toggle]');
                    if(el_link != null){
                        let nextEl = el_link.nextElementSibling;
                        el_link.classList.remove('show');
                        nextEl.classList.remove('show');
                    }
                })
            });
        }
    });
</script>
<script>
    //Get the button
    const backToTop = document.getElementById("backToTop");
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            backToTop.style.display = "block";
        } else {
            backToTop.style.display = "none";
        }
    }
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>
</body>

</html>
