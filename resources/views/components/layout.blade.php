<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{ 'https://cdn.jsdelivr.net/npm/@tabler/core@latest/dist/css/tabler.min.css' }}>

    <title>
        @isset($docTitle)
            {{$docTitle}} | OurApp
        @else
        OurApp
        @endisset</title>
</head>

<body data-bs-theme="dark">




    {{ $slot }}


<script src={{ 'https://unpkg.com/@tabler/core@latest/dist/js/tabler.min.js' }}></script>
@vite(['resources/js/app.js'])
@vite(['resources/css/app.css'])
</body>

</html>
