<div class="nav">
    @foreach($categories as $categori)
        <a href="{{$categori->id}}"><p>{{$categori->name_ge}}</p></a>
    @endforeach
</div>