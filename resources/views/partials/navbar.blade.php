<header id="header" class="header d-flex align-items-center">
  <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

    <a href="{{route('home')}}" class="logo d-flex align-items-center">
      <img src="{{ asset('img/partrocklogo.png') }}" alt=""> 
      <h1>partROCK<span>.</span></h1>
    </a>

    <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
    <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    <nav id="navbar" class="navbar">
      <ul>
        <li><a href="{{route('home')}}" class="nav-link " >Home</a></li>
        <li><a href="{{route('about')}}" class="nav-link ">About</a></li>
        <li><a href="{{route('services')}}" class="nav-link ">Services</a></li>
        <li><a href="{{route('projects')}}" class="nav-link ">Projects</a></li>
        <li><a href="{{route('blogs')}}" class="nav-link ">CSR</a></li>
        <li><a href="{{route('contact')}}" class="nav-link ">Contact</a></li>
      </ul>
    </nav><!-- .navbar -->

  </div>
</header><!-- End Header -->

<script>
  // Get the current page URL
  var currentUrl = window.location.href;

  // Find the appropriate list item and add the "active" class
  var links = document.querySelectorAll('#navbar a');
  for (var i = 0; i < links.length; i++) {
    if (links[i].href === currentUrl) {
      links[i].classList.add('active');
      break;
    }
  }
</script>

