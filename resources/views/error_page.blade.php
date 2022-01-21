<!DOCTYPE html>
<html lang="en" class="light">
    <!-- BEGIN: Head -->
    <head>
        <meta charset="utf-8">
        <link href="dist/images/logo.svg" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="BuyBeats">
        <meta name="keywords" content="BuyBeatsp">
        <meta name="author" content="BuyBeats">
        <title>404</title>
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="{{url('public/dist/css/app.css')}}" />
        <!-- END: CSS Assets-->
    </head>
    <!-- END: Head -->
    <body class="main">
        <div class="container">
            <!-- BEGIN: Error Page -->
            <div class="error-page flex flex-col lg:flex-row items-center justify-center h-screen text-center lg:text-left">
                <div class="-intro-x lg:mr-20">
                    <img alt="Icewall Tailwind HTML Admin Template" class="h-48 lg:h-auto" src="{{url('public/dist/images/error-illustration.svg')}}">
                </div>
                <div class="text-white mt-10 lg:mt-0">
                    <div class="intro-x text-8xl font-medium">404</div>
                    <div class="intro-x text-xl lg:text-3xl font-medium mt-5">Oops. This page has gone missing.</div>
                    <div class="intro-x text-lg mt-3">You may have mistyped the address or the page may have moved.</div>
                    <a href="{{route('dashboard')}}" class="intro-x btn py-3 px-4 text-white border-white dark:border-dark-5 dark:text-gray-300 mt-10">Back to Home</a>
                </div>
            </div>
            <!-- END: Error Page -->
        </div>
        <!-- BEGIN: JS Assets-->
        <script src="{{url('public/dist/js/app.js')}}"></script>
        <!-- END: JS Assets-->
    </body>
</html>