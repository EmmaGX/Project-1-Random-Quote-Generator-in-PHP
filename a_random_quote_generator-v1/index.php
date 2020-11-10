<!DOCTYPE html>
<html lang="en">
<?php include 'inc/functions.php'; ?>
<head>
    <!-- changes quote every 10 seconds -->
  <meta http-equiv="refresh" content="10" >
  <meta charset="UTF-8">
  <title>Random Quotes</title>
  <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/styles.css">
  <style>/*changes background color on click*/
    body {background-color: <?php echo randomColor(); ?> }
  </style>
    <style>/*changes button color on click*/
        #loadQuote {background-color: <?php echo randomColor();?>}
    </style>
</head>
<body>
  <div class="container">
    <div id="quote-box">
<!--adds quote to the page  -->
      <?php
        echo printQuote($quotes);
      ?>
    </div>
    <button id="loadQuote" onclick="window.location.reload(true)" >Show another quote</button>
  </div>
</body>
</html>

