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

  
