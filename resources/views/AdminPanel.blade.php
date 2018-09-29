<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="_token" content="{{csrf_token()}}" />
    <title>Grocery Store</title>
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css"/>
</head>
<body>
@extends('layout')
@section('content')
        <div>

            <table class="table">
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
                @foreach($users as $user)
                {!! Form::open(['url'=>"/home/delete/".$user->id , 'method'=>'post' ])  !!}
                {!! Form::token() !!}
                <tr>
                    <th>{{$user->id}}</th>
                    <th>{{$user->name}}</th>
                    <th>{{$user->email}}</th>
                    <th>{{$user->created_at}}</th>
                    <th>{{$user->updated_at}}</th>
                    <th>
                        <div class="btn-group"></div>
                        <a href="{{url("/home/edit/".$user->id)}}" class="btn btn-primary" id="EditButton">Edit</a>
                        {{--<button class="btn btn-danger" name="submit">Delete</button>--}}
                        {!! Form::submit('Delete',['class'=>'btn btn-danger']) !!}
                    </th>
                </tr>
                @endforeach
                {!! Form::close() !!}
                </tbody>
            </table>

        </div>
    @endsection
</body>

{{--<script src="http://code.jquery.com/jquery-3.3.1.min.js"--}}
        {{--integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="--}}
        {{--crossorigin="anonymous">--}}
{{--</script>--}}
{{--<script>--}}
    {{--jQuery(document).ready(function(){--}}
        {{--jQuery('#EditButton').click(function(e){--}}
            {{--e.preventDefault();--}}
            {{--$.ajaxSetup({--}}
                {{--headers: {--}}
                    {{--'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')--}}
                {{--}--}}
            {{--});--}}
            {{--jQuery.ajax({--}}
                {{--url: "{{ url('/home/edit') }}",--}}
                {{--method: 'post',--}}
                {{--data: {--}}
                    {{--name: "asdads",--}}
                {{--},--}}
                {{--success: function(result){--}}
                    {{--window.location = "/home/ShowForEdit/";--}}
                    {{--jQuery('.alert').show();--}}
                    {{--jQuery('.alert').html(result.success);--}}
                {{--}});--}}
        {{--});--}}
    {{--});--}}
    {{--</script>--}}

</html>