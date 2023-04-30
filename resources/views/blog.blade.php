<!DOCTYPE html>
<html lang="en">

<head>
@include('partials.head')
</head>

<body>


  <header id="header" class="header d-flex align-items-center">
    @include('partials.navbar')
  </header>

  <main id="main">
    @include('contents.blog-main')
  </main>

  <footer id="footer" class="footer">
    @include('partials.footer')
  </footer>

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>



</body>

</html>