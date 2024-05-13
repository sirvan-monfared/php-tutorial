
@if (\App\Core\Session::has('_warning'))
    <div class="alert alert-danger">
        {{ \App\Core\Session::get('_warning') }}
    </div>
@endif
@if (\App\Core\Session::has('_success'))
    <div class="alert alert-success">
        {{ \App\Core\Session::get('_success') }}
    </div>
@endif