@section('entry_btn')
{{-- ENTRYボタン --}}
<section id="entry-btn">
  <div class="entry-btn_background">
    <div class="entry-btn_bg-red"></div>
    <div class="entry-btn_bg-orange"></div>
    <div class="entry-btn_bg-green"></div>
    <div class="entry-btn_bg-blue"></div>
  </div>
  <a href="/entry" class="entry-btn_link_entry">
    ENTRY
    <svg class="entry-btn_arrow" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
      <path d="M8.2458 14.394C7.93621 14.7087 7.36656 14.4254 7.36991 13.9583L7.46358 1.04965C7.46674 0.611324 7.98084 0.43609 8.30287 0.76349L14.5124 7.07647C14.7823 7.35096 14.7817 7.79618 14.5108 8.06954L8.2458 14.394Z" fill="#333333" />
    </svg>
  </a>
  <a href="/requirements" class="entry-btn_link_requirements">
    募集要項はこちら
  </a>
</section>
@endsection
