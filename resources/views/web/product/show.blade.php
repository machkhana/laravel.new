@extends('web.layouts.app')
@section('content')
    <div class="nav">
        @foreach($categories as $categori)
            <a href="{{$categori->id}}"><p>{{$categori->name_ge}}</p></a>
        @endforeach
    </div>
    airchiet<br>
    <p></p>
    @foreach($productshow as $products)
        <a href="{{route('select.product',[$cat,$products->id])}}"><p>{{$products->title_ge}}</p></a>
    @endforeach
@endsection