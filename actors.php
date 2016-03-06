<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>FTC Star</title>
    

    <link rel="stylesheet" href="Style/demo.css">
    <link rel="stylesheet" href="Style/header-second-bar.css">
    <link rel="stylesheet" href="Style/footer-distributed-with-address-and-phones.css">
    <link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.css"> 
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.css">
    <link rel="stylesheet" href="Style/style.css">
<style type="text/css">
    .style1{
        width: 100%;
    }
</style>
  </head>
  <?php include("HeaderFooter/header.php");?>
    <div class="container">

      <div class="well" style="height: 1140px;"> 
        <div class="row featurette">  <!-- Start panel 1 -->
          <div class="col-md-5">
            <h3 class="featurette-heading"></h3>
            <ul> </ul>
            </div>  <!-- col-md-5 -->

            <div class="col-md-7">
                <div id="sync1" class="owl-carousel">
                  <div class="item"><img src="gallery/home/upcoming/img1.png" class="style1"></div>
                  <div class="item"><img src="gallery/home/upcoming/img2.png" class="style1"></div>
                  <div class="item"><img src="gallery/home/upcoming/img3.png" class="style1"></div> 
                  <div class="item"><img src="gallery/home/upcoming/img4.png" class="style1"></div>
                </div>
                <div id="sync2" class="owl-carousel">
                  <div class="item"><img src="gallery/home/upcoming/img1.png" class="style1"></div>
                  <div class="item"><img src="gallery/home/upcoming/img2.png" class="style1"></div>
                  <div class="item"><img src="gallery/home/upcoming/img3.png" class="style1"></div>
                  <div class="item"><img src="gallery/home/upcoming/img4.png" class="style1"></div>

                </div>
            </div> <!-- col-md-7 -->
            </div> <!-- row featurette -->

      </div>  <!-- well end -->
    </div> <!-- /container -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.js"> </script>
<script type="text/javascript">
$(document).ready(function() {

  var sync1 = $("#sync1");
  var sync2 = $("#sync2");
 
  sync1.owlCarousel({
    autoPlay : true,
    singleItem : true,
    slideSpeed : 1000,
    navigation: true,
    pagination:false,
    afterAction : syncPosition,
    responsiveRefreshRate : 200,
  });
 
  sync2.owlCarousel({
    autoPlay : true,
    items : 4,
    itemsDesktop      : [1199,10],
    itemsDesktopSmall     : [979,10],
    itemsTablet       : [768,8],
    itemsMobile       : [479,4],
    pagination:false,
    responsiveRefreshRate : 100,
    afterInit : function(el){
      el.find(".owl-item").eq(0).addClass("synced");
    }
  });
 
  function syncPosition(el){
    var current = this.currentItem;
    $("#sync2")
      .find(".owl-item")
      .removeClass("synced")
      .eq(current)
      .addClass("synced")
    if($("#sync2").data("owlCarousel") !== undefined){
      center(current)
    }
  }
 
  $("#sync2").on("click", ".owl-item", function(e){
    e.preventDefault();
    var number = $(this).data("owlItem");
    sync1.trigger("owl.goTo",number);
  });
 
  function center(number){
    var sync2visible = sync2.data("owlCarousel").owl.visibleItems;
    var num = number;
    var found = false;
    for(var i in sync2visible){
      if(num === sync2visible[i]){
        var found = true;
      }
    }
 
    if(found===false){
      if(num>sync2visible[sync2visible.length-1]){
        sync2.trigger("owl.goTo", num - sync2visible.length+2)
      }else{
        if(num - 1 === -1){
          num = 0;
        }
        sync2.trigger("owl.goTo", num);
      }
    } else if(num === sync2visible[sync2visible.length-1]){
      sync2.trigger("owl.goTo", sync2visible[1])
    } else if(num === sync2visible[0]){
      sync2.trigger("owl.goTo", num-1)
    }
  }
});
   </script>
<?php include("HeaderFooter/footer.php"); ?>
