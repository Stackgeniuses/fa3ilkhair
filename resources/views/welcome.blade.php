<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" lang="fr" class="text-[18px] phone:text-[16px] font-inter rtl:font-fustat">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="icon" type="image/ico" href="/logos/logoGreenNoBg.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>fa3il Khair</title>
</head>
<body class="w-full h-full flex flex-col justify-between p-0 m-0 text-[#4D4D4D]">
    @include('partials.header')

    <script src="{{ asset('/js/nav.js') }}"></script>
</body>
</html>
