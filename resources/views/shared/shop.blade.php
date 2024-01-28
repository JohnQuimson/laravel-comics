<section class="shop">
      <ul class="container">
        @foreach ($shop as $product)
            <li>
              <div class="cont-shop-icons">
                 <img src="{{ Vite::asset('resources/img/buy-' . $product['thumb'] ) }}" alt="">
              </div>
              <a href="#">
                <span>{{ $product['name'] }}</span>
              </a>
            </li>
        @endforeach
      </ul>
    </section>