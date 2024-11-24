<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">

    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link rel="shortcut icon" href="{{ asset('/favicon.png')}}"/>
    <link href="{{ asset('font-awesome-6/css/all.css') }}" rel="stylesheet">


    <title>@yield('title')</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&amp;display=swap" rel="stylesheet">

    <link href="{{ asset('css/dark.css') }}" rel="stylesheet">
    <link href="{{ asset('css/light.css') }}" rel="stylesheet">

</head>
<!--
  HOW TO USE:
  data-theme: default (default), dark, light, colored
  data-layout: fluid (default), boxed
  data-sidebar-position: left (default), right
  data-sidebar-layout: default (default), compact
-->

<body data-theme="default" data-layout="fluid" data-sidebar-position="left" data-sidebar-layout="default">
<main class="d-flex w-100 h-100">
    <div class="container d-flex flex-column">
        <div class="row vh-100">
            <div class="col-sm-10 col-md-8 col-lg-6 col-xl-5 mx-auto d-table h-100">
                <div class="d-table-cell align-middle">
                    <div class="text-center">
                        <h1 class="display-1 fw-bold">@yield('code')</h1>
                        <p class="h2">@yield('message')</p>
                        <p class="lead fw-normal mt-3 mb-4">A página que você procura por ter sido removida.
                        </p>
                        <a class='btn btn-primary btn-lg' href='{{route('app.root')}}'>Retornar à página inicial</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
