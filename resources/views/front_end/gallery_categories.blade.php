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

    <main id="main">

        <!-- ======= Services Section ======= -->


    {{--            <ul>--}}
    {{--                @foreach ($category->galleries as $gallery)--}}
    {{--                    <li>{{ $gallery->name }}</li>--}}
    {{--                @endforeach--}}
    {{--            </ul>--}}



        <section id="service" class="services pt-0">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <span>Church Ministry</span>
                    <h2>Church Ministry</h2>

                </div>

                <div class="row gy-4">
                    @foreach ($categories as $category)
                        @foreach ($category->galleries as $gallery)
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="card">
                            <div class="card-img">
                                <img src="{{asset('front_end/assets/img/storage-service.jpg')}}" class="img-fluid" alt="">
                            </div>
                            <h3><a href="{{route('gallery.category',$gallery->category_id)}}" class="stretched-link">{{ $category->name }}(Change Picture)</a></h3>
                            <p>In our church we regularly learn the word of God for instruction, encouragement and strengtheining our faith.</p>
                        </div>
                    </div><!-- End Card Item -->
                            @endforeach
                    @endforeach

                </div>

            </div>
        </section><!-- End Services Section -->



    </main><!-- End #main -->

@endsection
