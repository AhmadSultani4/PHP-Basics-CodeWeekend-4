<?php
$ans=" ";
if(isset($_POST['sub'])){
	$num1=$_POST['n1'];
	$num2=$_POST['n2'];
	$oprnd=$_POST['sub'];
	if($oprnd=="Ans")
		$ans=$num1*$num2;
	
}?>
<html>
<head>
	<style type="text/css">
		.container
		{
			left: 25%;
			padding: 100px;
			text-align: center;
			border: 1px solid green;
			
		}
		input, select {
  			width: 40%;
  			padding: 12px 20px;
  			margin: 8px 0;
  			display: inline-block;
  			border: 1px solid #ccc;
  			border-radius: 4px;
  			box-sizing: border-box;
		}

		input[type=submit] {
  			width: 5%;
 		 	background-color: magenta;
  			color: white;
  			padding: 14px 20px;
  			margin: 8px 0;
  			border: none;
	 	 	border-radius: 4px;
  			cursor: pointer;
}
	</style>
</head>
<body>
<div class="container">
<form method="post" action="">
<h1>CodeWeekend Class of 2022- 4th Assingment (Area Calculator)</h1>
<br>
Enter the Length in (m):&nbsp &nbsp <input name="n1" value="">
<br>
Enter the width in (m):&nbsp &nbsp<input name="n2" value="">
<br>
<input type="submit" name="sub" value="Ans">
<br>
<br>Answer: <input type='text' value="<?php echo $ans . "  Squar Meter"; ?>"><br>
</form>
	</div>
</body>
</html>