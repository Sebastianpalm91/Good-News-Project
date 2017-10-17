<?php
declare(strict_types=1);

require __DIR__.'/data.php';



   session_start();

   if( isset( $_SESSION['views'] ) ) {
      $_SESSION['views'] ++;
   }else {
      $_SESSION['views'] = 1;
   }

   function sortByDate($contents, $contents1) {

     return strtotime($contents['pubdate']) <  strtotime($contents1['pubdate']);
   }
   usort($contents, 'sortByDate')


  //  foreach ($contents as $content) {
  //    echo $content['date'].'<br>';
   //
  //  }


?>
