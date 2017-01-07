<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8 />
<title>Heatwave Web Tool</title>
<meta name='viewport' content='initial-scale=1,maximum-scale=1,user-scalable=no' />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
<script src='https://api.mapbox.com/mapbox.js/v2.4.0/mapbox.js'></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<link href='https://api.mapbox.com/mapbox.js/v2.4.0/mapbox.css' rel='stylesheet' />
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" />
<!--Boostrap v4 alpha-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/css/bootstrap.min.css" integrity="sha384-MIwDKRSSImVFAZCVLtU0LMDdON6KVCrZHyVQQj6e8wIEJkW4tvwqXrbMIya1vriY" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/js/bootstrap.min.js" integrity="sha384-ux8v3A6CPtOTqOzMKiuo3d/DomGaaClxFYdCu2HPMBEkf6x2xiDyJ7gkXU0MWwaD" crossorigin="anonymous"></script>
<!--Font Awesome-->
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>



<script>
var server = "52.40.158.137";
function generateChart(data_array) {
    $('#container').highcharts({
        chart: {
            type: 'spline'
        },
        title: {
            text: 'Heat Waves in 2015'
        },
        subtitle: {
            text: 'Historical lineplot'
        },
        xAxis: {
            type: 'datetime',
            dateTimeLabelFormats: { // don't display the dummy year
                month: '%e. %b',
                year: '%b'
            },
            title: {
                text: 'Date'
            }
        },
        yAxis: {
            title: {
                text: 'Temperature (°F)'
            },
            min: 90,
            max: 120,
            tickInterval: 5
        },
        tooltip: {
            headerFormat: '<b>{series.name}</b><br>',
            pointFormat: '{point.x:%e. %b}: {point.y:.2f} °F'
        },

        plotOptions: {
            spline: {
                marker: {
                    enabled: true
                }
            }
        },


        series: [{
            name: '2015 Heat Days',
            // Define the data points. All series have a dummy year
            // of 1970/71 in order to be compared on the same x axis. Note
            // that in JavaScript, months start at 0 for January, 1 for February etc.
            data: /*[
                [Date.UTC(2014, 6, 21), 95],
                [Date.UTC(2014, 7, 4), 99],
                [Date.UTC(2014,7, 9), 96]

            ]*/
            data_array
        }]
    });
};

function generateChart2(data_array) {
    $('#container2').highcharts({
        chart: {
            type: 'spline'
        },
        title: {
            text: 'Heat Waves in 2014'
        },
        subtitle: {
            text: 'Historical lineplot'
        },
        xAxis: {
            type: 'datetime',
            dateTimeLabelFormats: { // don't display the dummy year
                month: '%e. %b',
                year: '%b'
            },
            title: {
                text: 'Date'
            }
        },
        yAxis: {
            title: {
                text: 'Temperature (°F)'
            },
            min: 90,
            max: 120,
            tickInterval: 5
        },
        tooltip: {
            headerFormat: '<b>{series.name}</b><br>',
            pointFormat: '{point.x:%e. %b}: {point.y:.2f} °F'
        },

        plotOptions: {
            spline: {
                marker: {
                    enabled: true
                }
            }
        },


        series: [{
            name: '2014 Heat Days',
            // Define the data points. All series have a dummy year
            // of 1970/71 in order to be compared on the same x axis. Note
            // that in JavaScript, months start at 0 for January, 1 for February etc.
            data: /*[
                [Date.UTC(2014, 6, 21), 95],
                [Date.UTC(2014, 7, 4), 99],
                [Date.UTC(2014,7, 9), 96]

            ]*/
            data_array
        }]
    });
};


