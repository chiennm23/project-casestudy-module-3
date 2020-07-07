@extends('layout/home')
@section('content')
    <div class="breadcrumbs">
        <div class="row">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Room // Major</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <a class="btn btn-primary mt-2" href="{{route('rooms.create')}}">Thêm Mới</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="content mt-3">
            @foreach($rooms as $key => $room)
                <div class="col-sm-6 col-lg-3">
                    <div class="card text-white bg-flat-color-1">
                        <div class="card-body pb-0">
                            <div class="dropdown float-right">
                            </div>
                            <h4 class="mb-0">
                                <span class="count">{{$room->name}}--{{$room->type}}</span>
                                <hr>
                                <p class="text-light">{{$room->status}}</p>
                            </h4>
                            <hr/>
                            <p class="text-light">{{$room->price}}</p>
                            <hr>
                            <div class="row">
                                <div class="col-sm-4">
                                    <a class="btn btn-warning float-left" href="{{route('rooms.edit', $room->id)}}">Edit</a>
                                </div>
                                <div class="col-sm-8">
                                    <a class="btn btn-danger float-right" href="#">Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
@endsection

