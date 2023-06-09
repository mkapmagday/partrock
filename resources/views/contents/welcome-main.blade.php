<!-- ======= Get Started Section ======= -->
<section id="get-started" class="get-started section-bg">
    <div class="container">

        <div class="row justify-content-between gy-4">

            <div class="col-lg-6 d-flex align-items-center" data-aos="fade-up">
                <div class="content">
                    <h3>MAJOR FIELDS OF ACTIVITY.</h3>
                    <p>Mining, Quarrying, and Crushing Plant Operation/Management
                        Dredging and Reclamation Project
                        Land Development and Earth Works
                        Civil & Structural Design and Construction
                        Architectural and Interior Design, Interior Fit-out and Renovation
                        Engineered Sanitary Landfill and Sewage Treatment plant/facility
                        Supplier of Silica, Quartz, Dredged Sea Sand, Iron/Magnetic Sand, Aggregates, Blasted Armor
                        Rock, Boulders and other Minerals.
                </div>
            </div>

            <div class="col-lg-5" data-aos="fade">
                <form action="{{ route('sendEmail') }}" method="post" class="php-email-form">
                    @csrf
                    <h3>Inquire Now.</h3>
                    <p>Send us your inquiries through this form.</p>
                    <div class="row gy-3">

                        <div class="col-md-12">
                            <input type="text" name="name" class="form-control" placeholder="Name" required>
                        </div>

                        <div class="col-md-12 ">
                            <input type="email" class="form-control" name="email" placeholder="Email" required>
                        </div>

                        <div class="col-md-12">
                            <input type="text" class="form-control" name="phone" placeholder="Phone" required>
                        </div>

                        <div class="col-md-12">
                            <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                        </div>

                        <div class="col-md-12 text-center">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your quote request has been sent successfully. Thank you!
                            </div>

                            <button type="submit">Inquire</button>
                        </div>

                    </div>
                </form>
            </div><!-- End Quote Form -->

        </div>

    </div>
</section><!-- End Get Started Section -->




