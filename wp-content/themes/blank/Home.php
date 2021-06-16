<?php
/* Template Name: HOME */
 get_header();
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2 style="color: yellow; text-align: center; 
  font-family: Blackadder ITC; 
  ">Desserts are the fairytales in the kitchen</h2>  
  <div id="myCarousel" class="carousel slide" data-ride="carousel" style="width: 60%; margin-left: 200px">
    <!-- Indicators -->
    <ol class="carousel-indicators">
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="http://localhost/wordpress/wp-content/uploads/2021/06/CHOCOLATES.jpg" style = "width: 100%; height: 700px;">
      </div>

      <div class="item">
        <img src="http://localhost/wordpress/wp-content/uploads/2021/06/DONUTS.jpg" style = "width: 100%; height: 700px;">
      </div>
    
      <div class="item">
        <img src="http://localhost/wordpress/wp-content/uploads/2021/06/pastry-background.jpg" style = "width: 100%; height: 700px;">
      </div>

      <div class="item">
        <img src="http://localhost/wordpress/wp-content/uploads/2021/06/CAKE.jpg" style = "width: 100%; height: 700px;">
      </div>

      <div class="item">
        <img src="http://localhost/wordpress/wp-content/uploads/2021/06/brasodemercedes1.jpg" style = "width: 100%; height: 700px;">
      </div>

      <div class="item">
        <img src="http://localhost/wordpress/wp-content/uploads/2021/06/lotsweetsss.jpg" style = "width: 100%; height: 700px;">
      </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

</body>
</html>


<?php get_footer();?>