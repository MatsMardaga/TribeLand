<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Scrolling Nav - Start Bootstrap Template</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/Bootstrap.css" rel="stylesheet"/>
        <script src="js/Home.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
        <div class="container px-4">
            <a class="navbar-brand" href="#page-top">Back to top</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="/News">News</a></li>
                    <li class="nav-item"><a class="nav-link" href="/Store">Store</a></li>
                    <li class="nav-item"><a class="nav-link" href="/FAQ">FAQ</a></li>
                    <li class="nav-item"><a class="nav-link" href="/Contact">contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="/Profile">Profile</a></li>
                    <li class="nav-item"><a class="nav-link" href="/Login">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('home')
    @yield('login')
</body>
</html>