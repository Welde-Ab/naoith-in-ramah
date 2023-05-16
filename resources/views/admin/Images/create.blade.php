<form action="{{ route('images.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <label for="name">Image Name</label>
    <input type="text" name="name" id="name">

    <label for="gallery_id">Gallery</label>
    <select name="gallery_id" id="gallery_id">
        @foreach($galleries as $gallery)
            <option value="{{ $gallery->id }}">{{ $gallery->name }}</option>
        @endforeach
    </select>

    <label for="image">Image</label>
    <input type="file" name="image" id="image">

    <button type="submit">Upload Image</button>
</form>
