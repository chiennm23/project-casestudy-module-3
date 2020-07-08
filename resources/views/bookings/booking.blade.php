@extends('layout.home')
@section('content')
    <section class="content">
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
                                                <h4 class="fa-hover">
                                                    <i class="fa fa-user-o" aria-hidden="true"></i> Khách Hàng</h4>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <button type="button" class="btn btn-default btn-sm" data-toggle="modal"
                                                        data-target="#modal-customer">
                                                    Tìm Khách Hàng
                                                </button>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-12 col-md-12">
                                                <div class="row" style="padding-top: 20px">
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <p id="customer-id"></p>
                                                            <h5>Tên Khách Hàng <span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <input type="text" id="name-customer" name="name"
                                                                       class="form-control"
                                                                       data-validation-required-message="This field is required">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6 mt-3">
                                                        <div class="form-group">
                                                            <h5>CMND<span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <input type="text" id="code-customer" name="card"
                                                                       class="form-control"
                                                                       data-validation-required-message="This field is required">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6 mb-3">
                                                        <h5>Số Điện Thoại<span class="text-danger">*</span></h5>
                                                        <input type="text" id="class-customer" name="phone"
                                                               class="form-control"
                                                               data-validation-required-message="This field is required">
                                                    </div>
                                                </div>
                                                <button class="btn btn-primary col-3 submit-br" type="submit">
                                                    <a href="{{route('rooms.index')}}">Xác Nhận</a>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="modal modal-right fade" id="modal-customer" tabindex="-1">
                                            <div class="modal-dialog" style="width: 50%">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Tìm khách hàng</h5>
                                                        <button type="button" class="close"
                                                                data-dismiss="modal">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="box-header with-border bg-light">
                                                            <input aria-controls="filterCustomer"
                                                                   class="form-control form-control-sm"
                                                                   placeholder="Nhập tên hoặc mã để tìm"
                                                                   type="text" id="search-customer" name="search"
                                                                   width="100%">
                                                        </div>
                                                        <div class="col-12 cusomers-list">
                                                            <div class="box-body">
                                                                <div class="table-responsive">
                                                                    <table class="table table-hover mb-0">
                                                                        <thead>
                                                                        <tr>
                                                                            <th scope="col">#</th>
                                                                            <th scope="col">Name</th>
                                                                            <th scope="col">Phone</th>
                                                                            <th></th>
                                                                        </tr>
                                                                        </thead>
                                                                        <tbody id="customer-table">

                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer modal-footer-uniform">
                                                        <button type="button" class="btn btn-bold btn-secondary"
                                                                data-dismiss="modal">Close
                                                        </button>
                                                        <button type="button"
                                                                class="btn btn-bold btn-primary float-right">
                                                            Save changes
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 user-borrow">
                                        <div class="row">
                                            <h4 class="fa-hover">
                                                <i class="fa fa-home" aria-hidden="true"></i> Phòng: </h4>
                                        </div>
                                        <hr>
                                        <div class="row mt-4">
                                            <div class="col-12 col-md-6">
                                                <h4 class="fa-hover"> Loại Phòng:</h4>
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col-12 col-md-6">
                                                <h4 class="fa-hover"> Giá Phòng:</h4>
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col-12 col-md-6">
                                                <h4 class="fa-hover"> Ngày Nhận Phòng:</h4>
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col-12 col-md-6">
                                                <h4 class="fa-hover"> Giờ Nhận Phòng:</h4>
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col-12 col-md-6">
                                                <h4 class="fa-hover"> Tên Khách Hàng:</h4>
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
    </section>
@endsection



