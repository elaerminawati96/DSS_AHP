@extends('layout.guest', ['title' => 'Login'])
@section('content')
    <div class="card col-5 mt-4">
        <div class="card-body p-4">
            <div class="text-center mt-2">
                <h5 class="text-primary">Welcome Back !</h5>
                <p class="text-muted">Sign in to continue to {{ config('app.name', 'DSS AHP') }}</p>
            </div>
            <div class="p-2 mt-4">
                <form action="index.html">

                    <div class="mb-3">
                        <label for="Email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter Email">
                    </div>

                    <div class="mb-3">
                        <div class="float-end">
                            <a href="{{ url('/forgot-password') }}" class="text-muted">Forgot password?</a>
                        </div>
                        <label class="form-label" for="password-input">Password</label>
                        <div class="position-relative auth-pass-inputgroup mb-3">
                            <input type="password" class="form-control pe-5 password-input" placeholder="Enter password"
                                id="password-input">
                        </div>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="auth-remember-check">
                        <label class="form-check-label" for="auth-remember-check">Remember me</label>
                    </div>

                    <div class="mt-4">
                        <button class="btn btn-success w-100" type="submit">Sign In</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- end card body -->
    </div>
@endsection
