@extends('layout/home')
@section('content')
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Bill</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 ml-10">
        <form method="post" action="#">
            @csrf
            <div class="form-group">
                <label>Tổng tiền</label>
                <input type="text" class="form-control" name="price" placeholder="Tổng tiền">
            </div>
            <div class="form-group">
                <label>Phòng</label>
                <input type="text" class="form-control" name="room_id" placeholder="Phòng">
            </div>
            <div class="form-group">
                <label>Ngày</label>
                <input type="text" class="form-control" name="date" placeholder="Date">
            </div>
            <div class="form-group">
                <label>Giờ vào</label>
                <input type="text" class="form-control" name="created_at" placeholder="Giờ vào">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection

