<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Hurricane&family=Inter:wght@200;300;400&family=Italianno&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/build.css') }}">
    @stack('cssjsexternal')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>

<body>

    <!-- Nav -->
    <nav class="fixed top-0 z-20 w-full bg-white shadow-md">
        <div class="flex mx-auto items-center justify-center max-w-screen-md p-4 flex-col lg:flex-row">
            <div class="flex">
                <a href="/explore" class="mr-4">EXPLORE</a>
                <a href="/my_pin" class="mr-4">PINNED</a>
            </div>
            <div class="flex justify-center items-center">
                <input type="text" class="px-4 py-1 mr-5 rounded-full border border-gray-300"
                    placeholder="Search ...">
                <a href="/pin" class="mr-4">PIN</a>
                <img src="/assets/image 1.png" alt="" class="w-12 h-12 rounded-full">
            </div>
        </div>
    </nav>
    <!-- End Nav -->

    <!-- Konten -->
    @yield('content')
    <!-- End Konten -->


    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
@stack('footerjsexternal')

</html>
