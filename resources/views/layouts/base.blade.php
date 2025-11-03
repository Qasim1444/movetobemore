<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Move to be More -</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../css/home.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.cdnfonts.com/css/optima" rel="stylesheet">
</head>

<body>

    @include('sections.header')

    <main>
        @include('sections.hero')
     @yield('content')
        @include('sections.footer')
    </main>



    <script src="../js/tailwind.js"></script>
</body>

</html>
