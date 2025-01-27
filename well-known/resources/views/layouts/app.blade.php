<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link
        rel="shortcut icon"
        href="{{asset('assets/backend/images/np.png')}}"
        type="image/x-icon"
    />
    <title>{{config('app.name')}}</title>
    @livewireStyles
    <!-- ========== All CSS files linkup ========= -->
    <link rel="stylesheet" href="{{asset('assets/backend/css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/backend/css/lineicons.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/backend/css/materialdesignicons.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/backend/css/fullcalendar.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/backend/css/fullcalendar.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/backend/css/main.css')}}"/>
    {{-- summernote text editor css --}}
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/backend/css/sweetalert2.min.css')}}">

    <!-- Nepali Date Picker Css -->
    <link href="http://nepalidatepicker.sajanmaharjan.com.np/nepali.datepicker/css/nepali.datepicker.v3.7.min.css" rel="stylesheet" type="text/css"/>
    @stack('styles')

</head>
<body>
<!-- ======== sidebar-nav start =========== -->
@include('backend.partials.sidebar')
<div class="overlay"></div>
<!-- ======== sidebar-nav end =========== -->

<!-- ======== main-wrapper start =========== -->
<main class="main-wrapper">
    <!-- ========== header start ========== -->
@include('backend.partials.header')
<!-- ========== header end ========== -->

    <!-- ========== section start ========== -->
    <section class="section">
        <div class="container-fluid">
            @yield('content')
        </div>
        <!-- end container -->
    </section>
    <!-- ========== section end ========== -->

    <!-- ========== footer start =========== -->
@include('backend.partials.footer')

<!-- ========== footer end =========== -->
</main>
<!-- ======== main-wrapper end =========== -->

<!-- ========= All Javascript files linkup ======== -->
<script src="{{asset('assets/backend/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/backend/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/backend/js/Chart.min.js')}}"></script>
<script src="{{asset('assets/backend/js/dynamic-pie-chart.js')}}"></script>
<script src="{{asset('assets/backend/js/moment.min.js')}}"></script>
<script src="{{asset('assets/backend/js/fullcalendar.js')}}"></script>
<script src="{{asset('assets/backend/js/jvectormap.min.js')}}"></script>
<script src="{{asset('assets/backend/js/world-merc.js')}}"></script>
<script src="{{asset('assets/backend/js/polyfill.js')}}"></script>
<script src="{{asset('assets/backend/js/main.js')}}"></script>
<script src="{{asset('assets/backend/js/sweetalert2.min.js')}}"></script>

@include('sweetalert::alert')

@stack('modals')
@stack('script')

<script>
    $('.show_confirm').click(function (event) {
        var form = $(this).closest("form");
        event.preventDefault();

        swal.fire({

            title: "Are You Sure to Delete ? ",
            text: "If you delete this, it will be gone forever.",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: 'red',
            confirmButtonText: "Delete",
            dangerMode: true,

        })
            .then((willDelete) => {
                if (willDelete.isConfirmed) {
                    form.submit();
                }
            });
    });
</script>

@livewireScripts

</body>
</html>
