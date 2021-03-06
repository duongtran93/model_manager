
@extends('home')
@section('index')

    <div class="container">
        <h1 class="text-center">Chỉnh sửa Model</h1>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form method="post" enctype="multipart/form-data" action="{{route('model.update', $model->id)}}">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control
                        @if($errors->has('name'))
                            border-danger
                        @endif
                            " id="name" name="name" value="{{$model->name}}">
                        @if($errors->has('name'))
                            <p class="text-danger"><i class='fas fa-exclamation-circle'
                                                      style="color: red"></i>{{ $errors->first('name') }}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="date">Date Of Birth</label>
                        <input type="text" class="form-control
                        @if($errors->has('date'))
                            border-danger
                        @endif
                            " id="date" name="date" value="{{$model->date_of_birth}}">
                        @if($errors->has('date'))
                            <p class="text-danger"><i class='fas fa-exclamation-circle'
                                                      style="color: red"></i>{{ $errors->first('date') }}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="height">Height</label>
                        <input type="text" class="form-control
                        @if($errors->has('height'))
                            border-danger
                        @endif
                            " id="height" name="height" value="{{$model->height}}">
                        @if($errors->has('height'))
                            <p class="text-danger"><i class='fas fa-exclamation-circle'
                                                      style="color: red"></i>{{ $errors->first('height') }}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="height">National</label>
                        <input type="text" class="form-control
                        @if($errors->has('national'))
                            border-danger
                        @endif
                            " id="height" name="national" value="{{$model->national}}">
                        @if($errors->has('national'))
                            <p class="text-danger"><i class='fas fa-exclamation-circle'
                                                      style="color: red"></i>{{ $errors->first('national') }}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="desc">Description</label>
                        <textarea class="form-control
                        @if($errors->has('desc'))
                            border-danger
                        @endif
                            " id="desc" name="desc" rows="4">
                        {{$model->description}}
                        </textarea>
                        @if($errors->has('desc'))
                            <p class="text-danger"><i class='fas fa-exclamation-circle'
                                                      style="color: red"></i>{{ $errors->first('desc') }}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="job">Job</label>
                        <input type="text" class="form-control
                        @if($errors->has('job'))
                            border-danger
                        @endif
                            " id="job" name="job" value="{{$model->job}}">
                        @if($errors->has('job'))
                            <p class="text-danger"><i class='fas fa-exclamation-circle'
                                                      style="color: red"></i>{{ $errors->first('job') }}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="imageName">Image Name</label>
                        <input type="text" class="form-control
                        @if($errors->has('imageName'))
                            border-danger
                        @endif
                            " id="imageName" name="imageName">
                        @if($errors->has('imageName'))
                            <p class="text-danger"><i class='fas fa-exclamation-circle'
                                                      style="color: red"></i>{{ $errors->first('imageName') }}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <img src="{{asset('storage/image/' . $model->image)}}" style="width: 100px; height: 120px">
                        <input type="file" class="form-group" name="image">
                        @if($errors->has('image'))
                            <p class="text-danger"><i class='fas fa-exclamation-circle'
                                                      style="color: red"></i>{{ $errors->first('image') }}</p>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                    <button type="submit" class="btn btn-primary"><a href="{{route('model.manager')}}"
                                                                     style="color: white; text-decoration: none">Hủy</a>
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
