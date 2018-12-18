@extends('layouts.app')

@section('content')
    <h1>Sessions</h1>
    @if(count($posts) > 0)

                {{-- <table class="table table-hover"> --}}
        @foreach($posts as $post)            
                   <div class = "well" style="background: #eceff1; text-align:center">
                    <a href="/posts/{{$post->id}}">Clinic: {{$post->date}}</a></div>            
        @endforeach
                    {{-- <thead>
                        <tr>
                        <th scope="col"><a href="/posts/{{$post->id}}">{{$post->date}}</a></div></th>
                        <th scope="col">Clinic</th>
                        <th scope="col">hs: {{$post->time}}</div></th> 
                        <th scope="col"><a href="/posts/{{$post->id}}">{{$post->content}}</a></div></th>             
                        </tr>
                    </thead>
                    <tbody>
                      
        
        {{-- </table> --}}
        {{$posts->render()}}
    @else
            <p>No posts found</p>
    @endif

@endsection


