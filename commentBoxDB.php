<!doctype html>
<html>
<head>
<title>CommentBoxDatabase</title>
</head>

<body>
	<?php
	$con=mysqli_connect("localhost","root","");
	mysqli_select_db($con,"commentbox");
	
		$Comment= $_REQUEST["comment"];
		$query="insert into comments (message) values('$Comment') ";
		$ret=mysqli_query($con,$query);
	
		if($ret)
		{
			echo "Your comment was Inserted Successfully";
		}
		else
			echo "Your comment was Not Inserted Successfully";
	
	mysqli_close($con);
	?>
</body>
</html>