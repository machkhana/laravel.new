@extends('layouts.app')
@section('content')
    <div class="nav">
        @foreach($categories as $categori)
            <a href="{{$categori->id}}"><p>{{$categori->name_ge}}</p></a>
        @endforeach
    </div>
    produqcia<br>
    <p></p>
    @foreach($productshow as $products)
        <a href="{{$categori->id.'/'.$products->id}}"><p>{{$products->title_ge}}</p></a>
    @endforeach
@endsection