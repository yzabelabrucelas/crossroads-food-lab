<?php 

$connection=mysqli_connect("localhost","root","","crossroads_crossroa");




?>
<!DOCTYPE html>
<html>

<head>
    <title></title>
    <!--FONTS-->
    <link href="https://fonts.googleapis.com/css?family=Teko" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merienda" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

    <link href="css/style1.css" rel="stylesheet">
    <script src="js/style1.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <style>
    /* EXAMPLE 3

/*
 * Custom styles
 */
    .navbar-brand {
        font-size: 24px;
        font-family: 'Teko', sans-serif;
        color: black;
    }

    .navbar-container {
        padding: 20px 0 20px 0;
        background-color: #f1c40f;
    }

    .active {
        background-color: rgb(231, 76, 60);
    }

    .navbar.navbar-fixed-top.fixed-theme {
        background-color: #f1c40f;
        border-color: #080808;
        box-shadow: 0 0 5px rgba(0, 0, 0, .8);
    }

    .navbar-brand.fixed-theme {
        font-size: 20px;
        background-color: #f1c40f;
    }

    .navbar-container.fixed-theme {
        padding: 0;
        background-color: #f1c40f;
    }

    .navbar-brand.fixed-theme,
    .navbar-container.fixed-theme,
    .navbar.navbar-fixed-top.fixed-theme,
    .navbar-brand,
    .navbar-container {
        transition: 0.8s;
        -webkit-transition: 0.8s;
    }

    a {
        font-family: 'Montserrat', sans-serif;
        color: black;

    }
    </style>
</head>

<body>

    <!-- Fixed navbar -->
    <nav id="header" class="navbar navbar-fixed-top">

        <div id="header-container" class="container navbar-container">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    style="border-color: black;background-color:#f1c40f">
                    <span class="sr-only">Toggle navigation</span>
                    <i class="fa fa-bars"></i>
                </button>
                <a id="brand" class="navbar-brand" href="index.php">Crossroads Food Lab.</a>
            </div>

            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a style="font-family: 'Montserrat', sans-serif;color:black;" href="index.php">Home</a></li>

                    <li><a style="font-family: 'Montserrat', sans-serif;color:black;" href="menu.php">Menu</a></li>

                    <li><a style="font-family: 'Montserrat', sans-serif;color:black;" href="gallery.php">Gallery</a>
                    </li>
                    <li><a style="font-family: 'Montserrat', sans-serif;color:black;" href="about.php">About</a></li>

                    <li><a style="font-family: 'Montserrat', sans-serif;color:black;" href="contact.php">Reach Us</a>
                    </li>

                    <li><a style="font-family: 'Montserrat', sans-serif;color:black;" href="reserve.php">Reserve</a>
                    </li>

                    <li><a style="font-family: 'Montserrat', sans-serif;color:black;float:right;margin-left:50px"
                            href="profile.php">
                            <i class="fa fa-1x fa-user"></i> Hello <?php echo $login_session;?>,</a></li>

                </ul>

            </div><!-- /.nav-collapse -->



        </div><!-- /.container -->



    </nav><!-- /.navbar -->
    </ul>
    </li>
    </ul>
    </div>
    </div>
    </nav>

</body>


</html>