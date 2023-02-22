<?php 
// session_start();
// $login_session=$_SESSION['login_user'];

                                global $con;

                                include("admin/includes/db.php");

                                  $get_logo = "select * from logo";
                                  $run_logo = mysqli_query($con, $get_logo);
                                  $row_logo = mysqli_fetch_array($run_logo);
                                            
                                  $logo_ID = $row_logo['id'];
                                  $logo_img = $row_logo['logo'];
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Crossroads Food Lab.</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="icon" type="image" href="admin/images/<?php echo $logo_img;?>">

    <!-- Custom styles for this template -->



<!--FONTS-->
<link href="https://fonts.googleapis.com/css?family=Teko" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Merienda" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

<!--icons-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>



<script src="js/parallax.js"></script>
    <script src="js/style1.js"></script>

    <!-- Custom styles for this template -->
      <link rel="stylesheet" href="admin/assets/css/animate.css"/>
    <link rel="stylesheet" href="admin/assets/css/hover.css"/>
 <link rel="stylesheet" href="css/style1.css"/>

      <!--SLIDER CSS-->
    <link href="css/slider.css" rel="stylesheet">
    
     <!--SLIDER CSS-->
    <link href="css/custom.css" rel="stylesheet">

<style>

    /* width */
::-webkit-scrollbar {
    width: 20px;
}

/* Track */
::-webkit-scrollbar-track {
    box-shadow: inset 0 0 5px grey; 
    border-radius: 10px;
}
 
/* Handle */
::-webkit-scrollbar-thumb {
    background-color: rgb(231,76,60); 
    border-radius: 10px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
    background: grey; 
}

  .animated {
  -webkit-animation-duration: 1s;
  animation-duration: 2s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
}

.border-img
{
border-style: solid;
border-width: 17px 18px;
-moz-border-image: url(img/home/border.png) 19 18 19 20 round repeat;
-webkit-border-image: url(img/home/border.png) 19 18 19 20 round repeat;
-o-border-image: url(img/home/border.png) 19 18 19 20 round repeat;
border-image: url(img/home/border.png) 19 18 19 20 round repeat;
}

.counter {
    background-color:#f1c40f;
    padding: 20px 0;
    width: 90%;
    border-radius: 20px;
}

.count-title {
    font-size: 40px;
    font-weight: normal;
    margin-top: 10px;
    margin-bottom: 0;
    text-align: center;
}

.count-text {
    font-size: 30px;
    margin-top: 10px;
    margin-bottom: 0;
    text-align: center;
}

.fa-4x{
    margin: 0 auto;
    float: none;
    display: table;
    color: rgb(231,76,60); ;
}

.fa-2x{
    margin: 0 auto;
    float: none;
    display: table;
    color: rgb(231,76,60); ;
}
.clients-name {
  display: inline-block;
  border-top: 1px solid #eee;
  padding-top: 20px;
  margin-top: 10px;
}
.parallax-window {
    min-height: 300px;
    background: transparent;
    width:1200px;
}

  #scroll {
    position:fixed;
    right:10px;
    bottom:10px;
    cursor:pointer;
    width:50px;
    height:50px;
    background-color:#f1c40f;
    text-indent:-9999px;
    display:none;
    -webkit-border-radius:60px;
    -moz-border-radius:60px;
    border-radius:60px
}
#scroll span {
    position:absolute;
    top:50%;
    left:50%;
    margin-left:-8px;
    margin-top:-12px;
    height:0;
    width:0;
    border:8px solid transparent;
    border-bottom-color:#ffffff;
}
#scroll:hover {
    background-color:rgb(231,76,60);
    opacity:1;filter:"alpha(opacity=100)";
    -ms-filter:"alpha(opacity=100)";
}

.down {
        position: fixed;
    background-color:#f1c40f;
    width:50px;
    height:50px;
    border-radius:50px;
    left:1279px;
    top:580px;
    border:none;
}
.down:hover {
        position: fixed;
    background-color:rgb(231,76,60);
    width:50px;
    height:50px;
    border-radius:50px;
    left:1279px;
    top:580px;
    border:none;
}
.up {
        position: fixed;
    background-color:#f1c40f;
    width:50px;
    height:50px;
    border-radius:50px;
    left:1279px;
    top:510px;
    border:none;
}
.up:hover {
        position: fixed;
    background-color:rgb(231,76,60);
    width:50px;
    height:50px;
    border-radius:50px;
    left:1279px;
    top:510px;
    border:none;
}
</style>


