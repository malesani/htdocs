<h2>le mie note</h2>

<h2>{{$intestazioni}}</h2>

@unless(count($contents) == 0)
    @foreach ($contents as $content)
        <h2>{{$content['id']}}</h2>
        <h2>{{$content['title']}}</h2>
        <h2>{{$content['description']}}</h2>
    @endforeach
@else
    <h2>nessun dato</h2>
@endunless


 