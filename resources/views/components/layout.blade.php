<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content={{csrf_token()}}>
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
    <title>Presto.it</title>
    <link rel="shortcut icon" href="{{asset('/media/icona.svg')}}" type="image/x-icon">
</head>
<body>

    <x-navbar />


    {{$slot}}

    <x-footer />
    <script src="{{asset('/js/app.js')}}"></script>
</body>
</html>