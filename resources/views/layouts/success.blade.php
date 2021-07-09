<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>@yield('tilte')</title>
  @stack('prepend-style')
  @include('includes.app.style')
  @stack('addon-style')
</head>

<body>
  <!-- Semantic elements -->
  <!-- https://www.w3schools.com/html/html5_semantic_elements.asp -->

  <!-- Bootstrap navbar example -->
  <!-- https://www.w3schools.com/bootstrap4/bootstrap_navbar.asp -->
  <div class="container">
    @include('includes.app.navbar-alternate')
  </div>
  {{-- content --}}
  @yield('content')
  {{-- endcontent --}}
  


  @stack('prepend-script')
  @include('includes.app.script')
  @stack('addon-script')
</body>

</html>