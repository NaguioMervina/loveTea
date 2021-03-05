
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/templatemo-style.css">
    <!--
	Product Admin CSS Template
	https://templatemo.com/tm-524-product-admin
    -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        
         ::selection {
            color: #ffff;
            background: rgb(142, 73, 232);
        }
        
        body {
            width: 100%;
            height: 100vh;
            /* overflow: hidden; */
        }
        
        .wrapper {
            background: #fff;
            max-width: 400px;
            width: 100%;
            margin: 30px auto;
            padding: 25px;
            border-radius: 5px;
            box-shadow: 0px 10px 15px rgba(0, 0, 0, 0.1);
        }
        
        .wrapper header {
            font-size: 30px;
            font-weight: 600;
        }
        
        .wrapper .inputField {
            margin: 20px 0;
            width: 100%;
            display: flex;
            height: 45px;
        }
        
        .inputField input {
            width: 85%;
            height: 100%;
            outline: none;
            border-radius: 3px;
            border: 1px solid #ccc;
            font-size: 17px;
            padding-left: 15px;
            transition: all 0.3s ease;
        }
        
        .inputField input:focus {
            border-color: rgb(26, 25, 25);
        }
        
        .inputField button {
            width: 50px;
            height: 100%;
            border: none;
            color: #fff;
            margin-left: 5px;
            font-size: 21px;
            outline: none;
            background: rgb(49, 49, 49);
            cursor: pointer;
            border-radius: 3px;
            opacity: 0.6;
            pointer-events: none;
            transition: all 0.3s ease;
        }
        
        .inputField button:hover,
        .footer button:hover {
            background: rgb(41, 41, 40);
        }
        
        .inputField button.active {
            opacity: 1;
            pointer-events: auto;
        }
        
        .wrapper .todoList {
            max-height: 250px;
            overflow-y: auto;
        }
        
        .todoList li {
            position: relative;
            list-style: none;
            height: 45px;
            line-height: 45px;
            margin-bottom: 8px;
            background: #f2f2f2;
            border-radius: 3px;
            padding: 0 15px;
            cursor: default;
            overflow: hidden;
        }
        
        .todoList li .icon {
            position: absolute;
            right: -45px;
            background: #e74c3c;
            width: 45px;
            text-align: center;
            color: #fff;
            border-radius: 0 3px 3px 0;
            cursor: pointer;
            transition: all 0.2s ease;
        }
        
        .todoList li:hover .icon {
            right: 0px;
        }
        
        .wrapper .footer {
            display: flex;
            width: 100%;
            margin-top: 20px;
            align-items: center;
            justify-content: space-between;
        }
        
        .footer button {
            padding: 6px 10px;
            border-radius: 3px;
            border: none;
            outline: none;
            color: #fff;
            font-weight: 400;
            font-size: 16px;
            margin-left: 5px;
            background: #2e2d2e;
            cursor: pointer;
            user-select: none;
            opacity: 0.6;
            pointer-events: none;
            transition: all 0.3s ease;
        }
        
        .footer button.active {
            opacity: 1;
            pointer-events: auto;
        }
    </style>
</head>

<body id="reportsPage">
    @yield('adminDashboard')
</body>

</html>