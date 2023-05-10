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
                <li data-filter=".filter-mezzanine">One-Storey with Mezzanine</li>
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
                            <a href="{{ asset('img/culvert/3.jpg') }}" title="Construction 3"
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
                        <img src="{{ asset('img/culvert/4.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Construction 3</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                            <a href="{{ asset('img/culvert/4.jpg') }}" title="Construction 3"
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
                        <img src="{{ asset('img/culvert/5.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Construction 3</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                            <a href="{{ asset('img/culvert/5.jpg') }}" title="Construction 3"
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

<div class="section-header" style="padding-bottom:0px">
    <h2>Other Projects (Dredging)</h2>
</div>

<section id="project-details" class="project-details">
    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="position-relative h-100">
            <div class="slides-1 portfolio-details-slider swiper">
                <div class="swiper-wrapper align-items-center">

                    <div class="swiper-slide">
                        <img src="{{ asset('img/website/dredging1.jpg') }}" alt="" style="max-height: 972px">
                    </div>

                    <div class="swiper-slide">
                        <img src="{{ asset('img/website/dredging2.jpg') }}" alt="" style="max-height: 972px">
                    </div>

                    <div class="swiper-slide">
                        <img src="{{ asset('img/website/dredging3.jpg') }}" alt="" style="max-height: 972px">
                    </div>

                </div>
                <div class="swiper-pagination"></div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

        </div>

        <div class="row justify-content-between gy-4 mt-4">

            <div class="col-lg-8">
                <div class="portfolio-description">
                    <h2>Dredging</h2>
                    <p>
                        Welcome to our website, where we offer comprehensive dredging services for construction and mining projects. Our experienced team uses state-of-the-art equipment to efficiently remove sediment and debris from water bodies, improving navigability and restoring water depths. With our expertise and commitment to sustainable practices, we deliver exceptional results for projects of all scales. Choose us for a seamless and efficient dredging process from start to finish.

                    </p>

                </div>
            </div>

            <div class="col-lg-3">
                <div class="portfolio-info">
                    <h3>Project information</h3>
                    <ul>
                        <li><strong>Category</strong> <span>Construction</span></li>
                        <li><strong>Client</strong> <span></span></li>
                        <li><strong>Project date</strong> <span></span></li>
                    </ul>
                </div>
            </div>

        </div>

    </div>
</section><!-- End Projet Details Section -->


<div class="section-header" style="padding-bottom:0px">
    <h2>Other Projects (Mining)</h2>
</div>
<section id="project-details" class="project-details">
    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="position-relative h-100">
            <div class="slides-1 portfolio-details-slider swiper">
                <div class="swiper-wrapper align-items-center">

                    <div class="swiper-slide">
                        <img src="{{ asset('img/website/mining.jpg') }}" alt="" style="max-height: 972px">
                    </div>

                    <div class="swiper-slide">
                        <img src="{{ asset('img/website/mining1.jpg') }}" alt="" style="max-height: 972px">
                    </div>

                    <div class="swiper-slide">
                        <img src="{{ asset('img/website/mining2.jpg') }}" alt="" style="max-height: 972px">
                    </div>

                </div>
                <div class="swiper-pagination"></div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

        </div>

        <div class="row justify-content-between gy-4 mt-4">

            <div class="col-lg-8">
                <div class="portfolio-description">
                    <h2>Mining</h2>
                    <p>
                        Welcome to our website, where we specialize in providing comprehensive mining services for various projects. Our skilled team utilizes advanced equipment and techniques to ensure efficient and responsible mining operations. With a focus on safety, sustainability, and environmental stewardship, we deliver exceptional results for mining ventures of all sizes.

                        At our company, we offer a range of mining services, including exploration, extraction, processing, and reclamation. Our experienced professionals are dedicated to maximizing mineral recovery while minimizing environmental impact. We adhere to stringent regulations and best practices to ensure the responsible management of resources and the protection of surrounding ecosystems.
                        
                        Whether you're in need of surface mining, underground mining, or mineral processing services, we have the expertise to handle your project. Our commitment to operational excellence, technological innovation, and sustainable practices sets us apart in the mining industry.
                        
                        Choose us as your trusted partner for seamless and efficient mining operations. Contact us today to discuss your mining needs and discover how we can contribute to the success of your project.
                        
                    </p>

                </div>
            </div>

            <div class="col-lg-3">
                <div class="portfolio-info">
                    <h3>Project information</h3>
                    <ul>
                        <li><strong>Category</strong> <span>Construction</span></li>
                        <li><strong>Client</strong> <span></span></li>
                        <li><strong>Project date</strong> <span></span></li>
                    </ul>
                </div>
            </div>

        </div>

    </div>
</section><!-- End Projet Details Section -->

<div class="section-header" style="padding-bottom:0px">
    <h2>Other Projects (Quarrying)</h2>
