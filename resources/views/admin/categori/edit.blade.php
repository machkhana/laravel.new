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
                            <form action="{{route('admin.categories.update',$item->id)}}" method="post">
                                {{csrf_field()}}
                                {{method_field('PUT')}}
                                <div class="form-group">
                                    <input class="form-control" name="title_ge" value="{{$item->name_ge}}">
                                    {{--@if($error->has('title_ge'))
                                        <div class="invalid-feedback">
                                            <strong>{{$error->first('title_ge')}}</strong>
                                        </div>
                                    @endif--}}
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="title_en" value="{{$item->name_en}}">
                                    {{--@if($error->has('title_en'))
                                        <div class="invalid-feedback">
                                            <strong>{{$error->first('title_en')}}</strong>
                                        </div>
                                    @endif--}}
                                </div>
                                <button type="submit" class="btn btn-sm btn-info">ცვლილება</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
