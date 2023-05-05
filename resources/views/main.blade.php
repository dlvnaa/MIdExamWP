<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    {{--Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<nav class="">
    <ul class="d-flex align-items-center justify-content-between list-unstyled p-3 bg-warning">
        <li class="fs-4">{{$greet}}, {{$nama}}!</li>
        <li class="px-4 py-2 rounded-pill text-black fw-bold">{{$level}}</li>
    </ul>
    <hr>
    <ul class="row text-center w-100">
        <a href="#" class="Nav-Anchor-Link col p-2 border border-secondary-subtle text-decoration-none">Profile</a>
        <a href="/transaction/1" class="Nav-Anchor-Link col p-2 border border-secondary-subtle text-decoration-none">Transaction</a>
    </ul>
</nav>

@yield('container')

<footer class="p-2 bg-gradient bg-warning inline-block mx-auto">
    <span>© 2023 Copyright: Delvina Wongsono - 2440034050</span>
</footer>

</body>
</html>
