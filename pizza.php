<html>
	<head>
    	<meta content="text/html; charset=UTF-8" http-equiv="content-type">
		<title>FES LA TEVA PIZZA - Prova competencial pj9f5a15</title>
	</head>
	<body>
		<?php
        	$preu = 12;
          	$IVA=10;
          	if (empty($_GET['ingr'])) {
            	$pvp=((100+$IVA)/100)*$preu;
	    		echo "Has demanat només la pizza bàsica. El preu és $pvp € (IVA inclòs)<br>";
			}          
          	else {
            	$pvp=((100+$IVA)/100)*($preu+count($_GET['ingr']));
	     		echo "Has demanat la pizza bàsica amb:<br> ";
	     		foreach ($_GET['ingr'] as $ingredient) {
	          		if ($ingredient) {
		        		echo "* $ingredient<br>";
		   			}
	      		}
	      		echo "El preu és $pvp € (IVA inclòs)<br>";
			}
			echo "<br>";
     	?>
     	<a href="index.html">Torna a index.html</a><br>
	</body>
</html>
