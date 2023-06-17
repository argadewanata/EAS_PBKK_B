@extends('layouts.master-blank')

@section('content')
<div style="background-color: #013880; color: white; text-align: center; padding-top: 20px;padding-bottom: 20px;">
    <img src="{{ asset('assets/images/Lambang ITS.png') }}" alt="" height="50" class="logo-lg">
    <h4 class="font-20 m-b-5">ITS Attendance System</h4>
</div>


<div class="account-card-content">
    <form class="form-horizontal m-t-70" method="POST" action="{{ route('login') }}">
        @csrf

        <div class="form-container">
            <div class="form-group">
                <label for="email" class="col-form-label">{{ __('Email Address') }}</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="password" class="col-form-label">{{ __('Password') }}</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>


        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-6 text-center">
                    <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Log In</button>
                </div>
            </div>
        </div>

    </form>
</div>


@endsection

@section('script')
@endsection