<footer>
  <section class="footer-top">
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
    <div class="cont-img">
      <img src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}" alt="jumbotron"> 
    </div>
  </section>
</footer>