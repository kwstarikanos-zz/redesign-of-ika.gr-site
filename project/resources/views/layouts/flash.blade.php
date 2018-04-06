
@if(Session::has('info'))
    <div class="alert alert-info">
        {{ Session::get('info') }}
        {{Session::forget('info')}}
    </div>
@endif
@if(Session::has('warning'))
    <div class="alert alert-warning">
        {{ Session::get('warning') }}
        {{Session::forget('warning')}}
    </div>
@endif
@if(Session::has('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
        {{Session::forget('success')}}
    </div>
@endif
@if(Session::has('danger'))
    <div class="alert alert-danger">
        {{ Session::get('danger') }}
        {{Session::forget('danger')}}
    </div>
@endif
