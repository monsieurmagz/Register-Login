
<html>
    <head>
        <meta charset="UTF-8">
        <title>RLMGZ Login</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="css/mdb.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        
<!-- JavaScript -->
<script src="//cdn.jsdelivr.net/alertifyjs/1.9.0/alertify.min.js"></script>

<!-- CSS -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/alertifyjs/1.9.0/css/alertify.min.css"/>
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/alertifyjs/1.9.0/css/themes/default.min.css"/>
<!-- Semantic UI theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/alertifyjs/1.9.0/css/themes/semantic.min.css"/>
<!-- Bootstrap theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/alertifyjs/1.9.0/css/themes/bootstrap.min.css"/>

<!-- 
    RTL version
-->
<link rel="stylesheet" href="//cdn.jsdelivr.net/alertifyjs/1.9.0/css/alertify.rtl.min.css"/>
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/alertifyjs/1.9.0/css/themes/default.rtl.min.css"/>
<!-- Semantic UI theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/alertifyjs/1.9.0/css/themes/semantic.rtl.min.css"/>
<!-- Bootstrap theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/alertifyjs/1.9.0/css/themes/bootstrap.rtl.min.css"/>
    </head>
    <body>
    <?php
    include 'logincode.php';
    echo $usernamerr;
    echo $passworderr;
    echo $successin;
    echo $errorin;
    if(isset($_SESSION['login_user'])){

    }

    ?>
<!--Navigation & Intro-->

<!--Navigation & Intro-->
<header>

    <!--Navbar-->
    <nav class="navbar navbar-toggleable-md navbar-dark fixed-top scrolling-navbar">
        <div class="container">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav1" aria-controls="navbarNav1" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand waves-effect waves-light" href="http://rlmgz.esy.es">RLMGZ</a>
            <div class="collapse navbar-collapse" id="navbarNav1">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="http://rlmgz.esy.es">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://rlmgz.esy.es">Register</a>
                    </li>
                    
                </ul>
                
            </div>
        </div>
    </nav>
    <!--/.Navbar-->

    <!--Mask-->
    <div class="view hm-black-strong">
        <div class="full-bg-img flex-center">
            <div class="container">
                <div class="row" id="home">

                    <!--First column-->
                    <div class="col-lg-6">
                        
                    </div>
                    <!--/.First column-->

                    <!--Second column-->
                    <div class="col-lg-6">
                        <!--Form-->
                        <div class="card wow fadeInRight">
                            <div class="card-block">
                                <!--Header-->
                                <div class="text-center">
                                    <h3><i class="fa fa-user"></i>Login:</h3>
                                    <hr>
                                </div>

                                <!--Body-->
                                <form method = "post" action = "">
                                <div class="md-form">
                                    <i class="fa fa-user prefix"></i>
                                    <input type="text" id="form3" class="form-control" name="usernamein">
                                    <label for="form3">Username</label>
                                </div>

                                <div class="md-form">
                                    <i class="fa fa-lock prefix"></i>
                                    <input type="password" id="form4" class="form-control" name="passwordin">
                                    <label for="form4">Password</label>
                                </div>

                                <div class="text-center">
                                    <button class="btn btn-ins btn-lg" type="submit" name="submit">Login</button>                                                             
                                </div>
                                </form>         
                            </div>
                        </div>
                        <!--/.Form-->
                    </div>
                    <!--/Second column-->
                </div>
            </div>
        </div>
    </div>
    <!--/.Mask-->

</header>
<!--/Navigation & Intro-->

<!--/Navigation & Intro-->
     <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>

    <!-- Tooltips -->
    <script type="text/javascript" src="js/tether.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>

    <script>
        new WOW().init();
    </script>
    </body>
</html>

