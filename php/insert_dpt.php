<?php
	include 'call.php';
	if(isset($_POST['save']))
	{
        $cname=$_POST['cname'];
        $abb=$_POST['abb'];
	$query="INSERT INTO faculty(faculty_name,faculty_code)
     VALUES('$cname','$abb')";
	 $answer=mysqli_query($connect,$query);
	if($answer)
	{
	echo "<script> alert(' it is added')</script>";
	?>
<a href="course.php">back</a>
<?php
	}
	else
	{
	echo "<script> alert('Transaction failed')</srcipt>";
		?>
       <a href="department.php">back</a>
    <?php
	}
	}
   mysqli_close($connect);
	?>