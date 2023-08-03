<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{ 'https://cdn.jsdelivr.net/npm/@tabler/core@latest/dist/css/tabler.min.css' }}>

    <title>OurApp</title>
</head>

<body data-bs-theme="dark">
    @auth
        <x-home-page />
    @else
        <x-sign-in-page />
    @endauth

    <script src={{ 'https://unpkg.com/@tabler/core@latest/dist/js/tabler.min.js' }}></script>
</body>

</html>
