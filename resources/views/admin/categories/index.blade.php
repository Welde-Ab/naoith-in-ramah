@foreach ($categories as $category)
    <h2>{{ $category->name }}</h2>

    <ul>
        @foreach ($category->galleries as $gallery)
            <li>{{ $gallery->name }}</li>
        @endforeach
    </ul>
@endforeach
