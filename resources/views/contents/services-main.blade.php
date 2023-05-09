<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs d-flex align-items-center" style="background-image: url({{ asset('img/breadcrumbs-bg.jpg') }})">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Services</h2>
        <ol>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li>Services</li>
        </ol>

    </div>
</div><!-- End Breadcrumbs -->

<!-- ======= Services Section ======= -->
<section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">

        {{-- <div class="section-header">
            <h2>Services</h2>
            <p>Our company offers a wide range of construction services including aggregates, cement, filling materials,
                silica, coal, iron ore, dolomite, boulders, dredged materials, mining contractor, development general
                contractor, reclamation, dredging earthworks, drilling, blasting equipment, and van rentals. We provide
                high-quality materials and equipment, coupled with skilled professionals who are committed to delivering
                excellent results. We prioritize safety, efficiency, and customer satisfaction in every project we
                undertake.</p>
        </div> --}}

        <div class="row gy-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-item  position-relative">
                    <div class="icon">
                        <i class="fa-solid fa-hill-rockslide"></i>
                    </div>
                    <h3>Mining</h3>
                    <p>Welcome to our mining services! Our team of mining experts provides a wide range of services to help you navigate the complex and ever-changing landscape of the mining industry. From exploration to production, we offer practical advice, innovative solutions, and cutting-edge technologies to help you achieve your goals. Our services include mining engineering, geology, resource estimation, mine planning, operations management, and more.</p>
                    <a href="{{route('services-details1')}}" class="readmore stretched-link">Learn more <i
                            class="bi bi-arrow-right"></i></a>
                </div>
            </div><!-- End Service Item -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="service-item position-relative">
                    <div class="icon">
                        <i class="fa-thin fa-trowel-bricks"></i>
                    </div>
                    <h3>Construction</h3>
                    <p>Welcome to our construction services! Our team of construction experts provides a wide range of services to help you build your dream project. From design to completion, we offer practical advice, innovative solutions, and cutting-edge technologies to help you achieve your goals. Our services include construction management, project planning, design and engineering, contracting, construction supervision, and more.</p>
                    <a href="{{route('services-details2')}}" class="readmore stretched-link">Learn more <i
                            class="bi bi-arrow-right"></i></a>
                </div>
            </div><!-- End Service Item -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="service-item position-relative">
                    <div class="icon">
                        <i class="fa-regular fa-triangle-person-digging"></i>
                    </div>
                    <h3>Project Management</h3>
                    <p>Welcome to our project management services! Our team of project management experts provides a wide range of services to help you achieve your project goals. We offer practical advice, innovative solutions, and cutting-edge technologies to help you plan, execute, and control your projects. Our services include project planning, risk management, scheduling, cost management, quality control, and more.</p>
                    <a href="{{route('services-details3')}}" class="readmore stretched-link">Learn more <i
                            class="bi bi-arrow-right"></i></a>
                </div>
            </div><!-- End Service Item -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="service-item position-relative">
                    <div class="icon">
                        <i class="fa-solid fa-trowel-bricks"></i>
                    </div>
                    <h3>Land Development</h3>
                    <p>Welcome to our land development services! Our team of land development experts provides a wide range of services to help you develop your land. From planning to implementation, we offer practical advice, innovative solutions, and cutting-edge technologies to help you achieve your goals. Our services include land use planning, site design, zoning, permitting, environmental impact assessment, and more.</p>
                    <a href="{{route('services-details4')}}" class="readmore stretched-link">Learn more <i
                            class="bi bi-arrow-right"></i></a>
                </div>
            </div><!-- End Service Item -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="service-item position-relative">
                    <div class="icon">
                        <i class="fa-solid fa-helmet-safety"></i>
                    </div>
                    <h3>Smart Home Automation</h3>
                    <p>Welcome to our smart home automation services! Our team of experts provides a wide range of services to help you automate your home. From design to installation, we offer practical advice, innovative solutions, and cutting-edge technologies to help you achieve your goals. Our services include home automation design, system installation, programming, maintenance, and more.</p>
                    <a href="{{route('services-details5')}}" class="readmore stretched-link">Learn more <i
                            class="bi bi-arrow-right"></i></a>
                </div>
            </div><!-- End Service Item -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                <div class="service-item position-relative">
                    <div class="icon">
                        <i class="fa-solid fa-arrow-up-from-ground-water"></i>
                    </div>
                    <h3>Trading</h3>
                    <p>Welcome to our trading services! Our team of trading experts provides a wide range of services to help you invest in the mining and construction industries. We offer practical advice, innovative solutions, and cutting-edge technologies to help you achieve your investment goals. Our services include investment analysis, market research, trading strategy development, risk management, and more.</p>
                    <a href="{{route('services-details6')}}" class="readmore stretched-link">Learn more <i
                            class="bi bi-arrow-right"></i></a>
                </div>
            </div><!-- End Service Item -->

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

