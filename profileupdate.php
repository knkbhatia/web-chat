<?php 
include 'conn.php';
include 'core.php';

if(loggedin())
{
$name = getuserfield('username');

echo '<b>'.'<font face="verdana" size="5" color="white">'.'    '.'WELCOME'.' '.$name.'</font>'.'</b>';
if(isset($firstname)&&isset($lastname)&&isset($description)&&isset($teachstud)&&isset($hobbies)&&isset($joindate))
{
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$description=$_POST['description'];
$teachstud=$_POST['teachstud'];
$joindate=$_POST['joindate'];
$hobbies=$_POST['hobbies'];
}
if(isset($firstname))
{$firstname=$_POST['firstname'];
mysql_query("UPDATE `profile` SET `firstname`='$firstname' WHERE username='$name'");
header('Location: profileupdate.php');
}
else if(isset($firstname)&&isset($lastname))
{
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
mysql_query("UPDATE `profile` SET `firstname`='$firstname',`lastname`='$lastname' WHERE username='$name'");
header('Location: profileupdate.php');
}
else if(isset($description))
{
$description=$_POST['description'];
mysql_query("UPDATE `profile` SET `descritption`='$description' WHERE username='$name'");
header('Location: profileupdate.php');
}
else if(isset($description)&&isset($hobbies))
{
$description=$_POST['description'];
$hobbies=$_POST['hobbies'];
mysql_query("UPDATE `profile` SET `descritption`='$description',`hobbies`='$hobbies' WHERE username='$name'");
header('Location: profileupdate.php');
}
else if(isset($firstname)&&isset($lastname)&&isset($description)&&isset($hobbies))
{
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$description=$_POST['description'];
$teachstud=$_POST['teachstud'];
$joindate=$_POST['joindate'];
$hobbies=$_POST['hobbies'];
mysql_query("UPDATE `profile` SET `firstname`='$firstname', `lastname`='$lastname', `descritption`='$description',`hobbies`='$hobbies' WHERE username='$name'");
header('Location: profileupdate.php');
}
}
?>
<html>
<head>
<link href="css/layout1.css" rel="stylesheet" type="text/css" />
        <link href="css/menu1.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="./styles.css" />
 <link href="text2.css" rel="stylesheet" type="text/css" />
	<link href="layout.css" rel="stylesheet" type="text/css" />
<style>
@font-face {
	font-family: 'YanoneKaffeesatzRegular';
	src: url('./fonts/yanonekaffeesatz-regular-webfont.eot');
	src: url('./fonts/yanonekaffeesatz-regular-webfont.eot?#iefix') format('embedded-opentype'),
	url('./fonts/yanonekaffeesatz-regular-webfont.woff') format('woff'),
	url('./fonts/yanonekaffeesatz-regular-webfont.ttf') format('truetype'),
	url('./fonts/yanonekaffeesatz-regular-webfont.svg#YanoneKaffeesatzRegular') format('svg');
	font-weight: normal;
	font-style: normal;
}
h1{
color:white;
}
.contain{
margin: 30px auto;
margin-left:-140;
width: 1057px;
}

</style>
</head>
<body>
<script>
/******************************************
* Snow Effect Script- By Altan d.o.o. (http://www.altan.hr/snow/index.html)
* Visit Dynamic Drive DHTML code library (http://www.dynamicdrive.com/) for full source code
* Last updated Nov 9th, 05' by DD. This notice must stay intact for use
******************************************/
  
  //Configure below to change URL path to the snow image
  var snowsrc="../final_project/snow3.gif";
  // Configure below to change number of snow to render
  var no = 10;
  // Configure whether snow should disappear after x seconds (0=never):
  var hidesnowtime = 0;
  // Configure how much snow should drop down before fading ("windowheight" or "pageheight")
  var snowdistance = "pageheight";

