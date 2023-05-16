<h1>Galleries</h1>
@foreach($galleries as $gallery)
    <h2>{{ $gallery->title }}</h2>
    <img src="{{ $gallery->image }}" alt="{{ $gallery->title }}" width="200" height="200">
@endforeach
