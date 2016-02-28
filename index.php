<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

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
    <div class="container">

      <div class="well" style="height: 1140px;"> 
       <?php 
                  $movies = array();
                  foreach (glob("./gallery/home/upcoming/*.png") as $filename) {
                    array_push($movies, $filename);
                  }

                  $star = array();
                  foreach (glob("./gallery/home/star/*.png") as $filename) {
                    array_push($star, $filename);
                  }

                  $theater = array();
                  foreach (glob("./gallery/home/theater/*.png") as $filename) {
                    array_push($theater, $filename);
                  }

       $panels = array("Upcoming movies","Fan with Star","Movies in Theatre");
       $upcomingMoviesArray = array("The Vampire Diaries","Gotham", "Game of Thrones", "Breaking Bad", "Friends", "The BigBang Theory");
       $fansWithStarArray = array("Shiv With Benedict Cumberbatch", "Sachin wiht Chris Evans", "Rahul with Robert Downey Jr.", "Santu with Ryan Reynolds", "Varun with Neel Sethi");
       $moviesInTheater = array("The Jungle Book", "Superman v Batman", "Now You See Me 2", "Deadpool", "Captain America (Civil war)", "Doctor Strange");
       
       for ($pIndex=0; $pIndex < 3; $pIndex++) { ?>
        <div class="row featurette">  <!-- Start panel 1 -->
          <div class="col-md-5">
            <h3 class="featurette-heading"><?php echo  $panels[$pIndex]; ?> </h3>
            <ul>
            <?php
            // The most rubbish kind of code I ever written, i dont know why I wrote it.
            // Please update below logic in a better way.

                switch ($pIndex) {
                  case 0:
                  foreach ($upcomingMoviesArray as $moviesValue) {
                    echo '<li>'.$moviesValue.'</li>';
                  }
                    break;
                  case 1 :foreach ($fansWithStarArray as $starValue) {
                    echo '<li>'.$starValue.'</li>';
                  }
                  break;
                  case 2:foreach ($moviesInTheater as $theaterValue) {
                    echo '<li>'.$theaterValue.'</li>';
                  }
                    break;
                }
            ?>
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
                    <img src="<?php 
                    if($pIndex == 0) echo $movies[0]; 
                    else if($pIndex == 1) echo $star[0]; 
                      else echo $theater[0];?>" >
                  </div>

                  <div class="item">
                    <img src="<?php if($pIndex == 0) echo $movies[1]; 
                    else if($pIndex == 1) echo $star[1]; 
                      else echo $theater[1]; ?>" >
                  </div>

                  <div class="item">
                    <img src="<?php if($pIndex == 0) echo $movies[2]; 
                    else if($pIndex == 1) echo $star[2]; 
                      else echo $theater[2]; ?>" >
                  </div>

                  <div class="item">
                    <img src="<?php if($pIndex == 0) echo $movies[3]; 
                    else if($pIndex == 1) echo $star[3]; 
                      else echo $theater[3]; ?>" >
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
        </div>  <!-- End Panel 1-->
        <br/>
        <?php } ?>
      </div>

    </div> <!-- /container -->

<?php include("HeaderFooter/footer.php"); ?>
