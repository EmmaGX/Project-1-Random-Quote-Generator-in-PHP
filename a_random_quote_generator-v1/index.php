<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="refresh" content="10" >
    <meta charset="UTF-8">
  <title>Random Quotes</title>
  <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/styles.css">
  <style>/*changes background color on click*/
    body {background-color: <?php
        function randomColor() {
            $rand = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f'];
            $color = '#' . $rand[rand(0, 15)] . $rand[rand(0, 15)] . $rand[rand(0, 15)] . $rand[rand(0, 15)] . $rand[rand(
                      0, 15)] . $rand[rand(0, 15)];
            return $color;
};
    echo randomColor();?>}
  </style>
    <style>/*changes button color on click*/
        #loadQuote {background-color: <?php
        function buttonColor() {
            $rand = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f'];
            $color = '#' . $rand[rand(0, 15)] . $rand[rand(0, 15)] . $rand[rand(0, 15)] . $rand[rand(0, 15)] . $rand[rand(
                      0, 15)] . $rand[rand(0, 15)];
            return $color;
};
    echo buttonColor();?>}
    </style>
</head>
<body>
  <div class="container">
    <div id="quote-box">
      <?php
        include 'inc/functions.php';
        echo printQuote($quotes);
      ?>
    </div>
    <button id="loadQuote" onclick="window.location.reload(true)" >Show another quote</button>
  </div>
</body>
</html>

