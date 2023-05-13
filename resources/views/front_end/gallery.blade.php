@extends('front_end.body.links')

@section('main')

    @section('title')
        Naioth in Ramah | Gallery_Categories
    @endsection

    @php
        $route = Route::current()->getName();
    @endphp

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs">
            <div class="page-header d-flex align-items-center" style="background-image: url('{{asset('front_end/assets/img/page-header.jpg')}}');">
                <link href = "{{asset('front_end/assets/img/favicon.png')}}" rel="icon">
                <div class="container position-relative">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-6 text-center">
                            <h2> Gallery Categories </h2>
                            <p> We are Ethiopian Christians gathered together in the name of our Lord and Savior Jesus Christ. Here in Japan we commune together to strengthen each other in our faith and serve one another as members of the body of Christ. </p>
                        </div>
                    </div>
                </div>
            </div>
            <nav>
                <div class="container">
                    <ol>
                        <li> <a href ="{{route('home')}}"> Home </a> </li>
                        <!-- <li><a href="{{url('/')}}">Home</a></li> -->
                        <!-- a href ="{{ URL::to('/contact')}}">  contact </a> -->
                        <li>Gallery Categories</li>
                    </ol>
                </div>
            </nav>
        </div><!-- End Breadcrumbs -->

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
                                <img src="{{asset('front_end/assets/img/storage-service.jpg')}}" class="img-fluid" alt="">
                            </div>
                            <h3><a href="{{route('gallery_categories')}}" class='{{($route=='gallery_categories')?'active':' '}}'> Birthdays </a></h3>
                            <p>In our church we regularly learn the word of God for instruction, encouragement and strengtheining our faith.</p>
                        </div>
                    </div><!-- End Card Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="card">
                            <div class="card-img">
                                <img src="{{asset('front_end/assets/img/logistics-service.jpg')}}" class="img-fluid" alt="">
                            </div>
                            <h3><a href="{{route('gallery_categories')}}" class='{{($route=='gallery_categories')?'active':' '}}'> Weddings </a></h3>
                            <p>We throughly go through the different books of the bible by understanding their historical and literary context to find application in our lives.</p>
                        </div>
                    </div><!-- End Card Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="card">
                            <div class="card-img">
                                <img src="{{asset('front_end/assets/img/cargo-service.jpg')}}" class="img-fluid" alt="">
                            </div>
                            <h3><a href="{{route('gallery_categories')}}" class='{{($route=='gallery_categories')?'active':' '}}'> Services </a></h3>
                            <p>Worshiping the Lord our God through music and hymns.</p>
                        </div>
                    </div><!-- End Card Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="card">
                            <div class="card-img">
                                <img src="{{asset('front_end/assets/img/trucking-service.jpg')}}" class="img-fluid" alt="">
                            </div>
                            <h3><a href="{{route('gallery_categories')}}" class='{{($route=='gallery_categories')?'active':' '}}'> Anniversaries </a></h3>
                            <p>Coming to the throne of God to commune with our God and find Grace for our daily lives.</p>
                        </div>
                    </div><!-- End Card Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                        <div class="card">
                            <div class="card-img">
                                <img src="{{asset('front_end/assets/img/packaging-service.jpg')}}" class="img-fluid" alt="">
                            </div>
                            <h3><a href="{{route('gallery_categories')}}" class='{{($route=='gallery_categories')?'active':' '}}'> Trips </a></h3>
                            <p> Expositions on Christian living, discipleship, etc.</p>
                        </div>
                    </div><!-- End Card Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                        <div class="card">
                            <div class="card-img">
                                <img src="{{asset('front_end/assets/img/warehousing-service.jpg')}}" class="img-fluid" alt="">
                            </div>
                            <h3><a href="{{route('gallery_categories')}}" class='{{($route=='gallery_categories')?'active':' '}}'> Other Collections </a></h3>
                            <p> Special Church events, birthdays, stories of our church members</p>
                        </div>
                    </div><!-- End Card Item -->

                </div>

            </div>
        </section><!-- End Services Section -->

    </main><!-- End #main -->

@endsection
