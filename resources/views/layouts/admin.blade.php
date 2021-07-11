<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>@yield('title') | {{ config('app.name') }}</title>

    @include('includes.admin.style')
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>

      {{-- navbar --}}
      @include('includes.admin.navbar')
      {{-- endnavbar --}}

      {{-- sidebar --}}
        @include('includes.admin.sidebar')
      {{-- endsidebar --}}

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>@yield('header')</h1>
          </div>

            {{-- content --}}
            @yield('content')
            {{-- endcontent --}}

     {{-- footer --}}
          @include('includes.admin.footer')
     {{-- endfooter --}}

    {{-- script --}}
          @include('includes.admin.script')
    {{-- endscript --}}
</body>
</html>
