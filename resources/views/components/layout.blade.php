<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AnimeTV</title>
    <link rel="shortcut icon" href="fav.jpg" type="image/x-icon">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>
  <body>
    
    <x-navbar/>

    <x-header headerTitle={{$headerTitle}}/>
      
    <div class="min-vh-100">
        {{$slot}}
      </div>
    <x-footer/>

  </body>
</html>