<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aerolab</title>
    <link rel="shortcut icon" type="image/png" href="aerolabFavicon.png"/>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
    <link rel="stylesheet" href="/css/product/product-container-style.min.css">
  </head>
  <body>
    @yield('header')

    @yield('products')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/cartButtonController.js"></script>
  </body>
</html>
