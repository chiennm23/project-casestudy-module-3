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
        <div class="col-12 col-md-12 ml-4">
            <div class="row">
                <div class="col-2 btn btn-primary ml-2">
                    <a href="" class="text-white">Đang trống ({{$count[0]['total']}}) </a>
                </div>
                <div class="col-2 btn btn-danger ml-2">
                    <a class="text-white">Đang có khách ({{$count[2]['total']}}) </a>
                </div>
                <div class="col-2 btn btn-warning ml-2">
                    <a class="text-white">Đang sửa chữa ({{$count[1]['total']}})</a>
                </div>
                <div class="col-2 btn btn-success ml-2">
                    <a class="text-white">Đang vệ sinh ({{$count[3]['total']}})</a>
                </div>
            </div>
        </div>
        <div class=" content mt-3 col-12">
            @foreach($rooms as $key => $room)
                <div class="col-sm-6 col-lg-3 btn">
                    <div
                        class="card text-white {{($room->status)=='Đang có khách' ? 'bg-flat-color-4' : 'bg-flat-color-1'}}
                        {{($room->status)=='Đang sửa chữa' ? 'bg-flat-color-3' : 'bg-flat-color-1'}}
                        {{($room->status)=='Đang vệ sinh' ? 'bg-flat-color-5' : 'bg-flat-color-1'}}">
                        <div class="card-body pb-0">
                            <div class="dropdown float-right">
                            </div>
                            <h4 class="mb-0">
                                <span class="count">{{$room->name}}--{{$room->type}}</span>
                                <hr>
                                <h3 class="text-light">{{$room->status}}</h3>
                            </h4>
                            <hr/>
                            <p class="text-light">{{$room->price}}</p>
                            <hr>
                            <div class="row ">
                                <div class="col-12">
                                    <div class="col-12 btn mb-3 ">
                                        <a class="btn btn-danger @if(($room->status)==='Đang có khách')
                                            d-none
@elseif(($room->status)==='Đang vệ sinh')
                                            d-none
@elseif(($room->status)==='Đang sửa chữa')
                                            d-none
@else
                                            d-inline
@endif"
                                           href="{{route('booking.index',$room->id)}}">Đặt phòng</a>
                                        <a class="btn btn-warning {{($room->status)==='Đang có khách' ? 'd-inline' : 'd-none'}}"
                                           href="{{route('booking.edit',$room->id)}}">Trả phòng</a>
                                        <a class="btn btn-secondary {{($room->status)==='Đang vệ sinh' ? 'd-inline' : 'd-none'}}
                                        {{($room->status)==='Đang sửa chữa' ? 'd-inline' : 'd-none'}}" id="locked">Tạm
                                            khoá</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
@endsection
