<?php
  header('Content-Type: application/json');
  $server = '52.40.158.137';
  $county_input = $_REQUEST['county_input'];
  $county_input = preg_replace('/\s+/', '%20', $county_input);

  $url2015 = "http://" . $server . ":8080/geoserver/final_data/ows?service=WFS&version=1.0.0&request=GetFeature&typeName=final_data:counties2015&PROPERTY_NAME=county_state&CQL_FILTER=county_state=%27" . $county_input . "%27&outputFormat=application%2Fjson";
  $url2014 = "http://" . $server . ":8080/geoserver/final_data/ows?service=WFS&version=1.0.0&request=GetFeature&typeName=final_data:counties2014&PROPERTY_NAME=county_state&CQL_FILTER=county_state=%27" . $county_input . "%27&outputFormat=application%2Fjson";
  $url2013 = "http://" . $server . ":8080/geoserver/final_data/ows?service=WFS&version=1.0.0&request=GetFeature&typeName=final_data:counties2013&PROPERTY_NAME=county_state&CQL_FILTER=county_state=%27" . $county_input . "%27&outputFormat=application%2Fjson";

  $content2015 = file_get_contents($url2015);
  $content2014 = file_get_contents($url2014);
  $content2013 = file_get_contents($url2013);

  $data = array(
    'year2015' => json_decode($content2015),
    'year2014' => json_decode($content2014),
    'year2013' => json_decode($content2013),
  );

  echo json_encode($data);
  //echo($url2015);

?>
