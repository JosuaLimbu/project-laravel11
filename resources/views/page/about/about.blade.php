<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    @include('components/navbar/navbar')
    <h1>Route Halaman About</h1>
    <h3>Nama : {{ $nama }}</h3>

    <img src="img/DSC00042.JPG" alt="My Picture" width="200">

    {{-- <script src="js/script.js"></script> --}}
</body>

</html>
