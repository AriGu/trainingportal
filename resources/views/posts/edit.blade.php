@extends('layouts.app')

@section('content')
    <h1>Edit Notes</h1>
    <div class="jumbotron" style="width: 64%;">

{!! Form::open(['action' => ['PostsController@update', $post->id],'method' => 'POST', 'enctype' => 'multipart/form-data']) !!} 
{{-- {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}                    --}}

  {{-- <div class="form-group" style="display: flex; width: 100%;">
             {{-- <label for="clinic">Clinic:   <label>&nbsp;&nbsp;    --}}
                {{-- <input type="search" class="form-control ds-input" name="clinic" id="search-clinic" placeholder="SEARCH CLINIC..." autocomplete="on" aria-autocomplete="list" aria-expanded="false" aria-owns="algolia-autocomplete-listbox-0" dir="auto" list="datalist1">
                <datalist id="datalist1">
                        @foreach($orgs as $org)                        
                            <option value="{{$org->org_name}}"></option>
                        @endforeach                    
                </datalist>
    </div> --}} 

<p>{{$post->org_name}}</p>

    <div class="form-group" style="display: flex; width: 70%;">
            
                <input type="date" class="form-control ds-input" name="date" id="session-date" style="position: relative; vertical-align: top; margin-right: 10%;" value="{{$post->date}}">

                
                <input type="text" class="form-control ds-input" name="time" id="session-time" autocomplete="off" placeholder="TIME (DECIMAL HOURS)" value="{{$post->time}}">
                
    </div>                
             
        <div class="form-group">       
           
            <textarea class="form-control" name="note" id="session-note" rows="3" placeholder="NOTES">{{$post->content}}</textarea>
        </div>

        {{Form::hidden('_method','PUT')}}
         
        <div class="form-group" style="text-align:right;">
            <input type="submit" class="btn btn-success" value="Save">&nbsp;&nbsp;&nbsp;&nbsp;<a href="/dashboard" class="btn btn-default">Cancel</a>
            
            
     {!! Form::close() !!}   
     </div>
@endsection
