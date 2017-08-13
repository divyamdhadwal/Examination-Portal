<?php
session_start();
ob_start();
error_reporting(E_ERROR | E_PARSE);
?>
<!DOCTYPE html>
<html>
<head>
<html lang="en-US">
<link rel='shortcut icon' href='content/images/myfavicon.ico' type='image/x-icon'/ >
<link href="content/style.css" rel="stylesheet" type="text/css" media="all" />
<meta charset="UTF-8">
<meta name="author" content="Divyam Dhadwal">
<meta name="description" content="Official Website of CDC Department , SRM University NCR Campus">
<title>CDC Department - SRM University NCR Campus</title>
<link rel="stylesheet" href="menucss/style.css" />
<script src="js/jquery-1.9.1.min.js"></script>
<script>
    $(document).ready(function() {
        $( '.dropdown' ).hover(
            function(){
                $(this).children('.sub-menu').slideDown(200);
            },
            function(){
                $(this).children('.sub-menu').slideUp(200);
            }
        );
    }); // end ready
</script>
<script type="text/javascript">
	document.onkeydown = function(e) {
if(event.keyCode == 123) {
return false;
}
if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)){
return false;
}
if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)){
return false;
}
if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)){
return false;
}
if(e.ctrlKey && e.keyCode == 'C'.charCodeAt(0)){
return false;
}
}
</script>
</head>
<body oncontextmenu="return false;">
<?php
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true && $_SESSION['user']=='administrator') 
{

echo'<div class="usercheck"><code><strong>WELCOME , YOU ARE LOGGED IN. QUICK LINKS :</strong>&#160;&#160;<a class="panelbox" href="a3d5m8i0n23.php">ADMIN PANEL</a></code> || <code><a class="panelbox" href="logout.php">LOGOUT</a></code> </div>';
} 
elseif (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true && $_SESSION['user']=='user')
{
 echo'<div class="usercheck"><code><strong>WELCOME , YOU ARE LOGGED IN. QUICK LINKS :</strong>&#160;&#160;<a class="panelbox" href="u78s56e89r31.php">USER PANEL</a></code> &#160; || &#160;<code><a class="panelbox" href="logout.php">LOGOUT</a> </code></div>';  
}
?>
<div class="sitehead">
<img class="headerimage" src=content/images/sitelogo.png alt="CDC Department" align="center">
</div>
<nav>
    <ul class="content clearfix">
        <li><a href="index.php">HOME</a></li>
        <li><a href="faculty-login.php">FACULTY LOGIN</a></li>
        <li><a href="student-login.php">STUDENT LOGIN</a></li>
        <li class="dropdown">
        <a href="#">SAMPLE TESTS</a>
        <ul class="sub-menu">
                <li class="dropdown">
                <a href="#">FIRST YEAR</a>
                <ul class="sub-menu">
                        <li><a href="pd1003-1.php">SAMPLE TEST-1</a></li>
                        <li><a href="pd1003-2.php">SAMPLE TEST-2</a></li>
                </ul> 
                </li>   
                <li class="dropdown">
                <a href="#">SECOND YEAR</a>
                <ul class="sub-menu">
                        <li><a href="pd1004-1.php">SAMPLE TEST-1</a></li>
                        <li><a href="pd1004-2.php">SAMPLE TEST-2</a></li>
                </ul> 
                </li>  
                <li class="dropdown">
                <a href="#">THIRD YEAR</a>
                <ul class="sub-menu">
                        <li><a href="pd1005-1.php">SAMPLE TEST-1</a></li>
                        <li><a href="pd1005-2.php">SAMPLE TEST-2</a></li>
                </ul> 
                </li>  
                <li class="dropdown">
                <a href="#">FOURTH YEAR</a>
                <ul class="sub-menu">
                        <li><a href="pd1006-1.php">SAMPLE TEST-1</a></li>
                        <li><a href="pd1006-2.php">SAMPLE TEST-2</a></li>
                 </ul>  
                 </li>     
        </ul>
        </li>
        <li><a href="announcements.php">GENERAL ANNOUNCEMENTS</a></li>
        <li><a href="aboutus.php">ABOUT US</a></li>
        <li><a href="contactus.php">CONTACT US</a></li>
    </ul>
</nav>
<div class="content">
<p>The Department of Career Development was established in 2012 to mould the students into fine human beings, who would exhibit professional and personal excellence in their lives. The department caters to the increasing market demands and works to equip the students with all the necessary skill sets that would help them build a prospective career for themselves.
  The first year students are trained in communication skills, inter-personal and intrapersonal communication and vocabulary development. They are exposed to several vistas of challenging circumstances within the classrooms that enables them to express their views and enjoy a healthy participation in classroom activities. While the first semester focuses on building confidence, public speech and expressing views, the second semester paves way for a better life. The course on value education not only teaches the moral aspects of life but is customized to suit the regular needs of their areas of specialization. Topics like business ethics, social responsibility and humanitarianism are dealt in detail and practically demonstrated for a better understanding.
  The second year students, in the third semester, learn about their environment, earth and the other related aspects mainly focusing on their individual responsibility and the importance of youth initiatives. They go on to learn the nuances of behavioral skills that completes the circle of total personality development. Professional etiquette and group dynamics are the prime areas of enhancement in the fourth semester.
  The department adopts activity-based teaching-learning process that aims to involve all the students in a class. It conducts workshops on soft skills and arranges guest lecturers of eminent personalities by which the students get an opportunity to meet and interact with successful entrepreneurs and established giants of their respective fields. The department has charted innovative plans for the future to improve the course delivery and achieve optimum level of satisfaction from the students.
  The department has a set of dedicated, experienced faculty members who take every step to accomplish the objectives laid out for the course. They also participate in various workshops and seminars to mark their individual growth and upgrade themselves of upcoming trends.</p>
  </div>
<div class="lowercontent">
<code>Designed by <a class="lc" href="http://www.facebook.com/divyam.dhadwal">DIVYAM DHADWAL</a><br>Copyright &#169; 2016 Department of Carrier Development Center - SRM University NCR Campus. All Rights Reserved.<br>Best viewed in IE 10.x, Firefox 25.x, Chrome 30.x onwards with a Resolution of 1024 * 768 & above</code>
</div>
</body>
</html>
<?php
ob_end_flush();
?>