<form action="{{ route('categories.store') }}" method="POST">
    @csrf

    <label for="name">Category Name</label>
    <input type="text" name="name" id="name">

    <button type="submit">Create Category</button>
</form>