</head>


<body style="background-color: rgb(40,40,40);">
   <!-- Carousel
    ================================================== -->
    <br><br><br><br><br> 
<div class="container">
<?php include('slides.php');?>
</div>




 <?php include('nav/home-nav.php');?>

    <!-- Page Content -->
    <div class="container" id="fullpage">

        <div class="row">
          <br>
          <h1 style="font-family: 'Teko', sans-serif;font-size: 60px;color: #f1c40f" class="animated infinite flash">
                    <i class="fa fa-road"></i> Crossroads Food Lab.
                    <small style="color: white">Restaurant</small>
                </h1>
                <hr style="border-color: rgb(231,76,60);">


            <?php  
                            include("includes/db.php");

                            $get = "SELECT history from about_us";
                            $run = mysqli_query($con, $get);
                            $row = mysqli_fetch_array($run);
                                        
                            $history = $row['history'];
                            ?>

  <br><br><br><br><br><br><br><br><br>
            <div class="jumbotron col-sm-12 border-img" style="background-color:#f1c40f;">
                <h2 style="font-family: 'Teko', sans-serif;color:black"><ins>Our Story</ins></h2>
                <p style="text-align: justify;font-family: 'Merienda', cursive;color:black"><?php echo $history;?></p>
                <p><a class="btn btn-lg hvr-icon-forward  hvr-pulse-shrink" style="background-color: rgb(231,76,60);color:white" href="about.php">Know More <i class="fa fa-chevron-circle-right hvr-icon"></i></a>  </p>


            </div>
            

        </div>
        <!-- /.row -->

        <div class="row">
           <div class="row">
            <br><br><br><br><br><br><br><br> <br> <br> 
            <h1 align="center" style="color:#f1c40f;font-family: 'Teko', sans-serif;" class="animated infinite pulse">Looking for How to Reserve Online?</h1>

             <center><h1 style="font-family: 'Montserrat', sans-serif;color: white" class="animated infinite flash">CREATE AN ACCOUNT FIRST TO PROCEED WITH YOUR RESERVATION</h1></center>

            <h4 align="center" style="color: white;font-family: 'Montserrat', sans-serif;">and follow these easy steps</h4>
            <hr style="height:30px;border-color: rgb(231,76,60);">
<br> <br> <br> 
            <div class="col-md-3 col-sm-6">
                <center>
                <a class="hvr-icon-spin">
                <img src="img/home/search1.png" class="hvr-icon" />
                </a>
              </center>
                <h4 align="center" style="color:white;font-family: 'Montserrat', sans-serif;">1. Search our website</h4>
                
            </div>

            <div class="col-md-3 col-sm-6">
                <center>
                  <a  class="hvr-icon-spin">
                <img src="img/home/order.png" class="hvr-icon" />
                </a>
                </center>
                <h4 align="center" style="color:white;font-family: 'Montserrat', sans-serif;">2. See & Choose the food you like</h4>
            </div>


            <div class="col-md-3 col-sm-6">
                <center>
                   <a class="hvr-icon-spin">
                <img src="img/home/table.png" class="hvr-icon" />
                </a>
                </center>
                <h4 align="center" style="color:white;font-family: 'Montserrat', sans-serif;">3. Reserve a Table</h4>

            </div>

               <div class="col-md-3 col-sm-6">
                <center>
                   <a class="hvr-icon-spin">
                <img src="img/home/enjoy.png" class="hvr-icon" />
                </a>
                </center>
                <h4 align="center" style="color:white;font-family: 'Montserrat', sans-serif;">4. Enjoy our Food</h4>
              </div>
        </div> 
        </div>
        <!-- /.row -->
        <br><br><br>

            
        
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

        <div class="row">
            <h1 align="center" style="color:#f1c40f;font-family: 'Teko', sans-serif;" class="animated infinite pulse">Our Best Sellers</h1>
            <h4 align="center" style="color: white;font-family: 'Montserrat', sans-serif;">Every day our cooks serve fresh and tasty specials</h4>
            <hr style="height:30px;border-color: rgb(231,76,60);">
