@extends('home')
@section('index')

    <h1 class="d-flex justify-content-center">Danh sách Model</h1>
    <br>
    <div class="container">
        <div class="row">
            @foreach($DBSearch as $model)
                <div class="col-12 col-md-4 d-flex justify-content-center" style="margin-top: 20px">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{asset('storage/image/' . $model->image)}}" style="width: 286px; height: 300px">
                        <div class="card-body">
                            <h5 class="card-title d-flex justify-content-center">{{$model->name}}</h5>
                            <a href="{{route('model.desc', $model->id)}}" class="btn btn-primary">Xem</a>
                            <p class="card-text text-danger">Số lượt xem: {{ $model->view_count }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
