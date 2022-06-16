<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CIM-FASO</title>
    @include('require.css')
</head>
<body>
    @include('require.header')

    @yield('content')

    @include('require.footer')

    @include('require.js')
</body>
</html>