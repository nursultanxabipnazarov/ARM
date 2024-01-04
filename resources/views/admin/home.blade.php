<!DOCTYPE html>
<html lang="en">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->
<head>
 @include('admin.css')
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
     @include('admin.navbar')
     

     @include('admin.saidbar')
      <!-- Main Content -->
     @include('admin.main')
     
     @include('admin.footer')
    </div>
  </div>
  <!-- General JS Scripts -->
  @include('admin.js')
</body>


<!-- index.html  21 Nov 2019 03:47:04 GMT -->
</html>