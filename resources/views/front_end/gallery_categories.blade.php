@extends('front_end.body.links')

{{--Extends the contents from the links.blade.php file --}}

@section('main')

    @section('title')
        Naioth in Ramah | Galleries
    @endsection

    @php
        $route = Route::current()->getName();
    @endphp

        <!-- ======= Hero Section ======= -->

    <main id="main">

        <!-- ======= Services Section ======= -->


        {{--                <ul>--}}
        {{--                    @foreach ($categories->galleries as $gallery)--}}
        {{--                        <li>{{ $gallery->name }}</li>--}}
        {{--                    @endforeach--}}
        {{--                </ul>--}}



        <section id="service" class="services pt-0">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    {{--                    <span>Church Ministry</span>--}}
                    <br>   <br>   <br>   <br>
                    <h2>Church Ministry</h2>

                </div>

                <div class="row gy-4">

                    @foreach ($categories as $category)
                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="card">
                                <div class="card-img">
                                    <img src="{{$category->category_image}}" class="img-fluid" alt="">
                                </div>
                                <h3>
                                    <a href="{{route('gallery.category', ['category_id' => $category->id])}}" class="stretched-link">{{ $category->name }} (Change Picture)</a>
                                </h3>
                                {{--                                <p>{{ $category->description }}</p>--}}
                                <p>{!! $category->description !!}</p>
                            </div>
                        </div>
                    @endforeach




                </div>


                {{--                @foreach ($categories as $category)--}}
                {{--                    <h3>{{$category->name}}</h3>--}}
                {{--                    <p>{{$category->description}}</p>--}}

                {{--                    @foreach ($category->galleries as $gallery)--}}
                {{--                        <img src="{{$category->category_image}}" class="img-fluid" alt="">--}}
                {{--                        <a href="{{route('gallery.category', $gallery->category_id)}}">{{$category->name}}</a>--}}
                {{--                    @endforeach--}}
                {{--                @endforeach--}}

            </div>
        </section><!-- End Services Section -->



    </main><!-- End #main -->

@endsection
