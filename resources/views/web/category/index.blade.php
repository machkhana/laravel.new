<ul>
    @foreach($categoryes as $category)
        <a href="{{route($category->name_en)}}"><li>{{$category->name_ge}}</li></a>
    @endforeach
</ul>