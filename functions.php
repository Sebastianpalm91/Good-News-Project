<?php

declare(strict_types=1);

   session_start();

   if( isset( $_SESSION['views'] ) ) {
      $_SESSION['views'] + 1;
   }else {
      $_SESSION['views'] = 1;
   }


//
// function get_time_string(array $seconds)
// {
// $seconds = [];
//
// foreach ($seconds as $second) {
//   array_push($seconds);
// }
//
//   die var_dump (return date('H:i:s', strtotime("2000-01-01 + $seconds SECONDS")));
// }
