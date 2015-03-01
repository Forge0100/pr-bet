<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <title>@yield('title')</title>
  @include('blocks.libcss')
</head>
<body>
  <header>
    @include('blocks.header')
  </header>
  <section>
    <div class="container">
      <div class="row">
        @yield('content')
      </div>
    </div>
  </section>
  <footer>
    @include('blocks.footer')
  </footer>
  <!-- Script-->
  @include('blocks.libjs')
</body>
</html>