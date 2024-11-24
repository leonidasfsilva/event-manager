<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link rel="shortcut icon" href="{{ asset('/favicon.png')}}"/>

    <title>Event Manager - Gerenciamento de Eventos</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&amp;display=swap" rel="stylesheet">

    <!-- Choose your prefered color scheme -->
    <link href="{{ asset('css/light.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sweetalert2/sweetalert2.css') }}" rel="stylesheet">
    <link href="{{ asset('font-awesome-6/css/all.css') }}" rel="stylesheet">
    <link href="{{ asset('font-awesome-6/css/sharp-duotone-solid.css') }}" rel="stylesheet">
    <link href="{{ asset('font-awesome-6/css/sharp-light.css') }}" rel="stylesheet">
    <link href="{{ asset('font-awesome-6/css/sharp-regular.css') }}" rel="stylesheet">
    <link href="{{ asset('font-awesome-6/css/sharp-solid.css') }}" rel="stylesheet">
    <link href="{{ asset('font-awesome-6/css/sharp-thin.css') }}" rel="stylesheet">
</head>

<body data-theme="light" data-layout="boxed" data-sidebar-position="left" data-sidebar-layout="default">
<div class="wrapper">
    {{--    @include('layouts._admin._sidebar')--}}
    <div class="main">
        @include('layouts._admin._navbar')

        {{-- TODO: adicionar flash msg --}}

        @yield('app-content')

        @include('layouts._admin._footer')
    </div>
</div>

<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/jquery-3.4.1.js') }}"></script>
<script src="{{ asset('js/sweetalert2/sweetalert2.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>

<script>

    @if(Session::has('alert'))
    Swal.fire({
        position: 'top',
        icon: '{{ Session::get('alert')['type'] }}',
        title: '{{ isset(Session::get('alert')['title']) ? Session::get('alert')['title'] : null }}',
        timer: 3000,
        html: '{{ isset(Session::get('alert')['message']) ? Session::get('alert')['message'] : null }}',
        showConfirmButton: false,
        showCancelButton: false,
        showCloseButton: true,
        confirmButtonText: '<i class="fa fa-check fa-fw"></i> OK ',
        cancelButtonText: '<i class="fa fa-times fa-fw"></i> Fechar ',
        reverseButtons: true,
    });
    @endif
</script>

</body>
</html>