function generateChart3(data_array) {
    $('#container3').highcharts({
        chart: {
            type: 'spline'
        },
        title: {
            text: 'Heat Waves in 2013'
        },
        subtitle: {
            text: 'Historical lineplot'
        },
        xAxis: {
            type: 'datetime',
            dateTimeLabelFormats: { // don't display the dummy year
                month: '%e. %b',
                year: '%b'
            },
            title: {
                text: 'Date'
            }
        },
        yAxis: {
            title: {
                text: 'Temperature (°F)'
            },
            min: 90,
            max: 120,
            tickInterval: 5
        },
        tooltip: {
            headerFormat: '<b>{series.name}</b><br>',
            pointFormat: '{point.x:%e. %b}: {point.y:.2f} °F'
        },

        plotOptions: {
            spline: {
                marker: {
                    enabled: true
                }
            }
        },


        series: [{
            name: '2013 Heat Days',
            // Define the data points. All series have a dummy year
            // of 1970/71 in order to be compared on the same x axis. Note
            // that in JavaScript, months start at 0 for January, 1 for February etc.
            data: /*[
                [Date.UTC(2014, 6, 21), 95],
                [Date.UTC(2014, 7, 4), 99],
                [Date.UTC(2014,7, 9), 96]

            ]*/
            data_array
        }]
    });
};

$( function() {
    $( "#accordion" ).accordion();
  } );
  $(document).ready(function() {
    //document.getElementById("example").innerHTML = "example";
  });

 </script>

</head>
<body>

<div id='map'>

<div id="show-button" style="z-index: 999999; display: none; position: fixed; left: 10px; width: 100px;">
  <a href="#" class="btn btn-dark" role="button">
      <i class="fa fa-angle-right" aria-hidden="true"></i>
  </a>
</div>

<div id="left-panel" style="z-index: 99999; position: absolute; width: 400px; height: 100vh; background-color: rgba(0, 0, 0, 0.7);">

  <div style="z-index: 999999; position: relative; left: 10px; width: 100px;">
    <a id="hide-button" href="#" class="btn btn-dark" role="button">
        <i class="fa fa-angle-left" aria-hidden="true"></i>
    </a>

    <div id="by_county_content" style="display: none; margin-top: 75px;" class="content">
      <br>
        <div class="ui-widget">
        <input type="text" id="county_input" name="county" placeholder="Search County">
        <button id="search_county_button" class="btn btn-primary" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
        </div>
    </div>
  </div>

  <div style="z-index: 9999; position: relative; left: 10px; top: 140px">
    <div id="by_date_content" class="content">
      Choose Tmax Threshold <i id="info_threshold" class="fa fa-info-circle" aria-hidden="true"></i>
      <form>
        <input type="radio" id="option95" name="options" value="95" checked> 95 °F<br>
        <input type="radio" id="option100" name="options" value="100"> 100 °F<br>
        <input type="radio" id="option105" name="options" value="105"> 105 °F<br>
        <input type="radio" id="option110" name="options" value="110"> 110 °F <br>
        <input type="radio" id="choose" name="options" value="">Choose Threshold: <input style="width: 50px;" type="text" id="choose_text" name="choose_text" /> °F
      </form>

      <!--input type="checkbox" name="county_checkbox" value="county_checkbox" style="display: none;"> County Labels<br-->

      <div style="z-index: 9999; position: relative; left: 5px; top: 20px;">
        Date
        <br>
        <input type="text" id="datepicker">
        <button id="decrement" class="btn btn-primary" type="submit"><i class="fa fa-arrow-left" aria-hidden="true"></i></button><button id="increment" class="btn btn-primary" type="submit"><i class="fa fa-arrow-right" aria-hidden="true"></i></button>
      </div>


    </div>
  </div>
</div>

<div id="outer" style="display: none; z-index: 999999; position: absolute; width: 400px; top: 120px; right: 10px;" class="content">
  <h3 id="county_title">Title</h3>
  <div style="display: none;">
  <input type="radio" name="meta" id="95_meta" value="95" checked> 95 °F<br>
  <input type="radio" name="meta" id="100_meta" value="100"> 100 °F<br>
  <input type="radio" name="meta" id="105_meta" value="105"> 105 °F<br>
  <input type="radio" name="meta" id="110_meta" value="110"> 110 °F<br>
</div>
  <div id="accordion">
    <h3 class="year_title">Section 1</h3>
    <div id="table2015">
      <p id="heatwaves2015">
      </p>
      <div id="container" style="width: 300px; height: 300px;"></div>
    </div>
    <h3 class="year_title">Section 2</h3>
    <div>
      <p id="heatwaves2014">
      </p>
      <div id="container2" style="width: 300px; height: 300px;"></div>
    </div>
    <h3 class="year_title">Section 3</h3>
    <div>
      <p id="heatwaves2013">
      </p>
      <div id="container3" style="width: 300px; height: 300px;"></div>
    </div>

  </div>
