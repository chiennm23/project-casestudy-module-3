@extends('layout/home')
@section('content')
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Rooms</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 ml-10">
        <form method="post" action="{{route('rooms.update', $room->id)}}">
            @csrf
            <div class="form-group">
                <label>Tên</label>
                <input type="text" class="form-control" name="name" placeholder="Name Room" value="{{$room->name}}">
            </div>
            <div class="form-group">
                <label>Loại Phòng</label>
                <input type="text" class="form-control" name="type" placeholder="Loại Phòng" value="{{$room->type}}">
            </div>
            <div class="form-group">
                <label>Giá Phòng</label>
                <input type="text" class="form-control" name="price" placeholder="Giá Phòng" value="{{$room->price}}">
            </div>
            <div class="form-group">
                <label>Tình Trạng</label>
                <input type="text" class="form-control" name="status" placeholder="Đang Trống" value="{{$room->status}}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
