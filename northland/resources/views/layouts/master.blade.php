<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield ('page_title')</title>
  <link rel="stylesheet" href="/css/app.css">
  <!-- Bulma -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.min.css" rel="stylesheet">
  <!-- Wow.js -->
  <link rel="stylesheet" href="/css/animate.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
  <script>new WOW().init();</script>  
  <!-- Font Awesome -->
  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
  <!-- jQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  

  @yield ('add_head')
</head>
<body>
  @include ('layouts.nav')
  
  <main>
    @yield ('content')
  </main>

  @include ('layouts.footer')

  @yield ('external_js')

</body>
</html>