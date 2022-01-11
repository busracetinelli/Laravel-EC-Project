<ul>
@foreach($posts as $post)
    <li>{{ $post->title }}</li>
        <li>{{ $post->description }}</li>
    <br>

@endforeach
</ul>
