@extends('admin.layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>
                    <div class="card-body">
                        <div></div>
                        <div>
                            <table>
                                <tr>
                                    <td>dasaxeleba</td>
                                    <td>mokle agcera</td>
                                    <td>fasi</td>
                                    <td>setting</td>
                                </tr>
                                <tr class="">
                                    @foreach($products as $product)
                                    <td>{{$product->title_ge}}</td>
                                    <td>{{$product->description_ge}}</td>
                                    <td>{{$product->price}}</td>
                                    <td>
                                        <a href="{{route('admin.products.edit',$product->id)}}">edit</a>
                                        <button>delete</button>
                                    </td>
                                    @endforeach
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection