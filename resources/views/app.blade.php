<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title inertia>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&family=Dancing+Script:wght@400..700&family=Exo+2:ital,wght@0,100..900;1,100..900&family=MedievalSharp&display=swap"
        rel="stylesheet">

    <!-- Scripts -->
    @routes
    @vite(['resources/js/app.ts', "resources/js/Pages/{$page['component']}.vue"])
    @inertiaHead
</head>

<body class="font-sans antialiased">
    @inertia
</body>

</html>

<style>
    /* *:before,
    *:after {
        box-sizing: border-box;
    }

    .box {
        position: relative;
        top: 50%;
        left: 50%;
        transform: translate3d(-50%, 0%, 0);
        background-color: rgba(0, 0, 0, 0.5);
        width: 100%;
        max-width: 600px;
        padding: 5px;
        border: 2px solid #b78846;
    }


    .box:before,
    .box:after {
        content: "•";
        position: absolute;
        width: 14px;
        height: 14px;
        font-size: 14px;
        color: #b78846;
        border: 2px solid #b78846;
        line-height: 12px;
        top: 5px;
        text-align: center;
    }

    .box:before {
        left: 5px;
    }

    .box:after {
        right: 5px;
    }

    .box .box-inner {
        position: relative;
        border: 2px solid #b78846;
        padding: 20px;
    }

    .box .box-inner:before,
    .box .box-inner:after {
        content: "•";
        position: absolute;
        width: 14px;
        height: 14px;
        font-size: 14px;
        color: #b78846;
        border: 2px solid #b78846;
        line-height: 12px;
        bottom: -2px;
        text-align: center;
    }

    .box .box-inner:before {
        left: -2px;
    }

    .box .box-inner:after {
        right: -2px;
    } */

    .background-image {
        background-color: rgb(26, 26, 26);
    }

    .text-outline {
        color: white;
        text-shadow:
            3px 3px 0 #000,
            -1px -1px 0 #000,
            1px -1px 0 #000,
            -1px 1px 0 #000,
            1px 1px 0 #000;
    }
</style>