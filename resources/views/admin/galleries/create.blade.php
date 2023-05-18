{{--<form action="{{ route('admin.galleries.store') }}" method="POST">--}}
{{--    @csrf--}}

{{--    <label for="name">Gallery Name</label>--}}
{{--    <input type="text" name="name" id="name">--}}

{{--    <label for="category_id">Category</label>--}}
{{--    <select name="category_id" id="category_id">--}}
{{--        @foreach($categories as $category)--}}
{{--            <option value="{{ $category->id }}">{{ $category->name }}</option>--}}
{{--        @endforeach--}}
{{--    </select>--}}

{{--    <button type="submit">Create Gallery</button>--}}
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

                            <h4 class="card-title"> Create Gallery Page </h4>

                            <form method="post" action="{{ route('admin.galleries.create') }}" enctype="multipart/form-data">

                                @csrf

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label"> Category Name </label>
                                    <div class="col-sm-10">
                                        <input name="name" class="form-control" type="text" name="name" id="name">
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label"> Gallery Name </label>
                                    <div class="col-sm-10">
                                        <input name="name" class="form-control" type="text" name="name" id="name">
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label"> Image </label>
                                    <div class="col-sm-10">
                                        <input name="profile_image" class="form-control" type="file"  id="image">
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
                                <input type="submit" class="btn btn-info waves-effect waves-light" value="Upload Gallery" href="{{route('admin.galleries.index')}}">
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
