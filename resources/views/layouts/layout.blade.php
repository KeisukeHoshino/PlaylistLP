@include('layouts.footer')
@include('layouts.header')
<!DOCTYPE html>
<html lang="ja">

<head prefix="og: https://ogp.me/ns#">

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PRQV8ZD8');</script>
<!-- End Google Tag Manager -->

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-B9T941X1FD"></script>
<script>
  window.dataLayer = window.dataLayer || [];

  function gtag() {
    dataLayer.push(arguments);
  }
  gtag('js', new Date());

  gtag('config', 'G-B9T941X1FD');
</script>

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

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-B9T941X1FD"></script>
<script>
  window.dataLayer = window.dataLayer || [];

  function gtag() {
    dataLayer.push(arguments);
  }
  gtag('js', new Date());

  gtag('config', 'G-B9T941X1FD');
</script>

<body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PRQV8ZD8"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

  @yield('header')

  @yield('content')

  @yield('footer')
</body>

</html>
