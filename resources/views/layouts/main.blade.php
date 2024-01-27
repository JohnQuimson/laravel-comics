<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Laravel Comics</title>

  {{-- Font Awesome --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
  {{-- import js & scss --}}
  @vite('resources/js/app.js')
</head>
<body>
  {{-- header --}}
  @include('shared.header')

  {{-- main --}}
  <main>
    {{-- films --}}
    <section class="comics container d-flex flex-column align-items-center">
      <ul class="row">
      @foreach ($comics as $comic)
          <li class="col-2">
            <div class="cont-img">
               <img src="{{ $comic['thumb'] }}" alt="thumbimg">
            </div>
            <h5 class="text-uppercase">
              {{ $comic['title'] }}
            </h5>
          </li>
      @endforeach
      </ul>
      <button class="text-uppercase">load more</button>
    </section>

    {{-- Shop --}}
  @include('shared.shop')
    
  </main>

  {{-- footer --}}
  @include('shared.footer')
  
  {{-- <img src="{{ Vite::asset('resources/img/logo.png') }}" alt=""> --}}
</body>
</html>