@include('layouts.welcome')

<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
    <div class="top-right links color-white">
        @auth
        <a href="{{ url('/admin') }}">Admin</a>
        @else

        @if (Route::has('register'))
        <a href="{{ route('register') }}">Register</a>
        @endif
        @endauth
    </div>
    @endif

    <div style="text-align: center;">
        <img src="assets/images/Lambang ITS putih-05.png" alt="Logo ITS" width="300" height="300"></img>
        <h1 style="color:white">ITS Attendance System</h1>
        <a class="btn btn-outline-light btn-lg" style="color: white" href="{{ route('login') }}">Login</a>
    </div>

</div>