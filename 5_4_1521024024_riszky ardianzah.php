<html>
<head>
    <title>SK 5_4 Riszky Ardianzah</title>
	<style>
		table, td {
			border: 1px solid blue;
			border-collapse: collapse;
		}
		td {
			padding: 2px;
		}
		table#t 	{
			text-align:center;
		}

	</style>
</head>
<body>
	<table id="t">
    <?php
	
	$n =5;
	for($j=0;$j<=95;$j++){
		$i=5;
		$i=$i+$j;
		$bil[$j][0]=$i;
		for($a=0;$a<=998;$a++){
			if ($a<=0){
				$n=$i;
			}
			$n=$n+5;
			$bil[$j][$a+1]=$n;
		}
	}
		for($j=0;$j<=95;$j++){
			echo "<tr>";
			echo "<td>&nbsp" .$bil[$j][0]. "</td>";
			for($a=0;$a<=35;$a++){
				echo "<td>&nbsp" .$bil[$j][$a+1]. "</td>";
			}
			echo "<td>....</td>";
			echo "<td>" .$bil[$j][999]. "</td>";
			echo "</tr>";
		}
	"</table>";
    ?>
</body>
</html>