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
<body oncontextmenu="eturn false;">
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
<p><strong>Rules and Regulations : </strong><br>TOTAL QUESTIONS : 20<br>TOTAL MARKS : Question 1 to Question 10 -> 2 marks each , Question 11 to Question 20 -> 1 mark each<br><strong>NOTE</strong> : NO NEGATIVE MARKING<br>TOTAL TIME : 5+30 MINUTES (2100 SECONDS)  
</div>
<div class="myquiz">
<h3>Questions : </h3>
<form id="myquiz" method="post" action="pd10031validator.php">
<strong>1.</strong> If one-third of one-fourth of a number is 15, then three-tenth of that number is :<br>
<input type="radio" name="q1pd10031" value="a">35
<input type="radio" name="q1pd10031" value="b">45
<input type="radio" name="q1pd10031" value="c">36
<input type="radio" name="q1pd10031" value="d">54<br>

<strong>2.</strong> Three times the first of three consecutive odd integers is 3 more than twice the third. The third integer is :<br>
<input type="radio" name="q2pd10031" value="a">9
<input type="radio" name="q2pd10031" value="b">11
<input type="radio" name="q2pd10031" value="c">13
<input type="radio" name="q2pd10031" value="d">15<br>

<strong>3.</strong> The difference between a two-digit number and the number obtained by interchanging the digits is 36. What is the difference between the sum and the difference of the digits of the number if the ratio between the digits of the number is 1 : 2 ?<br>
<input type="radio" name="q3pd10031" value="a">4
<input type="radio" name="q3pd10031" value="b">8
<input type="radio" name="q3pd10031" value="c">16
<input type="radio" name="q3pd10031" value="d">None of these<br>

<strong>4.</strong> A two-digit number is such that the product of the digits is 8. When 18 is added to the number, then the digits are reversed. The number is:<br>
<input type="radio" name="q4pd10031" value="a">18
<input type="radio" name="q4pd10031" value="b">24
<input type="radio" name="q4pd10031" value="c">42
<input type="radio" name="q4pd10031" value="d">81<br>

<strong>5.</strong> The largest number of 4-digits divisible by 12, 15 and 18 is :<br>
<input type="radio" name="q5pd10031" value="a">9900
<input type="radio" name="q5pd10031" value="b">9840
<input type="radio" name="q5pd10031" value="c">9955
<input type="radio" name="q5pd10031" value="d">9970<br>

<strong>6.</strong> L.C.M. of 1.05 and 2.1 is : <br>
<input type="radio" name="q6pd10031" value="a">1.3
<input type="radio" name="q6pd10031" value="b">1.96
<input type="radio" name="q6pd10031" value="c">2.1
<input type="radio" name="q6pd10031" value="d">4.30<br>

<strong>7.</strong> Two numbers P and Q are such that, the sum of 2 % of P and Sum of 2 % of Q is two-third of the sum of 2 % of P and 6 % of Q. Ratio of P and Q is :<br>
<input type="radio" name="q7pd10031" value="a">2:5
<input type="radio" name="q7pd10031" value="b">3:1
<input type="radio" name="q7pd10031" value="c">1:4
<input type="radio" name="q7pd10031" value="d">5:1<br>

<strong>8.</strong> When 35 is subtracted from a number; it reduces to its 80 %. Four-fifth of that number is :<br>
<input type="radio" name="q8pd10031" value="a">140
<input type="radio" name="q8pd10031" value="b">125
<input type="radio" name="q8pd10031" value="c">137
<input type="radio" name="q8pd10031" value="d">129<br>

<strong>9.</strong> The compound interest on Rs. 20,000 in 2 years at 4 % per annum, if interest being compounded half-yearly is :<br>
<input type="radio" name="q9pd10031" value="a">Rs. 1648.64
<input type="radio" name="q9pd10031" value="b">Rs. 1596.32
<input type="radio" name="q9pd10031" value="c">Rs. 14826.56
<input type="radio" name="q9pd10031" value="d">Rs. 11563.99<br>

<strong>10.</strong>  If a boy sells a book for Rs. 450 he gets a loss of 10 %, then find cost price. To gain 10 %, what should be the selling price?<br>
<input type="radio" name="q10pd10031" value="a">400, 500
<input type="radio" name="q10pd10031" value="b">550, 600
<input type="radio" name="q10pd10031" value="c">500, 550
<input type="radio" name="q10pd10031" value="d">475, 525<br>

