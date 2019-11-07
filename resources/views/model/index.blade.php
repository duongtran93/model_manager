@extends('home')
@section('index')

    <h1 class="d-flex justify-content-center">Danh sách Model</h1>
    <br>
    <div class="container">
        <div class="row">
            @foreach($models as $model)
            <div class="col-12 col-md-4 d-flex justify-content-center" style="margin-top: 20px">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('storage/image/' . $model->image)}}" style="width: 286px; height: 300px">
                    <div class="card-body">
                        <h5 class="card-title d-flex justify-content-center">{{$model->name}}</h5>
                        <div class="row">
                            <div>
                                <a href="{{route('model.desc', $model->id)}}" class="btn btn-primary">Xem</a>
                                <p class="card-text text-danger">Số lượt xem: {{ $model->view_count }}</p>
                            </div>
                            <div style="padding-left: 80px" class="row form-inline">
                                @if(\Illuminate\Support\Facades\Auth::id())
                                <a href="{{route('addToLikes',$model->id)}}" class="btn btn-outline"><i class="fa fa-thumbs-o-up" style="font-size:30px"></i></a>
                                @endif
                                @if(!\Illuminate\Support\Facades\Auth::id())
                                        <a href="{{route('login')}}" class="btn btn-outline" onclick="return confirm('Bạn cần đăng nhập để like!')"><i class="fa fa-thumbs-o-up" style="font-size:30px"></i></a>
                                    @endif
                                    <p class="card-text text-danger"> {{ $model->like_count }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <li class="page-item">
                {{$models->links()}}
            </li>
        </ul>
    </nav>
@endsection
