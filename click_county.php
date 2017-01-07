<?php
  header('Content-Type: application/json');
  $server = '52.40.158.137';
  $click_lat = $_REQUEST['click_lat'];
  $click_long = $_REQUEST['click_long'];
  $year = $_REQUEST['year'];
  $url2015 = "http://" . $server . ":8080/geoserver/final_data/ows?service=WFS&version=1.0.0&request=GetFeature&typeName=final_data:counties2015&PROPERTY_NAME=geom&CQL_FILTER=CONTAINS(geom,Point(" . $click_long . "%20" . $click_lat . '))&outputFormat=application%2Fjson';
  $url2014 = "http://" . $server . ":8080/geoserver/final_data/ows?service=WFS&version=1.0.0&request=GetFeature&typeName=final_data:counties2014&PROPERTY_NAME=geom&CQL_FILTER=CONTAINS(geom,Point(" . $click_long . "%20" . $click_lat . '))&outputFormat=application%2Fjson';
  $url2013 =  "http://" . $server . ":8080/geoserver/final_data/ows?service=WFS&version=1.0.0&request=GetFeature&typeName=final_data:counties2013&PROPERTY_NAME=geom&CQL_FILTER=CONTAINS(geom,Point(" . $click_long . "%20" . $click_lat . '))&outputFormat=application%2Fjson';

  $content2015 = file_get_contents($url2015);
  $content2014 = file_get_contents($url2014);
  $content2013 = file_get_contents($url2013);

  //$type = getType($content);
  //echo($type);
  $data = array(
    'year2015' => json_decode($content2015),
    'year2014' => json_decode($content2014),
    'year2013' => json_decode($content2013),
  );

  echo json_encode($data);

?>
