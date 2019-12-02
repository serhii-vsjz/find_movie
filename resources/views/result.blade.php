<ul>
    <li></li><p>{{ $film->title }}</p></li>
    <li> <p>{{ $film->year }}</p></li>
    <li>  <p>{{ $film->plot }}</p></li>
    <img src="{{ $film->poster }}"/>
    <ul>
    @foreach(json_decode($film->actors) as $actor)
            <li>{{ $actor }}</li>
    @endforeach
    </ul>
</ul>