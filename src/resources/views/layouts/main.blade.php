<!DOCTYPE html>
<html lang="en">

<head>
  <!-- css here -->
  @include('layouts.head')
</head>

<body>

  <!-- css here -->
  @include('layouts.header')

  <main id="main" style="margin-top:5%">

    <!-- content here -->
    @yield('content')

  </main><!-- End #main -->

  <!-- footer here -->
  @include('layouts.footer')

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  
  <!-- javascript here -->
  @include('layouts.javascript')
</body>

</html>