</div>


  <div id="load" style="z-index: 9999; position: fixed; left: 50%; top: 40%">
    <div style="text-align: center; height: 200px; width: 200px; margin: 0 auto;">
      <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>
      <br>
      <span style="font-size: 20px;">Map is Loading</span>
    </div>
  </div>

  <div id="county_label" style="display: none; z-index: 9999; position: absolute; top: 10px; right: 10px; width: 200px; height: 100px;" class="content">
  </div>



</div>



<div style="display: none;" title="Choose Tmax Threshold" id="dialog_threshold">
  <p><b>Step 1</b>
    <br>
    Select the daily maximum temperature threshold in degrees Fahrenheit
    <br>
    <b> Step 2:</b>
    <br>
    Select a date to see all heatwaves for that date depending on your threshold selection
    <br>
    <b>Ex:</b>
    <br>
    Selecting 95  °F on 06/28/2015 highlights all the areas 95 °F and up on 06/28/2015</p>
</div>


</div>
<script>

function dateFromDay(year, day){
  var date = new Date(year, 0); // initialize a date in `year-01-01`
  return new Date(date.setDate(day)).toDateString(); // add the number of days
}

$("#info_threshold").click(function() {
  $('#dialog_threshold').dialog();
});

var searched;
$("#search_county_button").click(function() {
  searchCounty();
});

$("#hide-button").click(function() {
  $("#left-panel").hide();
  $("#show-button").show();
});

$("#show-button").click(function() {
  $("#left-panel").show();
  $("#show-button").hide();
});




var searched_county;
function searchCounty() {
  if (searched != null) {
    map.removeLayer(searched);
  }
  var county_input = $('#county_input').val();
  // Search by typing county option
  var search_county_url = "search_county.php?county_input=" + county_input;
    $.ajax({
        'async': true,
        'global': false,
        'url': search_county_url,
        'dataType': "json",
        'success': function (data) {
            searched_county = data;
            console.log(searched_county);
            var test1 = searched_county.year2015;
            console.log("test1");
            console.log(test1);
            searched = L.geoJson(test1);
            searched.addTo(map);
            heatwaveList(searched_county);
            map.fitBounds(searched.getBounds(), {padding: [350, 350]});
        }
    });


}



$("#by_county_button").click(function() {
});

var countiesData;

function retrieveCounties() {
    var json_url = "all_counties.php";

    //var json_url = "http://" + server + ":8080/geoserver/final_data/ows?service=WFS&version=1.0.0&request=GetFeature&typeName=final_data:counties2015&outputFormat=application%2Fjson";

	$.ajax({
          'async': true,
          'global': false,
          'url': json_url,
          'dataType': "json",
          'success': function (data) {

		countiesData = data;
		countyOverlay();
    $('#load').hide();
 		$('#county_label').show();
    $('#by_county_content').show();

		var counties_list = [];

		for (x in countiesData.features) {
			counties_list.push(countiesData.features[x].properties.county_state);
		}
		$('#county_input').autocomplete({
        		source: counties_list
      		});

		}
	});

}

// Zoom to Feature
var click_lat;
var click_long;
var click_year;
var clicked_county;

var clicked_style;

function zoomToFeature(e) {
  click_lat = e.latlng.lat;
  click_long = e.latlng.lng;
  click_year = 2015;

  var click_county_url = "click_county.php?click_lat=" + click_lat + "&click_long=" + click_long + "&year=" + click_year;

  //countyRequestURL = "http://" + server + ":8080/geoserver/final_data/ows?service=WFS&version=1.0.0&request=GetFeature&typeName=final_data:counties2015&PROPERTY_NAME=geom&CQL_FILTER=CONTAINS(geom, Point(" + click_long + ' ' + click_lat + "))&outputFormat=application%2Fjson";
  var style_county_search = {"color": "#0000ff", "fillColor": "#ffffff", "fillOpacity": 0.0};
    $.ajax({
        'async': true,
        'global': false,
        'url': click_county_url,
        'dataType': "json",
        'success': function (data) {
            clicked_county = data;
            if (clicked_style != null) {
              map.removeLayer(clicked_style);
            }
            clicked_style = L.geoJson(clicked_county.year2015, {style: style_county_search});
            clicked_style.addTo(map);
            heatwaveList(clicked_county);
        }
    });

    map.fitBounds(e.target.getBounds(), {padding: [350, 350]});


}