///////////Stop Config//////////////////////////////////

  var ie4up = (document.all) ? 1 : 0;
  var ns6up = (document.getElementById&&!document.all) ? 1 : 0;

	function iecompattest(){
	return (document.compatMode && document.compatMode!="BackCompat")? document.documentElement : document.body
	}

  var dx, xp, yp;    // coordinate and position variables
  var am, stx, sty;  // amplitude and step variables
  var i, doc_width = 800, doc_height = 600; 
  
  if (ns6up) {
    doc_width = self.innerWidth;
    doc_height = self.innerHeight;
  } else if (ie4up) {
    doc_width = iecompattest().clientWidth;
    doc_height = iecompattest().clientHeight;
  }

  dx = new Array();
  xp = new Array();
  yp = new Array();
  am = new Array();
  stx = new Array();
  sty = new Array();
  snowsrc=(snowsrc.indexOf("dynamicdrive.com")!=-1)? "snow.gif" : snowsrc
  for (i = 0; i < no; ++ i) {  
    dx[i] = 0;                        // set coordinate variables
    xp[i] = Math.random()*(doc_width-50);  // set position variables
    yp[i] = Math.random()*doc_height;
    am[i] = Math.random()*20;         // set amplitude variables
    stx[i] = 0.02 + Math.random()/10; // set step variables
    sty[i] = 0.7 + Math.random();     // set step variables
		if (ie4up||ns6up) {
      if (i == 0) {
        document.write("<div id=\"dot"+ i +"\" style=\"POSITION: absolute; Z-INDEX: "+ i +"; VISIBILITY: visible; TOP: 15px; LEFT: 15px;\"><a href=\"http://dynamicdrive.com\"><img src='"+snowsrc+"' border=\"0\"><\/a><\/div>");
      } else {
        document.write("<div id=\"dot"+ i +"\" style=\"POSITION: absolute; Z-INDEX: "+ i +"; VISIBILITY: visible; TOP: 15px; LEFT: 15px;\"><img src='"+snowsrc+"' border=\"0\"><\/div>");
      }
    }
  }

  function snowIE_NS6() {  // IE and NS6 main animation function
    doc_width = ns6up?window.innerWidth-10 : iecompattest().clientWidth-10;
		doc_height=(window.innerHeight && snowdistance=="windowheight")? window.innerHeight : (ie4up && snowdistance=="windowheight")?  iecompattest().clientHeight : (ie4up && !window.opera && snowdistance=="pageheight")? iecompattest().scrollHeight : iecompattest().offsetHeight;
    for (i = 0; i < no; ++ i) {  // iterate for every dot
      yp[i] += sty[i];
      if (yp[i] > doc_height-50) {
        xp[i] = Math.random()*(doc_width-am[i]-30);
        yp[i] = 0;
        stx[i] = 0.02 + Math.random()/10;
        sty[i] = 0.7 + Math.random();
      }
      dx[i] += stx[i];
      document.getElementById("dot"+i).style.top=yp[i]+"px";
      document.getElementById("dot"+i).style.left=xp[i] + am[i]*Math.sin(dx[i])+"px";  
    }
    snowtimer=setTimeout("snowIE_NS6()", 10);
  }

	function hidesnow(){
		if (window.snowtimer) clearTimeout(snowtimer)
		for (i=0; i<no; i++) document.getElementById("dot"+i).style.visibility="hidden"
	}
		

if (ie4up||ns6up){
    snowIE_NS6();
		if (hidesnowtime>0)
		setTimeout("hidesnow()", hidesnowtime*1000)
		}

</script>
<h1>SET YOUR PROFILE TREE!</h1>
<br>

<div id="box1">
<br>
<br>
<div class="contain">
            <ul id="nav">
                <li><a href="tweet.php">Home</a></li>
                <li><a class="hsubs" href="gallery.php">Gallery</a>
                </li>
                <li><a class="hsubs" href="index.php">CHAT Room</a>
                </li>
                <li><a class="hsubs" href="profileupdate.php">Profile</a>
                </li>
                <li><a href="index3.html">Upload</a></li>
                <li><a href="Logout.php">Logout</a></li>
                <div id="lavalamp"></div>
            </ul>

     </div>
<div id="step1">
<form id="contact-form" action="profileupdate.php" method="POST" style="margin-top:40px;">

		<p id="formstatus"></p>
				<p>BASIC INFO</p>	
				<label for="firstname">First Name: </label>
				<input type="text" name="firstname" value="" id="name" />
				<label for="lastname">Last Name: </label>
				<input type="text" name="lastname" value="" id="email" />
				<label for="description">Describe Yourself : </label>
				<textarea  name="description" value="tell us about u!" id="message" ></textarea>
				<label for="teachstud">TEACHER OR STUDENT?: </label>
				<input type="text" name="teachstud" value="" id="name" />
				<label for="joindate">When did you join vit?: </label>
				<input type="text" name="joindate" value="yyyy-mm-dd" id="email" />
				<label for="hobbies">Hobbies: </label>
				<textarea  name="hobbies" value="" id="message" ></textarea>
				<input type="submit" name ="submit" value="Send" />
			</form>
	
	</div>
</div>
</div>

</body>
</html>