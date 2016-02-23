<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>About US</title>

    <link rel="stylesheet" href="Style/demo.css">
    <link rel="stylesheet" href="Style/header-second-bar.css">
    <link rel="stylesheet" href="Style/footer-distributed-with-address-and-phones.css">
    <link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

      <!-- Optional theme -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

      <!-- Latest compiled and minified JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  </head>
  <?php include("HeaderFooter/header.php");?>
  <body>
    <div class="container">

      <div class="well" style="height: 1000px;"> 
        <div class="row featurette">
          <div class="col-md-5">
            <h3 class="featurette-heading">Upcoming movies </h3>
            <ul>
              <li style="display: list-item;"> The Flash </li>
              <li>The Vampire Diaries</li>
              <li>Gotham</li>
              <li>Game of Thrones</li>
              <li>Breaking Bad</li>
              <li>Friends</li>
              <li>The BigBang Theory</li>
            </ul>
          </div>
          <div class="col-md-7">

                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
                  <li data-target="#myCarousel" data-slide-to="3"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                  <div class="item active">
                    <img src="gallery/home/images/img1.png" alt="Chania">
                  </div>

                  <div class="item">
                    <img src="gallery/home/images/img2.png" alt="Chania">
                  </div>

                  <div class="item">
                    <img src="gallery/home/images/img3.png" alt="Flower">
                  </div>

                  <div class="item">
                    <img src="gallery/home/images/img4.png" alt="Flower">
                  </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>

          </div>
        </div>



      </div>

    </div> <!-- /container -->

</body>
<?php include("HeaderFooter/footer.php"); ?>
</html>