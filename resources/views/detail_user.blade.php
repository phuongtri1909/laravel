@extends('dashboard')
@section('content')
<link rel="stylesheet" href="{{asset('/css/app.css')}}">
<div class="container">
  
            <a class="back" href="{{route('list_users')}}"><i class="fa-solid fa-backward"></i></a>
            <div class="detail_user" style="text-align: center">
                <h1>Trang Chi Tiết</h1>
                <hr>
            </div>

            <div class="card">
                <img class="img-avatar" height="100px" src="{{asset('/storage/images/users/'.$users->image)}}" alt="">
                <div class="card-text">
                    <img class="portada" height="100px" src="{{asset('/storage/images/users/'.$users->image)}}" alt="">
                    <div class="title-total">
                        <div class="title">Chi Tiết Người dùng</div>
                        <h2>{{$users->name}}</h2>
                        <div class="desc">số điện thoại: {{$users->phone}}</div>
                        <div class="desc">email: {{$users->email}}</div>
                        <div class="desc">Ngày tạo: {{$users->created_at}}</div>
                    </div>
                </div>
            </div>
</div>


    <script src="https://kit.fontawesome.com/51a2bee5af.js" crossorigin="anonymous"></script>
    @endsection