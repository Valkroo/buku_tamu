<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Buku Tamu</title>
    <link rel="stylesheet" href="{{ asset('css/info.css') }}">
    <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="d-flex justify-content-center align-items-center">
            <div class="card">
                <div class="d-flex justify-content-center align-items-center">
                    <img src="{{ asset('img/done.png') }}" alt="" width="200px">
                </div>
                <h1 class="text">TERIMAKASIH SUDAH MENGISI!</h1>
                <div class="d-grid col-2 mx-auto">
                    <a href="/" class="btn btn-success my-4" role="button">Back</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
