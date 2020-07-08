@extends('layout.home')
@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1>Thêm Mới</h1>
            </div>
            <div class="col-12">
                <form method="post" action="{{route('customers.store')}}">
                    @csrf
                    @if($errors->all())
                        <div class="alert alert-danger" role="alert">
                            Có vấn đề khi tạo tài khoản người dùng.
                        </div>

                    @endif
                    <div class="form-group ">
                        <label class="{{($errors->first('name')) ? 'text-danger' : ''}}">Tên khách hàng:</label>
                        <input type="text" class="form-control {{($errors->first('name')) ? 'is-invalid' : ''}} "
                               name="name" placeholder="Enter name" value="{{old('name')}}">
                        @if($errors->first('name'))
                            <p class="text-danger">{{ $errors->first('name') }}</p>
                        @endif
                    </div>
                    <div class="form-group ">
                        <label class="{{($errors->first('card')) ? 'text-danger' : ''}}">CMND:</label>
                        <input class="form-control {{($errors->first('card')) ? 'is-invalid' : ''}}" name="card"
                               placeholder="Vd: 151712241" type="" value="{{old('card')}}">
                        @if($errors->first('card'))
                            <p class="text-danger">{{ $errors->first('card') }}</p>
                        @endif
                    </div>
                    <div class="form-group ">
                        <label class="{{($errors->first('phone')) ? 'text-danger' : ''}}">Số Điên Thoại:</label>
                        <input type="" class="form-control {{($errors->first('phone')) ? 'is-invalid' : ''}}"
                               name="phone" placeholder="Vd: 0xxxxxxxxx" value="{{old('phone')}}">
                        @if($errors->first('phone'))
                            <p class="text-danger">{{ $errors->first('phone') }}</p>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancel</button>
                </form>
            </div>
        </div>
    </div>
@endsection

