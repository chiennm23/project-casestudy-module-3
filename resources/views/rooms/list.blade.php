@extends('layout/home')
@section('content')
    <div class="breadcrumbs">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Rooms</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class=" content mt-3">
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
                                <div>
                                    <a class="btn btn-danger" href="#">Đặt Phòng</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
@endsection
