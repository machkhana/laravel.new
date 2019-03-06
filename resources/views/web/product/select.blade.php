@extends('web.layouts.app')
@section('content')
    <div class="nav">
        @foreach($categories as $categori)
            <a href="{{route('show.product',$categori->id)}}"><p>{{$categori->name_ge}}</p></a>
        @endforeach
    </div>
    produqcia
    <br>
    <p></p>
    @foreach($productshow as $products)
        <p>jishi: {{$products->title_ge}}</p>
        <p>mokle agcera: {{$products->description_ge}}</p>
        <p>shinaarsi: {{$products->text_ge}}</p>
        <p>fasi: {{$products->price}}</p>
    @endforeach
@endsection