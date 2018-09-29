<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>
</head>
<body>
@extends('layout')
@section('content')

    <div>
        {!! Form::open(['url'=>"/home/update/".$user->id , 'method'=>'post' ])  !!}
        {!! Form::token() !!}
        <table class="table">
            @if(session()->has('status'))
                <div class="alert alert-success"><h5>{{session()->get('status')}}</h5></div>
            @endif
            <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Created at</th>
                <th scope="col">Updated at</th>
            </tr>
            </thead>
            <tbody>
            {{--@foreach($users as $user)--}}
                <tr>
                    <th><h5 style="font-weight: bold">{{ $user->id }}</h5></th>
                    <th><input class="form-control" type="text" name="name" value="{{$user->name}}"></th>
                    <th><input class="form-control" type="text" name="email" value="{{$user->email}}"></th>
                    <th><input class="form-control" type="text" name="created_at" value="{{$user->created_at}}"></th>
                    <th><input class="form-control" type="text" name="updated_at" value="{{$user->updated_at}}"></th>
                    {{--<th><input class="form-control" type="text" name="updated_at" value="{{$user->password}}"></th>--}}
                    {{--<th><a href="{{url("edit/".$user->id)}}" class="btn btn-primary">Edit</a></th>--}}
                </tr>
            {{--@endforeach--}}

            </tbody>

        </table>
        {!! Form::submit('Change value',['class'=>'btn btn-primary']) !!}
        {!! Form::close() !!}
    </div>
@endsection

</body>
</html>