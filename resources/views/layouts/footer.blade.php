{{-- footerについて --}}
@section('footer')

<footer class="l-footer">
  <div class="l-footer_pagetopWrap">
    <button class="l-footer_pagetop js-pageTopBtn" type=button><img src="{{asset('img/layout/icon_pagetop.svg')}}" alt="ページの最上部へ戻る"></button>
  </div>
  <div class="l-footer_inner">
    <div class="l-footer_lead">
      <a href="https://playlist.co.jp/" target="_blank" class="l-footer_lead_item-playlist" data-gtm-click=”footer_corporatesite”><img src="{{asset('img/layout/logo_playlist_footer.svg')}}" alt="Playlist"><span>コーポレートサイト</span></a>
      <div class="l-footer_lead_external">
        <a href="https://tenshoku.mynavi.jp/company/327586/" target="_blank" class="l-footer_lead_item-mynavi" data-gtm-click=”footer_mynavi”><img src="{{asset('img/layout/logo_mynavi.svg')}}" alt="マイナビ"></a>
        <a href="https://www.wantedly.com/companies/Playlist0623" target="_blank" class="l-footer_lead_item-wantedly" data-gtm-click=”footer_wantedly”><img src="{{asset('img/layout/logo_wantedly.svg')}}" alt="Wantedly"></a>
      </div>
    </div>
    <div class="l-footer_sns">
      <p class="l-footer_sns_heading">各種SNS更新中！</p>
      <ul class="l-footer_sns_list">
        <li>
          <a href="https://twitter.com/Playlist0623" target="_blank" data-gtm-click=”footer_x_company”><img src="{{asset('img/layout/logo_x.svg')}}" alt="X（旧Twitter）"><span>会社公式</span></a>
        </li>
        <li>
          <a href="https://twitter.com/PlaylistRecruit" target="_blank" data-gtm-click=”footer_x_recruit”><img src="{{asset('img/layout/logo_x.svg')}}" alt="X（旧Twitter）"><span>採用担当</span></a>
        </li>
        <li>
          <a href="https://www.instagram.com/playlist.co.ltd/" target="_blank" data-gtm-click=”footer_instagram”><img src="{{asset('img/layout/logo_instagram.svg')}}" alt="Instagram"></a>
        </li>
        <li>
          <a href="https://www.facebook.com/Playlist0623" target="_blank" data-gtm-click=”footer_facebook”><img src="{{asset('img/layout/logo_facebook.svg')}}" alt="Facebook"></a>
        </li>
      </ul>
    </div>
    <p class="l-footer_copyright"><small>&copy;2024 Playlist</small></p>
  </div>
</footer>

@endsection