<!-- ======= Services Section ======= -->
<section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2>Services</h2>
            <p>Our company offers a wide range of construction services including aggregates, cement, filling materials,
                silica, coal, iron ore, dolomite, boulders, dredged materials, mining contractor, development general
                contractor, reclamation, dredging earthworks, drilling, blasting equipment, and van rentals. We provide
                high-quality materials and equipment, coupled with skilled professionals who are committed to delivering
                excellent results. We prioritize safety, efficiency, and customer satisfaction in every project we
                undertake.</p>
        </div>

        <div class="row gy-4">
            <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="post-item position-relative h-100">

                    <div class="post-img position-relative overflow-hidden">
                        <img src="{{ asset('img/website/mining1.jpg') }}" class="img-fluid" alt="">
                        <span class="post-date"></span>
                    </div>

                    <div class="post-content d-flex flex-column">

                        <h3 class="post-title">Mining & Dredging</h3>

                        <div class="meta d-flex align-items-center">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-person"></i> <span class="ps-2">partROCK</span>
                            </div>
                            <span class="px-3 text-black-50">/</span>
                            <div class="d-flex align-items-center">
                                <i class="bi bi-folder2"></i> <span class="ps-2">Services Offered</span>
                            </div>
                        </div>

                        <hr>

                        <a href="{{ route('services-details1') }}" class="readmore stretched-link"><span>Read
                                More</span><i class="bi bi-arrow-right"></i></a>

                    </div>

                </div>
            </div><!-- End post item --><!-- End Service Item -->


            <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="post-item position-relative h-100">

                    <div class="post-img position-relative overflow-hidden">
                        <img src="{{ asset('img/projects/construction-3.jpg') }}" class="img-fluid" alt="">
                        <span class="post-date"></span>
                    </div>

                    <div class="post-content d-flex flex-column">

                        <h3 class="post-title">Construction</h3>

                        <div class="meta d-flex align-items-center">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-person"></i> <span class="ps-2">partROCK</span>
                            </div>
                            <span class="px-3 text-black-50">/</span>
                            <div class="d-flex align-items-center">
                                <i class="bi bi-folder2"></i> <span class="ps-2">Services Offered</span>
                            </div>
                        </div>

                        <hr>

                        <a href="{{ route('services-details2') }}" class="readmore stretched-link"><span>Read
                                More</span><i class="bi bi-arrow-right"></i></a>

                    </div>

                </div>
            </div><!-- End post item --><!-- End Service Item -->

            <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="post-item position-relative h-100">

                    <div class="post-img position-relative overflow-hidden">
                        <img src="{{ asset('img/projects/design-2.jpg') }}" class="img-fluid" alt="">
                        <span class="post-date"></span>
                    </div>

                    <div class="post-content d-flex flex-column">

                        <h3 class="post-title">Project Management</h3>

                        <div class="meta d-flex align-items-center">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-person"></i> <span class="ps-2">partROCK</span>
                            </div>
                            <span class="px-3 text-black-50">/</span>
                            <div class="d-flex align-items-center">
                                <i class="bi bi-folder2"></i> <span class="ps-2">Services Offered</span>
                            </div>
                        </div>

                        <hr>

                        <a href="{{ route('services-details3') }}" class="readmore stretched-link"><span>Read
                                More</span><i class="bi bi-arrow-right"></i></a>

                    </div>

                </div>
            </div><!-- End post item --><!-- End Service Item -->

            <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="post-item position-relative h-100">

                    <div class="post-img position-relative overflow-hidden">
                        <img src="{{ asset('img/website/landdev1.jpg') }}" class="img-fluid" alt="">
                        <span class="post-date"></span>
                    </div>

                    <div class="post-content d-flex flex-column">

                        <h3 class="post-title">Land Development</h3>

                        <div class="meta d-flex align-items-center">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-person"></i> <span class="ps-2">partROCK</span>
                            </div>
                            <span class="px-3 text-black-50">/</span>
                            <div class="d-flex align-items-center">
                                <i class="bi bi-folder2"></i> <span class="ps-2">Services Offered</span>
                            </div>
                        </div>

                        <hr>

                        <a href="{{ route('services-details4') }}" class="readmore stretched-link"><span>Read
                                More</span><i class="bi bi-arrow-right"></i></a>

                    </div>

                </div>
            </div><!-- End post item --><!-- End Service Item -->

            <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="post-item position-relative h-100">

                    <div class="post-img position-relative overflow-hidden">
                        <img src="{{ asset('img/website/smarthome.jpg') }}" class="img-fluid" alt="">
                        <span class="post-date"></span>
                    </div>

                    <div class="post-content d-flex flex-column">

                        <h3 class="post-title">Smart Home Automation</h3>

                        <div class="meta d-flex align-items-center">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-person"></i> <span class="ps-2">partROCK</span>
                            </div>
                            <span class="px-3 text-black-50">/</span>
                            <div class="d-flex align-items-center">
                                <i class="bi bi-folder2"></i> <span class="ps-2">Services Offered</span>
                            </div>
                        </div>

                        <hr>

                        <a href="{{ route('services-details5') }}" class="readmore stretched-link"><span>Read
                                More</span><i class="bi bi-arrow-right"></i></a>

                    </div>

                </div>
            </div><!-- End post item --><!-- End Service Item -->

            <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="post-item position-relative h-100">

                    <div class="post-img position-relative overflow-hidden">
                        <img src="{{ asset('img/website/trading.jpg') }}" class="img-fluid" alt="">
                        <span class="post-date"></span>
                    </div>

                    <div class="post-content d-flex flex-column">

                        <h3 class="post-title">Trading</h3>

                        <div class="meta d-flex align-items-center">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-person"></i> <span class="ps-2">partROCK</span>
                            </div>
                            <span class="px-3 text-black-50">/</span>
                            <div class="d-flex align-items-center">
                                <i class="bi bi-folder2"></i> <span class="ps-2">Services Offered</span>
                            </div>
                        </div>

                        <hr>

                        <a href="{{ route('services-details6') }}" class="readmore stretched-link"><span>Read
                                More</span><i class="bi bi-arrow-right"></i></a>

                    </div>

                </div>
            </div><!-- End post item --><!-- End Service Item -->

            {{-- <div class="col-lg-4 col-md-6 hidden" data-aos="fade-up" data-aos-delay="700">
                <div class="service-item position-relative">
                    <div class="icon">
                        <i class="fa-solid fa-arrow-up-from-ground-water"></i>
                    </div>
                    <h3>Dolomite</h3>
                    <p>Our dolomite products are perfect for use in a range of construction applications, including road
                        construction and building foundations.</p>
                    <a href="service-details.html" class="readmore stretched-link">Learn more <i
                            class="bi bi-arrow-right"></i></a>
                </div>
            </div><!-- End Service Item -->

            <div class="col-lg-4 col-md-6 hidden" data-aos="fade-up" data-aos-delay="800">
                <div class="service-item position-relative">
                    <div class="icon">
                        <i class="fa-solid fa-arrow-up-from-ground-water"></i>
                    </div>
                    <h3>Boulders</h3>
                    <p>We provide a range of boulders in different sizes, perfect for use in landscaping, erosion
                        control, and other construction applications.</p>
                    <a href="service-details.html" class="readmore stretched-link">Learn more <i
                            class="bi bi-arrow-right"></i></a>
                </div>
            </div><!-- End Service Item -->

            <div class="col-lg-4 col-md-6 hidden" data-aos="fade-up" data-aos-delay="900">
                <div class="service-item position-relative">
                    <div class="icon">
                        <i class="fa-solid fa-arrow-up-from-ground-water"></i>
                    </div>
                    <h3>Dredged Materials</h3>
                    <p>Our dredged materials are ideal for use in a range of marine construction projects, including
                        harbor deepening, beach nourishment, and more.</p>
                    <a href="service-details.html" class="readmore stretched-link">Learn more <i
                            class="bi bi-arrow-right"></i></a>
                </div>
            </div><!-- End Service Item -->

            <div class="col-lg-4 col-md-6 hidden" data-aos="fade-up" data-aos-delay="1000">
                <div class="service-item position-relative">
                    <div class="icon">
                        <i class="fa-solid fa-arrow-up-from-ground-water"></i>
                    </div>
                    <h3>Mining Contractor</h3>
                    <p>We provide expert mining contractor services, including exploration, development, and operation,
                        to help you maximize your mineral resources.</p>
                    <a href="service-details.html" class="readmore stretched-link">Learn more <i
                            class="bi bi-arrow-right"></i></a>
                </div>
            </div><!-- End Service Item -->

            <div class="col-lg-4 col-md-6 hidden" data-aos="fade-up" data-aos-delay="1100">
                <div class="service-item position-relative">
                    <div class="icon">
                        <i class="fa-solid fa-arrow-up-from-ground-water"></i>
                    </div>
                    <h3>Development General Contractor</h3>
                    <p>Our development general contractor services are ideal for any construction project, offering
                        expertise in design, planning, and execution.</p>
                    <a href="service-details.html" class="readmore stretched-link">Learn more <i
                            class="bi bi-arrow-right"></i></a>
                </div>
            </div><!-- End Service Item -->

            <div class="col-lg-4 col-md-6 hidden" data-aos="fade-up" data-aos-delay="1200">
                <div class="service-item position-relative">
                    <div class="icon">
                        <i class="fa-solid fa-arrow-up-from-ground-water"></i>
                    </div>
                    <h3>Reclamation</h3>
                    <p>We provide comprehensive reclamation services to help restore land to its original state after
                        mining or other industrial activities.</p>
                    <a href="service-details.html" class="readmore stretched-link">Learn more <i
                            class="bi bi-arrow-right"></i></a>
                </div>
            </div><!-- End Service Item -->

            <div class="col-lg-4 col-md-6 hidden" data-aos="fade-up" data-aos-delay="1300">
                <div class="service-item position-relative">
                    <div class="icon">
                        <i class="fa-solid fa-arrow-up-from-ground-water"></i>
                    </div>
                    <h3>Dredging Earthworks</h3>
                    <p>Our dredging earthworks services are ideal for any marine construction project, offering
                        expertise in dredging, reclamation, and other earthworks.</p>
                    <a href="service-details.html" class="readmore stretched-link">Learn more <i
                            class="bi bi-arrow-right"></i></a>
                </div>
            </div><!-- End Service Item -->

            <div class="col-lg-4 col-md-6 hidden" data-aos="fade-up" data-aos-delay="1400">
                <div class="service-item position-relative">
                    <div class="icon">
                        <i class="fa-solid fa-arrow-up-from-ground-water"></i>
                    </div>
                    <h3>Drilling</h3>
                    <p>We provide expert drilling services for a range of applications, including geotechnical
                        exploration, mining, and more.</p>
                    <a href="service-details.html" class="readmore stretched-link">Learn more <i
                            class="bi bi-arrow-right"></i></a>
                </div>
            </div><!-- End Service Item -->

            <div class="col-lg-4 col-md-6 hidden" data-aos="fade-up" data-aos-delay="1500">
                <div class="service-item position-relative">
                    <div class="icon">
                        <i class="fa-solid fa-arrow-up-from-ground-water"></i>
                    </div>
                    <h3>Blasing Equipment</h3>
                    <p>Our high-quality blasting equipment is perfect for use in mining, construction, and other
                        industrial applications.</p>
                    <a href="service-details.html" class="readmore stretched-link">Learn more <i
                            class="bi bi-arrow-right"></i></a>
                </div>
            </div><!-- End Service Item -->

            <div class="col-lg-4 col-md-6 hidden" data-aos="fade-up" data-aos-delay="1600">
                <div class="service-item position-relative">
                    <div class="icon">
                        <i class="fa-solid fa-arrow-up-from-ground-water"></i>
                    </div>
                    <h3>Van Rentals</h3>
                    <p>We offer a range of reliable and affordable van rentals to help you transport your equipment and
                        personnel to your construction site.</p>
                    <a href="service-details.html" class="readmore stretched-link">Learn more <i
                            class="bi bi-arrow-right"></i></a>
                </div>
            </div><!-- End Service Item -->

            <button id="show-more" class="show-more">Show more</button> --}}


        </div>

    </div>
