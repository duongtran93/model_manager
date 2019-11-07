
@extends('home')
@section('index')

    <h1 class="text-center">Kết quả tìm kiếm</h1>
    <div class="row d-flex justify-content-center" style="margin-bottom: 10px">
        <div>
            <button type="button" class="btn btn-primary"><a href="{{route('model.create')}}" style="color: white; text-decoration: none">Thêm mới</a></button>

        </div>
    </div>
    <div class="container">
        <div class="row">
            <table class="table">
                <thead>
                <tr class="text-center">
                    <th scope="col">STT</th>
                    <th scope="col">Name</th>
                    <th scope="col">Date Of Birth</th>
                    <th scope="col">Height</th>
                    <th scope="col">National</th>
                    <th scope="col">Description</th>
                    <th scope="col">Job</th>
                    <th scope="col">Image</th>
                </tr>
                </thead>
                <tbody>
                @foreach($DBSearch as $key => $model)
                    <tr class="text-center">
                        <td>{{++$key}}</td>
                        <td>{{$model->name }}</td>
                        <td>{{$model->date_of_birth}}</td>
                        <td>{{$model->height}}</td>
                        <td>{{$model->national}}</td>
                        <td>{{$model->description}}</td>
                        <td>{{$model->job}}</td>
                        <td><img src="{{asset('storage/image/'. $model->image)}}" style="width: 100px; height: 100px" class="rounded mx-auto d-block"></td>
                        <td><button type="button" class="btn btn-primary"><a href="{{route('model.edit', $model->id)}}" style="color: white; text-decoration: none">Edit</a></button></td>
                        <td><button type="button" class="btn btn-primary"><a href="{{route('model.delete', $model->id)}}" style="color: white; text-decoration: none">Delete</a></button></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
