@extends('layout.layoutLoginGuest')

@section('loginGuest')
<div class="container">
    <header>Login</header>
    <form method="POST" action="user">
        @csrf
        <div class="input-field">
            <input type="text" name="user" required>
            <label for="email"> Email </label>
        </div>
        <div class="input-field">
            <input class="pswrd" type="password" required>
            <span class="show">SHOW</span>
            <label>Password</label>
        </div>
        <div class="button">
            <div class="inner">
            </div>
            <button><a  href="/user" style="color: white; text-decoration: none;">LOGIN</a></button>
        </div>
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
    <div class="signup">
        <a href="/admin">Admin</a>
    </div>
    <script>
        var input = document.querySelector('.pswrd');
        var show = document.querySelector('.show');
        show.addEventListener('click', active);

        function active() {
            if (input.type === "password") {
                input.type = "text";
                show.style.color = "#1DA1F2";
                show.textContent = "HIDE";
            } else {
                input.type = "password";
                show.textContent = "SHOW";
                show.style.color = "#111";
            }
        }
    </script>
@endsection