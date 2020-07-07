@extends('layout/home')
@section('content')
<div class="contain">
    <div class="row">
        <div class="col-12 col-md-6">
            <h2>Thông tin khách hàng</h2>
            <table>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2 mb-3" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </table>
        </div>
        <div class="col-12 col-md-12">
            <div class="col-12 col-md-6">
                <div class="col-12 col-md-4">Khách hàng</div>
                <div class="col-12 col-md-8">
                    <input class="form-control mr-sm-2" type="text">
                    <button class="btn btn-outline-success my-2 my-sm-0">Tìm Kiếm</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
