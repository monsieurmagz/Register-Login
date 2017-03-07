     <!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>RLMGZ</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="css/mdb.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <?php   
        session_start();
        include 'queries.php';
        ?>
        <header>
            <!--Navbar-->
    
<!--Navbar-->
<nav class="navbar navbar-toggleable-md navbar-dark bg-primary">
    <div class="container">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav1" aria-controls="navbarNav1" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">
            <strong>RLMGZ</strong>
        </a>
        <div class="collapse navbar-collapse" id="navbarNav1">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link">TBD</a>
                </li>
                
                <li class="nav-item dropdown btn-group">
                    <a class="nav-link dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php if(isset($_SESSION['login_user'])){ echo ucfirst($rows['username']);}?></a>
                    <div class="dropdown-menu dropdown" aria-labelledby="dropdownMenu1">
                        <a class="dropdown-item">Settings</a>
                        <a class="dropdown-item"><?php if(isset($_SESSION['login_user'])){ echo ucfirst($rows['email']);}?></a>
                        <a class="dropdown-item">Something else here</a>
                    </div>
                </li>
                <li class="nav-item dropdown btn-group">
                    <a class="nav-link dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Settings</a>
                    <div class="dropdown-menu dropdown" aria-labelledby="dropdownMenu1">
                        <a class="dropdown-item">Action</a>
                        <a class="dropdown-item">Action Here</a>
                        <a class="dropdown-item">Something else here</a>
                    </div>
                </li>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
            </ul>
            <form class="form-inline waves-effect waves-light">
                <input class="form-control" type="text" placeholder="Search">
            </form>
        </div>
    </div>
</nav>

        </header>

        <main>
            <!--Main layout-->
    <div class="container">
        <!--First row-->
        <div class="row">
            <div class="col-md-7">
                <!--Featured image -->
                <div class="view overlay hm-white-light z-depth-1-half">
				<img src="http://tera-cdn0.enmasse-game.com/datastore/images/2012/03/16/01/45/10/289/TERA_Elin_4.jpg" class="img-fluid" alt="">
                <div class="mask">
                </div>   
                </div>
                <br>
                </div>

            <!--Main information-->
            <div class="col-md-5">
                <h2 class="h2-responsive">Roel Maglangit</h2>
                <hr>
                <p>Hi! I'm Roel Maglangit!</p>
                <a href="" class="btn btn-primary">Read more</a>
            </div>
        </div>
        <!--/.First row-->

        <!--Second row-->
        
<!--Second row-->
<div class="row">
    <!--First columnn-->
    <div class="col-md-4">
        <!--Card-->
        <div class="card">

            <!--Card image-->
            <div class="view overlay hm-white-slight">
                <img src="http://tera-cdn0.enmasse-game.com/datastore/images/2012/03/16/01/45/10/289/TERA_Elin_4.jpg" class="img-fluid" alt="">
                <a href="#">
                    <div class="mask"></div>
                </a>
            </div>
            <!--/.Card image-->

            <!--Card content-->
            <div class="card-block">
                <!--Title-->
                <h4 class="card-title">Elin</h4>
                <!--Text-->
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Read more</a>
            </div>
            <!--/.Card content-->

        </div>
        <!--/.Card-->
    </div>
    <!--First columnn-->

    <!--Second columnn-->
    <div class="col-md-4">
        <!--Card-->
        <div class="card">

            <!--Card image-->
            <div class="view overlay hm-white-slight">
                <img src="http://emeo-cdn1.enmasse-game.com/datastore/images/2012/03/27/20/40/26/787/GamesContent_WhatisTera.jpg" class="img-fluid" alt="">
                <a href="#">
                    <div class="mask"></div>
                </a>
            </div>
            <!--/.Card image-->

            <!--Card content-->
            <div class="card-block">
                <!--Title-->
                <h4 class="card-title">Card title</h4>
                <!--Text-->
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Read more</a>
            </div>
            <!--/.Card content-->

        </div>
        <!--/.Card-->
    </div>
    <!--Second columnn-->

    <!--Third columnn-->
    <div class="col-md-4">
        <!--Card-->
        <div class="card">

            <!--Card image-->
            <div class="view overlay hm-white-slight">
                <img src="https://i.ytimg.com/vi/lz_HVNH7qvg/maxresdefault.jpg" class="img-fluid" alt="">
                <a href="#">
                    <div class="mask"></div>
                </a>
            </div>
            <!--/.Card image-->

            <!--Card content-->
            <div class="card-block">
                <!--Title-->
                <h4 class="card-title">Card title</h4>
                <!--Text-->
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Read more</a>
            </div>
            <!--/.Card content-->

        </div>
        <!--/.Card-->
    </div>
    <!--Third columnn-->
</div>
<!--/.Second row-->

    </div>
    <!--/.Main layout-->
        </main>

        
<!--Footer-->
<footer class="page-footer blue center-on-small-only">

    <!--Footer Links-->
    <div class="container-fluid">
        <div class="row">

            <!--First column-->
            <div class="col-md-6">
                <h5 class="title">Footer Content</h5>
                <p>Here you can use rows and columns here to organize your footer content.</p>
            </div>
            <!--/.First column-->

            <!--Second column-->
            <div class="col-md-6">
                <h5 class="title">Links</h5>
                <ul>
                    <li><a href="#!">Link 1</a></li>
                    <li><a href="#!">Link 2</a></li>
                    <li><a href="#!">Link 3</a></li>
                    <li><a href="#!">Link 4</a></li>
                </ul>
            </div>
            <!--/.Second column-->
        </div>
    </div>
    <!--/.Footer Links-->

    <!--Copyright-->
    <div class="footer-copyright">
        <div class="container-fluid">
            © 2017 Copyright: <a href="https://www.facebook.com/MonsieurMagz"> Roel Maglangit </a>

        </div>
    </div>
    <!--/.Copyright-->

</footer>
<!--/.Footer-->

        
         <!-- JQuery -->
        <script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>

        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="js/tether.min.js"></script>

        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="js/bootstrap.min.js"></script>

        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="js/mdb.min.js"></script>


    </body>
</html>
		