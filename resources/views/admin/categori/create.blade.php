@extends('admin.layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard

                    </div>
                    <div class="row"></div>
                    <div class="card-body">
                        <div>
                            @if(count($errors) > 0)
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{$error}}</li>
                                    @endforeach
                                </ul>
                            @endif
                        </div>
                        <div>
                            <form action="{{route('admin.categories.store')}}" method="post">
                                {{csrf_field()}}
                                {{method_field('POST')}}
                                <div class="form-group">
                                    <input class="form-control" name="name_ge" placeholder="name ge" value="{{old('name_ge')}}">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="name_en" placeholder="name en" value="{{old('name_en')}}">
                                </div>
                                <button type="submit" class="btn btn-sm btn-info">დამატება</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
