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
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
          <link rel="preconnect" href="https://fonts.googleapis.com">

    
</head>

<body>

@include('sections.header')

<main>
    @include('sections.hero')
@include('sections.testimonial')

    @include('sections.Coaching')
    @include('sections.getmore')
    @include('sections.why');
    @include('sections.slider')
    @include('sections.companies')
    @include('sections.Letschat')
@include('sections.footer')
</main>



<!-- Project JS -->
<script src="../js/tailwind.js"></script>
</body>

</html>
