<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Info Services') }}</title>
        <meta content="Free HTML Templates" name="keywords">
        <meta content="Free HTML Templates" name="description">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite(['resources/scss/app.scss'])

    </head>
    <body class="page">

      <!-- ======= Page Off-canvas wrap ======= -->
      <div class="page__off-canvas">

        <div class="off-canvas position-left" id="offCanvasLeft" data-off-canvas>
          <!-- ======= Button Close ======= -->
          <button class="close-button" data-close aria-label="Close reveal" type="button">
            <span class="close-button__icon" aria-hidden="true">&times;</span>
          </button><!-- ======= End Button Close ======= -->

          <!-- ======= Navigation ======= -->
          <nav class="nav">
            <ul class="vertical menu nav__list">
              <li class="nav__item">
                <a href="" class="nav__link">Домой</a>
              </li>
            </ul>
          </nav><!-- ======= End Navigation ======= -->
        </div>

        <div class="off-canvas-content" data-off-canvas-content>

          @yield('content')

          <div class="page__header"></div>

        </div>

      </div><!-- ======= End Page Off-canvas wrapp ======= -->

      <!-- Scripts -->
      @vite(['resources/js/app.js'])
    </body>
</html>
