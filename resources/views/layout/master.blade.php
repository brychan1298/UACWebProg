<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>
    <link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <title>Document</title>
</head>
<style>
    @import url('https://fonts.cdnfonts.com/css/poppins');

    body {
        min-height: 100vh;
        font-family: 'Poppins', sans-serif;

        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        position: relative;
        z-index: 1;
    }

    body::before {
        content: "";
        display: block;
        position: absolute;
        z-index: -1;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        background-color: rgba(252, 214, 124, 0.4);
    }
</style>

<body style="background-image: url({{ url('bg.jpeg') }});">
    @include('layout.header')
    <div>
        @yield('content')
    </div>
    @include('layout.footer')
</body>

</html>
