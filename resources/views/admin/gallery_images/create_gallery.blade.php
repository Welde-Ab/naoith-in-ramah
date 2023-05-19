@extends('admin.admin_master')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<h1>Create Gallery</h1>
    <h1>Create Gallery</h1>
    <h1>Create Gallery</h1><h1>Create Gallery</h1>
    <h1>Create Gallery</h1><h1>Create Gallery</h1>
    <h1>Create Gallery</h1>
    <h1>Create Gallery</h1>



<form method="POST" action="{{ route('galleries.store') }}">
    @csrf
    <div>
        <label for="category_id">Category</label>
        <select id="category_id" name="category_id" required>
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
    </div>
    <div>
        <label for="title">Title</label>
        <input type="text" id="title" name="title" required>
    </div>
    <div>
        <label for="image">Image</label>
        <input type="text" id="picture" name="picture" required>
    </div>
    <button type="submit">Create Gallery</button>
</form>
@endsection
