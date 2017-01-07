<?php
  header('Content-Type: application/json');
  $server = '52.40.158.137';
  $url = 'http://' . $server . ':8080/geoserver/final_data/ows?service=WFS&version=1.0.0&request=GetFeature&typeName=final_data:county_geom&outputFormat=application%2Fjson';
  $content = file_get_contents($url);
  $type = getType($content);
  //echo($type);
  echo (file_get_contents($url));

?>
