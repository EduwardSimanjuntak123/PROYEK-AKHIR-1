<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <style>
        @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css");
      </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/' . $halaman . '.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fakeLoader.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer&header.css') }}">
    <link rel="shortcut icon" href="{{ asset('img/Tutwuri.png') }}" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaisei+Tokumin&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Kaisei+Tokumin:wght@800&family=Istok+Web:wght@400&display=swap" rel="stylesheet">
        <title>SMP4BLG || {{ $halaman }}</title>
        <style>
            .icon i:hover{

color: rgb(85, 115, 204);
            }
        </style>

</head>
<div class="fakeLoader"></div>
<body style="">
    
    <!--header-->
    @include('layouts_user.header')
    @include('sweetalert::alert')

    <!--kata sambutan-->
@yield('content')

    <!--Informasi/Kontak-->
    
@include('layouts_user.footer')
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="{{ asset('js/js.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="{{ asset('js/fakeLoader.js') }}"></script>
    

    <script>
        $(document).ready(function () {
            $.fakeLoader({
                bgColor: '#023768',
                spinner:"spinner1"
            });
        });
    </script>
</body>

</html>
