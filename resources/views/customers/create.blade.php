@extends('layout.home')
@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1>Viết bài</h1>
            </div>
            <div class="col-12">
                <form method="post" action="{{route('customers.store')}}">
                    @csrf
                    <div class="form-group">
                        <label>Tên khách hàng</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter name">
                    </div>
                    <div class="form-group">
                        <label>CMND</label>
                        <textarea class="form-control" name="card" placeholder="Enter CMND"></textarea>
                    </div>
                    <div class="form-group">
                        <label >Số Điên Thoại</label>
                        <input type="text" class="form-control" name="phone" placeholder="Enter phone">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Room</label>
                        <select class="form-control" name="room">
                            @foreach($rooms as $room)
                                <option value="{{ $room->id }}">{{ $room->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancel</button>
                </form>
            </div>
        </div>
    </div>
@endsection

