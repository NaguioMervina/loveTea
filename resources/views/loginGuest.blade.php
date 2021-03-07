@extends('layout.layoutLoginGuest')

@section('loginGuest')
<div class="container">
    <header>Login</header>
    <form>
        <div class="input-field">
            <input type="text" required>
            <label>Email or Username</label>
        </div>
        <div class="input-field">
            <input class="pswrd" type="password" required>
            <span class="show">SHOW</span>
            <label>Password</label>
        </div>
        <div class="button">
            <div class="inner">
            </div>
            <button><a  href="index1.html" style="color: white; text-decoration: none;">LOGIN</a></button>
        </div>
        <div class="button">
            <div class="inner">
            </div>
            <button><a  href="index.html" style="color: white; text-decoration: none;">HOME</a></button>
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
        Don't have an account? <a href="#">Signup now</a>
    </div>
    <div class="signup">
        <a href="loginadmin.html">Admin</a>
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