{{-- <!-- ======= Servie Cards Section ======= -->
<section id="services-cards" class="services-cards">
    <div class="container" data-aos="fade-up">

        <div class="row gy-4">

            <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                <h3>Quasi eaque omnis</h3>
                <p>Eius non minus autem soluta ut ui labore omnis quisquam corrupti autem odit voluptas quos commodi
                    magnam occaecati.</p>
                <ul class="list-unstyled">
                    <li><i class="bi bi-check2"></i> <span>Ullamco laboris nisi ut aliquip</span></li>
                    <li><i class="bi bi-check2"></i> <span>Duis aute irure dolor in reprehenderit</span></li>
                    <li><i class="bi bi-check2"></i> <span>Ullamco laboris nisi ut aliquip ex ea</span></li>
                </ul>
            </div><!-- End feature item-->

            <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                <h3>Et nemo dolores consectetur</h3>
                <p>Ducimus ea quam et occaecati est. Temporibus in soluta labore voluptates aut. Et sit soluta non
                    repellat sed quia dire plovers tradoria</p>

                <ul class="list-unstyled">
                    <li><i class="bi bi-check2"></i> <span>Enim temporibus maiores eligendi</span></li>
                    <li><i class="bi bi-check2"></i> <span>Ut maxime ut quibusdam quam qui</span></li>
                    <li><i class="bi bi-check2"></i> <span>Officiis aspernatur in officiis</span></li>
                </ul>
            </div><!-- End feature item-->

            <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                <h3>Staque laboriosam modi</h3>
                <p>Velit eos error et dolor omnis voluptates nobis tenetur sed enim nihil vero qui suscipit ipsum at
                    magni. Ipsa architecto consequatur aliquam</p>
                <ul class="list-unstyled">
                    <li><i class="bi bi-check2"></i> <span>Quis voluptates laboriosam numquam</span></li>
                    <li><i class="bi bi-check2"></i> <span>Treva libero sunt quis veniam ut</span></li>
                    <li><i class="bi bi-check2"></i> <span>Debitis eos est est corrupti</span></li>
                </ul>
            </div><!-- End feature item-->

            <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                <h3>Dignissimos suscipit iste</h3>
                <p>Molestiae occaecati assumenda quia saepe nobis recusandae at dicta ducimus sequi numquam commodi est
                    in consequatur ea magnam quia itaque</p>
                <ul class="list-unstyled">
                    <li><i class="bi bi-check2"></i> <span>Veritatis qui reprehenderit quis</span></li>
                    <li><i class="bi bi-check2"></i> <span>Accusantium vel numquam sunt minus</span></li>
                    <li><i class="bi bi-check2"></i> <span>Voluptatem pariatur est sationem</span></li>
                </ul>
            </div><!-- End feature item-->

        </div>

    </div>
</section><!-- End Servie Cards Section --> --}}

