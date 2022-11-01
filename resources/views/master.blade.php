<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMPN 3 BOGOR</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="icon" href="../assets/img/logo.jpg">
</head>
<body>
    <!-- leader -->
    <div class="bg-loader">
        <div class="loader">
        </div>
    </div>


    <!-- header -->
    <div class="medsos">
        <div class="container">
            <ul>
                <li><a href="https://www.instagram.com/malabar_6/"><i class="fab fa-instagram"></i></li>
                <li><a href="https://www.youtube.com/channel/UCYuWuQydEILcRw9wu9eW6NA"><i class="fab fa-youtube"></i></a></li>
            </ul>
        </div>
    </div>
    <header>
        <div class="container">
            <h1><a href="index.html">SMPN 3 BOGOR</a></h1>
            <ul>
                <li><a href="/blog">HOME</a></li>
                <li><a href="/blog/about">ABOUT</a></li>
                <li><a href="/blog/fasilitas">FASILITAS</a></li>
                <li><a href="/blog/contact">CONTACT</a></li>
            </ul>
        </div>
        <div class="medsos">
        @yield('medsos')
        </div>
    </header>
    <footer>
        <div class="container">
            <small>Copyright &copy; 2022 - Sheryn Nayla</small>
        </div>
    </footer> 

    <script type="text/javascript">
        $(document).ready(function(){
            $(".bg-loader").hide();
        })
    </script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>    

