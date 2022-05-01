<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
  </head>
  <body>
    <header>
      <h3>Título del sitio</h3>
    </header>
    <nav>
      <h5>Menú de navegación</h5>
    </nav>
    <section>
      <div class="container">
        @yield('content')
      </div>
    </section>
    <footer>Pie de página</footer>
  </body>
</html>
