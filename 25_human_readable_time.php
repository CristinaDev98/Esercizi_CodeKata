<!-- CODEWARS N.25  EX:HUMAN READABLE TIME -->

<?php

function human_readable($seconds) {
    if ($seconds < 0 || $seconds > 359999) {
          return "Invalid input";
      }
  
      $hours = floor($seconds / 3600);
      $minutes = floor(($seconds % 3600) / 60);
      $seconds = $seconds % 60;
  
      $human_readable = sprintf("%02d:%02d:%02d", $hours, $minutes, $seconds);
  
      return $human_readable;
  }