@extends('layouts.app')
@section('content')
    produqcia: {{$product->title_ge}}
    <br>
    <p></p>
    @foreach($productshow as $products)
        <p>{{$products->title_ge}}</p>
        <p>{{$products->description_ge}}</p>
        <p>{{$products->text_ge}}</p>
        <p>{{$products->price}}</p>
    @endforeach
@endsection