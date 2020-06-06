<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
    <link rel="stylesheet" href="../css/mycss.css">
	<link rel="stylesheet" href="../css/myfooter.css">

	<style>
	input[type=submit]
	{
	font-size:19px;
	border-collapse:collapse;
	color:#CC6633;
	}
	input[type=submit]:hover
	{
	padding:4px 16px;
	font-size:19px;
	border-collapse:collapse;
	color:#CC6633;
	}
	input[type=reset]:hover
	{
	padding:4px 16px;
	font-size:19px;
	border-collapse:collapse;
	color:#CC6633;
	}
input[type=reset]
	{
	font-size:19px;
	border-collapse:collapse;
	color:#CC6633;
	}
	#faculty
	{
	padding:3px 50px;
	border:none;
	border-bottom:2px outset gray;
	border-radius:1px;
	font-family:"Times New Roman", Times, serif;
	font-style:italic;
	font-size:18px; color:black;
	}
	input[type=text]
	{
	padding:3px 50px;
	border:none;
	border-bottom:2px outset gray;
	border-radius:1px;
	
	font-family:"Times New Roman", Times, serif;
	font-style:italic;
	font-size:18px; color:#0066FF;
	}
	input[type=date]
	{
	padding:3px 50px;
	border:none;
	border-bottom:2px outset gray;
	border-radius:1px;
	font-family:"Times New Roman", Times, serif;
	font-style:italic;
	font-size:18px; color:#0066FF;
	}
	input[type=email]
	{
	padding:3px 50px;
	border:none;
	border-bottom:2px outset gray;
	border-radius:1px;
	font-family:"Times New Roman", Times, serif;
	font-style:italic;
	font-size:18px; color:#0066FF;
	}
	label
	{
	font-size:24px;
	font-style:italic;
	}
	td{ text-align:left;} sup{ color:#FF0000;} 
	select{
	padding:3px 50px;
	border:none;
	border-bottom:2px outset gray;
	border-radius:1px;
	font-family:"Times New Roman", Times, serif;
	font-style:normal;
	font-size:18px; color:black;
	}
	.address
	{
	padding:3px 50px;
	border:none;
	border-bottom:2px outset gray;
	border-radius:1px;
	font-family:"Times New Roman", Times, serif;
	font-style:normal;
	font-size:18px; color:black;
	}
	
	
	#faculty:hover
	{
	padding:3px 50px;
	border:none;
	border-bottom:3px outset green;
	background-color:#FFCC99;
	border-radius:1px;
	font-family:"Times New Roman", Times, serif;
	font-style:italic;
	font-size:18px; color:black;
	}
	input[type=text]:hover
	{
	padding:3px 50px;
	border:none;
	border-bottom:3px outset gray;
	border-radius:1px;
	background-color:lightgreen;
	font-family:"Times New Roman", Times, serif;
	font-style:italic;
	font-size:18px; color:#0066FF;
	}
	input[type=date]:hover
	{
	padding:3px 50px;
	border:none;
	border-bottom:3px outset green;
	border-radius:1px;
	background-color:lightgreen;
	font-family:"Times New Roman", Times, serif;
	font-style:italic;
	font-size:18px; color:#0066FF;
	}
	input[type=email]:hover
	{
	padding:3px 50px;
	border:none;
	border-bottom:3px outset green;
	border-radius:1px;
	background-color:lightgreen;
	font-family:"Times New Roman", Times, serif;
	font-style:italic;
	font-size:18px; color:#0066FF;
	}
	
	td:hover{ text-align:left;} sup:hover{ color:#FF0000;} 
	select:hover{
	padding:3px 50px;
	border:none;
	border-bottom:3px outset green;
	border-radius:1px;
	background-color:#FFCC99;
	font-family:"Times New Roman", Times, serif;
	font-style:normal;
	font-size:18px; color:black;
	}
	.address:hover
	{
	padding:3px 50px;
	border:none;
	background-color:#FFCC99;
	border-bottom:3px outset green;
	border-radius:1px;
	font-family:"Times New Roman", Times, serif;
	font-style:normal;
	font-size:18px; color:black;
	}
	#center:hover
	{
	border-left:5px inset #FFCC99;
	}
	</style>
	<script>
function validi()
{
var first=document.getElementById("fn").value;
var last=document.getElementById("ln").value;
var id=document.getElementById("I").value;
var m=document.getElementById("mail").value;
var dd=document.getElementById("dis").value;
if(first=="")
{
alert("Please enter your first name");
document.getElementById("fn").style.borderColor="red";
fn.focus();
return false;
}
else if(last=="")
{
alert("Please enter your last name");
document.getElementById("ln").style.borderColor="red";
document.getElementById("ln").focus();
return false;
}
else if(id=="" || isNaN(id))
{
alert("Please enter your Id, Only numbers");
document.getElementById("I").style.borderColor="red";
document.getElementById("I").focus();
return false;
}
else if(m=="")
{
alert("Please enter your email");
document.getElementById("mail").style.borderColor="red";
document.getElementById("mail").focus();
return false;
}
else if(dd=="")
{
alert("Please Fill all fields till down to district");
document.getElementById("dis").style.borderColor="red";
document.getElementById("dis").focus();
return false;
}
else
{
return true;
}
}

	</script>
</head>
<body>

<?php
include 'call.php';
?>
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
 </nav>
</section>  
 <div class="re">
 <table border="0">
 <tr class="cel">
 <td><a href="http://www.instagram.com"><img src="../imgs/icons/i.png" alt="Insta" height="24" width="25"></a> &nbsp;&nbsp;|&nbsp;&nbsp; </td>
 <td><a href="http://www.twitter.com"><img src="../imgs/icons/t.png" alt="Twitter" height="24" width="25"></a>&nbsp;&nbsp; | &nbsp;&nbsp;</td>
 <td><a href="http://www.facebook.com"><img src="../imgs/icons/f.png" alt="Facebok" height="24" width="25"></a> &nbsp;&nbsp;|&nbsp;&nbsp; </td>
 <td><a href="http://www.pinterest.com"><img src="../imgs/icons/p.png" alt="Pinterest" height="24" width="25"></a> &nbsp;&nbsp;|&nbsp;&nbsp; </td>
 <td><a href="http://www.skype.com"><img src="../imgs/icons/s.png" alt="Skype" height="24" width="25"></a> &nbsp;&nbsp;|&nbsp;&nbsp; </td>
 <td>      <h4 style="font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;color:rgb(31, 31, 59);font-weight:bold;outline:solid;outline-size:1px;outline-color:brown;">Contect With Us!</h4></td>
 </tr>
 </table>
</div>
	<div id="center" style=" margin-top:90px; text-align:center; margin-left:25%; opacity:0.8;">
	<h1 style="text-align:left;border-left:20px solid lightgreen;border-top:5px solid lightgreen;width:45%;">REGISTER TO DAY!</h1>
	
	<form action="register.php" method="post" onSubmit="return validi()">
	<table cellspacing="16">
	<tr><td><label>First Name:</label></td><td><input type="text" id="fn" name="fname" placeholder="Enter first Name" autofocus><sup>*</sup>&nbsp; E.g. Peter</td></tr>
	<tr><td><label>Last Name:</label></td><td><input type="text" id="ln" name="lname" placeholder="Enter last Name"><sup>*</sup> &nbsp;E.g. KALISA</td></tr>
	<tr><td><label>ID:</label></td><td><input type="text" name="id" id="I" placeholder="National ID" maxlength="16"><sup>*</sup> </td></tr>
	<tr><td><label>E-mail:</label></td><td><input type="email" name="email" id="mail" placeholder="Enter your e-mail"><sup>*</sup></td></tr>
	<tr><td><label>Date of Birth:</label></td><td align="center"><input type="date" name="DB" min="2007-12-31"><sup>*</sup></td></tr>
	<tr><td><label>Faculty:</label></td><td><select name="faculty" id="fac"> 
		 <option value="">Faculty</option> 
		 <?php
		 $query0="SELECT* FROM faculty";
		 $result0=mysqli_query($connect,$query0);
		 while($obj=mysqli_fetch_object($result0))
		 {
			 $fac_id=$obj->faculty_id;
		$fac_name=$obj->faculty_name;
		?>
		<option value="<?php echo $fac_id; ?>"><?php echo $fac_name; ?></option>
		<?php
		 }
		 ?>
	
	</select><sup>*</sup></td></tr>
	<tr><td><label>Level:</label></td><td><select name="level" id="lev"> 
		 
		 <option value="Level 1">Level 1</option>
		 <option value="Level 2">Level 2</option>
		 <option value="Level 3">Level 3</option>
		 <option value="Level 4">Level 4</option>
		 <option value="Level 5">Level 5</option>
		  
		
	
	</select><sup>*</sup></td></tr>
	<tr><td><label>Address:</label></td><td><select name="district" class="address" id="dis" onChange=""> 
	 <option value="">District</option> 
	 <?php
$query="SELECT* FROM district_tb";
$result=mysqli_query($connect,$query);
while($row=mysqli_fetch_array($result))
{
	?>

	<option value="	<?php echo $row[0]; ?>"><?php echo $row[1]; ?></option>
	<?php

}
?>
	
	
	</select> &nbsp;
	<!--<select name="sector" class="address" id="sec"><option value="">Sector</option></select><sup>*</sup>--></td></tr>
	<tr><td colspan="2" style="text-align:center;"><input type="submit" name="save" value="Register" > &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;<input type="reset" name="reset" value="Reset"></td></tr>
	</table>
	</form>
	
	</div>
	            <section>
                <br>
                <div class="myfooter">
                 <div class="foot" style="padding:10px;">
                 <table border="0" style="width:100%;">
                 <tr>
                     
                        <td id="part2">
                                <div id="side1">
                                <a href="http://www.instagram.com"><img src="../imgs/icons/i.png" alt="Insta" height="24" width="25"><span style="color:wheat;font-size: 20px;font-family:monospace,sans-serif;text-decoration: none;">Instagram</span></a><br><br>
                                <a href="http://www.twitter.com"><img src="../imgs/icons/t.png" alt="Twitter" height="24" width="25"><span style="color:wheat;font-size: 20px;font-family:monospace,sans-serif;">Twitter</span></a><br><br>
                                <a href="http://www.facebook.com"><img src="../imgs/icons/f.png" alt="Twitter" height="24" width="25"><span style="color:wheat;font-size: 20px;font-family:monospace,sans-serif;">Facebook</span></a><br><br>
                                <a href="http://www.pinterest.com"><img src="../imgs/icons/p.png" alt="Twitter" height="24" width="25"><span style="color:wheat;font-size: 20px;font-family:monospace,sans-serif;">Pinterest</span></a><br><br>
                                <a href="http://www.skype.com"><img src="../imgs/icons/s.png" alt="Twitter" height="24" width="25"><span style="color:wheat;font-size: 20px;font-family:monospace,sans-serif;">Skype</span></a><br>
                            </div> </td>
                         
                     <td id="part1">
                    <a href="../index.html"><span style="color:wheat;font-size: 20px;font-family:monospace,sans-serif;">&raquo;Home</span></a><br><br>
                    <a href="../html/aboutus.html"><span style="color:wheat;font-size: 20px;font-family:monospace,sans-serif;">&raquo;About_Us</span></a><br><br>
                    <a href="../html/campus.html"><span style="color:wheat;font-size: 20px;font-family:monospace,sans-serif;">&raquo;Campus</span></a><br><br>
                    <a href="../html/studentslife.html"><span style="color:wheat;font-size: 20px;font-family:monospace,sans-serif;">&raquo;Student_Life</span></a><br><br>
                    <a href="cont.php"><span style="color:wheat;font-size: 20px;font-family:monospace,sans-serif;">&raquo;Contact_Us</span></a>
                     </td>
            
                 </tr>
                 </table>
                 </div>                     
                </div>
                </section>

</body>
</html>