<?php 
include 'conn.php';
include 'core.php';

if(loggedin())
{
$name = getuserfield('username');

echo '<b>'.'<font face="verdana" size="5" color="white">'.'    '.'WELCOME'.' '.$name.'</font>'.'</b>';
}
?>

<html lang="en" >
    <head>
        <meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="css/demo1.css" />
<link href="css/layout1.css" rel="stylesheet" type="text/css" />
        <link href="css/menu1.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="css/style24.css" />
		<script type="text/javascript" src="js/modernizr.custom.86080.js"></script>
		<link rel="stylesheet" type="text/css" href="css/style21.css" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700,300,300italic' rel='stylesheet' type='text/css'>
		<script type="text/javascript" src="js/modernizr.custom.79639.js"></script> 
		<!--[if lte IE 8]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
        <link href="css/galleriffic.css" rel="stylesheet" type="text/css" />
        <link href="css/main3.css" rel="stylesheet" type="text/css" />

        <script type="text/javascript" src="js/jquery-1.5.2.min.js"></script>
        <script type="text/javascript" src="js/jquery.history.js"></script>
        <script type="text/javascript" src="js/jquery.galleriffic.js"></script>
        <script type="text/javascript" src="js/jquery.opacityrollover.js"></script>
        <script type="text/javascript" src="js/main3.js"></script>
		<style>
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
                <li><a class="hsubs" href="index.php">CHAT Room</a>
                </li>
                <li><a class="hsubs" href="profileupdate.php">Profile Update</a>
                </li>
                <li><a href="index3.html">Upload</a></li>
                <li><a href="Logout.php">Logout</a></li>
                <div id="lavalamp"></div>
            </ul>

     </div>
        <div class="container">

            <div class="navigation-container">
                <div id="thumbs" class="navigation">
                    <a class="pageLink prev" style="visibility: hidden;" href="#" title="Previous Page"></a>

                    <ul class="thumbs">
                        <li>
                            <a class="thumb" name="photo1" href="images/pic1.jpg" title="Title #1">
                                <img src="images/t_pic1.jpg" alt="Title #1" />
                            </a>
                            <div class="caption">
                                <div class="image-title">Title #1</div>
                                <div class="image-desc">HTML <b>description</b></div>
                                <div class="download"><a href="images/pic1.jpg">Download Original</a></div>
                            </div>
                        </li>
                        <li>
                            <a class="thumb" name="photo2" href="images/pic2.jpg" title="Title #2">
                                <img src="images/t_pic2.jpg" alt="Title #2" />
                            </a>
                            <div class="caption">
                                <div class="image-title">Title #2</div>
                                <div class="image-desc">HTML <i>description</i></div>
                                <div class="download"><a href="images/pic2.jpg">Download Original</a></div>
                            </div>
                        </li>
                        <li>
                            <a class="thumb" name="photo3" href="images/pic3.jpg" title="Title #3">
                                <img src="images/t_pic3.jpg" alt="Title #3" />
                            </a>
                            <div class="caption">
                                <div class="image-title">Title #3</div>
                                <div class="image-desc">HTML description</div>
                                <div class="download"><a href="images/pic3.jpg">Download Original</a></div>
                            </div>
                        </li>
                        <li>
                            <a class="thumb" name="photo4" href="images/pic4.jpg" title="Title #4">
                                <img src="images/t_pic4.jpg" alt="Title #4" />
                            </a>
                            <div class="caption">
                                <div class="image-title">Title #4</div>
                                <div class="image-desc">HTML description</div>
                                <div class="download"><a href="images/pic4.jpg">Download Original</a></div>
                            </div>
                        </li>
                        <li>
                            <a class="thumb" name="photo5" href="images/pic5.jpg" title="Title #5">
                                <img src="images/t_pic5.jpg" alt="Title #5" />
                            </a>
                            <div class="caption">
                                <div class="image-title">Title #5</div>
                                <div class="image-desc">HTML description</div>
                                <div class="download"><a href="images/pic5.jpg">Download Original</a></div>
                            </div>
                        </li>
                        <li>
                            <a class="thumb" name="photo6" href="images/pic6.jpg" title="Title #6">
                                <img src="images/t_pic6.jpg" alt="Title #6" />
                            </a>
                            <div class="caption">
                                <div class="image-title">Title #6</div>
                                <div class="image-desc">HTML description</div>
                                <div class="download"><a href="images/pic6.jpg">Download Original</a></div>
                            </div>
                        </li>
                        <li>
                            <a class="thumb" name="photo7" href="images/pic7.jpg" title="Title #7">
                                <img src="images/t_pic7.jpg" alt="Title #7" />
                            </a>
                            <div class="caption">
                                <div class="image-title">Title #7</div>
                                <div class="image-desc">HTML description</div>
                                <div class="download"><a href="images/pic7.jpg">Download Original</a></div>
                            </div>
                        </li>
                        <li>
                            <a class="thumb" name="photo8" href="images/pic8.jpg" title="Title #8">
                                <img src="images/t_pic8.jpg" alt="Title #8" />
                            </a>
                            <div class="caption">
                                <div class="image-title">Title #8</div>
                                <div class="image-desc">HTML description</div>
                                <div class="download"><a href="images/pic8.jpg">Download Original</a></div>
                            </div>
                        </li>
                        <li>
                            <a class="thumb" name="photo9" href="images/pic9.jpg" title="Title #9">
                                <img src="images/t_pic9.jpg" alt="Title #9" />
                            </a>
                            <div class="caption">
                                <div class="image-title">Title #9</div>
                                <div class="image-desc">HTML description</div>
                                <div class="download"><a href="images/pic9.jpg">Download Original</a></div>
                            </div>
                        </li>
                        <li>
                            <a class="thumb" name="photo10" href="images/pic10.jpg" title="Title #10">
                                <img src="images/t_pic10.jpg" alt="Title #10" />
                            </a>
                            <div class="caption">
                                <div class="image-title">Title #10</div>
                                <div class="image-desc">HTML description</div>
                                <div class="download"><a href="images/pic10.jpg">Download Original</a></div>
                            </div>
                        </li>

                        <li>
                            <a class="thumb" name="photo11" href="images/pic1.jpg" title="Title #11">
                                <img src="images/t_pic1.jpg" alt="Title #11" />
                            </a>
                            <div class="caption">
                                <div class="image-title">Title #11</div>
                                <div class="image-desc">HTML description</div>
                                <div class="download"><a href="images/pic1.jpg">Download Original</a></div>
                            </div>
                        </li>
                        <li>
                            <a class="thumb" name="photo12" href="images/pic2.jpg" title="Title #12">
                                <img src="images/t_pic2.jpg" alt="Title #12" />
                            </a>
                            <div class="caption">
                                <div class="image-title">Title #12</div>
                                <div class="image-desc">HTML description</div>
                                <div class="download"><a href="images/pic2.jpg">Download Original</a></div>
                            </div>
                        </li>
                        <li>
                            <a class="thumb" name="photo13" href="images/pic3.jpg" title="Title #13">
                                <img src="images/t_pic3.jpg" alt="Title #13" />
                            </a>
                            <div class="caption">
                                <div class="image-title">Title #13</div>
                                <div class="image-desc">HTML description</div>
                                <div class="download"><a href="images/pic3.jpg">Download Original</a></div>
                            </div>
                        </li>
                        <li>
                            <a class="thumb" name="photo14" href="images/pic4.jpg" title="Title #14">
                                <img src="images/t_pic4.jpg" alt="Title #14" />
                            </a>
                            <div class="caption">
                                <div class="image-title">Title #14</div>
                                <div class="image-desc">HTML description</div>
                                <div class="download"><a href="images/pic4.jpg">Download Original</a></div>
                            </div>
                        </li>
                        <li>
                            <a class="thumb" name="photo15" href="images/pic5.jpg" title="Title #15">
                                <img src="images/t_pic5.jpg" alt="Title #15" />
                            </a>
                            <div class="caption">
                                <div class="image-title">Title #15</div>
                                <div class="image-desc">HTML description</div>
                                <div class="download"><a href="images/pic5.jpg">Download Original</a></div>
                            </div>
                        </li>
                        <li>
                            <a class="thumb" name="photo16" href="images/pic6.jpg" title="Title #16">
                                <img src="images/t_pic6.jpg" alt="Title #16" />
                            </a>
                            <div class="caption">
                                <div class="image-title">Title #16</div>
                                <div class="image-desc">HTML description</div>
                                <div class="download"><a href="images/pic6.jpg">Download Original</a></div>
                            </div>
                        </li>
                        <li>
                            <a class="thumb" name="photo17" href="images/pic7.jpg" title="Title #17">
                                <img src="images/t_pic7.jpg" alt="Title #17" />
                            </a>
                            <div class="caption">
                                <div class="image-title">Title #17</div>
                                <div class="image-desc">HTML description</div>
                                <div class="download"><a href="images/pic7.jpg">Download Original</a></div>
                            </div>
                        </li>
                        <li>
                            <a class="thumb" name="photo18" href="images/pic8.jpg" title="Title #18">
                                <img src="images/t_pic8.jpg" alt="Title #18" />
                            </a>
                            <div class="caption">
                                <div class="image-title">Title #18</div>
                                <div class="image-desc">HTML description</div>
                                <div class="download"><a href="images/pic8.jpg">Download Original</a></div>
                            </div>
                        </li>
                        <li>
                            <a class="thumb" name="photo19" href="images/pic9.jpg" title="Title #19">
                                <img src="images/t_pic9.jpg" alt="Title #19" />
                            </a>
                            <div class="caption">
                                <div class="image-title">Title #19</div>
                                <div class="image-desc">HTML description</div>
                                <div class="download"><a href="images/pic9.jpg">Download Original</a></div>
                            </div>
                        </li>
                        <li>
                            <a class="thumb" name="photo20" href="images/pic10.jpg" title="Title #20">
                                <img src="images/t_pic10.jpg" alt="Title #20" />
                            </a>
                            <div class="caption">
                                <div class="image-title">Title #20</div>
                                <div class="image-desc">HTML description</div>
                                <div class="download"><a href="images/pic10.jpg">Download Original</a></div>
                            </div>
                        </li>
                    </ul>
                    <a class="pageLink next" style="visibility: hidden;" href="#" title="Next Page"></a>
                </div>
            </div>
            <div class="content">
                <div class="slideshow-container">
                    <div id="controls" class="controls"></div>
                    <div id="loading" class="loader"></div>
                    <div id="slideshow" class="slideshow"></div>
                </div>
                <div id="caption" class="caption-container">
                    <div class="photo-index"></div>
                </div>
            </div>
            <div style="clear: both;"></div>

        </div>
<ul class="cb-slideshow">
            <li><span>Image 01</span><div></div></li>
            <li><span>Image 02</span><div></div></li>
            <li><span>Image 03</span><div></div></li>
            <li><span>Image 04</span><div></div></li>
            <li><span>Image 05</span><div></div></li>
            <li><span>Image 06</span><div></div></li>
        </ul>
          <center>  <h2>Website by: Vaibhav Tuteja And Kanika Bhatia</h2> </center>
    </body>
</html>