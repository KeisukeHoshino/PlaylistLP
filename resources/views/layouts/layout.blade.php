@include('layouts.footer')
@include('layouts.header')
<!DOCTYPE html>
<html lang="ja">

<head prefix="og: https://ogp.me/ns#">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  {{-- description --}}
  <meta name="description" content="Playlist株式会社の採用サイトです。「お気に入りを創出する」を経営理念に掲げ、アプリケーション開発・運用、システムエンジニアリングサービスを展開しています。">
  <meta name="keywords" content="Playlist, Playlist株式会社, お気に入り">
  {{-- ogp --}}
  <meta property="og:title" content="Playlist株式会社採用サイト">
  <meta property="og:type" content="website">
  <meta property="og:description" content="アプリケーション開発・運用、システムエンジニアリングサービスを展開しているPlaylist株式会社の採用サイトです。「お気に入りを創出する」を経営理念に掲げています。">
  <meta property="og:url" content="https://recruit.playlist.co.jp/">
  <meta property="og:image" content="https://recruit.playlist.co.jp/img/ogp/ogimage.jpg">
  <meta property="og:site_name" content="Playlist採用サイト">
  {{-- ogp:twitter --}}
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@Playlist0623">
  {{-- タイトル --}}
  <link rel="icon" href="img/favicon/favicon.ico" type="image/x-icon">
  <title>Playlist採用サイト</title>
  @vite(['resources/scss/style.scss', 'resources/js/app.js'])

</head>

<body>
  @yield('header')

  @yield('content')

  @yield('footer')
</body>

</html>