<br><br><br><br>
            <div class="col-md-3 col-sm-6">
                <center>
                   <a class="hvr-icon-pulse">
                <img src="img/home/dburger.png" class="hvr-icon img-circle" />
                </a>
                </center>
                <h2 align="center" style="color: #f1c40f;font-family: 'Teko', sans-serif;">Double Decker Burger</h2>
            </div>

            <div class="col-md-3 col-sm-6">
                 <center>
                  <a class="hvr-icon-pulse">
                <img src="img/home/chicken.png" class="hvr-icon img-circle" />
                </a>
                  <img class="img-circle"  alt="">
                </center>
                <h2 align="center" style="color: #f1c40f;font-family: 'Teko', sans-serif;">Flavored Chicken</h2>

            </div>

            <div class="col-md-3 col-sm-6">
                <center>
                  <a class="hvr-icon-pulse">
                <img src="img/home/shawarma.png" class="hvr-icon img-circle" />
                </a>
               </center>
                <h2 align="center" style="color: #f1c40f;font-family: 'Teko', sans-serif;">Shawarma Wrap</h2>

            </div>

               <div class="col-md-3 col-sm-6">
                 <center>
                  <a class="hvr-icon-pulse">
                <img src="img/home/ramen.png" class="hvr-icon img-circle" />
                </a>
                </center>
                <h2 align="center" style="color: #f1c40f;font-family: 'Teko', sans-serif;">Ramen</h2>

              </div>
        </div>
<br><br><br>


<!--
  <h1 style="color:#f1c40f" class="animated infinite pulse"><center>We Would Like To Hear From You</center></h1>
 <hr style="border-color: rgb(231,76,60);padding-top: 5px">
           <div class="parallax-window img-responsive" data-parallax="scroll" data-image-src="img/satisfaction.png">
          <br><br>
  <div class="container">
  <div class="row text-center">


<br><br>
<div class="col-md-12">

               <div class="counter" style="opacity: 0.9;filter: alpha(opacity=40);">
                      <center><p class="count-text" style="font-family: 'Montserrat',sans-serif">Take the survey now!</p>
                        <br>
      </center>
      <a class="btn btn-danger animated infinite flash btn-lg" href="survey.php">Click Here!</a>
</div>

  </div>



         </div>
</div>
</div>
-->
        <br><br><br><br><br><br><br><br><br><br><br><br><br>        <br><br><br>

<div class="container">
  <h1 style="color:#f1c40f" class="animated infinite pulse"><center>Our client says</center></h1>
 <hr style="border-color: rgb(231,76,60);padding-top: 5px">
  <div class="row text-center">
<?php
include('includes/db.php');

    $query=mysqli_query($con,"SELECT * from customer_testimonial")or die(mysqli_error($con));
      while ($row=mysqli_fetch_array($query)){
        $ct_id=$row['ct_id'];
        $ct_name=$row['ct_name'];
        $ct_desc=$row['ct_desc'];
        $ct_date=$row['ct_date'];

?>
    <div class="col-md-4">

          <div class="counter">
           <i class="fa fa-quote-left fa-2x"></i>
              <p style="font-size: 20px;font-family: 'Merienda', sans-serif;color:black"><?php echo $ct_desc;?></p>
              <div class="clients-name">
                <p style="font-size: 20px;font-family: 'Montserrat', sans-serif;color:black"><strong><?php echo $ct_name;?></strong></p>
                  
                 <p style="font-size: 20px;font-family: 'Teko', sans-serif;color:black"> <em><i class="fa fa-clock-o"></i> <?php echo $ct_date;?></em></p>
              </div>
            
    </div><br>
    </div> 
<?php } ?>

         </div>
         <br>
</div>

<br><br><br><br><br><br><br><br><br><br><br><br><br>
            <!-- Blog Entries Column -->
            <div class="col-md-12">

                <center><h1 style="color: #f1c40f;font-family: 'Teko', sans-serif;" class="animated infinite flash">Happenings</h1>
                    <h4 style="color: white;font-family: 'Montserrat', sans-serif;">News & Announcements</h4></center>
                                   
                </h1>
                 <hr style="border-color: rgb(231,76,60);">

                <!-- First Blog Post -->
                
