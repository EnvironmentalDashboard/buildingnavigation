<?php
error_reporting(-1);
ini_set('display_errors', 'On');
require '/var/www/repos/includes/db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap.grid.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <title>Homepage</title>
 </head>

 <style>
 	.card{
 		font-family: "Roboto", "helvetica-neue", Helvetica, Arial, sans-serif;
 		font-weight: 400;
  			-webkit-font-smoothing: antialiased;
  			-webkit-appearance: none;
  		zoom: 1;
  		-webkit-font-feature-settings: "kern" 1, "liga" 1;
  		line-height: 1.5;
 		background-color: #800000;
 		color: white;
 		width: auto;
 		height: auto;
 		padding: 10px 20px 20px 20px;
 		border-radius: 3px;
 	}
 	h1{
 		font-size: 22px;
 		font-weight: 700;
 	}
 	p{font-size: 16px;}
  button{
    font-size: 22px;
    font-weight: 700;
    border: 1px solid #fff;
    background-color: #fff;
    border-radius: 3px;
    padding: 0px 5px 0px 5px;
    box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
  }
  button:hover{
    border: 3px solid #fff;
  }
 	a{color: black;}
 	a:hover{
 		color: black;
 		cursor: pointer;
    text-decoration: none;
 	}
 </style>
 <body>
 	<div class="card">
	 	<h1> How to make sense of this page </h1>
	 	<p>
	 		This dashboard contains real-time data on electricity and water consumption for each building at Oberlin College in Oberlin, Ohio. Scroll your mouse through the displays below and select different time periods and see how "Flash" the energy squirrel and "Wally" Walleye respond -- their behavior reflects how much resource is being consumed a given point in time relative to what is normally consumed at that time of day.	
	 	</p>
	 	<button><a href="https://buildingos.com/reports/dashboards/282f6022666d11e7a61b525400d1fc46" target="_top"> Back to home page</a></button>
	</div>
 </body>
</html>

