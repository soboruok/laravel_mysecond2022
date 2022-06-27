<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <title>Bob’s Garage : workshop that fixes and services cars</title>
</head>
<body>
    <div class="topNav">   
        <ul>
            <li><a href="/register">Register</a></li>
            <li><a href="/login">Login</a></li>
        </ul>
    </div>
    <div class="navbar">
        <div class="container ">
            <nav class="flex">    
                <h1>Bob’s Garage</h1>
                <ul>
                    <li><a href="about.html">About</a></li>
                    <li><a href="service.html">Services</a></li>
                    <li><a href="team.html">OurTeam</a></li>
                    <li><a href="feedback.html">Feedback</a></li>
                    <li><a href="/">List</a></li>
                </ul>
            </nav>
        </div>
    </div>


    @yield('content')
    <div class="push"></div>
    <footer class="footer bg-dark py-5">
        <div class="container flex">
            <div class="footerAddress">
                <p>	PO BOX 42 HOLMESGLEN VIC 3148</p>
                <p>111-222-3333</p>
            </div>
            <div class="footerSocialMedia m-1">
                <a href="#"><i class="fab fa-github fa-2x"></i></a>
                <a href="#"><i class="fab fa-facebook fa-2x"></i></a>
                <a href="#"><i class="fab fa-instagram fa-2x"></i></a>
                <a href="#"><i class="fab fa-twitter fa-2x"></i></a> 
            </div>
        </div>
    </footer>

    <x-flashMessage />
</body>
</html>