@extends('layout.home')
@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1>Danh Sách Đăng Kí </h1>
            </div>
            <table class="table table-hover ">
                <thead class="badge-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tên </th>
                    <th scope="col">Email</th>
                    <th scope="col">Time Start</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @if(count($users) == 0)
                    <tr>
                        <td colspan="6">Không có dữ liệu</td>
                    </tr>
                @else
                    @foreach($users as $key => $user)
                        <tr>
                            <th scope="row">{{ ++$key }}</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->created_at }}</td>
{{--                            @can('admin')--}}
{{--                                <td>--}}
{{--                                    <a href="{{route('customers.destroy',$customer->id)}}" class="btn btn-danger"--}}
{{--                                       onclick="return confirm('Bạn chắc chắn muốn xóa?')">Delete</a>--}}
{{--                                    <a href="{{route('customers.edit',$customer->id)}}" class="btn btn-primary">Edit</a>--}}
{{--                                </td>--}}
{{--                            @endcan--}}
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection


