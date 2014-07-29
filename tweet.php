<?php 
include 'conn.php';
include 'core.php';

if(loggedin())
{
$name = getuserfield('username');

echo '<b>'.'<font face="verdana" size="5" color="white">'.'    '.'WELCOME'.' '.$name.'</font>'.'</b>';

if(isset($_POST['tweet']))
{
$tweet=$_POST['tweet'];
if(!empty($tweet))
{
$query="insert into tweet values('','$name','$tweet','')";
mysql_query($query);
mysql_query("UPDATE tweet SET posted='1' WHERE post='$tweet'");
}
}
else
{
//echo 'not set';
}
}
?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="css/demo1.css" />
<link href="css/layout1.css" rel="stylesheet" type="text/css" />
        <link href="css/menu1.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="css/style24.css" />
		<script type="text/javascript" src="js/modernizr.custom.86080.js"></script>
		<link rel="stylesheet" type="text/css" href="css/style21.css" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700,300,300italic' rel='stylesheet' type='text/css'>
		<script type="text/javascript" src="js/modernizr.custom.79639.js"></script> 
		<!--[if lte IE 8]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
<style>
.contain{
margin: 30px auto;
width: 1057px;
}
#nav li {
    background: url('menu_line.png') no-repeat scroll right 5px transparent;
    float: left;
    position: relative;
}
#nav li a {
    color: #FFFFFF;
    display: block;
    float: left;
    font-weight: normal;
    height: 30px;
    padding: 23px 20px 0;
    position: relative;
    text-decoration: none;
    text-shadow: 1px 1px 1px #000000;
}
#area{
background-color:black;
opacity:0.7;
color:white;
border-radius:10px;
font-family:"calibri";
align:center;
text-size:20px;
width:700px;
}
.new{
z-index:5;
}
#box1{
background-color: rgba(47, 63, 75, 0.4);
width:960px;
height:900px;
margin-left:195px;
margin-top:130px;
border-radius:25px;
z-index:9;
box-shadow: -30px 30px 25px #003300;
}
#com{
margin-left:40px;
height:30px;
width:350px;
background-color:black;
opacity:0.7;
color:white;
}
#but{
width:100px;
background-color:blue;
opacity:0.8;
color:pink;
border-radius:20px;
}

#box2{
background-color: rgba(47, 63, 75, 0.4);
width:550px;
height:250px;
margin-left:195px;
margin-top:45px;
border-radius:25px;
z-index:9;
}
#butt{
background-color:green;
color:white;
}
.cb-slideshow li:nth-child(1) span { background-image: url(images/6.1.jpg) }
.cb-slideshow li:nth-child(2) span {
    background-image: url(../images/5.1.jpg);
	}
.cb-slideshow li:nth-child(3) span {
    background-image: url(images/4.1.jpg);
	}
.cb-slideshow li:nth-child(4) span {
    background-image: url(images/3.1.jpg);
	}
.cb-slideshow li:nth-child(5) span {
    background-image: url(images/2.1.jpg);
	}
.cb-slideshow li:nth-child(6) span {
    background-image: url(images/1.1.jpg);
	}
</style>

</head>

<body id="page">
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
<div class="contain">
            <ul id="nav">
                <li><a href="tweet.php">Home</a></li>
                <li><a class="hsubs" href="gallery.php">Gallery</a>
                </li>
                <li><a class="hsubs" href="index.php">CHAT ROOM</a>
                </li>
                <li><a class="hsubs" href="profileupdate.php">Profile</a>
                </li>
                <li><a href="index3.html">Upload</a></li>
                <li><a href="Logout.php">Logout</a></li>
                <div id="lavalamp"></div>
            </ul>

     </div>
 <div id="box1">
		<section class="opener">
		<form class="new" action="tweet.php" method="POST">
		<center><font size="6" type="verdana" color="blue" ><h1><b>TWEET YOUR POSTS HERE</b></h1> &nbsp&nbsp&nbsp</font>
		<br/>
		<textarea id="area" rows="5" cols="40" name="tweet" placeholder="What's on your mind?"></textarea></br></br></center>
		<br/>
		<center><input id="butt" class="new" type="submit" value="   Tweet  " height="10"/> </center>
		</form></br></br>
		<?php 
$query="select * from tweet";
$rw=mysql_query($query);
while($res=mysql_fetch_array($rw))
{
echo ''.'<br/>'.'<font face="verdana" size="5" color="red">'.$res['username'].'</font>'.'  '.'says:'.'  '.'<font face="comic sans ms" color ="white">'.$res['post'].'</font>'.'<hr>';

}
?>
		</section>
		
		<br/>
		<br/>
		<br/>
<div id="box2">
<br/>
			<form class="new" action="comment.php" method="POST">
			<input id="com" class="new" type="text" name="comment" value="" placeholder="comment on this post"/>&nbsp; &nbsp;
			<input id="but" class="new" type="submit" value="   Comment  " height="10"/>
			</form>
			<?php
$query="select * from comment";
$rw=mysql_query($query);
while($res1=mysql_fetch_array($rw))
{
echo '<br/>'.'<font face="verdana" size="5" color="white">'.$res1['username'].'</font>'.'<font face="verdana" size="5" color="red">'.'  '  .'says:'.'</font>'.  '<font face="comic sans ms" color ="white">'.$res1['comment'].'</font>'.'<hr>';

}
?>
</div>
<ul class="cb-slideshow">
            <li><span>Image 01</span><div></div></li>
            <li><span>Image 02</span><div></div></li>
            <li><span>Image 03</span><div></div></li>
            <li><span>Image 04</span><div></div></li>
            <li><span>Image 05</span><div></div></li>
            <li><span>Image 06</span><div></div></li>
        </ul>
		
		
  
</body>
</html>