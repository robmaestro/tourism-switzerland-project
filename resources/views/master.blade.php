<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Switz - @yield('title')</title>
    <link href={{ asset('css/robbie.css') }} rel="stylesheet" type="text/css">
    <link href={{ asset('css/john.css') }} rel="stylesheet" type="text/css">
    <link href={{ asset('css/mendrix.css') }} rel="stylesheet" type="text/css">
    <link href={{ asset('css/micaella.css') }} rel="stylesheet" type="text/css">
    <link href={{ asset('css/doms.css') }} rel="stylesheet" type="text/css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</head>

<body>
    {{-- Header --}}
    @include('includes.header')

    {{-- Body --}}
    <div class="container">
        @yield('content')
    </div>

</body>

</html>
