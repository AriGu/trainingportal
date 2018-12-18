<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> --}}
 
        {{-- <title>{{config('app.name')}}</title> --}}

    </head>
    <body style="background: #929fba;">
        {{-- @if(Auth::user()->user_role == "admin")
            @include('includes.adminnavbar')
        @else
            @include('includes.navbar')
        @endif --}}
        @include('includes.admin-navbar')
        <div class = "container">
            @include('includes.messages')
            @yield('content')
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
            <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
            <script>
                CKEDITOR.replace( 'article-ckeditor' );
            </script>
    </body>
</html>
