@include('layouts.footer')
@include('layouts.header')
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Playlist採用サイト</title>
  @vite(['resources/scss/style.scss', 'resources/js/app.js'])

</head>

<body>
  @yield('header')

  @yield('content')

  @yield('footer')
</body>

</html>
