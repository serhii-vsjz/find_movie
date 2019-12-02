<ul>
    <h2>{{ $film->title }}</h2>
    <p>{{ $film->year }}</p>
    <p>{{ $film->plot }}</p>
    <img src="{{ $film->poster }}"/>
    <ul>
    @foreach(json_decode($film->actors) as $actor)
            <li>{{ $actor }}</li>
    @endforeach
    </ul>
</ul>