</section><!-- End Services Section -->

<!-- ======= Alt Services Section ======= -->


{{-- <!-- ======= Features Section ======= -->
        <section id="features" class="features section-bg">

            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>Features</h2>
                    <p>Our company's features include high-quality materials, state-of-the-art equipment, skilled professionals, safety and efficiency, and customer satisfaction. We provide a wide range of construction services, including aggregates, cement, filling materials, silica, coal, iron ore, dolomite, boulders, dredged materials, mining contractor, development general contractor, reclamation, dredging earthworks, drilling, blasting equipment, and van rentals. With our years of experience in the industry, we have built a solid reputation for delivering exceptional results and exceeding our customers' expectations.</p>
                </div>

                <ul class="nav nav-tabs row  g-2 d-flex">

                    <li class="nav-item col-3">
                        <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                            <h4>Modisit</h4>
                        </a>
                    </li><!-- End tab nav item -->

                    <li class="nav-item col-3">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
                            <h4>Praesenti</h4>
                        </a><!-- End tab nav item -->

                    <li class="nav-item col-3">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
                            <h4>Explica</h4>
                        </a>
                    </li><!-- End tab nav item -->

                    <li class="nav-item col-3">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
                            <h4>Nostrum</h4>
                        </a>
                    </li><!-- End tab nav item -->

                </ul>

                <div class="tab-content">

                    <div class="tab-pane active show" id="tab-1">
                        <div class="row">
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center"
                                data-aos="fade-up" data-aos-delay="100">
                                <h3>Voluptatem dignissimos provident</h3>
                                <p class="fst-italic">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore
                                    magna aliqua.
                                </p>
                                <ul>
                                    <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.</li>
                                    <li><i class="bi bi-check2-all"></i> Duis aute irure dolor in reprehenderit in
                                        voluptate velit.</li>
                                    <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate trideta
                                        storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                                </ul>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up"
                                data-aos-delay="200">
                                <img src="{{ asset('img/features-1.jpg') }}" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div><!-- End tab content item -->

                    <div class="tab-pane" id="tab-2">
                        <div class="row">
                            <div
                                class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                                <h3>Neque exercitationem debitis</h3>
                                <p class="fst-italic">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore
                                    magna aliqua.
                                </p>
                                <ul>
                                    <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.</li>
                                    <li><i class="bi bi-check2-all"></i> Duis aute irure dolor in reprehenderit in
                                        voluptate velit.</li>
                                    <li><i class="bi bi-check2-all"></i> Provident mollitia neque rerum asperiores
                                        dolores quos qui a. Ipsum neque dolor voluptate nisi sed.</li>
                                    <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate trideta
                                        storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                                </ul>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img src="{{ asset('img/features-2.jpg') }}" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div><!-- End tab content item -->

                    <div class="tab-pane" id="tab-3">
                        <div class="row">
                            <div
                                class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                                <h3>Voluptatibus commodi accusamu</h3>
                                <ul>
                                    <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.</li>
                                    <li><i class="bi bi-check2-all"></i> Duis aute irure dolor in reprehenderit in
                                        voluptate velit.</li>
                                    <li><i class="bi bi-check2-all"></i> Provident mollitia neque rerum asperiores
                                        dolores quos qui a. Ipsum neque dolor voluptate nisi sed.</li>
                                </ul>
                                <p class="fst-italic">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore
                                    magna aliqua.
                                </p>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img src="{{ asset('img/features-3.jpg') }}" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div><!-- End tab content item -->

                    <div class="tab-pane" id="tab-4">
                        <div class="row">
                            <div
                                class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                                <h3>Omnis fugiat ea explicabo sunt</h3>
                                <p class="fst-italic">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore
                                    magna aliqua.
                                </p>
                                <ul>
                                    <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.</li>
                                    <li><i class="bi bi-check2-all"></i> Duis aute irure dolor in reprehenderit in
                                        voluptate velit.</li>
                                    <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate trideta
                                        storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                                </ul>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img src="{{ asset('img/features-4.jpg') }}" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div><!-- End tab content item -->

                </div>

            </div>
        </section><!-- End Features Section --> --}}

