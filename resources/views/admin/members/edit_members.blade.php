@extends('admin.admin_master')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Member Edit Page </h4>

                            <form method="post" action="{{ route('update.member') }}" enctype="multipart/form-data">
                                @csrf

                                <input type="hidden" name="id" value="{{  $member->id }}">

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Member Name</label>
                                    <div class="col-sm-10">
                                        <input name="name" class="form-control" type="text" value="{{ $member->name }}" id="example-text-input">
                                        @error('name')
                                        <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Member Description </label>
                                    <div class="col-sm-10">
                                        <input name="description" class="form-control" type="text" value="{{ $member->description }}" id="example-text-input">

                                        @error('description')
                                        <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- end row -->




                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Member Image </label>
                                    <div class="col-sm-10">
                                        <input name="member_image" class="form-control" type="file" id="image">

                                    </div>
                                </div>
                                <!-- end row -->


                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">  </label>
                                    <div class="col-sm-10">

                                        <img id="showImage" class="rounded avatar-lg" src="{{ asset($member->member_image) }}" alt="Card image cap">
                                    </div>
                                </div>
                                <!-- end row -->
                                <input type="submit" class="btn btn-info waves-effect waves-light" value="Update Member Data">
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


