@extends('dashboard')
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="detail_user" style="text-align: center">
                <h1>Trang chi tiết người dùng</h1><hr>
                    <h4>tên người dùng: {{$users->name}}</h4>
                    <h4>số điện thoại: {{$users->phone}}</h4>
                    <h4>email: {{$users->email}}</h4>
                    <p>Ngày tạo: {{$users->created_at}}</p>
                    <td ><img height="100px"src="{{asset('/storage/images/users/'.$users->image)}}" alt=""></td>
            </div>
        </div>
        <a href="{{route('list_users')}}">Quay Lại</a>
    </div>
</div>
@endsection