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
        <form method="post" action="{{route('rooms.store')}}">
            @csrf
            <div class="form-group">
                <label class="{{($errors->first('name')) ? 'text-danger' : ''}}">Tên:</label>
                <input type="text" class="form-control" name="name"
                       placeholder="Name Room" {{($errors->first('name')) ? 'is-invalid' : ''}}>
            </div>
            @if($errors->first('name'))
                <p class="text-danger">{{ $errors->first('name') }}</p>
            @endif
            <div class="form-group">
                <label>Loại Phòng:</label>
                <select name="type" class="form-control">
                    <option>Phòng Đơn</option>
                    <option>Phòng Đôi</option>
                </select>
            </div>
            <div class="form-group">
                <label>Giá Phòng:</label>
                <input type="text" class="form-control" name="price" placeholder="Giá Phòng">
            </div>
            <div class="form-group">
                <label>Tình Trạng:</label>
                <input type="text" class="form-control" name="status" placeholder="Tình Trạng">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
