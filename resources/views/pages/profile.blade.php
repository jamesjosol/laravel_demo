<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Prelim Demo</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <style type="text/css">
        .nav- {
            background-color: rgba(0,0,0,0.7);
            height: 75px;
        }
        .nav-con {
            margin-left:65%;
        }

        .nav-con a{
            display: inline;
            color: white;
            transition: all 0.4s ease 0s;
        }
    </style>
</head>
<body>
    <h1>Laravel Demo</h1>
    <nav class="navbar navbar-expand-lg navbar-dark nav-">
        <a class="navbar-brand" href="#"><h4>Profile</h4></a>
        <div class="nav-con">
            <a class="nav-link" href="{{url('/')}}">Home</a>
            <a class="nav-link">Profile</a>
            <a class="nav-link" href="{{url('/about')}}">About Us</a>
        </div>
    </nav>


</body>
</html>