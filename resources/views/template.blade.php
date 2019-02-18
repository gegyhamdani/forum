<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Forum Yamaha Jupiter MX</title>
    {{-- Manggil CSS --}}
    <link href="{{ asset('bootstrap4/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>
<body class="bg-light">

    @yield('main')

    @include('footer')

    <script src="{{ asset('js/jquery.js') }}" type="text/javascript"></script>
    <script src="{{ asset('bootstrap4/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('ckeditor/ckeditor.js') }}" type="text/javascript"></script>
    @include('footer')
</body>
</html>