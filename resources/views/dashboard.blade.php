<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: blue;
        }
        .wrapper{
            background-color: black;
            padding: 20px;
        }
        .search{
            width: 25%;
            margin: 0 auto;
            text-align: center;
            margin-bottom: 20px;
        }
        .search input[type="text"] {
            width: 100%;
            padding: 10px;
            font-size: 16px;
        }
        .container {
            display: flex;
            height: 100vh;
        }
    
        .sidebar {
            width: 200px;
            background-color: #ddd;
            padding: 20px;
        }
    
        nav ul {
            list-style-type: none;
            padding: 0;
            margin: 20px 0;
        }
    
        nav ul li {
            margin-bottom: 10px;
        }
    
        nav ul li a {
            display: block;
            padding: 10px;
            color: #333;
            text-decoration: none;
        }
    
        nav ul li a:hover {
            background-color: #aaa;
            color: #fff;
        }
    
        .main-content {
            flex-grow: 1;
            padding: 20px;
            background-color: #fff;
        }
    
        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }
        h2{
            color: white;
        }
    </style>
</head>
<body>
    <div class="wrapper">
            <div>
                <h2 >Welcome to Your Dashdoard</h2>
            </div>
        <div class="search">
           
            <form action="">
                <input type="text" placeholder="Search">
            </form>
        </div>
        <div class="container">
            <div class="sidebar">
                <nav>
                    <ul>
                        <li><a href="">Dashboard</a></li>
                        <li><a href="{{route('dashboard.profile')}}">Profile</a></li>
                       
                        <li><a href="">Reports</a></li>
                        <li><a href="">Settings</a></li>
                        <li><a href="/logout">Logout</a></li>
                    </ul>
                </nav>
            </div>
            <div class="main-content">
                @yield('message')
                @yield('dashboard-content')
            </div>
        </div>
    </div>
</body>
</html>
