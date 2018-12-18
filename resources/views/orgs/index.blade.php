@extends('layouts.app')

@section('content')


    <h1>Clinics</h1>
{!! Form::open(['action' => 'OrgsController@show', 'method' => 'GET', 'enctype' => 'multipart/form-data']) !!} 
    <input type="search" class="form-control ds-input" name="clinic" id="search-clinic" placeholder="SEARCH CLINIC..." autocomplete="on" aria-autocomplete="list" aria-expanded="false" aria-owns="algolia-autocomplete-listbox-0" dir="auto" list="datalist1" style="width: 470px; display: inline;"> &nbsp;&nbsp;
                <datalist id="datalist1">
                    @foreach($orgs as $org)
                        <option value="{{$org->org_name}}"></option>
                    @endforeach
                </datalist>
    <input type="submit" href="" class="btn btn-success" value="GO">
    
                             {{-- @foreach($orgs as $org)
                        <div class="well">
                            <a href="">{{$org->org_name}}
                            
                            <a href="" class="btn btn-default">View</a>
                        </div>
                        @endforeach                                         --}}
{!! Form::close() !!}      
                     
@endsection

 