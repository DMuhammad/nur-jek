<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/wizard.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/rating.css') }}">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    @include('layouts.partials.navbar')

    @yield('content')

    <script type="module">
        $(document).ready(function() {
            toastr.options.timeOut = 4000;
            @if (Session::has('error'))
                toastr.error('{{ Session::get('error') }}');
            @elseif (Session::has('success'))
                toastr.success('{{ Session::get('success') }}');
            @endif
        })
    </script>
    <script type="text/javascript">
        function selectDriver(name, id) {
            const driverId = document.querySelector("#driver_id")
            const driverName = document.querySelector("#driver_name")
            driverName.innerText = name
            driverId.value = id;
        };
    </script>
    <script type="module" src="{{ asset('assets/js/wizard.js') }}"></script>
</body>

</html>