// Creates the black description text box with passed in json object for a particular county
var county_name;
function heatwaveList(json_object) {
  $('#heatwaves2015').empty();
  $('#heatwaves2014').empty();
  $('#heatwaves2013').empty();

  // Gathering temps and days for 2015
  county_name = json_object.year2015.features[0].properties.name;
  var properties2015 = json_object.year2015.features[0].properties;
  var properties2014 = json_object.year2014.features[0].properties;
  var properties2013 = json_object.year2013.features[0].properties;
  var temps2015 = [];
  var temps2014 = [];
  var temps2013 = [];
  var days2015 = [];
  var days2014 = [];
  var days2013 = [];
  var dayFromD;
  var temp_f;
  var stationData2015 = true;
  var stationData2014 = true;
  var stationData2013 = true;
  for (i = 1; i < 366; i++) {

    if(document.getElementById('95_meta').checked) {
      if (properties2015['tmax_day_' + i] > 35) {
        dayFromD = dateFromDay(2015, i);
        days2015.push(dayFromD);
        temp_f = (properties2015['tmax_day_' + i] * (9/5)) + 32;
        //temp_f = temp_f.toFixed(2);
        temp_f = Math.round(temp_f);
        temps2015.push(temp_f);
      }
      if (properties2014['tmax_day_' + i] > 35) {
        dayFromD = dateFromDay(2014, i);
        days2014.push(dayFromD);
        temp_f = (properties2014['tmax_day_' + i] * (9/5)) + 32;
        //temp_f = temp_f.toFixed(2);
        temp_f = Math.round(temp_f);
        temps2014.push(temp_f);
      }

      if (properties2013['tmax_day_' + i] > 35) {
        dayFromD = dateFromDay(2013, i);
        days2013.push(dayFromD);
        temp_f = (properties2013['tmax_day_' + i] * (9/5)) + 32;
        //temp_f = temp_f.toFixed(2);
        temp_f = Math.round(temp_f);
        temps2013.push(temp_f);
      }
    }else if(document.getElementById('100_meta').checked) {

    }
    else if(document.getElementById('105_meta').checked) {

    }
    else if(document.getElementById('110_meta').checked) {

    }


  }
  var day_temp2015 = [];
  var day_temp2014 = [];
  var day_temp2013 = [];
  for (i = 0; i < days2015.length - 1; i++) {
    day_temp2015.push(days2015[i]);
    day_temp2015.push(temps2015[i]);
  }
  for (i = 0; i < days2014.length - 1; i++) {
    day_temp2014.push(days2014[i]);
    day_temp2014.push(temps2014[i]);
  }

  for (i = 0; i < days2013.length - 1; i++) {
    day_temp2013.push(days2013[i]);
    day_temp2013.push(temps2013[i]);
  }

  if (properties2015['station_data'] == 'no') {
    stationData2015 = false;
  }
  if (properties2014['station_data'] == 'no') {
    stationData2014 = false;
  }
  if (properties2013['station_data'] == 'no') {
    stationData2013 = false;
  }

  yearList = ['2015', '2014', '2013', '2012'];
  document.getElementById('county_title').innerHTML = county_name;
  $('.year_title').each(function(i, obj) {
    obj.innerHTML = yearList[i];
  });


  var text = "<table><tr><th class='date'>Date</th><th class='temp'>Temperature (F)</th></tr>"
  // 2015 text
  for (i = 0; i < days2015.length-1; i++) {
    text += "<tr><td class='date'>" + days2015[i] + "</td><td class='temp'>" + temps2015[i] + "</td></tr>"
  }
  var num_days = days2015.length - 1;
  if (num_days == -1) {
    num_days = 0;
  }
    text += "<tr><td class='date'><b>Days above 95: </b></td><td class='temp'><b>" + num_days + "</b></td></tr></table>";
  if (stationData2015 == false) {
    $('#heatwaves2015').append("There is no weather station data within " + county_name + "'s  boundaries for 2015. Try picking a nearby county instead.");
  }
  else if (temps2015 == '' && stationData2015 == true) {
    $('#heatwaves2015').append("There are no heatwave days in "+ county_name + " for 2015");
  }
  else {
    $("#heatwaves2015").html(text);
  }

  // create array of points for 2015 data

  var mySeries = [];
    for (var i = 0; i < day_temp2015.length - 1; i++) {
        var d = new Date(day_temp2015[i]);
        var getYear = d.getFullYear();
        var getMonth = d.getMonth();
        var getDate = d.getDate();
        mySeries.push([Date.UTC(getYear, getMonth, getDate), parseInt(day_temp2015[i + 1])]);
        i++;
    }
  generateChart(mySeries);
  var low2015= Math.min(temps2015);
  var high2015 = Math.max(temps2015);
  //chart.yAxis[0].setExtremes(low2015, high2015);

  // 2014 text
  text = "<table><tr><th class='date'>Date</th><th class='temp'>Temperature (F)</th></tr>"
  for (i = 0; i < days2014.length-1; i++) {
    text += "<tr><td class='date'>" + days2014[i] + "</td><td class='temp'>" + temps2014[i] + "</td></tr>"
  }
  num_days = days2014.length - 1;
  if (num_days == -1) {
    num_days = 0;
  }
  text += "<tr><th class='date'>Days above 95: </th><th class='temp'>" + num_days + "</th></tr>";
  if (stationData2014 == false) {
    $('#heatwaves2014').append("There is no weather station data within " + county_name + "'s  boundaries for 2014. Try picking a nearby county instead.");
  }
  else if (temps2015 == '' && stationData2014 == true) {
    $('#heatwaves2014').append("There are no heatwave days in "+ county_name + " for 2014");
  }
  else {
    $("#heatwaves2014").html(text);
  }

  // create array of points for 2014 data
  var mySeries2 = [];
    for (var i = 0; i < day_temp2014.length - 1; i++) {
        var d = new Date(day_temp2014[i]);
        var getYear = d.getFullYear();
        var getMonth = d.getMonth();
        var getDate = d.getDate();
        mySeries2.push([Date.UTC(getYear, getMonth, getDate), parseInt(day_temp2014[i + 1])]);
        i++;
    }
  generateChart2(mySeries2);

  // 2013 text
  text = "<table><tr><th class='date'>Date</th><th class='temp'>Temperature (F)</th></tr>"
  for (i = 0; i < days2013.length-1; i++) {
    text += "<tr><td class='date'>" + days2013[i] + "</td><td class='temp'>" + temps2013[i] + "</td></tr>"
  }
  num_days = days2013.length-1;
  if (num_days == -1) {
    num_days = 0;
  }
  text += "<tr><th class='date'>Days above 95: </th><th class='temp'>" + num_days + "</th></tr>";
  if (stationData2013 == false) {
    $('#heatwaves2013').append("There is no weather station data within " + county_name + "'s  boundaries for 2013. Try picking a nearby county instead.");
  }
  else if (temps2013 == '' && stationData2013 == true) {
    $('#heatwaves2013').append("There are no heatwave days in "+ county_name + " for 2013");
  }
  else {
    $("#heatwaves2013").html(text);
  }
  // create array of points for 2013 data
  var mySeries3 = [];
    for (var i = 0; i < day_temp2013.length - 1; i++) {
        var d = new Date(day_temp2015[i]);
        var getYear = d.getFullYear();
        var getMonth = d.getMonth();
        var getDate = d.getDate();
        mySeries3.push([Date.UTC(getYear, getMonth, getDate), parseInt(day_temp2013[i + 1])]);
        i++;
    }
  generateChart3(mySeries3);


  $('#outer').show();

}

