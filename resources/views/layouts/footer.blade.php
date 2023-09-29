{{-- footerについて --}}
@section('footer')

<footer class="l-footer">
  <div class="l-footer_pagetopWrap">
    <button class="l-footer_pagetop js-pageTopBtn" type=button><img src="{{asset('img/layout/icon_pagetop.svg')}}" alt="ページの最上部へ戻る"></button>
  </div>
  <div class="l-footer_inner">
    <div class="l-footer_lead">
      <a href="#" class="l-footer_lead_item-playlist"><img src="{{asset('img/layout/logo_playlist_footer.svg')}}" alt="Playlist"><span>コーポレートサイト</span></a>
      <div class="l-footer_lead_external">
        <a href="#" class="l-footer_lead_item-mynavi"><img src="{{asset('img/layout/logo_mynavi.svg')}}" alt="マイナビ"></a>
        <a href="#" class="l-footer_lead_item-wantedly"><img src="{{asset('img/layout/logo_wantedly.svg')}}" alt="Wantedly"></a>
      </div>
    </div>
    <div class="l-footer_sns">
      <p class="l-footer_sns_heading">各種SNS更新中！</p>
      <ul class="l-footer_sns_list">
        <li>
          <a href="#"><img src="{{asset('img/layout/logo_x.svg')}}" alt="X（旧Twitter）"><span>会社公式</span></a>
        </li>
        <li>
          <a href="#"><img src="{{asset('img/layout/logo_x.svg')}}" alt="X（旧Twitter）"><span>採用担当</span></a>
        </li>
        <li>
          <a href="#"><img src="{{asset('img/layout/logo_instagram.svg')}}" alt="Instagram"></a>
        </li>
        <li>
          <a href="#"><img src="{{asset('img/layout/logo_facebook.svg')}}" alt="Facebook"></a>
        </li>
      </ul>
    </div>
    <p class="l-footer_copyright"><small>&copy;2023 Playlist</small></p>
  </div>
</footer>

@endsection