</div>
<section id="project-details" class="project-details">
    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="position-relative h-100">
            <div class="slides-1 portfolio-details-slider swiper">
                <div class="swiper-wrapper align-items-center">

                    <div class="swiper-slide">
                        <img src="{{ asset('img/website/quarrying1.jpg') }}" alt="" style="max-height: 972px">
                    </div>

                    <div class="swiper-slide">
                        <img src="{{ asset('img/website/quarrying2.jpg') }}" alt="" style="max-height: 972px">
                    </div>

                    <div class="swiper-slide">
                        <img src="{{ asset('img/website/quarrying3.jpg') }}" alt="" style="max-height: 972px">
                    </div>

                </div>
                <div class="swiper-pagination"></div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

        </div>

        <div class="row justify-content-between gy-4 mt-4">

            <div class="col-lg-8">
                <div class="portfolio-description">
                    <h2>Quarrying</h2>
                    <p>
                        Welcome to our website, your trusted source for professional quarrying services.

                        At [partROCK], we specialize in extracting and supplying high-quality quarry materials for construction projects. With state-of-the-art equipment and a skilled team, we deliver reliable aggregates, sand, gravel, and stone. Our commitment to safety and sustainability ensures responsible quarrying practices. Contact us for your quarry material needs.
                    </p>

                </div>
            </div>

            <div class="col-lg-3">
                <div class="portfolio-info">
                    <h3>Project information</h3>
                    <ul>
                        <li><strong>Category</strong> <span>Construction</span></li>
                        <li><strong>Client</strong> <span></span></li>
                        <li><strong>Project date</strong> <span></span></li>
                    </ul>
                </div>
            </div>

        </div>

    </div>
</section><!-- End Projet Details Section -->

<div class="section-header" style="padding-bottom:0px">
    <h2>Other Projects (Rivera)</h2>
</div>

<section id="project-details" class="project-details">
    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="position-relative h-100">
            <div class="slides-1 portfolio-details-slider swiper">
                <div class="swiper-wrapper align-items-center">

                    <div class="swiper-slide">
                        <img src="{{ asset('img/website/rivera.jpg') }}" alt="" style="max-height: 972px">
                    </div>

                    <div class="swiper-slide">
                        <img src="{{ asset('img/website/rivera.jpg') }}" alt="" style="max-height: 972px">
                    </div>

                    <div class="swiper-slide">
                        <img src="{{ asset('img/website/rivera.jpg') }}" alt="" style="max-height: 972px">
                    </div>

                </div>
                <div class="swiper-pagination"></div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

        </div>

        <div class="row justify-content-between gy-4 mt-4">

            <div class="col-lg-8">
                <div class="portfolio-description">
                    <h2>Rivera</h2>
                    <p>
                        Welcome to our website, your trusted source for professional quarrying services.

                        At [partROCK], we specialize in extracting and supplying high-quality quarry materials for construction projects. With state-of-the-art equipment and a skilled team, we deliver reliable aggregates, sand, gravel, and stone. Our commitment to safety and sustainability ensures responsible quarrying practices. Contact us for your quarry material needs.
                    </p>

                </div>
            </div>

            <div class="col-lg-3">
                <div class="portfolio-info">
                    <h3>Project information</h3>
                    <ul>
                        <li><strong>Category</strong> <span>Construction</span></li>
                        <li><strong>Client</strong> <span></span></li>
                        <li><strong>Project date</strong> <span></span></li>
                    </ul>
                </div>
            </div>

        </div>

    </div>
</section><!-- End Projet Details Section -->

<div class="section-header" style="padding-bottom:0px">
    <h2>Other Projects (Valle Verde)</h2>
</div>
<section id="project-details" class="project-details">
    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="position-relative h-100">
            <div class="slides-1 portfolio-details-slider swiper">
                <div class="swiper-wrapper align-items-center">

                    <div class="swiper-slide">
                        <img src="{{ asset('img/website/valle verde.jpg') }}" alt="" style="max-height: 972px">
                    </div>

                    <div class="swiper-slide">
                        <img src="{{ asset('img/website/valle verde.jpg') }}" alt="" style="max-height: 972px">
                    </div>

                    <div class="swiper-slide">
                        <img src="{{ asset('img/website/valle verde.jpg') }}" alt="" style="max-height: 972px">
                    </div>

                </div>
                <div class="swiper-pagination"></div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

        </div>

        <div class="row justify-content-between gy-4 mt-4">

            <div class="col-lg-8">
                <div class="portfolio-description">
                    <h2>Valle Verde</h2>
                    <p>
                        Welcome to our website, your trusted source for professional quarrying services.

                        At [partROCK], we specialize in extracting and supplying high-quality quarry materials for construction projects. With state-of-the-art equipment and a skilled team, we deliver reliable aggregates, sand, gravel, and stone. Our commitment to safety and sustainability ensures responsible quarrying practices. Contact us for your quarry material needs.
                    </p>

                </div>
            </div>

            <div class="col-lg-3">
                <div class="portfolio-info">
                    <h3>Project information</h3>
                    <ul>
                        <li><strong>Category</strong> <span>Construction</span></li>
                        <li><strong>Client</strong> <span></span></li>
                        <li><strong>Project date</strong> <span></span></li>
                    </ul>
                </div>
            </div>

        </div>

    </div>
</section><!-- End Projet Details Section -->