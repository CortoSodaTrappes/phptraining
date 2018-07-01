<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<p>Dans un vrai site et non dans une page web qui contient des multitude de notes sur tout le PHP, il aurait mieux fallu créer des classes css et les ajouter et enlever selon les différentes conditions.</p>
	<?php
		$cells=""; $line="" ; $table="";
		for($i=0 ; $i<=9 ; $i++){
			for($j=1 ; $j<=10 ; $j++){
				$allcells = "text-align:center;width:2em;height:2em;";
				$rightline = "border-right:1px solid black;";
				$leftline = "border-left:1px solid black;";
				$bottomline = "border-bottom:1px dashed black;" ;
				$topline = "border-top:1px dashed black;" ;

				$style = ($j>1) ? "style='$allcells $rightline'" : "style='$allcells $rightline $leftline'" ;

				if($i == 0 && $j == 1){
					$style = "style ='$allcells $rightline $leftline $bottomline $topline'" ;
				}
				elseif($i > 0 && $j == 1){
					$style = "style ='$allcells $rightline $leftline $bottomline'" ;
				}
				elseif($i == 0 && $j > 1){
					$style = "style ='$allcells $rightline $bottomline $topline'" ;
				}
				else{
					$style = "style ='$allcells $rightline $bottomline'" ;
				}

		 		$cell = ($i*10)+$j;
				$line = $line . "<td $style>" . $cell . "</td>" ;
			}

			$table = "$table<tr style='border-bottom:1px dotted black;'>$line</tr>" ;
			$line ="" ;
		}
		echo "<table style='margin:10px auto 0 auto;'>$table</table>" ;

	?>
</body>
</html>
