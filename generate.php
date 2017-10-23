<?php

  // This file downloads the latest master weather-icons.css file and returns a string you can copy & paste back into the class script.

  $file = file_get_contents("https://raw.githubusercontent.com/Auroras-live/weather-icons/master/css/weather-icons-wind.css");
  $file .= file_get_contents("https://raw.githubusercontent.com/Auroras-live/weather-icons/master/css/weather-icons.css");
  $re = '/\.(.*):before {\n\s+content: \"\\\\(.*)\";/m';
  preg_match_all($re, $file, $matches);

  echo "\$data = array(\n";
  for($i = 0; $i <= count($matches[1]) - 1; $i++) {
    echo "  '" . $matches[1][$i] . "' => '&#x" . $matches[2][$i] . ";'";
    if($i != count($matches[1]) - 1) {
      echo ",\n";
    }
  }

  echo "\n);";

?>
