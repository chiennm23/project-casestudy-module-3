@extends('layout.home')
@section('content')
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="box">
                    <div class="box-header with-border bg-light">
                        <h4 class="box-title">Trả phòng</h4>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body pt-5">
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Phòng</th>
                                    <th>Thời gian vào</th>
                                    <th>Thời gian về</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{$room->name}}</td>
                                        <td></td>
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
