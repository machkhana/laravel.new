@extends('web.layouts.app')
@section('content')
    <div class="nav">
        @foreach($categories as $categori)
            <a href="{{route('show.product',[$categori->id])}}"><p>{{$categori->name_ge}}</p></a>
        @endforeach
    </div>
    produqcia
@endsection