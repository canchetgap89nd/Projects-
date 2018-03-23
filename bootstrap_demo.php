<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bootstrap </title>
	<link rel="stylesheet" href = "‪../../../bootstrap/css/bootstrap.css"> 
	<link rel="stylesheet" href = "‪../../../bootstrap/css/bootstrap-theme.min.css"> 
  <!-- font awesome -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
  <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/solid.js" integrity="sha384-+Ga2s7YBbhOD6nie0DzrZpJes+b2K1xkpKxTFFcx59QmVPaSA8c7pycsNaFwUK6l" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js" integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c" crossorigin="anonymous"></script>



    <script src = "../../jquery-3.3.1.js">‪

    $(document).ready(function(){
      $('#myTab a').click(function (e) {
        e.preventDefault()
        $(this).tab('show');
      });
       $('#myTab a:last').click(function (e) {
        e.preventDefault()
         $('#myTab a:last').tab('show');
      });
      // $('#myTab a[href="#profile"]').tab('show'); // Select tab by name
      // $('#myTab a:first').tab('show'); // Select first tab
      // $('#myTab a:last').tab('show'); // Select last tab
      // $('#myTab li:eq(2) a').tab('show'); // Select third tab (0-indexed)
    });
    $('#myCarousel').carousel({
    pause: 'none'
  })
  </script>

  <style type="text/css">
  
html,body {
    height:100%;
  width:100%;
  position:relative;
}
#background-carousel{
  position:fixed;
  width:100%;
  height:100%;
  z-index:-1;
}
.carousel,
.carousel-inner {
  width:100%;
  height:100%;
  z-index:0;
  overflow:hidden;
}
.item {
  width:100%;
  height:100%;
  background-position:center center;
  background-size:cover;
  z-index:0;
}
 
#content-wrapper {
  position:absolute;
  z-index:1 !important;
  min-width:100%;
  min-height:100%;
}
.well {
    opacity:0.85
}
  </style>
</head>
<body>
 <!--  <i class="fa fa-camera-retro"></i>
<i class="fas fa-user fa-lg"></i>
  <i class="far fa-user"a></i>
    <div class = "container">
    <i class="fal fa-align-justify"></i>
    <i class="fas fa-address-book"></i>
<div><i class="fas fa-info fa-fw" style="background:MistyRose"></i> Info</div>

<i class="fas fa-camera-retro"></i>
 -->

<div class="container">
  <div id="background-carousel">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="item active" style="background-image: url('‪../../IMG2/Layer-24.png');"></div>
        <div class="item" style="background-image: url('‪../../IMG2/Layer-24.png');"></div>
        <div class="item" style="background-image: url('‪../../IMG2/banner_likatutor.jpg');"></div>  
      </div>
    </div>
</div>
 
 
<div id="content-wrapper">
<!-- PAGE CONTENT -->
    <div class="container">
        <div class="page-header"><h3>Fullscreen Background Carousel</h3></div>
        <div class="well"><p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.<br><a href="http://sevenx.de/demo/bootstrap-carousel/" target="_blank" class="label label-danger">Bootstrap 3 - Carousel Collection</a></p>
        </div><!-- End Well -->
    </div><!-- End Container -->
<!-- PAGE CONTENT -->
</div>
  </div>
  </body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript" src ="‪../../../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>