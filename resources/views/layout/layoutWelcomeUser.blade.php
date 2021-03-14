
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

      <!-- Scripts -->
    

    <link rel="shortcut icon" type="image/png" href="images/LT_logo.png">
    <link rel="stylesheet" type="text/css" href="css/styling.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">

    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css'>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js'></script>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <!--bootstrap-->
    

</head>

<body>
   @yield('welcomeUser')
   
</body>

</html>
