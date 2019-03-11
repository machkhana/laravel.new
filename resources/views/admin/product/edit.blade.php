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
                            <form action="{{route('admin.products.update',$products->id)}}" method="post">
                                {{csrf_field()}}
                                {{method_field('PUT')}}
                                <div class="form-group">
                                    <input class="form-control" name="title_ge" value="{{$products->title_ge}}">
                                    {{--@if($error->has('title_ge'))
                                        <div class="invalid-feedback">
                                            <strong>{{$error->first('title_ge')}}</strong>
                                        </div>
                                    @endif--}}
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="title_en" value="{{$products->title_en}}" placeholder="title_en">
                                    {{--@if($error->has('title_en'))
                                        <div class="invalid-feedback">
                                            <strong>{{$error->first('title_en')}}</strong>
                                        </div>
                                    @endif--}}
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="description_ge" value="{{$products->description_ge}}" placeholder="description_ge">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="description_en" value="{{$products->description_en}}" placeholder="description_en">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="text_ge" value="{{$products->text_ge}}" placeholder="text_ge">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="text_en" value="{{$products->text_en}}" placeholder="text_en">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="price" value="{{$products->price}}" placeholder="price">
                                </div>
                                <div class="form-group">
                                    <select class="form-control" name="cat_id">
                                        <option value="0" selected disabled>1212</option>
                                        @foreach($categories as $categori)
                                            <option value="{{$categori->id}}">{{$categori->name_ge}}</option>
                                        @endforeach
                                    </select>
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
