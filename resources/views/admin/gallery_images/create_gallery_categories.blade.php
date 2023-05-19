@extends('admin.admin_master')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <h1>Create Gallery Category</h1>
    <form method="POST" action="{{ route('gallery-categories.store') }}">
        @csrf
        <div>
            <label for="name">Category Name</label>
            <input type="text" id="name" name="name" required>
        </div>
        <button type="submit">Create Category</button>
    </form>
@endsection


