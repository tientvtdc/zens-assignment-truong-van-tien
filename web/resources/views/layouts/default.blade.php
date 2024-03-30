<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jokee Single Serving</title>
    @vite('resources/css/app.css')
</head>
<body>
<header class="header">
    <div class="container">
        <img class="logo"
             src="{{asset('images/logo.png')}}"
             alt="logo">
        <div class="right-header">
            <div class="box-text">
                <span class="right-header_top">Handicrafted by</span>
                <span class="">Jim HLS</span>
            </div>
            <img class="avatar"
                 src="{{asset('images/avatar.png')}}"
                 alt="avatar">
        </div>
    </div>
</header>

<main>
    @yield('content')
</main>

<footer>
    <hr>
    <div class="container">
        <p>This website is created as part of Hlsolutions program. The materials
            contained on this website are provided for general information only and do not constitute any form of
            advice.
            HLS assumes no responsibility for the accuracy of any particular statement and accepts no liability for any
            loss
            or damage which may arise from reliance on the information contained on this site.</p>
        <span class="footer-copyright">Copyright 2021 HLS</span>
    </div>
</footer>

@vite('resources/js/app.js')
</body>
</html>
