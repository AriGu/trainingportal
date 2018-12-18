@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h3 style="display:inline">&nbsp;&nbsp;&nbsp;My Sessions</h3>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                    <table class="table table-striped">
                        <tr>
                            <th><p style="color:red;">DATE</p></th>
                            <th><p style="color:red;">CLINIC</p></th>
                            <th></th>
                            <th></th>
                        </tr>
                        
                        @foreach($posts as $post)
                            <tr>
                                <th>{{$post->date}}</th>
                                <th>{{$post->org_name}}</th>
                                <th><a href="/posts/{{$post->id}}" class="btn btn-default">View</a></th>
                                    <th></th>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
