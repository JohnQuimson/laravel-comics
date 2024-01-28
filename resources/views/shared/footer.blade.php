<footer>
  <section class="footer-top">
    <div class="container">
      {{-- SINISTRA --}}
      <div class="cont-left">
        <div class="cont-list">
          {{-- col 1 --}}
          <div class="col1">
            <ul>
            @foreach ($info['list1'] as $link)
              <li>
                <a href="#">
                  <span>{{ $link['title'] }}</span>
                </a>
              </li>
            @endforeach
            </ul>
         <ul>
          @foreach ($info['list2'] as $link)
          <li>
            <a href="#">
              <span>{{ $link['title'] }}</span>
            </a>
          </li>
          @endforeach
        </ul>
          </div>
          {{-- col 2 --}}
          <div class="col2">
         <ul>
          @foreach ($info['list3'] as $link)
          <li>
            <a href="#">
              <span>{{ $link['title'] }}</span>
            </a>
          </li>
          @endforeach
          </ul>
          </div>
          {{-- col 3 --}}
          <div class="col3">
         <ul>
          @foreach ($info['list4'] as $link)
          <li>
            <a href="#">
              <span>{{ $link['title'] }}</span>
            </a>
          </li>
          @endforeach
          </ul>
          </div>
        </div>
    <p>All site content TM and 2020 DC Enterteinmen, unless otherwise <a href="#">noted here</a>. All rights reserved. <a href="#">Cookies Settings</a></p>
    </div>
    {{--  DESTRA --}}
    <div class="cont-img">
      <img src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}" alt="jumbotron"> 
    </div>
    </div>
  </section>

  <section class="footer-bottom container d-flex justify-content-between align-items-center">
    <div class="footer-sx">
      <button>sign-up now!</button>
    </div>
    <div class="footer-dx">
      <ul class="d-flex align-items-center gap-3">
        <li>
          <a href="#">
            <span>Follow us</span>
          </a>
        </li>
        @foreach ($socials as $social)
            <li>
          <a href="#"></a>
           <img src="{{ Vite::asset('resources/img/footer-' . $social['foto'] ) }}" alt="">
          </a>
        </li>
        @endforeach
        
      </ul>
    </div>
  </section>
</footer>