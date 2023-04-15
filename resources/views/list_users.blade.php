@extends('dashboard')
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="list_user" style="text-align: center">
            <h1>Danh Sách người dùng</h1><hr>
            @foreach($users as $data)
            <tr>
                <td>{{$data->id}}.</td>
                <td>Người dùng: </td><a href="{{route('detail_user',$data->id)}}">{{$data->name}}</a><br>
            </tr>
            @endforeach
            </div>
        </div>
        {{$users->links()}}
    </div>
</div>
@endsection