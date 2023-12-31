@extends('layouts.auth')

@section('title', 'Login')

@push('style')
<!-- CSS Libraries -->
<link rel="stylesheet" href="{{ asset('library/bootstrap-social/bootstrap-social.css') }}">
@endpush

@section('main')

@if ($errors->any())
<div class="alert alert-danger ">
    You're not Allowed
</div>
@endif


<div class="card card-primary">
    <div class="card-header">
        <h4>Login</h4>
    </div>


    <div class="card-body">
        <form method="POST" action="{{route('login')}}" class="needs-validation" novalidate="">
            @csrf
            <div class="form-group">
                <label for="email">Email</label>
                <input id="email" type="email" class="form-control  @error('email') is-invalid @enderror" name="email" tabindex="1" required autofocus>
                <div class="invalid-feedback @error('email') is-invalid @enderror">
                    Please fill in your email
                </div>
            </div>

            <div class="form-group">
                <div class="d-block">
                    <label for="password" class="control-label">Password</label>
                    <div class="float-right">
                        <a href="auth-forgot-password.html" class="text-small">
                            Forgot Password?
                        </a>
                    </div>
                </div>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" tabindex="2" required>
                <div class="invalid-feedback">
                    please fill in your password
                </div>
            </div>

           

            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                    Login
                </button>
            </div>
        </form>


    </div>
</div>

@endsection

@push('scripts')
<!-- JS Libraies -->

<!-- Page Specific JS File -->
@endpush