<!-- ======= Our Projects Section ======= -->
<section id="projects" class="projects">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2>Projects</h2>

        </div>

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
            data-portfolio-sort="original-order">

            <ul class="portfolio-flters" data-aos="fade-up" data-aos-delay="100">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-culvert">Culvert Antipolo</li>
                <li data-filter=".filter-mezzanine">One-Storey with Mezzanine</li>
                <li data-filter=".filter-valleverde">Valle Verde</li>
            </ul><!-- End Projects Filters -->

            <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">


                <div class="col-lg-4 col-md-6 portfolio-item filter-mezzanine">
                    <div class="portfolio-content h-100">
                        <img src="{{ asset('img/mezzanine/1.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Construction 1</h4>
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
                            <a href="{{ asset('img/culvert/1.jpg') }}" title="Construction 2"
                                data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="{{ route('project-details') }}" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div><!-- End Projects Item -->

                <div class="col-lg-4 col-md-6 portfolio-item filter-valleverde">
                    <div class="portfolio-content h-100">
                        <img src="{{ asset('img/valleverde/1.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Construction 2</h4>
                            <a href="{{ asset('img/valleverde/1.jpg') }}" title="Construction 2"
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
                            <a href="{{ asset('img/culvert/2.jpg') }}" title="Construction 3"
                                data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="{{ route('project-details') }}" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div><!-- End Projects Item -->

                <div class="col-lg-4 col-md-6 portfolio-item filter-valleverde">
                    <div class="portfolio-content h-100">
                        <img src="{{ asset('img/valleverde/2.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Construction 2</h4>
                            <a href="{{ asset('img/valleverde/2.jpg') }}" title="Construction 2"
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
                            <a href="{{ asset('img/culvert/3.jpg') }}" title="Construction 3"
                                data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="{{ route('project-details') }}" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div><!-- End Projects Item -->

                <div class="col-lg-4 col-md-6 portfolio-item filter-valleverde">
                    <div class="portfolio-content h-100">
                        <img src="{{ asset('img/valleverde/3.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Construction 2</h4>
                            <a href="{{ asset('img/valleverde/3.jpg') }}" title="Construction 2"
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
                            <a href="{{ asset('img/culvert/4.jpg') }}" title="Construction 3"
                                data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="{{ route('project-details') }}" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div><!-- End Projects Item -->

                <div class="col-lg-4 col-md-6 portfolio-item filter-valleverde">
                    <div class="portfolio-content h-100">
                        <img src="{{ asset('img/valleverde/4.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Construction 2</h4>
                            <a href="{{ asset('img/valleverde/4.jpg') }}" title="Construction 2"
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
                            <a href="{{ asset('img/culvert/5.jpg') }}" title="Construction 3"
                                data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="{{ route('project-details') }}" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div><!-- End Projects Item -->

                <div class="col-lg-4 col-md-6 portfolio-item filter-valleverde">
                    <div class="portfolio-content h-100">
                        <img src="{{ asset('img/valleverde/5.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Construction 2</h4>
                            <a href="{{ asset('img/valleverde/5.jpg') }}" title="Construction 2"
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
                            <a href="{{ asset('img/culvert/6.jpg') }}" title="Construction 3"
                                data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="{{ route('project-details') }}" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div><!-- End Projects Item -->

                <div class="col-lg-4 col-md-6 portfolio-item filter-valleverde">
                    <div class="portfolio-content h-100">
                        <img src="{{ asset('img/valleverde/6.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Construction 2</h4>
                            <a href="{{ asset('img/valleverde/6.jpg') }}" title="Construction 2"
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

