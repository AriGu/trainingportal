@if(count($errors) > 0)
    @foreach($errors->all() as $error)
        <div class="alert alert-danger" style="width:260px;">
            {{$error}}
        </div>
    @endforeach
@endif


@if(session('success'))
        <div class="alert alert-success alert-dismissible" style="width:260px;">
            {{session('success')}}
        </div>
@endif

@if(session('error'))
        <div class="alert alert-danger alert-dismissible" style="width:260px;">
            {{session('error')}}
        </div>
@endif