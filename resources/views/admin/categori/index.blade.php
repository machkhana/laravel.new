@extends('admin.layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard
                        <a href="{{route('admin.categories.create')}}" class="btn btn-sm btn-success">add</a>
                    </div>
                    <div class="card-body">
                        <div></div>
                        <div>
                            <div class="table-responsive">
                                <table class="table">
                                    <tr>
                                        <td>dasaxeleba ge</td>
                                        <td>dasaxeleba en</td>
                                        <td>setting</td>
                                    </tr>

                                    @foreach($categories as $category)
                                        <tr class="">
                                            <td>{{$category->name_ge}}</td>
                                            <td>{{$category->name_en}}</td>
                                            <td>
                                                <a class="btn btn-sm btn-primary" href="{{route('admin.categories.edit',$category->id)}}">edit</a>
                                                <form action="{{route('admin.categories.destroy',$category->id)}}" method="post">
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
