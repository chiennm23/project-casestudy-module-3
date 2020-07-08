@extends('layout.home')
@section('content')
    <section class="content">
        <form method="post" action="{{route('booking.create',$room->id)}}">
            @csrf
            @if($errors->all())
                <div class="alert alert-danger" role="alert">
                    Có vấn đề khi tạo tài khoản người dùng.
                </div>

            @endif
            <div class="row">
                <div class="col-12">
                    <div class="box">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-12 col-md-12">
                                    <div class="row">
                                        <div class="col-12 col-md-6 user-borrow">
                                            <div class="row">
                                                <div class="col-12 col-md-6">
                                                    <h4 class="fa-hover mt-3">
                                                        <i class="fa fa-user-o" aria-hidden="true"></i> Khách Hàng</h4>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-12 col-md-12">
                                                    <div class="row" style="padding-top: 20px">
                                                        <div class="col-12 col-md-6">
                                                            <div class="form-group">
                                                                <p id="customer-id"></p>
                                                                <h5 class="{{($errors->first('name')) ? 'text-danger' : ''}}">
                                                                    Tên Khách Hàng <span class="text-danger">*</span>
                                                                </h5>
                                                                <div class="controls">
                                                                    <input type="text" id="name-customer" name="name"
                                                                           class="form-control {{($errors->first('name')) ? 'is-invalid' : ''}}"
                                                                           value="{{old('name')}}">
                                                                    @if($errors->first('name'))
                                                                        <p class="text-danger">{{ $errors->first('name') }}</p>
                                                                    @endif
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-md-6 mt-3">
                                                            <div class="form-group">
                                                                <h5 class="{{($errors->first('card')) ? 'text-danger' : ''}}">
                                                                    CMND<span class="text-danger">*</span></h5>
                                                                <div class="controls">
                                                                    <input type="text" id="code-customer" name="card"
                                                                           class="form-control {{($errors->first('card')) ? 'is-invalid' : ''}}"
                                                                           value="{{old('card')}}">
                                                                    @if($errors->first('card'))
                                                                        <p class="text-danger">{{ $errors->first('card') }}</p>
                                                                    @endif
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-md-6 mb-3">
                                                            <h5 class="{{($errors->first('phone')) ? 'text-danger' : ''}}">
                                                                Số Điện Thoại<span class="text-danger">*</span></h5>
                                                            <input type="text" id="class-customer" name="phone"
                                                                   class="form-control {{($errors->first('phone')) ? 'is-invalid' : ''}}"
                                                                   value="{{old('phone')}}">
                                                            @if($errors->first('phone'))
                                                                <p class="text-danger">{{ $errors->first('phone') }}</p>
                                                            @endif
                                                        </div>

                                                    </div>
                                                    <button class="btn btn-primary col-3 submit-br" type="submit">
                                                        Xác Nhận
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 user-borrow">
                                            <div class="row">
                                                <h3 class="fa-hover mt-3">
                                                    <i class="fa fa-home" aria-hidden="true"></i> Phòng: {{$room->name}}
                                                </h3>
                                            </div>
                                            <hr>
                                            <div class="row mt-4">
                                                <div class="col-12 col-md-6">
                                                    <h3 class="fa-hover"> Loại Phòng:{{$room->type}}</h3>
                                                </div>
                                            </div>
                                            <div class="row mt-4">
                                                <div class="col-12 col-md-6">
                                                    <h4 class="fa-hover"> Giá Phòng:
                                                        <select class="form-control" name="price">
                                                            <option>700.000/Ngày</option>
                                                            <option>100.000/2h</option>
                                                            <option>400.000/12h</option>
                                                        </select>
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="row mt-4">
                                                <div class="col-12 col-md-6">
                                                    <h4 class="fa-hover"> Tình Trạng:
                                                        <input class="form-control" name="status" disabled value="Đang có khách">
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="row mt-4">
                                                <div class="col-12 col-md-6">
                                                    <h4 class="fa-hover"> Ngày Nhận Phòng:
                                                        <input disabled name="day"
                                                               value="{{\Carbon\Carbon::now()->toDateString()}}">
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="row mt-4">
                                                <div class="col-12 col-md-6">
                                                    <h4 class="fa-hover"> Giờ Nhận Phòng:
                                                        <input disabled name="time"
                                                               value="{{\Carbon\Carbon::now()->toTimeString()}}">
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
@endsection



