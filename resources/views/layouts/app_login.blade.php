<!DOCTYPE html>
<html lang="ar" dir="rtl">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="/svg/logo-small.svg" type="image/svg+xml" />
    <title>@yield('page_title')</title>

    @include('layouts.header_css')
  </head>

  <body>
    <div id="app" class="flex items-center justify-center w-full min-h-screen">
        <!-- Main Content Starts -->
        <main class="container flex-grow p-4 sm:p-6">

          @yield('login')
        </main>
        <!-- Main Content Ends -->
      </div>
      @stack('js')
  </body>
</html>
