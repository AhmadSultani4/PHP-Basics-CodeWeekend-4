<html>

	<head>
	<title>CodeWeekend Class of 2022 4th Assingment (Multiplication Table</title>
		<style type="text/css">
		body {
			font-size:12px;
		}
		
		td {
			height: 24px;
			text-align: center;
			width: 24px;
		}
		
		td.gray {
			background-color: #ccc;
		}
		
		td.white {
			background-color: #fff;
		}
		
		td a {
			display: block;
			text-decoration: none;
		}
		
		td a:hover {
			background-color: #faa;
		}
		.Table {
			background-color: Red;
			align: center;
		}
		</style>
	</head>

	<body>

		<table border="1" class="Table">
		
		<?php 
		for( $r = 1; $r < 11; $r++)
		{
		echo "<tr>";
			for( $c=1; $c<11; $c++)
			{
			($c==$r) ? $bg = "Blue" : $bg = "white";
			echo "<td class='$bg'><a href='#' title='$r x $c = ". $r * $c . " ' >" . $r*$c . "</a></td>" ;
			}		
		echo  "</tr>";
		}        
		?>
		</table>

	</body>

</html>