<!-- ======= Testimonials Section ======= -->
{{-- <section id="testimonials" class="testimonials section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2>Testimonials</h2>

        </div>

        <div class="slides-2 swiper">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="testimonial-wrap">
                        <div class="testimonial-item">
                            <img src=" {{ asset('img/testimonials/testimonials-1.jpg') }}" class="testimonial-img"
                                alt="">
                            <h3>Saul Goodman</h3>
                            <h4>Ceo &amp; Founder</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                Proin iaculis purus consequat sem cure digni ssim donec porttitora entum
                                suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et.
                                Maecen aliquam, risus at semper.
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-wrap">
                        <div class="testimonial-item">
                            <img src=" {{ asset('img/testimonials/testimonials-2.jpg') }}" class="testimonial-img"
                                alt="">
                            <h3>Sara Wilsson</h3>
                            <h4>Designer</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                Export tempor illum tamen malis malis eram quae irure esse labore quem cillum
                                quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat
                                irure amet legam anim culpa.
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-wrap">
                        <div class="testimonial-item">
                            <img src=" {{ asset('img/testimonials/testimonials-3.jpg') }}" class="testimonial-img"
                                alt="">
                            <h3>Jena Karlis</h3>
                            <h4>Store Owner</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem
                                veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis
                                sint minim.
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-wrap">
                        <div class="testimonial-item">
                            <img src=" {{ asset('img/testimonials/testimonials-4.jpg') }}" class="testimonial-img"
                                alt="">
                            <h3>Matt Brandon</h3>
                            <h4>Freelancer</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim
                                fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore
                                quem dolore labore illum veniam.
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-wrap">
                        <div class="testimonial-item">
                            <img src=" {{ asset('img/testimonials/testimonials-5.jpg') }}" class="testimonial-img"
                                alt="">
                            <h3>John Larson</h3>
                            <h4>Entrepreneur</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor
                                noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam
                                esse veniam culpa fore nisi cillum quid.
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div>
                </div><!-- End testimonial item -->

            </div>
            <div class="swiper-pagination"></div>
        </div>

    </div>
</section><!-- End Testimonials Section --> --}}

