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
  <img class="header-barney" src="https://media.giphy.com/media/QN6NnhbgfOpoI/giphy.gif"</a>
  <div class="container">

    <?php foreach($contents as $id => $content):?>
      <div class="contain">
        <div class="name"><?php echo $content['name']; ?></div>
        <div class="text"><?php echo $content['text']; ?></div>
        <div class="authorname"><?php echo $content['authorname']; ?></div>
        <div class="pubdate"><?php echo $content['pubdate']; ?></div>
        <div class="likes"><?php echo $content['likes']; ?></div>
      </div>
    <?php endforeach; ?>

  </div>
  <img class="header-barney1" src="https://media.giphy.com/media/897vm5ABNbgFW/giphy.gif"</a>
</body>
</html>
