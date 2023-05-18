@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="page-content">
<div class="container-fluid">

<div class="row">
<div class="col-12">
    <div class="card">
        <div class="card-body">

            <h4 class="card-title">Add Blog Category Page </h4> <br><br>

            <form method="post" id="myForm" action="{{ route('store.blog.category') }}" >
                @csrf



            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Blog Category Name</label>
                <div class="form-group col-sm-10">
                    <input name="blog_category" class="form-control" type="text" id="example-text-input">
{{--                    @error('blog_category')--}}
{{--                    <span class="text-danger">{{$message}}</span>--}}
{{--                    @enderror--}}
                </div>
            </div>
            <!-- end row -->


<input type="submit" class="btn btn-info waves-effect waves-light" value="Insert Blog Category">
            </form>



        </div>
    </div>
</div> <!-- end col -->
</div>



</div>
</div>


<script type="text/javascript">
    $(document).ready(function (){
        $('#myForm').validate({
            // #my form is id given for the input
            rules: {
                blog_category: {
                    // blog_category is name of the input
                    required : true,
                    //making  blog_category mandatory
                    // also this is the place to modify for different in puts to add
                    //blog_title: {
                    // blog_title is name of the input
                    // required : true,
                },
            },
            messages :{//messages for the in put
                blog_category: {
                    required : 'Please Enter Blog Category',
                },
            },
            errorElement : 'span',
            errorPlacement: function (error,element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight : function(element, errorClass, validClass){
                $(element).addClass('is-invalid');
            },
            unhighlight : function(element, errorClass, validClass){
                $(element).removeClass('is-invalid');
            },
        });
    });

</script>




@endsection
