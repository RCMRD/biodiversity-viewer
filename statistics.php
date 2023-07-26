<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <link rel="stylesheet" href="css/links.css" type="text/css">
<link href="css/main.css" rel="stylesheet" type="text/css" />
 <link rel="stylesheet" href="css/style.css" type="text/css">

  <script src="js/amcharts.js" type="text/javascript"></script>
  <script src="js/serial.js" type="text/javascript"></script>
  <script src="js/pie.js" type="text/javascript"></script>
  <script src="js/light.js" type="text/javascript"></script>
<title>Species Statistics </title>
</head>

<body >
 <script>
AmCharts.loadJSON = function(url) {
  // create the request
  if (window.XMLHttpRequest) {
    // IE7+, Firefox, Chrome, Opera, Safari
    var request = new XMLHttpRequest();
  } else {
    // code for IE6, IE5
    var request = new ActiveXObject('Microsoft.XMLHTTP');
  }

  // load it
  // the last "false" parameter ensures that our code will wait before the
  // data is loaded
  request.open('GET', url, false);
  request.send();

  // parse adn return the output
  return eval(request.responseText);
};
  </script>
  
  
  <script>
var chart = AmCharts.makeChart( "chartdiv", {
  "type": "pie",
  "theme": "light",


  "dataProvider": [ {
    "species": "Birds",
    "total_count": 3195
  }, {
    "species": "Reptiles",
    "total_count": 734
  }, {
    "species": "Plants",
    "total_count": 728
  }, {
    "species": "Amphibians",
    "total_count": 615
  }, {
    "species": "Fish",
    "total_count": 180
  } ],
  "valueField": "total_count",
  "titleField": "species",
  "outlineAlpha": 0.4,
  "depth3D": 15,
  "balloonText": "[[title]]<br><span style='font-size:14px'><b>[[total_count]]</b> ([[percents]]%)</span>",
  "angle": 30,
  "export": {
    "enabled": true
  }
} );
  </script>
<table width="100%"border="0"  cellspacing="0" cellpadding="0"  align="center" background="images/bg_images.jpg">
  <tr>
    <td height="75"><center><a href="index.php"><img src="images/banner.png" width="1000" height="65" border="0"></a></center></td>
  </tr>
</table>

<table  border="0" cellspacing="0" cellpadding="0" align="center">
	
  <tr>
    <td ><div id="chartdiv" style="width: 600px; height: 400px;"></div></td>
  </tr>
  <tr>
    <td><h2>Total Species entered in the database: 5,452</h2></td>
  </tr>
</table>

</body>
</html>



<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>amCharts tutorial: Loading external data</title>
</head>
<body>

  <!-- prerequisites -->
 

  <!-- cutom functions -->
 

  <!-- chart container -->
  

  <!-- the chart code -->
  

</body>
</html>

