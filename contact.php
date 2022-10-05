<?
include_once 'i/db.html';
?>
<!DOCTYPE HTML>
<html>
<head>
<title>contact</title>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&family=Indie+Flower&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="se.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
hr {
  border-top: 5px dashed brown;
}
#map {
height:575px;
width:100%;
position: relative;
}

body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;

.container2 {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  position:relative; 
  left:80px;
}
.vl {
  border-left: 6px solid green;
  height: 500px;
  position: relative;
  float:left;
  left: 50%;
  top: 0;
}

 


</style>
</head>
<body>
<div>
<nav>
<ul>
<li><a style="font-family: 'Indie Flower', cursive; font-size:40px;margin-right:25px;" href="";>LOG IN</a></li>
<li><a style="font-family: 'Indie Flower', cursive; font-size:40px;margin-right:25px;" href="";>BOOKING</a></li>
<li><a style="font-family: 'Indie Flower', cursive; font-size:40px;margin-right:25px;" href="";>MENU</a></li>
<li><a style="font-family: 'Indie Flower', cursive; font-size:40px;margin-right:25px;" href="";>ABOUT US</a></li>
<li><a style="font-family: 'Indie Flower', cursive; font-size:40px;margin-right:25px;" href="";>INDEX</a></li>
</nav>
</div>
<hr>
<br>
<br>
<div class="b">
<div style="width: 50%; float:left; position:relative; left:380px; top:25px" >
<h style="text-position;font-weight: bold;font-size:50px;color:white">--- contact us ---</h>
</div>
</div>
<div style="position:sticky">

<ul>
<li style="font-family: 'Indie Flower', cursive;width: 30%; float:left; position:relative; left:400px; top:25px;color:brown;"><b>address</b></li>
<li style="font-family: 'Indie Flower', cursive;width: 30%; float:left; position:relative; left:300px; top:25px;color:brown;"><b>email</b></li>
<li style="font-family: 'Indie Flower', cursive;width: 20%; float:left; position:relative; left:200px; top:25px;color:brown;"><b>phone</b></li>
</div>
<div style="position:sticky">
<br>

<ul>
<li style="font-family: 'Indie Flower', cursive;width: 30%; float:left; position:relative; left:330px; top:0px;color:brown;"><b>1100 E 14th St, Ada, OK 74820</b></li>
<li style="font-family: 'Indie Flower', cursive;width: 30%; float:left; position:relative; left:225px; top:0px;color:brown;"><b>photography@email.ecok.edu</b></li>
<li style="font-family: 'Indie Flower', cursive;width: 20%; float:left; position:relative; left:180px; top:0px;color:brown;"><b>123-456-7890</b></li>
</div>
<br><br><br>
<br>
<br>
<br><br><br>
<br><br><br><br><br>
<hr>
<br><br>
<div style="width:30%; float:left;position:relative; left:160px;">
 <h3>Contact Form</h3>

<div class="container" >
  <form action="formdb.php" method="POST">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your first name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="country">Country</label>
	<input type="text" id="ycountry" name="yourcountry" placeholder="Yourcountryname..">
    <!--<select id="country" name="country">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>-->  

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">
  </form>
</div>
</div>

<div style="width:48%; height:90%;float:left; position:relative; left:200px; top:20px">
 <div class="container2">
 <div id="map"></div>

<script>
function initMap(){
var location ={lat:32.813881,lng:-96.949928};
var map = new google.maps.Map(document.getElementById("map"),{
zoom:15,
center:location
});

var marker = new google.maps.Marker({
position:location,
map: map
});
}
</script>
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyClKCMDnY5H2NdwMe6bgoAHV8sClEA5HEA&callback=initMap"></script>
</div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><hr>
<br>
<div class="r">
<div >
<p style="font-family: 'Indie Flower', cursive;margin:0;font-size:20px;position:absolute; float:right;left:720px;margin-bottom:253px;color:brown;"><b>Nyanow Coffee</b></p>
</div>
<br>
<div>
<p style="font-family: 'Indie Flower', cursive;margin:0;font-size:20px;position:absolute; float:right;left:670px;color:brown;"><b>1100 E 14th St, Ada, OK 74820</b></p>
</div>
<br>
<div>
<p style="font-family: 'Indie Flower', cursive;font-size:20px;position:absolute; float:right;left:662px;color:brown;"><b>photography@email.ecok.edu</b></p>
</div>
<br>
<div>
<p style="font-family: 'Indie Flower', cursive;margin:0;font-size:20px;position:absolute; float:right;left:730px;color:brown;"><b>123-456-7890</b></p>
</div>
<br>
<br>
<br>
</body>
</html>