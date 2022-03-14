<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset("css/front.css")}}">
    <title>DeliveBoo</title>
</head>
<body>
    <div id="app">
    </div>
    <script src="{{asset("js/front.js")}}"></script>
</body>
</html>