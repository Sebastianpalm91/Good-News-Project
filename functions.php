<?php

declare(strict_types=1);

   session_start();

   if( isset( $_SESSION['views'] ) ) {
      $_SESSION['views'] ++;
   }else {
      $_SESSION['views'] = 1;
   }
?>
