<ul>
    @foreach($categoryes as $category)
        <a href="{{route('product')}}"><li>{{$category->name_ge}}</li></a>
    @endforeach
</ul>