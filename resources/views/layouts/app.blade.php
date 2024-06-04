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

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
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
        function selectDriver(name, id, image) {
            const driverId = document.querySelector("#driver_id")
            const driverName = document.querySelector("#driver_name")
            const driverImage = document.querySelector("#driver_image")
            driverName.innerText = name
            driverId.value = id;
            driverImage.src = `{{ asset('assets/img/') }}/${image}.jpg`;
        };
    </script>
    <script type="module" src="{{ asset('assets/js/wizard.js') }}"></script>
    <script type="module">
        $('.ondelete').click(function(e) {
            const form = $(this).closest("form");
            e.preventDefault();
            Swal.fire({
                title: 'Apakah Anda Yakin?',
                text: "Data Anda Tidak Dapat di Kembalikan",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#dc3545',
                cancelButtonColor: '#adb5bd',
                confirmButtonText: 'Hapus',
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            })
        })
        $('.onupdate').click(function(e) {
            const form = $("#update-user");
            e.preventDefault();
            form.submit();
        })
    </script>
</body>

</html>
