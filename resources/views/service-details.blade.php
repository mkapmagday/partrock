<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.head')
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header d-flex align-items-center">
        @include('partials.navbar')
    </header><!-- End Header -->

    <main id="main">
        @if (strpos(Request::url(), '/services-details1') !== false)
            @include('contents.services-details-main')
        @endif
        @if (strpos(Request::url(), '/services-details2') !== false)
            @include('contents.services-details2-main')
        @endif
        @if (strpos(Request::url(), '/services-details3') !== false)
            @include('contents.services-details3-main')
        @endif
        @if (strpos(Request::url(), '/services-details4') !== false)
            @include('contents.services-details4-main')
        @endif
        @if (strpos(Request::url(), '/services-details5') !== false)
            @include('contents.services-details5-main')
        @endif
        @if (strpos(Request::url(), '/services-details6') !== false)
            @include('contents.services-details6-main')
        @endif
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        @include('partials.footer')
    </footer>
    <!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>


</body>

</html>
