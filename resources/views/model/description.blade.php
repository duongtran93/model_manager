@extends('home')
@section('index')

    <h1 class="text-center">Thông tin Model</h1>
{{--    <div class="div d-flex justify-content-center" style="margin-bottom: 10px">--}}
{{--        <button type="button" class="btn btn-primary"><a href="{{route('model.index')}}"--}}
{{--                                                         style="color: white; text-decoration: none"><i class="fas fa-home"></i></a></button>--}}
{{--    </div>--}}
    <div class="container">
        <div class="card mb-3" style="max-width: 1200px;">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="{{asset('storage/image/' . $model->image)}}" class="card-img" style="height: 500px">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <table class="table table-borderless">
                            <tr>
                                <td colspan="2">
                                    <h5 class="card-title">{{$model->name}}</h5>
                                </td>
                            </tr>
                            <tr>
                                <td>Date Of Birthh</td>
                                <td>{{$model->date_of_birth}}</td>
                            </tr>
                            <tr>
                                <td>Height</td>
                                <td>{{$model->height}}</td>
                            </tr><tr>
                                <td>National</td>
                                <td>{{$model->national}}</td>
                            </tr>
                            <tr>
                                <td>Description</td>
                                <td>{{$model->description}}</td>
                            </tr>
                            <tr>
                                <td>Job</td>
                                <td>{{$model->job}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