var counties;
var style_county = {"color": "#999999", "fillColor": "#ffffff", "fillOpacity": 0.0};

function countyOverlay() {
  counties = L.geoJson(countiesData, {style: style_county});
  counties.addTo(map);
  // control that shows state info on hover
  var info = L.control();

  info.onAdd = function (map) {
    this._div = L.DomUtil.create('div', 'info');
    this.update();
    return this._div;
  };

  info.update = function (props) {
    //this._div.innerHTML
    document.getElementById('county_label').innerHTML = '<br><h3>County Name:</h3> ' +  (props ?
      '<b>' + props.name
      : 'Hover over a county');
  };

  info.addTo(map);

  function style(feature) {
    return {
      weight: 0.5,
      opacity: 1,
      color: 'black',
      fillOpacity: 0.3,
      fillColor: '#F1DAE6'
    };
  }

  function highlightFeature(e) {
    var layer = e.target;

    layer.setStyle({
      weight: 5,
      color: '#FFFF00',
      dashArray: '',
      fillOpacity: 0.7
    });

    if (!L.Browser.ie && !L.Browser.opera) {
      layer.bringToFront();
    }

    info.update(layer.feature.properties);
  }

  var geojson;

  function resetHighlight(e) {
    geojson.resetStyle(e.target);
    info.update();
  }

  var countyRequestURL;






  function onEachFeature(feature, layer) {
    layer.on({
      mouseover: highlightFeature,
      mouseout: resetHighlight,
      click: zoomToFeature
    });
  }

  geojson = L.geoJson(countiesData, {
    style: style,
    onEachFeature: onEachFeature
  }).addTo(map);
}


