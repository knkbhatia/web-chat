<?php 
include 'conn.php';
include 'core.php';

if(loggedin())
{
$name = getuserfield('username');

echo '<b>'.'<font face="verdana" size="5" color="white">'.'    '.'WELCOME'.' '.$name.'</font>'.'</b>';
?>
<html>
    <head>
        <meta charset="utf-8" />

        <link href="css/galleriffic.css" rel="stylesheet" type="text/css" />
        <link href="css/main3.css" rel="stylesheet" type="text/css" />

        <script type="text/javascript" src="js/jquery-1.5.2.min.js"></script>
        <script type="text/javascript" src="js/jquery.history.js"></script>
        <script type="text/javascript" src="js/jquery.galleriffic.js"></script>
        <script type="text/javascript" src="js/jquery.opacityrollover.js"></script>
        <script type="text/javascript" src="js/main3.js"></script>
    </head>
    <body>
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

        <footer>
          <center>  <h2>Website by: Vaibhav Tuteja And Kanika Bhatia</h2> </center>
        </footer>
    </body>
</html>