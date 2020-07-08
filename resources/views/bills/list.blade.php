@extends('layout/home')
@section('content')
    <div class="breadcrumbs">
        <div class="row">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Bill</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="content mt-3">
            <div class="col-12">
                <div class="row">
                    <div class="col-12">
                        <h1>Danh Sách Bill</h1>
                    </div>
                    <table class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Phòng</th>
                            <th scope="col">Giờ vào</th>
                            <th scope="col">Giờ ra</th>
                            <th scope="col">Tổng tiền</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($bills as $key => $bill)
                            <td>{{++$key}}</td>
                            <td>{{$bill->room_id}}</td>
                            <td>{{$bill->created_at}}</td>
                            <td></td>
                            <td>{{$bill->price}}</td>
                        @endforeach
                        </tbody>
                    </table>
                </div>
@endsection
