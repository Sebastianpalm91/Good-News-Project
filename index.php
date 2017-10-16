<?php
require __DIR__.'/data.php';
require __DIR__.'/functions.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="main.css">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous"> -->
  <title>Good-News</title>
</head>
<body>
  <h1>Barney and Sheldon have seen you here: <?php echo $_SESSION['views']; ?> times</h1>
  <img class="header-barney" src="https://media.giphy.com/media/QN6NnhbgfOpoI/giphy.gif">
  <div class="container">

    <?php foreach($contents as $id => $content):?>
      <div class="contain">
        <!-- CHANGE NAME TO H2 TEXT TO P ATHUORE TO SOMETHING ELSE  -->
        <h2 class="name"><?php echo $content['name']; ?></h2>
        <p class="text"><?php echo $content['text']; ?></p>
        <h5 class="authorname"><?php echo $content['authorname']; ?></h5>
        <h6 class="pubdate"><?php echo $content['pubdate']; ?></h6>
        <div class="likes"><?php echo $content['likes']; ?></div>
      </div>
    <?php endforeach; ?>

  </div>
  <img class="header-barney1" src="https://media.giphy.com/media/897vm5ABNbgFW/giphy.gif">
</body>
</html>