<?php
include('includes/db.php');

    $query=mysqli_query($con,"SELECT * from news")or die(mysqli_error($con));
      while ($row=mysqli_fetch_array($query)){
        $news_id=$row['news_id'];
        $news_title=$row['news_title'];
        $news_desc=$row['news_desc'];
        $news_pic=$row['news_pic'];

?> 
                <h2 style="color: #f1c40f;font-family: 'Teko', sans-serif;"><?php echo $news_title;?></h2>
               
                
                <center>
                  <img class="img-responsive hvr-pop border-img" style="width: 500px;height: 350px" src="admin/images/news/<?php echo $news_pic;?>" alt="<?php echo $news_title;?>">
              
              <h3 style="color:white;font-family: 'Montserrat', sans-serif;"><?php echo $news_desc;?></h3>
            </center>
                        <hr style="height:30px;border-color: rgb(231,76,60);">
                <p></p>
<?php } ?>


            </div>


            </div>

<?php include('footer.php');?>


 <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/carousel.js"></script>

  

<script>
  (function ($) {
  $.fn.countTo = function (options) {
    options = options || {};
    
    return $(this).each(function () {
      // set options for current element
      var settings = $.extend({}, $.fn.countTo.defaults, {
        from:            $(this).data('from'),
        to:              $(this).data('to'),
        speed:           $(this).data('speed'),
        refreshInterval: $(this).data('refresh-interval'),
        decimals:        $(this).data('decimals')
      }, options);
      
      // how many times to update the value, and how much to increment the value on each update
      var loops = Math.ceil(settings.speed / settings.refreshInterval),
        increment = (settings.to - settings.from) / loops;
      
      // references & variables that will change with each update
      var self = this,
        $self = $(this),
        loopCount = 0,
        value = settings.from,
        data = $self.data('countTo') || {};
      
      $self.data('countTo', data);
      
      // if an existing interval can be found, clear it first
      if (data.interval) {
        clearInterval(data.interval);
      }
      data.interval = setInterval(updateTimer, settings.refreshInterval);
      
      // initialize the element with the starting value
      render(value);
      
      function updateTimer() {
        value += increment;
        loopCount++;
        
        render(value);
        
        if (typeof(settings.onUpdate) == 'function') {
          settings.onUpdate.call(self, value);
        }
        
        if (loopCount >= loops) {
          // remove the interval
          $self.removeData('countTo');
          clearInterval(data.interval);
          value = settings.to;
          
          if (typeof(settings.onComplete) == 'function') {
            settings.onComplete.call(self, value);
          }
        }
      }
      
      function render(value) {
        var formattedValue = settings.formatter.call(self, value, settings);
        $self.html(formattedValue);
      }
    });
  };
  
  $.fn.countTo.defaults = {
    from: 0,               // the number the element should start at
    to: 0,                 // the number the element should end at
    speed: 1000,           // how long it should take to count between the target numbers
    refreshInterval: 100,  // how often the element should be updated
    decimals: 0,           // the number of decimal places to show
    formatter: formatter,  // handler for formatting the value before rendering
    onUpdate: null,        // callback method for every time the element is updated
    onComplete: null       // callback method for when the element finishes updating
  };
  
  function formatter(value, settings) {
    return value.toFixed(settings.decimals);
  }
}(jQuery));

jQuery(function ($) {
  // custom formatting example
  $('.count-number').data('countToOptions', {
  formatter: function (value, options) {
    return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
  }
  });
  
  // start all the timers
  $('.timer').each(count);  
  
  function count(options) {
  var $this = $(this);
  options = $.extend({}, options || {}, $this.data('countToOptions') || {});
  $this.countTo(options);
  }
});
</script>

<script type="text/javascript" src="../js/jssor.slider.min.js"></script>
<script>
    jQuery(document).ready(function ($) {
        var options = {
            ..
        };
            
        var jssor_slider1 = new $JssorSlider$("slider1_container", options);
        ...
    });
</script>



<script>
$(document).ready(function(){ 
    $(window).scroll(function(){ 
        if ($(this).scrollTop() > 100) { 
            $('#scroll').fadeIn(); 
        } else { 
            $('#scroll').fadeOut(); 
        } 
    }); 
    $('#scroll').click(function(){ 
        $("html, body").animate({ scrollTop: 0 }, 600); 
        return false; 
    }); 
});
</script>



<script src="https://cdnjs.com/libraries/fullPage.js"></script>
<script src="js/jquery-2.1.1.js"></script>
<script src="js/masonry.pkgd.min.js"></script>
<script src="js/jquery.flexslider-min.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>