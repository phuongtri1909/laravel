@extends('dashboard')
@section('content')
<link rel="stylesheet" href="{{asset('/css/app.css')}}">
<div class="container">
    <div class="row">
        <div class="col">

            <div class="list_user" style="text-align: center">
                <h1>Danh Sách Người Dùng</h1>
                <hr>
            </div>
            <ol style="--length: 10">
                @foreach($users as $data)
                <li class="user" style="--i: {{$data->id}}">
                    <h3 class="userId" title="{{$data->id}}"></h3>
                    <hr>
                    <p >Người dùng: <span class="nameUser">{{$data->name}}</span>
                        <a href="{{route('detail_user',$data->id)}}"><i class="fa-solid fa-magnifying-glass"></i></a>
                        <img class="imgList-avatar" height="100px" src="{{asset('/storage/images/users/'.$data->image)}}" alt="">
                    </p>
                    
                </li>
                
                @endforeach
            </ol>

        </div>

    </div>
    {{$users->links()}}
</div>



<script src="https://kit.fontawesome.com/51a2bee5af.js" crossorigin="anonymous"></script>
@endsection