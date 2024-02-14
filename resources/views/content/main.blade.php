<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    {{-- boostrap --}}



    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    {{-- custom --}}
    <link rel="stylesheet" href="/css/style.css">
    {{-- fontawoesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    {{-- boostrap table --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-table@1.21.1/dist/bootstrap-table.min.css">

       {{-- boostrap --}}
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
       integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
   </script>
   {{-- font-awoesome --}}
   <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js"></script>

   {{-- jquery --}}
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"
       integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

       <script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
       <script src="https://unpkg.com/bootstrap-table@1.22.1/dist/bootstrap-table.min.js"></script>
</head>

<body>
    @vite('resources/css/app.css')
    @include('content.nav')
    @yield('body_content')




    @vite('resources/js/app.js')
    <script>
        document.addEventListener("DOMContentLoaded", function(event) {
        Echo.channel("hello")
            .listen("HelperEvent", (e) => {
                console.log("event from hello world");
                console.log(e);
    });
})
    </script>
</body>

</html>