$(function() {
    $( "#datepicker" ).datepicker({
      //minDate: new Date(2013, 0, 1),
      //maxDate: new Date(2015, 11, 31),
      onSelect: function(date) {
        drawWMS(date);
      }
    });

    var setDate = new Date(2015, 5, 1)
    $('#datepicker').datepicker('setDate', setDate);
    var startDate = new Date(2013, 1, 1)
  });

function isLeapYear(year) {
  if (year % 4 != 0) {
    return false;
  }
  else if (year % 400 == 0) {
    return true;
  }
  else if (year % 100 == 0) {
    return false;
  }
  else {
    return true;
  }
}
var doy;
var counties95;
var counties100;
var counties105;
var counties110;
function getDOY(date) {
  var month = parseInt($('#datepicker').val().substring(0, 2));
  var day = parseInt($('#datepicker').val().substring(3, 5));
  var year = parseInt($('#datepicker').val().substring(6, 11));
  if (isLeapYear(year)) {
    feb = 29;
  }
  else {
    feb = 28;
  }
  var feb;
  var tot;
  if (month == 1) {
    doy = day;
  }
  else if (month == 2) {
    doy = day + 31;
  }
  else if (month == 3) {

    doy = day + 31 + feb;
  }
  else if (month == 4) {
    doy = day + 31 + feb + 31;
  }
  else if (month == 5) {
    doy = day + 31+feb+31+30;
  }
  else if (month == 6) {
    doy = day + 31+feb+31+30+31;
  }
  else if (month == 7) {
    doy = day + 31+feb+31+30+31+30;
  }
  else if (month == 8) {
    doy = day + 31+feb+31+30+31+30+31;
  }
  else if (month == 9) {
    doy = day + 31+feb+31+30+31+30+31+31;
  }
  else if (month == 10) {
    doy = day + 31+feb+31+30+31+30+31+31+30;
  }
  else if (month == 11) {
    doy = day + 31+feb+31+30+31+30+31+31+30+31;
  }
  else if (month == 12) {
    doy = day + 31+feb+31+30+31+30+31+31+30+31+30;
  }

  var chosen_threshold = $('#choose_text').val();
  var chosen_threshold_c = (parseInt(chosen_threshold) - (32)) * (5/9);

  var filter95 = 'tmax_day_'.concat(parseInt(doy)).concat(' > 35');
  var filter100 = 'tmax_day_'.concat(parseInt(doy)).concat(' > 37.7');
  var filter105 = 'tmax_day_'.concat(parseInt(doy)).concat(' > 40.5');
  var filter110 = 'tmax_day_'.concat(parseInt(doy)).concat(' > 43.3');
  var filter_choose = 'tmax_day_'.concat(parseInt(doy)).concat(' > ' + chosen_threshold_c);

if (year == 2015) {
  counties95 = L.tileLayer.wms("http://" + server + ":8080/geoserver/final_data/wms?service=WMS&version=1.1.0&request=GetMap&layers=final_data:counties2015", {
      layers: 'final_data.counties2015',
      format: 'image/png',
      transparent: true,
      CQL_FILTER: filter95
  });

  counties100 = L.tileLayer.wms("http://" + server + ":8080/geoserver/final_data/wms?service=WMS&version=1.1.0&request=GetMap&layers=final_data:counties2015", {
      layers: 'final_data.counties2015',
      format: 'image/png',
      transparent: true,
      CQL_FILTER: filter100
  });

  counties105 = L.tileLayer.wms("http://" + server + ":8080/geoserver/final_data/wms?service=WMS&version=1.1.0&request=GetMap&layers=final_data:counties2015", {
      layers: 'final_data.counties2015',
      format: 'image/png',
      transparent: true,
      CQL_FILTER: filter105
  });

  counties110 = L.tileLayer.wms("http://" + server + ":8080/geoserver/final_data/wms?service=WMS&version=1.1.0&request=GetMap&layers=final_data:counties2015", {
      layers: 'final_data.counties2015',
      format: 'image/png',
      transparent: true,
      CQL_FILTER: filter110
  });

  choose = L.tileLayer.wms("http://" + server + ":8080/geoserver/final_data/wms?service=WMS&version=1.1.0&request=GetMap&layers=final_data:counties2015", {
      layers: 'final_data.counties2015',
      format: 'image/png',
      transparent: true,
      CQL_FILTER: filter_choose
  });
}

if (year == 2014) {
  counties95 = L.tileLayer.wms("http://" + server + ":8080/geoserver/final_data/wms?service=WMS&version=1.1.0&request=GetMap&layers=final_data:counties2014", {
      layers: 'final_data.counties2014',
      format: 'image/png',
      transparent: true,
      CQL_FILTER: filter95
  });

  counties100 = L.tileLayer.wms("http://" + server + ":8080/geoserver/final_data/wms?service=WMS&version=1.1.0&request=GetMap&layers=final_data:counties2014", {
      layers: 'final_data.counties2014',
      format: 'image/png',
      transparent: true,
      CQL_FILTER: filter100
  });

  counties105 = L.tileLayer.wms("http://" + server + ":8080/geoserver/final_data/wms?service=WMS&version=1.1.0&request=GetMap&layers=final_data:counties2014", {
      layers: 'final_data.counties2014',
      format: 'image/png',
      transparent: true,
      CQL_FILTER: filter105
  });

  counties110 = L.tileLayer.wms("http://" + server + ":8080/geoserver/final_data/wms?service=WMS&version=1.1.0&request=GetMap&layers=final_data:counties2014", {
      layers: 'final_data.counties2014',
      format: 'image/png',
      transparent: true,
      CQL_FILTER: filter110
  });

  choose = L.tileLayer.wms("http://" + server + ":8080/geoserver/final_data/wms?service=WMS&version=1.1.0&request=GetMap&layers=final_data:counties2014", {
      layers: 'final_data.counties2014',
      format: 'image/png',
      transparent: true,
      CQL_FILTER: filter_choose
  });
}

if (year == 2013) {
  counties95 = L.tileLayer.wms("http://" + server + ":8080/geoserver/final_data/wms?service=WMS&version=1.1.0&request=GetMap&layers=final_data:counties2013", {
      layers: 'final_data.counties2013',
      format: 'image/png',
      transparent: true,
      CQL_FILTER: filter95
  });

  counties100 = L.tileLayer.wms("http://" + server + ":8080/geoserver/final_data/wms?service=WMS&version=1.1.0&request=GetMap&layers=final_data:counties2013", {
      layers: 'final_data.counties2013',
      format: 'image/png',
      transparent: true,
      CQL_FILTER: filter100
  });

  counties105 = L.tileLayer.wms("http://" + server + ":8080/geoserver/final_data/wms?service=WMS&version=1.1.0&request=GetMap&layers=final_data:counties2013", {
      layers: 'final_data.counties2013',
      format: 'image/png',
      transparent: true,
      CQL_FILTER: filter105
  });

  counties110 = L.tileLayer.wms("http://" + server + ":8080/geoserver/final_data/wms?service=WMS&version=1.1.0&request=GetMap&layers=final_data:counties2013", {
      layers: 'final_data.counties2013',
      format: 'image/png',
      transparent: true,
      CQL_FILTER: filter110
  });

  choose = L.tileLayer.wms("http://" + server + ":8080/geoserver/final_data/wms?service=WMS&version=1.1.0&request=GetMap&layers=final_data:counties2013", {
      layers: 'final_data.counties2013',
      format: 'image/png',
      transparent: true,
      CQL_FILTER: filter_choose
  });
}

if (year == 1995) {
  counties95 = L.tileLayer.wms("http://" + server + ":8080/geoserver/final_data/wms?service=WMS&version=1.1.0&request=GetMap&layers=final_data:counties1995", {
      layers: 'final_data.counties1995',
      format: 'image/png',
      transparent: true,
      CQL_FILTER: filter95
  });

  counties100 = L.tileLayer.wms("http://" + server + ":8080/geoserver/final_data/wms?service=WMS&version=1.1.0&request=GetMap&layers=final_data:counties1995", {
      layers: 'final_data.counties1995',
      format: 'image/png',
      transparent: true,
      CQL_FILTER: filter100
  });

  counties105 = L.tileLayer.wms("http://" + server + ":8080/geoserver/final_data/wms?service=WMS&version=1.1.0&request=GetMap&layers=final_data:counties1995", {
      layers: 'final_data.counties1995',
      format: 'image/png',
      transparent: true,
      CQL_FILTER: filter105
  });

  counties110 = L.tileLayer.wms("http://" + server + ":8080/geoserver/final_data/wms?service=WMS&version=1.1.0&request=GetMap&layers=final_data:counties1995", {
      layers: 'final_data.counties1995',
      format: 'image/png',
      transparent: true,
      CQL_FILTER: filter110
  });

  choose = L.tileLayer.wms("http://" + server + ":8080/geoserver/final_data/wms?service=WMS&version=1.1.0&request=GetMap&layers=final_data:counties1995", {
      layers: 'final_data.counties1995',
      format: 'image/png',
      transparent: true,
      CQL_FILTER: filter_choose
  });
}


return doy;
}