{{-- <!-- ======= Alt Services Section 2 ======= -->
<section id="alt-services-2" class="alt-services section-bg">
    <div class="container" data-aos="fade-up">

        <div class="row justify-content-around gy-4">
            <div class="col-lg-5 d-flex flex-column justify-content-center">
                <h3>Non quasi officia eum nobis et rerum epudiandae rem voluptatem</h3>
                <p>Maxime quia dolorum alias perspiciatis. Earum voluptatem sint at non. Ducimus maxime minima iste
                    magni sit praesentium assumenda minus. Amet rerum saepe tempora vero.</p>

                <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
                    <i class="bi bi-easel flex-shrink-0"></i>
                    <div>
                        <h4><a href="" class="stretched-link">Lorem Ipsum</a></h4>
                        <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati
                            cupiditate non provident</p>
                    </div>
                </div><!-- End Icon Box -->

                <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
                    <i class="bi bi-patch-check flex-shrink-0"></i>
                    <div>
                        <h4><a href="" class="stretched-link">Nemo Enim</a></h4>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                            voluptatum deleniti atque</p>
                    </div>
                </div><!-- End Icon Box -->

                <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
                    <i class="bi bi-brightness-high flex-shrink-0"></i>
                    <div>
                        <h4><a href="" class="stretched-link">Dine Pad</a></h4>
                        <p>Explicabo est voluptatum asperiores consequatur magnam. Et veritatis odit. Sunt aut deserunt
                            minus aut eligendi omnis</p>
                    </div>
                </div><!-- End Icon Box -->

                <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
                    <i class="bi bi-brightness-high flex-shrink-0"></i>
                    <div>
                        <h4><a href="" class="stretched-link">Tride clov</a></h4>
                        <p>Est voluptatem labore deleniti quis a delectus et. Saepe dolorem libero sit non aspernatur
                            odit amet. Et eligendi</p>
                    </div>
                </div><!-- End Icon Box -->
            </div>

            <div class="col-lg-6 img-bg" style="background-image: url({{ asset('img/alt-services-2.jpg') }})"
                data-aos="zoom-in" data-aos-delay="100"></div>
        </div>

    </div>
</section><!-- End Alt Services Section 2 -->

<!-- ======= Alt Services Section ======= -->
<section id="alt-services" class="alt-services">
    <div class="container" data-aos="fade-up">

        <div class="row justify-content-around gy-4">
            <div class="col-lg-6 img-bg" style="background-image: url({{ asset('img/alt-services.jpg') }})"
                data-aos="zoom-in" data-aos-delay="100"></div>

            <div class="col-lg-5 d-flex flex-column justify-content-center">
                <h3>Enim quis est voluptatibus aliquid consequatur fugiat</h3>
                <p>Esse voluptas cumque vel exercitationem. Reiciendis est hic accusamus. Non ipsam et sed minima
                    temporibus laudantium. Soluta voluptate sed facere corporis dolores excepturi</p>

                <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
                    <i class="bi bi-easel flex-shrink-0"></i>
                    <div>
                        <h4><a href="" class="stretched-link">Lorem Ipsum</a></h4>
                        <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati
                            cupiditate non provident</p>
                    </div>
                </div><!-- End Icon Box -->

                <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
                    <i class="bi bi-patch-check flex-shrink-0"></i>
                    <div>
                        <h4><a href="" class="stretched-link">Nemo Enim</a></h4>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                            voluptatum deleniti atque</p>
                    </div>
                </div><!-- End Icon Box -->

                <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
                    <i class="bi bi-brightness-high flex-shrink-0"></i>
                    <div>
                        <h4><a href="" class="stretched-link">Dine Pad</a></h4>
                        <p>Explicabo est voluptatum asperiores consequatur magnam. Et veritatis odit. Sunt aut deserunt
                            minus aut eligendi omnis</p>
                    </div>
                </div><!-- End Icon Box -->

                <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
                    <i class="bi bi-brightness-high flex-shrink-0"></i>
                    <div>
                        <h4><a href="" class="stretched-link">Tride clov</a></h4>
                        <p>Est voluptatem labore deleniti quis a delectus et. Saepe dolorem libero sit non aspernatur
                            odit amet. Et eligendi</p>
                    </div>
                </div><!-- End Icon Box -->

            </div>
        </div>

    </div>
</section><!-- End Alt Services Section --> --}}

<!-- ======= Testimonials Section ======= -->
<section id="testimonials" class="testimonials section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2>Testimonials</h2>
            <p>Quam sed id excepturi ccusantium dolorem ut quis dolores nisi llum nostrum enim velit qui ut et autem uia
                reprehenderit sunt deleniti</p>
        </div>

        <div class="slides-2 swiper">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="testimonial-wrap">
                        <div class="testimonial-item">
                            <img src="{{ asset('img/testimonials/testimonials-1.jpg') }}" class="testimonial-img"
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
                                Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit
                                rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam,
                                risus at semper.
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-wrap">
                        <div class="testimonial-item">
                            <img src="{{ asset('img/testimonials/testimonials-2.jpg') }}" class="testimonial-img"
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
                                Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid
                                cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet
                                legam anim culpa.
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-wrap">
                        <div class="testimonial-item">
                            <img src="{{ asset('img/testimonials/testimonials-3.jpg') }}" class="testimonial-img"
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
                                Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam
                                duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-wrap">
                        <div class="testimonial-item">
                            <img src="{{ asset('img/testimonials/testimonials-4.jpg') }}" class="testimonial-img"
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
                                Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat
                                minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore
                                labore illum veniam.
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-wrap">
                        <div class="testimonial-item">
                            <img src="{{ asset('img/testimonials/testimonials-5.jpg') }}" class="testimonial-img"
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
                                Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster
                                veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam
                                culpa fore nisi cillum quid.
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div>
                </div><!-- End testimonial item -->

            </div>
            <div class="swiper-pagination"></div>
        </div>

    </div>
</section><!-- End Testimonials Section -->

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
