<?php
// HARDCODED THE DIRECTORY FROM WHERE TO GET IT WITH __DIR__
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

    <h1>Barney and Sheldon have seen you here: <?php echo $_SESSION['views']; ?> time(s)</h1>
    <img class="header-barney" src="https://media.giphy.com/media/QN6NnhbgfOpoI/giphy.gif">
    <div class="container">

        <!-- FOREACH LOOP, GETTING DATA FROM DATA.PHP AND LOOPS THE NUMBER OF ARRAYS -->
        <?php foreach($contents as $id => $content):?>
            <!-- CONTAIN WITHING THE LOOP MAKES IT LOOP WITH THE DATA.PHP -->
            <div class="contain">
                <!-- CHANGE NAME TO H2 TEXT TO P ATHUORE TO SOMETHING ELSE  -->
                <h2 class="name"><?php echo $content['name']; ?></h2>
                <p class="text"><?php echo $content['text']; ?></p>
                <h5 class="authorname"><?php echo $content['authorname']['namea']; ?></h5>
                <h6 class="pubdate"><?php echo $content['pubdate'].'<br>'; ?></h6>
                <div class="likes"><?php echo $content['likes']; ?></div>
            </div>
        <?php endforeach; ?>
        <!-- WHAT SHOWS BEFOR CLICK ON BUTTON DECLARED TO AN ID "DEMO" -->
        <p id="demo">What's hidden inside?</p>
        <!-- BUTTON FUNCTION . DECLARED TO REACT ON CLICK TO MYFUNCTION -->
        <button type="button" onclick="myFunction()">Se more of Barney</button>
        <script>
        // CALLING THE FUNCTION AND USING INNEHTML TO REVEAL WHATS INSIDE WHEN TRIGGERED.
        // ADDED A HREF THEN USED AN IMAGE WITH SET WIDTH AND HEIGHT WITHOUT THE <A IT DIDNT WORK.
        function myFunction() {
            document.getElementById("demo").innerHTML = "<a href='#'><img src='https://media.giphy.com/media/3osxYACfOYULLSpNjG/giphy.gif'/></a>" ;
        }
        </script>

    </div>



    <img class="header-barney1" src="https://media.giphy.com/media/897vm5ABNbgFW/giphy.gif">
    <!-- DATE AND YEAR COPYWRIGHT PHP FUNCTION. WITH CONCATINATION, WRITES IF START YEAR IS CUR YEAR WRITE: COPYWRIGHT -->
    <footer class="footer"> &copy; <?php echo $copyYear . (($copyYear != $curYear) ? '-' . $curYear : 'Copyright.');?></footer>
</body>
</html>
