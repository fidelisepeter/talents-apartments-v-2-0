<div class="card card-plain mt-8">
    <div class="card-header pb-0 text-left bg-transparent">
        <h3 class="font-weight-bolder text-info text-gradient">Welcome back</h3>
        <p class="mb-0">Enter your email and password to sign in</p>

    </div>
    <div class="card-body">

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <label>Email</label>
            <div class="mb-3">
                <input id="email" placeholder="email" type="email"
                    class="form-control @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <label>Password</label>
            <div class="mb-3">
                <input id="password"placeholder="password" type="password"
                    class="form-control @error('password') is-invalid @enderror"
                    name="password" required autocomplete="current-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" id="rememberMe"
                    checked="">
                <label class="form-check-label" for="rememberMe">Remember me</label>
            </div>
            <div class="text-center">
                <button type="submit"
                    class="btn bg-gradient-info w-100 mt-4 mb-0">{{ __('Login') }}</button>

                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">forgot
                        password?
                    </a>
                @endif
            </div>
        </form>
    </div>
    <div class="card-footer text-center pt-0 px-lg-2 px-1">
        <p class="mb-4 text-sm mx-auto">
            Don't have an room?
            <a href="/register" class="text-info text-gradient font-weight-bold">Apply for
                a room</a>
        </p>
    </div>
</div>