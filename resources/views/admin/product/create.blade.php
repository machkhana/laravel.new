@extends('admin.layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard
                        <a href="{{route('admin.products.create')}}" class="btn btn-sm btn-success">add</a>
                    </div>
                    <div class="row"></div>
                    <div class="card-body">
                        <div></div>
                        <div>
                            <form action="{{route('admin.products.store')}}" method="post">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <input class="form-control" name="title_ge" placeholder="title_ge">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="title_en" placeholder="title_en">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="description_ge" placeholder="description_ge">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="description_en" placeholder="description_en">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="text_ge" placeholder="text_ge">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="text_en" placeholder="text_en">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="price" placeholder="price">
                                </div>
                                <div class="form-group">
                                    <select class="form-control" name="cat_id">
                                        <option value="0" selected disabled>კატეგორია</option>
                                        @foreach($categories as $categori)
                                        <option value="{{$categori->id}}">{{$categori->name_ge}}</option>
                                        @endforeach
                                    </select>
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
