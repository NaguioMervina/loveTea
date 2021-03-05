
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <!-- Somehow I got an error, so I comment the title, just uncomment to show -->
    <!-- <title>Multi Step Form | CodingNepal</title> -->
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>


</head>
<style>
    @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
    * {
        margin: 0;
        padding: 0;
        outline: none;
        font-family: 'Poppins', sans-serif;
    }
    
    body {
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
        overflow: hidden;
        background: url("teaBg.jpg");
    }
    
     ::selection {
        color: #fff;
        background: #282828;
    }
    
    .container {
        width: 330px;
        background: wheat;
        text-align: center;
        border-radius: 5px;
        padding: 50px 35px 10px 35px;
    }
    
    .container header {
        font-size: 35px;
        font-weight: 600;
        margin: 0 0 30px 0;
    }
    
    .container .form-outer {
        width: 100%;
        overflow: hidden;
    }
    
    .container .form-outer form {
        display: flex;
        width: 400%;
    }
    
    .form-outer form .page {
        width: 25%;
        transition: margin-left 0.3s ease-in-out;
    }
    
    .form-outer form .page .title {
        text-align: left;
        font-size: 25px;
        font-weight: 500;
    }
    
    .form-outer form .page .field {
        width: 330px;
        height: 45px;
        margin: 45px 0;
        display: flex;
        position: relative;
    }
    
    form .page .field .label {
        position: absolute;
        top: -30px;
        font-weight: 500;
    }
    
    form .page .field input {
        height: 100%;
        width: 100%;
        border: 1px solid lightgrey;
        border-radius: 5px;
        padding-left: 15px;
        font-size: 18px;
    }
    
    form .page .field select {
        width: 100%;
        padding-left: 10px;
        font-size: 17px;
        font-weight: 500;
    }
    
    form .page .field button {
        width: 100%;
        height: calc(100% + 5px);
        border: none;
        background: #282828;
        margin-top: -20px;
        border-radius: 5px;
        color: #fff;
        cursor: pointer;
        font-size: 18px;
        font-weight: 500;
        letter-spacing: 1px;
        text-transform: uppercase;
        transition: 0.5s ease;
    }
    
    form .page .field button:hover {
        background: #000;
    }
    
    form .page .btns button {
        margin-top: -20px!important;
    }
    
    form .page .btns button.prev {
        margin-right: 3px;
        font-size: 17px;
    }
    
    form .page .btns button.next {
        margin-left: 3px;
    }
    
    .container .progress-bar {
        display: flex;
        margin: 40px 0;
        user-select: none;
    }
    
    .container .progress-bar .step {
        text-align: center;
        width: 100%;
        position: relative;
    }
    
    .container .progress-bar .step p {
        font-weight: 500;
        font-size: 18px;
        color: #000;
        margin-bottom: 8px;
    }
    
    .progress-bar .step .bullet {
        height: 25px;
        width: 25px;
        border: 2px solid #000;
        display: inline-block;
        border-radius: 50%;
        position: relative;
        transition: 0.2s;
        font-weight: 500;
        font-size: 17px;
        line-height: 25px;
    }
    
    .progress-bar .step .bullet.active {
        border-color: #282828;
        background: #282828;
    }
    
    .progress-bar .step .bullet span {
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
    }
    
    .progress-bar .step .bullet.active span {
        display: none;
    }
    
    .progress-bar .step .bullet:before,
    .progress-bar .step .bullet:after {
        position: absolute;
        content: '';
        bottom: 11px;
        right: -51px;
        height: 3px;
        width: 44px;
        background: #262626;
    }
    
    .progress-bar .step .bullet.active:after {
        background: #282828;
        transform: scaleX(0);
        transform-origin: left;
        animation: animate 0.3s linear forwards;
    }
    
    @keyframes animate {
        100% {
            transform: scaleX(1);
        }
    }
    
    .progress-bar .step:last-child .bullet:before,
    .progress-bar .step:last-child .bullet:after {
        display: none;
    }
    
    .progress-bar .step p.active {
        color: #282828;
        transition: 0.2s linear;
    }
    
    .progress-bar .step .check {
        position: absolute;
        left: 50%;
        top: 70%;
        font-size: 15px;
        transform: translate(-50%, -50%);
        display: none;
    }
    
    .progress-bar .step .check.active {
        display: block;
        color: #fff;
    }
</style>



<body>

    @yield('register')

</body>

</html>