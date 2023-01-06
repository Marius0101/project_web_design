<?php
$path = $_SERVER['REQUEST_URI'] ?? '/';
echo $path;
echo "<br>";
$position = strpos($path, '?');
if($position == false){
  echo $path;
  
}
echo substr($path, 0, $position);
