@extends('layouts.app')

@section('content')
    <div class="well">
        <p>CLINIC: <strong>{{$post->org_name}}</strong></p>
        <p>DATE: <strong>{{$post->date}}</strong></p>
        <p>TIME: <strong>{{$post->time}} hrs</strong></p>
        <p>NOTES:<br></p><p><strong>{{$post->content}}</strong></p>
            <a href="/dashboard" class="btn btn-default">Back</a>&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>&nbsp;&nbsp;&nbsp;&nbsp;
        {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' =>'POST', 'class' =>'pull-right'])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class' =>'btn btn-danger '])}}
        {!!Form::close()!!}
    </div>
@endsection



