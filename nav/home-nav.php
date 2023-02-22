<?php 

$conn=mysqli_connect("localhost","root","");

$dbcon=mysqli_select_db($conn, "crossroads_crossroa");

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
    color:black;

}

.navbar-container {
    padding: 20px 0 20px 0;
    background-color: #f1c40f;
}

.active
{
    background-color: rgb(231,76,60); 
}

.navbar.navbar-fixed-top.fixed-theme {
    background-color: #f1c40f;
    border-color: #080808;
    box-shadow: 0 0 5px rgba(0,0,0,.8);
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
.navbar-container{
    transition: 0.8s;
    -webkit-transition:  0.8s;

}
a
{
  font-family: 'Montserrat', sans-serif;
  color:black;

}
</style>
</head>

<body>

  <!-- Fixed navbar -->
        <nav id="header" class="navbar navbar-fixed-top">
            <div id="header-container" class="container navbar-container">
                <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" style="border-color: black;background-color:#f1c40f">
          <span class="sr-only">Toggle navigation</span>
          <i class="fa fa-bars"></i>
        </button>
                    <a id="brand" class="navbar-brand" href="index.php">Crossroads Food Lab.</a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a style="font-family: 'Montserrat', sans-serif;color:black;" href="index.php">Home</a></li>

                        <li><a style="font-family: 'Montserrat', sans-serif;color:black;" href="menu.php">Menu</a></li>

                         <li><a style="font-family: 'Montserrat', sans-serif;color:black;" href="gallery.php">Gallery</a></li>
<li><a style="font-family: 'Montserrat', sans-serif;color:black;" href="about.php">About</a></li>

          <li><a style="font-family: 'Montserrat', sans-serif;color:black;" href="contact.php">Reach Us</a></li>
          <li ><a style="font-family: 'Montserrat', sans-serif;color:black;" href="reserve.php">Reserve</a></li>
          
                              <li><a style="font-family: 'Montserrat', sans-serif;color:black;float:right;margin-left:50px" href="profile.php"><i class="fa fa-1x fa-user"></i> Hello <?php echo $login_session;?>,</a></li>
          

                    </ul>
                    <!--SEARCH BAR
<div class="col-sm-3 col-md-3">
        <form class="navbar-form" role="search" action="search.php" method="post">
        <div class="input-group">
            <input type="text" class="form-control" style="background-color: rgb(40,40,40);color:#f1c40f;font-family: 'Montserrat',sans-serif" placeholder="Enter Reservation ID" name="search" required>
            <div class="input-group-btn">
                <button class="btn btn-danger" type="submit"><i class="fa fa-search"></i></button>
            </div>
        </div>
        </form>
    </div>
END SEARCH BAR-->

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
<script>
  $(document).ready(function(){

/**
 * This object controls the nav bar. Implement the add and remove
 * action over the elements of the nav bar that we want to change.
 *
 * @type {{flagAdd: boolean, elements: string[], add: Function, remove: Function}}
 */
var myNavBar = {

    flagAdd: true,

    elements: [],

    init: function (elements) {
        this.elements = elements;
    },

    add : function() {
        if(this.flagAdd) {
            for(var i=0; i < this.elements.length; i++) {
                document.getElementById(this.elements[i]).className += " fixed-theme";
            }
            this.flagAdd = false;
        }
    },

    remove: function() {
        for(var i=0; i < this.elements.length; i++) {
            document.getElementById(this.elements[i]).className =
                    document.getElementById(this.elements[i]).className.replace( /(?:^|\s)fixed-theme(?!\S)/g , '' );
        }
        this.flagAdd = true;
    }

};

/**
 * Init the object. Pass the object the array of elements
 * that we want to change when the scroll goes down
 */
myNavBar.init(  [
    "header",
    "header-container",
    "brand"
]);

/**
 * Function that manage the direction
 * of the scroll
 */
function offSetManager(){

    var yOffset = 0;
    var currYOffSet = window.pageYOffset;

    if(yOffset < currYOffSet) {
        myNavBar.add();
    }
    else if(currYOffSet == yOffset){
        myNavBar.remove();
    }

}

/**
 * bind to the document scroll detection
 */
window.onscroll = function(e) {
    offSetManager();
}

/**
 * We have to do a first detectation of offset because the page
 * could be load with scroll down set.
 */
offSetManager();
});
</script>
</html>

