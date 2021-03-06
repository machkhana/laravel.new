@extends('admin.layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard
                    <a href="{{route('admin.products.create')}}" class="btn btn-sm btn-success">add</a>
                    </div>
                    <div class="card-body">
                        <div></div>
                        <div>
                            <div class="table-responsive">
                                <table class="table">
                                    <tr>
                                        <td>dasaxeleba</td>
                                        <td>mokle agcera</td>
                                        <td>fasi</td>
                                        <td>setting</td>
                                    </tr>

                                        @foreach($products as $product)
                                        <tr class="">
                                            <td>{{$product->title_ge}}</td>
                                            <td>{{$product->description_ge}}</td>
                                            <td>{{$product->price}}</td>
                                            <td>
                                                <a class="btn btn-sm btn-primary" href="{{route('admin.products.edit',$product->id)}}">edit</a>
                                                <form action="{{route('admin.products.destroy',$product->id)}}" method="post">
                                                    {{csrf_field()}}
                                                    {{method_field('DELETE')}}
                                                    <button type="submit" class="btn btn-sm btn-danger">delete</button>
                                                </form>
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
    </div>
@endsection
