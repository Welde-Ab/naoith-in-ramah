@extends('front_end.body.links')

{{--Extends the contents from the links.blade.php file --}}

@section('main')

    @section('title')
        Naioth in Ramah | Home
    @endsection

    @php
        $route = Route::current()->getName();
    @endphp

    <!-- ======= Hero Section ======= -->
        <section id="hero" class="hero d-flex align-items-center">
            <div class="container">
                <div class="row gy-4 d-flex justify-content-between">
                    <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                        <h2 data-aos="fade-up">Ethiopian Evangelical Church in Japan</h2>
                        <p data-aos="fade-up" data-aos-delay="100"> Naioth that is translated as the dwelling place of prophets (1st Samuel 19:18-24), our congregation is an assembly of Christians filled by the Holy Spirit in this day and age. </p>

                        <div class="row gy-4" data-aos="fade-up" data-aos-delay="400">

                            <div class="col-lg-3 col-6">
                                <div class="stats-item text-center w-100 h-100">
                                    <span data-purecounter-start="0" data-purecounter-end="20" data-purecounter-duration="1" class="purecounter"></span>
                                    <p>Years in Ministry</p>
                                </div>
                            </div><!-- End Stats Item -->

                            <div class="col-lg-3 col-6">
                                <div class="stats-item text-center w-100 h-100">
                                    <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
                                    <p>Projects</p>
                                </div>
                            </div><!-- End Stats Item -->

                            <div class="col-lg-3 col-6">
                                <div class="stats-item text-center w-100 h-100">
                                    <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
                                    <p>Support</p>
                                </div>
                            </div><!-- End Stats Item -->

                            <div class="col-lg-3 col-6">
                                <div class="stats-item text-center w-100 h-100">
                                    <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>
                                    <p>Workers</p>
                                </div>
                            </div><!-- End Stats Item -->

                        </div>
                    </div>

                    <!-- Replace with church logo -->
                    <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
                        <img src= "{{asset('assets/img/hero-img.svg')}}" class="img-fluid mb-3 mb-lg-0" alt="church logo">
                    </div>

                </div>
            </div>
        </section><!-- End Hero Section -->

        <main id="main">

            <!-- ======= Featured Services Section ======= -->
            <section id="featured-services" class="featured-services">
                <div class="container">

                    <div class="row gy-4">

                        <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up">
                            <div class="icon flex-shrink-0"><i class="fa-solid fa-cart-flatbed"></i></div>
                            <div>
                                <h4 class="title">Lorem Ipsum</h4>
                                <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
                                <a href="service-details.html" class="readmore stretched-link"><span>Learn More</span><i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                        <!-- End Service Item -->

                        <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon flex-shrink-0"><i class="fa-solid fa-truck"></i></div>
                            <div>
                                <h4 class="title">Dolor Sitema</h4>
                                <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
                                <a href="service-details.html" class="readmore stretched-link"><span>Learn More</span><i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div><!-- End Service Item -->

                        <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
                            <div class="icon flex-shrink-0"><i class="fa-solid fa-truck-ramp-box"></i></div>
                            <div>
                                <h4 class="title">Sed ut perspiciatis</h4>
                                <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
                                <a href="service-details.html" class="readmore stretched-link"><span>Learn More</span><i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div><!-- End Service Item -->

                    </div>

                </div>
            </section><!-- End Featured Services Section -->

            <!-- ======= About Us Section ======= -->
            <section id="about" class="about pt-0">
                <div class="container" data-aos="fade-up">
                    <div class="row gy-4">

{{--                        <div class="col-lg-6 position-relative align-self-start order-lg-last order-first">--}}
{{--                            <img src="assets/img/about.jpg" class="img-fluid" alt="">--}}
{{--                            <img src="{{asset('assets/img/Amelkihalehu.jpg')}}" class="img-fluid" alt="">--}}
{{--                            <a href="https://youtu.be/sdSMkICrssc" class="glightbox play-btn"></a>--}}
{{--                        </div>--}}

                        <div class="col-lg-6 position-relative align-self-start order-lg-last order-first">
                            <img src="{{asset('front_end/assets/img/Amelkihalehu.jpg')}}" class="img-fluid" alt="">
                            <a href="https://www.youtube.com/watch?v=sFuwFhGcmGM" class="glightbox play-btn"></a>
                        </div>

                        <div class="col-lg-6 content order-last  order-lg-first">
                            <h3>About Us</h3>
                            <p>
                                We are Ethiopian Christians gathered together in the name of our Lord and Savior Jesus Christ. Here in Japan we commune together to strengthen each other in our faith and serve one another as members of the body of Christ.
                            </p>
                            <ul>
                                <li data-aos="fade-up" data-aos-delay="100">
                                    <i class="bi bi-diagram-3"></i>
                                    <div>
                                        <h5>Who we are?</h5>
                                        <p>How the church came about to be and all - include a hyperlink to the full topic in about.html</p>
                                    </div>
                                </li>
                                <li data-aos="fade-up" data-aos-delay="200">
                                    <i class="bi bi-fullscreen-exit"></i>
                                    <div>
                                        <h5>What we believe</h5>
                                        <p>We as an Evangelical Church believe in the Triune nature of the One true God. - hyperlink here</p>
                                    </div>
                                </li>
                                <li data-aos="fade-up" data-aos-delay="300">
                                    <i class="bi bi-broadcast"></i>
                                    <div>
                                        <h5>Our mission</h5>
                                        <p>As the local manifestation of the universal body of Christ we are ambassadors of the Eternal Devine King. - hyperlink here</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </section><!-- End About Us Section -->

            <!-- ======= Services Section ======= -->
            <section id="service" class="services pt-0">
                <div class="container" data-aos="fade-up">

                    <div class="section-header">
                        <span>Church Ministry</span>
                        <h2>Church Ministry</h2>

                    </div>

                    <div class="row gy-4">

                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="card">
                                <div class="card-img">
                                    <img src="assets/img/storage-service.jpg" alt="" class="img-fluid">
                                </div>
                                <h3><a href="service-details.html" class="stretched-link">Sermons (Change Picture)</a></h3>
                                <p>Cumque eos in qui numquam. Aut aspernatur perferendis sed atque quia voluptas quisquam repellendus temporibus itaqueofficiis odit</p>
                            </div>
                        </div><!-- End Card Item -->

                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                            <div class="card">
                                <div class="card-img">
                                    <img src="assets/img/logistics-service.jpg" alt="" class="img-fluid">
                                </div>
                                <h3><a href="service-details.html" class="stretched-link">Bible Study (Change Picture)</a></h3>
                                <p>Asperiores provident dolor accusamus pariatur dolore nam id audantium ut et iure incidunt molestiae dolor ipsam ducimus occaecati nisi</p>
                            </div>
                        </div><!-- End Card Item -->

                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                            <div class="card">
                                <div class="card-img">
                                    <img src="assets/img/cargo-service.jpg" alt="" class="img-fluid">
                                </div>
                                <h3><a href="service-details.html" class="stretched-link">Worship (Change Picture)</a></h3>
                                <p>Dicta quam similique quia architecto eos nisi aut ratione aut ipsum reiciendis sit doloremque oluptatem aut et molestiae ut et nihil</p>
                            </div>
                        </div><!-- End Card Item -->

                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                            <div class="card">
                                <div class="card-img">
                                    <img src="assets/img/trucking-service.jpg" alt="" class="img-fluid">
                                </div>
                                <h3><a href="service-details.html" class="stretched-link">Prayer (Change Picture)</a></h3>
                                <p>Dicta quam similique quia architecto eos nisi aut ratione aut ipsum reiciendis sit doloremque oluptatem aut et molestiae ut et nihil</p>
                            </div>
                        </div><!-- End Card Item -->

                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                            <div class="card">
                                <div class="card-img">
                                    <img src="assets/img/packaging-service.jpg" alt="" class="img-fluid">
                                </div>
                                <h3><a href="service-details.html" class="stretched-link">Expositions (Change Picture)</a></h3>
                                <p> Expositions on Christian living, discipleship, etc.</p>
                            </div>
                        </div><!-- End Card Item -->

                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                            <div class="card">
                                <div class="card-img">
                                    <img src="assets/img/warehousing-service.jpg" alt="" class="img-fluid">
                                </div>
                                <h3><a href="service-details.html" class="stretched-link">Other Collections</a></h3>
                                <p> Here post videos on Church events, birthdays, </p>
                            </div>
                        </div><!-- End Card Item -->

                    </div>

                </div>
            </section><!-- End Services Section -->

            <!-- ======= Call To Action Section ======= -->
            <section id="call-to-action" class="call-to-action">
                <div class="container" data-aos="zoom-out">

                    <div class="row justify-content-center">
                        <div class="col-lg-8 text-center">
                            <h3>In a foreign land God is our Solace</h3>
                            <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <a class="cta-btn" href="#">Call To Action</a>
                            </dic>
                        </div>

                    </div>
            </section><!-- End Call To Action Section -->

            <!-- ======= Features Section ======= -->
            <section id="features" class="features">
                <div class="container">

                    <div class="row gy-4 align-items-center features-item" data-aos="fade-up">

                        <div class="col-md-5">
                            <img src="assets/img/features-1.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="col-md-7">
                            <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
                            <p class="fst-italic">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                magna aliqua.
                            </p>
                            <ul>
                                <li><i class="bi bi-check"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                                <li><i class="bi bi-check"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                                <li><i class="bi bi-check"></i> Ullam est qui quos consequatur eos accusamus.</li>
                            </ul>
                        </div>
                    </div><!-- Features Item -->

                    <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
                        <div class="col-md-5 order-1 order-md-2">
                            <img src="assets/img/features-2.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="col-md-7 order-2 order-md-1">
                            <h3>Corporis temporibus maiores provident</h3>
                            <p class="fst-italic">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                magna aliqua.
                            </p>
                            <p>
                                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                culpa qui officia deserunt mollit anim id est laborum
                            </p>
                        </div>
                    </div><!-- Features Item -->

                    <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
                        <div class="col-md-5">
                            <img src="assets/img/features-3.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="col-md-7">
                            <h3>Sunt consequatur ad ut est nulla consectetur reiciendis animi voluptas</h3>
                            <p>Cupiditate placeat cupiditate placeat est ipsam culpa. Delectus quia minima quod. Sunt saepe odit aut quia voluptatem hic voluptas dolor doloremque.</p>
                            <ul>
                                <li><i class="bi bi-check"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                                <li><i class="bi bi-check"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                                <li><i class="bi bi-check"></i> Facilis ut et voluptatem aperiam. Autem soluta ad fugiat.</li>
                            </ul>
                        </div>
                    </div><!-- Features Item -->

                    <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
                        <div class="col-md-5 order-1 order-md-2">
                            <img src = "{{asset('front_end/assets/img/features-4.jpg')}}" class="img-fluid" alt="">
                        </div>
                        <div class="col-md-7 order-2 order-md-1">
                            <h3>Quas et necessitatibus eaque impedit ipsum animi consequatur incidunt in</h3>
                            <p class="fst-italic">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                magna aliqua.
                            </p>
                            <p>
                                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                culpa qui officia deserunt mollit anim id est laborum
                            </p>
                        </div>
                    </div><!-- Features Item -->

                </div>
            </section><!-- End Features Section -->

            <!-- ======= Pricing Section was here but removed ======= -->

            <!-- ======= Testimonials Section ======= -->
            <section id="testimonials" class="testimonials">
                <div class="container">

                    <div class="slides-1 swiper" data-aos="fade-up">
                        <div class="swiper-wrapper">

                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                                    <h3>Saul Goodman</h3>
                                    <h4>Ceo &amp; Founder</h4>
                                    <div class="stars">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div><!-- End testimonial item -->

                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                                    <h3>Sara Wilsson</h3>
                                    <h4>Designer</h4>
                                    <div class="stars">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div><!-- End testimonial item -->

                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                                    <h3>Jena Karlis</h3>
                                    <h4>Store Owner</h4>
                                    <div class="stars">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div><!-- End testimonial item -->

                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                                    <h3>Matt Brandon</h3>
                                    <h4>Freelancer</h4>
                                    <div class="stars">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div><!-- End testimonial item -->

                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                                    <h3>John Larson</h3>
                                    <h4>Entrepreneur</h4>
                                    <div class="stars">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div><!-- End testimonial item -->

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>

                </div>
            </section><!-- End Testimonials Section -->

    <!-- ======= Frequently Asked Questions Section was here ======= -->

    </main><!-- End #main -->

@endsection
