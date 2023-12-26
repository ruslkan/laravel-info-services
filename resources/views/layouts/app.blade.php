<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Info Services') }}</title>
        <meta content="Free HTML Templates" name="keywords">
        <meta content="Free HTML Templates" name="description">

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

          <div class="page__header">
            <!-- ======= Icon Hamburger ======= -->
            <svg class="icon-hamburger" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 41 22">
              <line x1="1" y1="1" x2="23.0821" y2="0.999999" stroke-linecap="round"/>
              <line x1="1" y1="11" x2="39.1368" y2="11" stroke-linecap="round"/>
              <line x1="1" y1="21" x2="31.1094" y2="21" stroke-linecap="round"/>
            </svg><!-- ======= End Icon Hamburger ======= -->
          </div>

        </div>

      </div><!-- ======= End Page Off-canvas wrapp ======= -->

      <!-- Scripts -->
      @vite('resources/js/app.js')

    </body>

</html>
