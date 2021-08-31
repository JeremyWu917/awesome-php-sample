<?php
  $favsport="basketball";

  switch ($favsport) {
    case "basketball":
      echo "Your favorite sport is basketball";
      break;
    case "football":
      echo "Your favorite sport is football";
      break;
    case "baseball":
      echo "Your favorite sport is baseball";
      break;
    case "volleyball":
      echo "Your favorite sport is volleyball";
      break;
    default:
      echo "Your favorite sports is neither basketball, football, baseball, or volleyball";
  }
?>