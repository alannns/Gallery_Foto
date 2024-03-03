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
    <link href="/dist/output.css" rel="stylesheet">
</head>

<body>

    <!-- Nav -->
    <nav class="nav w-full bg-white drop-shadow border">
        <div class="flex justify-between mx-auto items-center container px-5">
            <div>
                <span class="font-hurricane text-[50px]">PinMe</span>
            </div>
            <div>
                <a href="/sign_in"><button class="px-6 py-1 bg-blue-900 rounded-full text-white text-[15px]">log
                        in</button></a>
                <a href="sign_up"><button class="px-6 py-1 bg-gray-300 rounded-full text-[15px] ml-2">sign
                        up</button></a>
            </div>
        </div>
    </nav>
    <!-- End Nav -->


    <!-- form -->
    @yield('content_2')
    <!-- end frm -->


</body>

</html>
