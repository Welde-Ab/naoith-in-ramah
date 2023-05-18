{{--<form action="{{ route('admin.images.store') }}" method="POST" enctype="multipart/form-data">--}}
{{--    @csrf--}}

{{--    <label for="name">Image Name</label>--}}
{{--    <input type="text" name="name" id="name">--}}

{{--    <label for="gallery_id">Gallery</label>--}}
{{--    <select name="gallery_id" id="gallery_id">--}}
{{--        @foreach($galleries as $gallery)--}}
{{--            <option value="{{ $gallery->id }}">{{ $gallery->name }}</option>--}}
{{--        @endforeach--}}
{{--    </select>--}}

{{--    <label for="image">Image</label>--}}
{{--    <input type="file" name="image" id="image">--}}

{{--    <button type="submit">Upload Image</button>--}}
{{--</form>--}}

{{--<form action="{{ route('admin.categories.store') }}" method="POST">--}}
{{--    @csrf--}}

{{--    <label for="name">Category Name</label>--}}
{{--    <input type="text" name="name" id="name">--}}

{{--    <button type="submit">Create Category</button>--}}
{{--</form>--}}

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

                            <h4 class="card-title"> Upload Images </h4>

                            <form method="post" action="{{ route('admin.images.create') }}" enctype="multipart/form-data">

                                @csrf

                                {{--                                <div class="row mb-3">--}}
                                {{--                                    <label for="example-text-input" class="col-sm-2 col-form-label">Name</label>--}}
                                {{--                                    <div class="col-sm-10">--}}
                                {{--                                        <input name="name" class="form-control" type="text" value="{{ $editData->name }}"  id="example-text-input">--}}
                                {{--                                    </div>--}}
                                {{--                                </div>--}}
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label"> Image Description </label>
                                    <div class="col-sm-10">
                                        <input name="Image Description" class="form-control" type="text" id="example-text-input">
                                    </div>
                                </div>
                                <!-- end row -->


                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Image Name</label>
                                    <div class="col-sm-10">
                                        <input name="Image Name" class="form-control" type="text" id="example-text-input">
                                    </div>
                                </div>
                                <!-- end row -->


                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label"> Image </label>
                                    <div class="col-sm-10">
                                        <input name="Image" class="form-control" type="file"  id="image">
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">  </label>
                                    <div class="col-sm-10">
                                        <img id="showImage" class="rounded avatar-lg"
                                             src="{{(!empty($editData->profile_image))?url('upload/admin_images/'.$editData->profile_image):url('upload/no_image.jpg')}}"
                                             alt="Card image cap">
                                    </div>
                                </div>
                                <!-- end row -->
                                <input type="submit" class="btn btn-info waves-effect waves-light" value=" Upload Image ">
                            </form>

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

