@foreach ($album as $item)
<h1>{{ $item->album_name }}</h1>
  @foreach ($item->gallery as $image )
    <p>{{ $image->image }}</p>
  @endforeach
@endforeach