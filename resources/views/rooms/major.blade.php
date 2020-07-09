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
            <div class="col-12">
                <div class="row">
                    <div class="col-12">

                        <h1>Danh Sách Phòng</h1>
                    </div>
                    <table class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tên Phòng</th>
                            <th scope="col">Loại Phòng</th>
                            <th scope="col">Tình Trang</th>
                            <th></th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($rooms as $key => $room)
                            <tr>
                                <td scope="row">{{++$key}}</td>
                                <td>{{$room->name}}</td>
                                <td>{{$room->type}}</td>
                                <td>{{$room->status}}</td>

                                    <td>
                                        <a href="{{route('rooms.edit', $room->id)}}" class="btn btn-warning {{($room->status)==='Đang có khách' ? 'd-none' : 'd-inline'}}">Edit</a>
                                        @can('admin')
                                        <a href="{{route('rooms.delete', $room->id)}}" class="btn btn-danger {{($room->status)==='Đang có khách' ? 'd-none' : 'd-inline'}}"
                                           onclick="return confirm('Bạn chắc chắn muốn xóa?')">Delete</a>
                                        @endcan
                                    </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

@endsection

