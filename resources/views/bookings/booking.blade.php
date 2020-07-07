@extends('layout/home')
@section('content')
    <div class="contain">
        <div class="row">
            <div class="col-12">
                <div class="box">
                    <div class="box-header">
                        <h4>Booking Room</h4>
                        <hr>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="col-12 col-md-12 mt-3">
                                <h4>Các bước đặt phòng cho khách</h4>
                            </div>
                            <div class="col-12 col-md-12 m-3 pl-5">
                                <ol>
                                    <li>"Tìm kiếm khách hàng" tại "Người đặt".</li>
                                    <li>Nếu là khách hàng mới: vào "Quản lý khách hàng" -> "Thêm khách hàng".</li>
                                    <li>Nhấn "Thêm phòng" và chọn phòng đang trống.</li>
                                    <li>Điều chỉnh "tình trạng" và "thời gian đặt và trả phòng".</li>
                                    <li>Nhấn "Lưu".</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="col-12 col-md-6 mt-2">
                            <div class="row">
                                <div class="col-12 col-md-8">
                                    <input class="form-control mr-sm-2" type="text" placeholder="Người Đặt">
                                </div>
                                <div class="col-12 col-md-4">
                                    <button class="btn btn-outline-success my-2 my-sm-0">Tìm Kiếm</button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-6 mt-4">
                                    <input class="form-control mr-sm-2" name="name" type="text" placeholder="Tên khách hàng">
                                </div>
                                <div class="col-12 col-md-6 mt-4">
                                    <input class="form-control mr-sm-2" name="idCard" type="text" placeholder="Số CMND">
                                </div>
                            </div>
                            <div class="row">
                                <button class="btn btn-outline-success ml-3 mt-4" type="submit">Thêm Mới</button>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">Phòng</th>
                                    <th scope="col">Loại phòng</th>
                                    <th scope="col">Giá Phòng</th>
                                    <th scope="col">Check In</th>
                                </tr>
                                </thead>
                                <tbody>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
