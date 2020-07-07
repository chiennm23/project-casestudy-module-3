@extends('layout.home')
@section('content')
    <div class="col-12">
        <div class="row">
            <div class="col-12"><h1>Danh Sách Khách Hàng</h1></div>
            <table class="table table-hover">
                <thead class="badge-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tên Khách Hàng</th>
                    <th scope="col">CMND</th>
                    <th scope="col">Số Điện THoại</th>
                    <th scope="col">Số Phòng</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @if(count($customers) == 0)
                    <tr>
                        <td colspan="6">Không có dữ liệu</td>
                    </tr>
                @else
                    @foreach($customers as $key => $customer)
                        <tr>
                            <th scope="row">{{ ++$key }}</th>
                            <td>{{ $customer->name }}</td>
                            <td>{{ $customer->idCard }}</td>
                            <td>{{ $customer->phone }}</td>
                            <td>
                                @if($customer->room)
                                    {{$customer->room->name}}
                                @endif
                            </td>
                            <td>
                                <a href="{{route('customers.destroy',$customer->id)}}" class="btn btn-danger"
                                   onclick="return confirm('Bạn chắc chắn muốn xóa?')">Delete</a>
                                <a href="{{route('customers.edit',$customer->id)}}" class="btn btn-primary">Edit</a>
                            </td>

                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection

