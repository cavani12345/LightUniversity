<?php
	include 'call.php';
	if(isset($_POST['save']))
	{
        $cname=$_POST['cname'];
        $abb=$_POST['abb'];
        $fac_id=$_POST['faculty'];
		
	$query2="select course_id from course_tb";
	$answer2=mysqli_query($connect,$query2);
	while($line=mysqli_fetch_object($answer2))
	{
	$a=$line->course_id;
	}
	$course_code=$abb."".($a+1);
	$query="INSERT INTO course_tb(course_name,course_abbre,course_code,faculty_id,admin_id)
     VALUES('$cname','$abb','$course_code',$fac_id,1)";
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
       <a href="course.php">back</a>
    <?php
	}
	}
   mysqli_close($connect);
	?>