var map;
function createMap() {

	L.mapbox.accessToken = 'pk.eyJ1IjoiZ2luYWxpIiwiYSI6IklzeVlHUDgifQ.2jXdyrCI3HvTUGC2EIM8Qg';
	map = L.mapbox.map('map', 'mapbox.streets')
    .setView([40, -100], 5);

}


var date = $('#datepicker').val();
var month;
if (date != '') {
  month = date.substring(0, 2);
}

$("#decrement").click(function() {
  var newDate = $("#datepicker").val();
  var newDate2 = new Date(newDate);
  newDate2.setDate(newDate2.getDate() - 1);
  $('#datepicker').datepicker('setDate', new Date(newDate2.getFullYear(), newDate2.getMonth(), newDate2.getDate()));
  drawWMS();
});

$("#increment").click(function() {
  var newDate = $("#datepicker").val();
  var newDate2 = new Date(newDate);
  newDate2.setDate(newDate2.getDate() + 1);
  $('#datepicker').datepicker('setDate', new Date(newDate2.getFullYear(), newDate2.getMonth(), newDate2.getDate()));
  drawWMS();
});


$("input[name=options]:radio").change(function() {
  drawWMS();
});

$("input[name=meta]:radio").change(function() {
  searchCounty();
});



function drawWMS() {

  if (counties95 != null) {
    map.removeLayer(counties95);
  }
  if (counties100 != null) {
    map.removeLayer(counties100);
  }
  if (counties105 != null) {
    map.removeLayer(counties105);
  }
  if (counties110 != null) {
    map.removeLayer(counties110);
  }
  if (choose != null) {
    map.removeLayer(choose);
  }
  getDOY($('#datepicker').val());

  if($('#option95').is(':checked')) {
    counties95.addTo(map);
  }
  else if ($('#option100').is(':checked')) {
    counties100.addTo(map);
  }
  else if ($('#option105').is(':checked')) {
    counties105.addTo(map);
  }
  else if ($('#option110').is(':checked')) {
    counties105.addTo(map);
  }
  else if ($('#choose').is(':checked')) {
    choose.addTo(map);
  }
}

$('#choose_text').focus(function() {
  document.getElementById("choose").checked = true;
});


var timer = null;
$('#choose_text').keydown(function(){
       clearTimeout(timer);
       timer = setTimeout(drawWMS, 1000)
});


$(document).ready(function() {
	createMap();
	retrieveCounties();



});






</script>


</body>
</html>
