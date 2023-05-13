@extends('admin.admin_master')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">

                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Gallery  </h4>
                            @if($homegallery)
                                @foreach($homegallery as $post)
                                    <tr>
                                        <td></td>
{{--                                        <td>{{$post->id}}</td>--}}
                                        <td>{{$post->title}}</td>
                                        <td>{{$post->category_id}}</td>
                                        <td>{{$post->photo_id}}</td>
                                        <td>{{$post->title}}</td>
                                        <td>{{$post->body}}</td>
                                        <td>{{$post->created_at->diffForhumans()}}</td>
                                        <td>{{$post->updated_at}}</td>

                                        </td>
                                    </tr>
                                @endforeach
                            @endif

{{--                            <form method="post" action="{{ route('update.gallery') }}" enctype="multipart/form-data">--}}

{{--                                @csrf--}}
{{--                                <input type="hidden" name="id" value="{{ $homegallery->id }}">--}}
{{--                                <div class="row mb-3">--}}
{{--                                    <label for="example-text-input" class="col-sm-2 col-form-label">Title</label>--}}
{{--                                    <div class="col-sm-10">--}}
{{--                                        <input name="title" class="form-control" type="text" value="{{ $homegallery->title }}"  id="example-text-input">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- end row -->--}}

{{--                                <div class="row mb-3">--}}
{{--                                    <label for="example-text-input" class="col-sm-2 col-form-label">Short Title</label>--}}
{{--                                    <div class="col-sm-10">--}}
{{--                                        <input name="short_title" class="form-control" type="text" value="{{ $homegallery->short_title }}"  id="example-text-input">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- end row -->--}}


{{--                                <div class="row mb-3">--}}
{{--                                    <label for="example-text-input" class="col-sm-2 col-form-label">video_url</label>--}}
{{--                                    <div class="col-sm-10">--}}
{{--                                        <input name="video_url" class="form-control" type="text" value="{{ $homegallery->video_url }}"  id="example-text-input">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- end row -->--}}


{{--                                <div class="row mb-3">--}}
{{--                                    <label for="example-text-input" class="col-sm-2 col-form-label">home slide </label>--}}
{{--                                    <div class="col-sm-10">--}}
{{--                                        <input name="gallery" class="form-control" type="file"  id="image">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- end row -->--}}

{{--                                <div class="row mb-3">--}}
{{--                                    <label for="example-text-input" class="col-sm-2 col-form-label">  </label>--}}
{{--                                    <div class="col-sm-10">--}}
{{--                                        <img id="showImage" class="rounded avatar-lg"--}}
{{--                                             src="{{(!empty($homegallery->picture))?url($homegallery->picture):url('upload/no_image.jpg')}}"--}}
{{--                                             alt="Card image cap">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- end row -->--}}
{{--                                <input type="submit" class="btn btn-info waves-effect waves-light" value="Update Slide">--}}
{{--                            </form>--}}



                        </div>
                    </div>
                </div> <!-- end col -->



            </div>
        </div>
    </div>


    <script type="text/javascript">

        $(document).ready(function(){
            $('#image').change(function(e){
                var reader = new FileReader();
                reader.onload = function(e){
                    $('#showImage').attr('src',e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
@endsection