<!-- ======= Recent Blog Posts Section ======= -->
<section id="recent-blog-posts" class="recent-blog-posts">
    <div class="container" data-aos="fade-up"">



        <div class=" section-header">
            <h2>Recent CSR Posts</h2>
        </div>

        <div class="row gy-5">

            <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="post-item position-relative h-100">

                    <div class="post-img position-relative overflow-hidden">
                        <img src="{{ asset('img/csr/1.jpg') }}" class="img-fluid" alt="">
                        <span class="post-date"></span>
                    </div>

                    <div class="post-content d-flex flex-column">

                        <h3 class="post-title">Outreach</h3>

                        <div class="meta d-flex align-items-center">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-person"></i> <span class="ps-2">partROCK</span>
                            </div>
                            <span class="px-3 text-black-50">/</span>
                            <div class="d-flex align-items-center">
                                <i class="bi bi-folder2"></i> <span class="ps-2">Welfare Program</span>
                            </div>
                        </div>

                        <hr>

                        <a href="{{ route('blog-details') }}" class="readmore stretched-link"><span>Read
                                More</span><i class="bi bi-arrow-right"></i></a>

                    </div>

                </div>
            </div><!-- End post item -->

            <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="post-item position-relative h-100">

                    <div class="post-img position-relative overflow-hidden">
                        <img src="{{ asset('img/csr/medical/2.jpg') }}" class="img-fluid" alt="">
                        <span class="post-date"></span>
                    </div>

                    <div class="post-content d-flex flex-column">

                        <h3 class="post-title">Medical</h3>

                        <div class="meta d-flex align-items-center">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-person"></i> <span class="ps-2">partROCK</span>
                            </div>
                            <span class="px-3 text-black-50">/</span>
                            <div class="d-flex align-items-center">
                                <i class="bi bi-folder2"></i> <span class="ps-2">Welfare Program</span>
                            </div>
                        </div>

                        <hr>

                        <a href="{{ route('blog-details2') }}" class="readmore stretched-link"><span>Read
                                More</span><i class="bi bi-arrow-right"></i></a>

                    </div>

                </div>
            </div><!-- End post item -->



        </div>

    </div>
</section>
<!-- End Recent Blog Posts Section -->
<script>
    const showMoreButton = document.getElementById('show-more');
    const hiddenItems = document.querySelectorAll('.hidden');

    showMoreButton.addEventListener('click', function() {
        hiddenItems.forEach(function(item) {
            item.classList.remove('hidden');
        });
        showMoreButton.style.display = 'none';
    });
</script>
