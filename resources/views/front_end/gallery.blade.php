<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Freebie: 4 Bootstrap Gallery Templates</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
    <link rel="stylesheet" href="{{asset('/freebie-4-bootstrap-gallery-templates/grid/gallery-grid.css')}}">

</head>
<body>

{{--<div class="container gallery-container">--}}

{{--    <h1>Bootstrap 3 Gallery</h1>--}}

{{--    @php--}}
{{--        $picture = App\Models\Gallery::find(1);--}}

{{--    @endphp--}}

{{--    <p class="page-description text-center">{{$picture->title}}</p>--}}

{{--    <div class="tz-gallery">--}}

{{--        <div class="row">--}}
{{--            <div class="col-sm-6 col-md-4">--}}
{{--                <a class="lightbox" href="{{asset('/freebie-4-bootstrap-gallery-templates/images/park.jpg')}}">--}}
{{--                    <img src="{{ $picture->picture  }}" alt="">--}}
{{--                    <img src="{{ $picture->picture  }}" alt="">--}}
{{--                </a>--}}
{{--            </div>--}}
{{--            <div class="col-sm-6 col-md-4">--}}
{{--                <a class="lightbox" href="{{asset('/freebie-4-bootstrap-gallery-templates/images/bridge.jpg')}}">--}}
{{--                    <img src="{{asset('/freebie-4-bootstrap-gallery-templates/images/bridge.jpg')}}" alt="Park">--}}
{{--                </a>--}}
{{--            </div>--}}
{{--            <div class="col-sm-12 col-md-4">--}}
{{--                <a class="lightbox" href="{{asset('/freebie-4-bootstrap-gallery-templates/images/tunnel.jpg')}}">--}}
{{--                    <img src="{{asset('/freebie-4-bootstrap-gallery-templates/images/tunnel.jpg')}}" alt="Park">--}}
{{--                </a>--}}
{{--            </div>--}}
{{--            <div class="col-sm-6 col-md-4">--}}
{{--                <a class="lightbox" href="{{asset('/freebie-4-bootstrap-gallery-templates/images/coast.jpg')}}">--}}
{{--                    <img src="{{asset('/freebie-4-bootstrap-gallery-templates/images/coast.jpg')}}" alt="Park">--}}
{{--                </a>--}}
{{--            </div>--}}
{{--            <div class="col-sm-6 col-md-4">--}}
{{--                <a class="lightbox" href="{{asset('/freebie-4-bootstrap-gallery-templates/images/rails.jpg')}}">--}}
{{--                    <img src="{{asset('/freebie-4-bootstrap-gallery-templates/images/rails.jpg')}}" alt="Park">--}}
{{--                </a>--}}
{{--            </div>--}}
{{--            <div class="col-sm-6 col-md-4">--}}
{{--                <a class="lightbox" href="{{asset('/freebie-4-bootstrap-gallery-templates/images/traffic.jpg')}}">--}}
{{--                    <img src="{{asset('/freebie-4-bootstrap-gallery-templates/images/traffic.jpg')}}" alt="Park">--}}
{{--                </a>--}}
{{--            </div>--}}
{{--            <div class="col-sm-6 col-md-4">--}}
{{--                <a class="lightbox" href="{{asset('/freebie-4-bootstrap-gallery-templates/images/rocks.jpg')}}">--}}
{{--                    <img src="{{asset('/freebie-4-bootstrap-gallery-templates/images/rocks.jpg')}}" alt="Park">--}}
{{--                </a>--}}
{{--            </div>--}}
{{--            <div class="col-sm-6 col-md-4">--}}
{{--                <a class="lightbox" href="{{asset('/freebie-4-bootstrap-gallery-templates/images/rocks.jpg')}}">--}}
{{--                    <img src="{{asset('/freebie-4-bootstrap-gallery-templates/images/rocks.jpg')}}" alt="Park">--}}
{{--                </a>--}}
{{--            </div>--}}
{{--            <div class="col-sm-6 col-md-4">--}}
{{--                <a class="lightbox" href="{{asset('/freebie-4-bootstrap-gallery-templates/images/rocks.jpg')}}">--}}
{{--                    <img src="{{asset('/freebie-4-bootstrap-gallery-templates/images/rocks.jpg')}}" alt="Park">--}}
{{--                </a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

@foreach ($category as $categor)
    <h2>{{ $categor->name }}</h2>

    <ul>
        @foreach ($categor->galleries as $gallery)
            <li>{{ $gallery->name }}</li>
        @endforeach
    </ul>
@endforeach


<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>
</body>
</html>
