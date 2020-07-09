@extends('layout.home')
@section('content')
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="box">
                    <div class="box-header with-border bg-light">
                        <h4 class="box-title">Trả phòng</h4>
                    </div>
                    <div class="box-body pt-5">
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead class="badge-dark">
                                <tr>
                                    <th>Phòng</th>
                                    <th>Giá tiền</th>
                                    <th>Thời gian về</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{$room->name}}</td>
                                        <td>{{$room->price}}</td>
                                        <td>{{\Carbon\Carbon::now()->toTimeString()}}</td>
                                        <td><a href="{{route('booking.update',$room->id)}}" class="btn btn-success">Thanh toan</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