<strong>11.</strong> S.P. of 10 candles is same as C.P. of 12 candles. The gain percent is :<br>
<input type="radio" name="q11pd10031" value="a">11%
<input type="radio" name="q11pd10031" value="b">15%
<input type="radio" name="q11pd10031" value="c">20%
<input type="radio" name="q11pd10031" value="d">25%<br>

<strong>12.</strong> 26th January, 1996 was a Friday. What day of the week lies on 26th January, 1997?<br>
<input type="radio" name="q12pd10031" value="a">Saturday
<input type="radio" name="q12pd10031" value="b">Sunday
<input type="radio" name="q12pd10031" value="c">Monday
<input type="radio" name="q12pd10031" value="d">Thursday<br>

<strong>13.</strong>One year ago, ratio of Harry and Peter age’s was 5 : 6 respectively. After 4 years, this ratio becomes 6 : 7. How old is Peter? <br>
<input type="radio" name="q13pd10031" value="a">32
<input type="radio" name="q13pd10031" value="b">26
<input type="radio" name="q13pd10031" value="c">31
<input type="radio" name="q13pd10031" value="d">35<br>

<strong>14.</strong>Three unbiased coins are tossed. What is the probability of getting at least 2 tails?  <br>
<input type="radio" name="q14pd10031" value="a">0.75
<input type="radio" name="q14pd10031" value="b">0.5
<input type="radio" name="q14pd10031" value="c">0.25
<input type="radio" name="q14pd10031" value="d">0.2<br>

<strong>15.</strong> A dice is rolled twice. What is the probability of getting sum 9? <br>
<input type="radio" name="q15pd10031" value="a">2/3
<input type="radio" name="q15pd10031" value="b">1/3
<input type="radio" name="q15pd10031" value="c">1/9
<input type="radio" name="q16pd10031" value="d">3/9<br>

<strong>16.</strong>A box has 10 black and 10 white balls. What is the probability of getting two balls of the same color? <br>
<input type="radio" name="q16pd10031" value="a">10/19
<input type="radio" name="q16pd10031" value="b">9/38
<input type="radio" name="q16pd10031" value="c">9/19
<input type="radio" name="q16pd10031" value="d">5/38<br>

<strong>17.</strong>A box contains 4 black, 3 red and 6 green marbles. 2 marbles are drawn from the box at random. What is the probability that both the marbles are of the same color? <br>
<input type="radio" name="q17pd10031" value="a">12/74
<input type="radio" name="q17pd10031" value="b">24/78
<input type="radio" name="q17pd10031" value="c">13/78
<input type="radio" name="q17pd10031" value="d">NONE OF THESE<br>

<strong>18.</strong>How many words can be formed by using all letters of word ALIVE.<br>
<input type="radio" name="q18pd10031" value="a">86
<input type="radio" name="q18pd10031" value="b">95
<input type="radio" name="q18pd10031" value="c">105
<input type="radio" name="q18pd10031" value="d">120<br>

<strong>19.</strong> If “*” is called “+”, “/” is called “*”, “-” is called “/”, “+” is called “-”. 40/20 – 5 * 10 + 5 = ? <br>
<input type="radio" name="q19pd10031" value="a">170
<input type="radio" name="q19pd10031" value="b">160
<input type="radio" name="q19pd10031" value="c">150
<input type="radio" name="q19pd10031" value="d">175
<input type="radio" name="q19pd10031" value="e">NONE OF THESE<br>

<strong>20.</strong>If Reena says, “Anjali's father Raman is the only son of my father-in-law Ramanand”, then how is Piyu, who is the sister of Anjali, related to Ramanand ?  <br>
<input type="radio" name="q20pd10031" value="a">WIFE
<input type="radio" name="q20pd10031" value="b">SISTER
<input type="radio" name="q20pd10031" value="c">GRAND DAUGHTER
<input type="radio" name="q20pd10031" value="d">DAUGHTER
<input type="radio" name="q20pd10031" value="e">NONE OF THESE<br>

<center><input type="submit" name="submit"></center>
</form>
</div>
<div class="lowercontent">
<code>Designed by <a class="lc" href="http://www.facebook.com/divyam.dhadwal">DIVYAM DHADWAL</a><br>Copyright &#169; 2016 Department of Carrier Development Center - SRM University NCR Campus. All Rights Reserved.<br>Best viewed in IE 10.x, Firefox 25.x, Chrome 30.x onwards with a Resolution of 1024 * 768 & above</code>
</div>

</script>
</body>
</html>