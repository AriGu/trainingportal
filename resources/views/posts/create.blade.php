@extends('layouts.app')

@section('content')


    <h1>Session Notes</h1>
    <div class="jumbotron" style="width:64%">

{!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}                    

    <div class="form-group" style="display: flex; width: 100%;">
             
                <input type="search" class="form-control ds-input" name="clinic" id="search-clinic" placeholder="SEARCH CLINIC..." autocomplete="on" aria-autocomplete="list" aria-expanded="false" aria-owns="algolia-autocomplete-listbox-0" dir="auto" list="datalist1">
                <datalist id="datalist1">
                    @foreach($orgs as $org)
                        <option value="{{$org->org_name}}"></option>
                    @endforeach
                </datalist>
    </div>

    <div class="form-group" style="display: flex; width: 100%;">
            {{-- <label for="date">Date:</label>&nbsp;&nbsp; --}}
                <input type="date" class="form-control ds-input" name="date" id="session-date" style="position: relative; vertical-align: top; margin-right: 10%;">

            {{-- <label for="date">Time:</label> &nbsp;&nbsp;    --}}
                <input type="text" class="form-control ds-input" name="time" id="session-time" autocomplete="off" placeholder="DECIMAL HOURS" >
    </div>

                
             
        <div class="form-group">       
          {{-- <label for="note">Notes</label><br>  --}}
            <textarea class="form-control" name="note" id="session-note" rows="3" placeholder="NOTES"></textarea>
        </div>
        <div class="form-group" style="text-align:right;">
            {{-- <a href="/dashboard" class="btn btn-default">Back</a>&nbsp;&nbsp;&nbsp;&nbsp; --}}
            <input type="submit" class="btn btn-success" value="Submit">

            

    {!! Form::close() !!}
     </div>
@endsection