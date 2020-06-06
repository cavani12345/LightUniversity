<?php
@session_start();
include 'call.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>contact</title>
    <link rel="stylesheet" href="../css/mycss.css">
    <link rel="stylesheet" href="../css/contact.css">
</head>
<body>
<header>
    <div class="social-media">
    </div>
    <div class="bigdiv">
        <div class="smalldiv">
            <div class="logo">
                
            <img src="../imgs/za.png" alt="logo" height="95" width="95">
            </div>
        
        <div class="mytitle">
                <h1 style="color:wheat;font-size:20px;text-align: center;position: relative;font-size: 200%;">LIGHT UNIVERSITY</h1>
            
        </div>
            <div class="mysearch">
                
            </div>
    </div>
    </div>
    </header>  
    <section>
        <nav>
            <div class="mylink">
                    <a target="_blank|_self|_parent|_top|framename">
                <ul class="link">                  
                    <li><a href="../index.html">Home</a></li>
                    <li><a href="../html/aboutus.html">About</a></li>
                    <li><a href="../html/campus.html">Campus</a></li>
                    <li class="dropdown"><a href="" class="dropbt">Admission</a>
                    <div class="drop-content">
                    <ul>
                            <li> <a href="registration.php">Registration</a></li>                      
                                            </ul>
                                                </div>
                    </li>
                    <li><a href="../html/studentslife.html">Student_Life</a></li>
                    <li><a href="cont.php">Contact_Us</a></li>
                </ul>
            </div>
            </nav>
        </section>  
        <div class="re">
                <table border="0">
                        <tr class="cel">
                 <td><a href="http://www.instagram.com"><img src="../imgs/icons/i.png" alt="Insta" height="24" width="25"></a> &nbsp;&nbsp;|&nbsp;&nbsp; </td>
                 <td><a href="http://www.twitter.com"><img src="../imgs/icons/t.png" alt="Twitter" height="24" width="25"></a>&nbsp;&nbsp; | &nbsp;&nbsp;</td>
                 <td><a href="http://www.facebook.com"><img src="../imgs/icons/f.png" alt="Twitter" height="24" width="25"></a> &nbsp;&nbsp;|&nbsp;&nbsp; </td>
                 <td><a href="http://www.pinterest.com"><img src="../imgs/icons/p.png" alt="Twitter" height="24" width="25"></a> &nbsp;&nbsp;|&nbsp;&nbsp; </td>
                 <td><a href="http://www.skype.com"><img src="../imgs/icons/s.png" alt="Twitter" height="24" width="25"></a> &nbsp;&nbsp;|&nbsp;&nbsp; </td>
                 <td>      <h4 style="font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;color:rgb(31, 31, 59);font-weight:bold;outline:solid;outline-size:1px;outline-color:brown;">Connect With Us!</h4></td>
                </tr>
                </table>
            </div>
            <main>
            <div id="mycontact">
                <h1 style="text-transform:capitalize; margin:30px 150px;" >contact us</h1>
                <p id="info">for more information or assistance please contactus at the  address below OR send us a message using the contact form.we look forward to hearing from you </p>
             <h3 style=" width:160px;height:20px;background-color:lightgreen; margin:10px 80px;">General Enqueries</h3><br>
             <p style="margin:0px 20px;"> 0788881234 (Hour of opertion : 09am - 05pm)<br>
                More info at <a href="mailto:info@lightuniversity.fr">info@lightuniversity.fr</a>
                <br>
                <h3 style=" width:160px;height:20px; margin:10px 80px;"> Send US A Message</h3><br>
                <div class="column">
                        <form  method="POST" action="cont.php">
                          <label for="fname">First Name</label>
                          <input type="text" id="fname" name="firstname" placeholder="Your firstname..">
                          <label for="lname">Last Name</label>
                          <input type="text" id="lname" name="lastname" placeholder="Your last name..">
                          <label for="country">Country</label>
                          <select id="country" name="country">
                            <option value="Rwanda">Rwanda</option>
                            <option value="RDC">RDC</option>
                            <option value="Kenya">Kenya</option>
                            <option value="Uganda">Uganda</option>
                            <option value="Tanzania">Tanzania</option>
                          </select>
                          <label for="subject">Subject</label>
                          <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
                          <input type="submit" value="Submit" name="submit">
                        </form>
                      </div>
             </p>
            </div>
            <?php  

if(isset($_POST["submit"])){
if(isset($_POST["firstname"]))
{
$fname=$_POST["firstname"];
}
if(isset($_POST["lastname"]))
{
$sname=$_POST["lastname"];
}
if(isset($_POST["country"]))
{
$count=$_POST["country"];
}
if(isset($_POST["subject"]))
{
$comment=$_POST["subject"];
}
$quer="INSERT INTO ussed(FirstName,LastName,Country,Comment) VALUES('$fname','$sname','$count','$comment')";
$an=mysqli_query($connect,$quer);
if($an)
{
echo "<script>alert('your message has been sent successfuly! wow')</script>";
}
else
{
echo "<script>alert('Message not sent)</script>";
}
}

?>
            </main>
            
             
</body>
<!-- Mirrored from www.w3schools.com/css/tryit.asp?filename=tryresponsive_image_background1 by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Oct 2016 13:43:07 GMT -->
</html>