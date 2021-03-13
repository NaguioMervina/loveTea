@extends('layout.layoutLoginGuest')

@section('loginGuest')
<div class="container">
    <header>Login</header>
    <form method="" action="">
        @csrf
        <div class="input-field">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            <label for="email"> {{ __('E-Mail Address') }} </label>
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>
        <div class="input-field">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            <span class="show">SHOW</span>
            <label>{{ __('Password') }}</label>

            @error('password')
                          <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                            </span>
                                @enderror
                
        </div>
        <div class="form-group row">
            <div class="col-md-6 offset-md-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>
            </div>
        </div>
        <div class="button form-group row mb-0">
            <div class="inner col-md-8 offset-md-4">
            
            <button type="submit" class="btn btn-primary"> {{ __('Login') }}</button>

           
    </div>
        </div>
        @if (Route::has('password.request'))
        <a class="btn btn-link" href="{{ route('password.request') }}">
            {{ __('Forgot Your Password?') }}
        </a>
    @endif
        <div class="button">
            <div class="inner">
            </div>
            <button><a  href="/checkout" style="color: white; text-decoration: none;">ORDER AS GUEST</a></button>
        </div>
    </form>
    <div class="auth">
        Or login with</div>
    <div class="links">
        <div class="facebook">
            <i class="fab fa-facebook-square"><span>Facebook</span></i>
        </div>
        <div class="google">
            <i class="fab fa-google-plus-square"><span>Google</span></i>
        </div>
    </div>
    <div class="signup">
        Don't have an account? <a href="/register">Signup now</a>
    </div>
   
@endsection