@extends('layouts.app')

@section('content')
    <h1>Session Note</h1>
    <div class="jumbotron" style="width: 64%;">
        
        <form action="{{ action('PostsController@store') }}" method="POST" enctype="multipart/form-data">
            
            <div class="form-group">
                
                    <input type="search" class="form-control ds-input" id="search-input" placeholder="SEARCH CLINIC..." autocomplete="on" aria-autocomplete="list" aria-expanded="false" aria-owns="algolia-autocomplete-listbox-0" dir="auto">
            </div>

            <div class="form-group" style="display: flex; width: 70%;">
                {{-- <label for="session-date">Date</label>                 --}}
                <input type="date" class="form-control ds-input" id="session-date" style="position: relative; vertical-align: top; margin-right: 10%;">

                
                <input type="text" class="form-control ds-input" id="session-time" autocomplete="off" placeholder="TIME (DECIMAL HOURS)">

            </div>

                
                {{-- <div class="form-group">
                <label for="session-time">Time Spent</label>
                <input type="text" class="form-control ds-input" id="session-time" autocomplete="on" style="position: relative; vertical-align: top;">
            </div> --}}

        <div class="form-group">       
            {{-- <label for="session-note">Notes</label>      --}}
            <textarea class="form-control" id="session-note" rows="3" placeholder="NOTES"></textarea>
        </div>
        <div class="form-group" style="text-align:right;">
            <input type="submit" class="btn btn-success" value="Submit">
      
        </form>
</div>
</div>
    
@endsection