<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs d-flex align-items-center" style="background-image: url({{ asset('img/breadcrumbs-bg.jpg') }})">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Projects</h2>
        <ol>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li>Projects</li>
        </ol>

    </div>
</div><!-- End Breadcrumbs -->

<!-- ======= Our Projects Section ======= -->
<section id="projects" class="projects">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2>Our Projects</h2>

        </div>

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
            data-portfolio-sort="original-order">

            <ul class="portfolio-flters" data-aos="fade-up" data-aos-delay="100">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-culvert">Culvert</li>
                <li data-filter=".filter-mezzanine">Mezzanine</li>
            </ul><!-- End Projects Filters -->

            <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">


                <div class="col-lg-4 col-md-6 portfolio-item filter-mezzanine">
                    <div class="portfolio-content h-100">
                        <img src="{{ asset('img/mezzanine/1.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Construction 1</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                            <a href="{{ asset('img/mezzanine/1.jpg') }}" title="Construction 1"
                                data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="{{ route('project-details2') }}" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div><!-- End Projects Item -->

                <div class="col-lg-4 col-md-6 portfolio-item filter-culvert">
                    <div class="portfolio-content h-100">
                        <img src="{{ asset('img/culvert/1.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Construction 2</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                            <a href="{{ asset('img/culvert/1.jpg') }}" title="Construction 2"
                                data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="{{ route('project-details') }}" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div><!-- End Projects Item -->

                <div class="col-lg-4 col-md-6 portfolio-item filter-mezzanine">
                    <div class="portfolio-content h-100">
                        <img src="{{ asset('img/mezzanine/2.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Construction 3</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                            <a href="{{ asset('img/mezzanine/2.jpg') }}" title="Construction 3"
                                data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="{{ route('project-details2') }}" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div><!-- End Projects Item -->

                <div class="col-lg-4 col-md-6 portfolio-item filter-culvert">
                    <div class="portfolio-content h-100">
                        <img src="{{ asset('img/culvert/2.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Construction 3</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                            <a href="{{ asset('img/culvert/2.jpg') }}" title="Construction 3"
                                data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="{{ route('project-details') }}" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div><!-- End Projects Item -->

                <div class="col-lg-4 col-md-6 portfolio-item filter-mezzanine">
                    <div class="portfolio-content h-100">
                        <img src="{{ asset('img/mezzanine/3.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Construction 3</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                            <a href="{{ asset('img/mezzanine/3.jpg') }}" title="Construction 3"
                                data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="{{ route('project-details2') }}" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div><!-- End Projects Item -->

                <div class="col-lg-4 col-md-6 portfolio-item filter-culvert">
                    <div class="portfolio-content h-100">
                        <img src="{{ asset('img/culvert/3.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Construction 3</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                            <a href="{{ asset('img/mezzanine/3.jpg') }}" title="Construction 3"
                                data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="{{ route('project-details') }}" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div><!-- End Projects Item -->

                <div class="col-lg-4 col-md-6 portfolio-item filter-mezzanine">
                    <div class="portfolio-content h-100">
                        <img src="{{ asset('img/mezzanine/4.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Construction 3</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                            <a href="{{ asset('img/mezzanine/4.jpg') }}" title="Construction 3"
                                data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="{{ route('project-details2') }}" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div><!-- End Projects Item -->

                <div class="col-lg-4 col-md-6 portfolio-item filter-culvert">
                    <div class="portfolio-content h-100">
                        <img src="{{ asset('img/mezzanine/4.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Construction 3</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                            <a href="{{ asset('img/mezzanine/4.jpg') }}" title="Construction 3"
                                data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="{{ route('project-details') }}" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div><!-- End Projects Item -->

                <div class="col-lg-4 col-md-6 portfolio-item filter-mezzanine">
                    <div class="portfolio-content h-100">
                        <img src="{{ asset('img/mezzanine/5.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Construction 3</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                            <a href="{{ asset('img/mezzanine/5.jpg') }}" title="Construction 3"
                                data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="{{ route('project-details2') }}" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div><!-- End Projects Item -->

                <div class="col-lg-4 col-md-6 portfolio-item filter-culvert">
                    <div class="portfolio-content h-100">
                        <img src="{{ asset('img/mezzanine/5.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Construction 3</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                            <a href="{{ asset('img/mezzanine/5.jpg') }}" title="Construction 3"
                                data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="{{ route('project-details') }}" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div><!-- End Projects Item -->

                <div class="col-lg-4 col-md-6 portfolio-item filter-mezzanine">
                    <div class="portfolio-content h-100">
                        <img src="{{ asset('img/mezzanine/6.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Construction 3</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                            <a href="{{ asset('img/mezzanine/6.jpg') }}" title="Construction 3"
                                data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="{{ route('project-details2') }}" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div><!-- End Projects Item -->

                <div class="col-lg-4 col-md-6 portfolio-item filter-culvert">
                    <div class="portfolio-content h-100">
                        <img src="{{ asset('img/culvert/6.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Construction 3</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                            <a href="{{ asset('img/culvert/6.jpg') }}" title="Construction 3"
                                data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="{{ route('project-details') }}" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div><!-- End Projects Item -->

                <div class="col-lg-4 col-md-6 portfolio-item filter-mezzanine">
                    <div class="portfolio-content h-100">
                        <img src="{{ asset('img/mezzanine/7.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Construction 3</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                            <a href="{{ asset('img/mezzanine/7.jpg') }}" title="Construction 3"
                                data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="{{ route('project-details2') }}" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div><!-- End Projects Item -->

                <div class="col-lg-4 col-md-6 portfolio-item filter-culvert">
                    <div class="portfolio-content h-100">
                        <img src="{{ asset('img/culvert/7.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Construction 3</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                            <a href="{{ asset('img/culvert/7.jpg') }}" title="Construction 3"
                                data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="{{ route('project-details') }}" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div><!-- End Projects Item -->

                <div class="col-lg-4 col-md-6 portfolio-item filter-mezzanine">
                    <div class="portfolio-content h-100">
                        <img src="{{ asset('img/mezzanine/8.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Construction 3</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                            <a href="{{ asset('img/mezzanine/8.jpg') }}" title="Construction 3"
                                data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="{{ route('project-details2') }}" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div><!-- End Projects Item -->

                <div class="col-lg-4 col-md-6 portfolio-item filter-culvert">
                    <div class="portfolio-content h-100">
                        <img src="{{ asset('img/culvert/8.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Construction 3</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                            <a href="{{ asset('img/culvert/8.jpg') }}" title="Construction 3"
                                data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="{{ route('project-details') }}" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div><!-- End Projects Item -->

                <div class="col-lg-4 col-md-6 portfolio-item filter-mezzanine">
                    <div class="portfolio-content h-100">
                        <img src="{{ asset('img/mezzanine/9.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Construction 3</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                            <a href="{{ asset('img/mezzanine/9.jpg') }}" title="Construction 3"
                                data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="{{ route('project-details2') }}" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div><!-- End Projects Item -->

                <div class="col-lg-4 col-md-6 portfolio-item filter-culvert">
                    <div class="portfolio-content h-100">
                        <img src="{{ asset('img/culvert/9.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Construction 3</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                            <a href="{{ asset('img/culvert/9.jpg') }}" title="Construction 3"
                                data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="{{ route('project-details') }}" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div><!-- End Projects Item -->

                <div class="col-lg-4 col-md-6 portfolio-item filter-mezzanine">
                    <div class="portfolio-content h-100">
                        <img src="{{ asset('img/mezzanine/10.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Construction 3</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                            <a href="{{ asset('img/mezzanine/10.jpg') }}" title="Construction 3"
                                data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="{{ route('project-details2') }}" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div><!-- End Projects Item -->

                <div class="col-lg-4 col-md-6 portfolio-item filter-culvert">
                    <div class="portfolio-content h-100">
                        <img src="{{ asset('img/culvert/10.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Construction 3</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                            <a href="{{ asset('img/culvert/10.jpg') }}" title="Construction 3"
                                data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="{{ route('project-details') }}" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div><!-- End Projects Item -->
            </div><!-- End Projects Container -->

        </div>

    </div>
</section><!-- End Our Projects Section -->
