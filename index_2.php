<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>

<?php

	if (!@include_once("include/fuggvenyek.php"))
	{
		echo 'az oldal jelenleg nem elérhető, kérjük próbáld meg kicsit később';
		exit();
	}
	
	if (!$adatbazis=@mysqli_connect('localhost', 'root', '', 'vendegkonyv'))
	{
		echo 'az oldal jelenleg nem elérhető, kérjük próbáld meg kicsit később';
		exit();
	}

		
			if ( (isset($_POST["nev"])) && (isset($_POST["hozzaszolas"])) )
			{
				$nev=trim($_POST["nev"]);
				$hozzaszolas=trim($_POST["hozzaszolas"]);
				
				$hibas=false;
				
				if (preg_match("/^[a-zöüóőúéáűíÖÜÓŐÚÉÁŰÍ\. -]{5,200}$/i", $nev)==0)
				{
					print "Add meg a neved!<br>";
					$hibas=true;
				}
				
				if ( (strlen($hozzaszolas)<10) || (strlen($hozzaszolas)>10000) )
				{
					print "A hozzászólás legalább 10 és maximum 100 karakter lehet!<br><br><br>";
					$hibas=true;
				}
				
				if (!$hibas)
				{
					//felvétel az adatbázisba
					$sql='insert into hozzasz values (not null, "'.$nev.'", "'.$hozzaszolas.'", '.time().')';
				
					if (!mysqli_query($adatbazis, $sql))
					{
						print 'hiba';
					}
					else
					{
						print 'sikeres hozzászólás';
					}
				}
			}
			

		?>
		
		<form action="index.php" method="post">
			
			Név: <input type="text" name="nev" value="<?php @kiir($_POST["nev"]); ?>"><br><br>
			Hozzászólás:<br>
			<textarea name="hozzaszolas" style="width: 400px; height: 150px"><?php @kiir($_POST["hozzaszolas"]); ?></textarea><br><br>
			<input type="submit" value="Beírom!">
			
		</form>
		
		<hr>
		
		<?php
		
		if (!$eredmeny=mysqli_query($adatbazis, 'select * from hozzasz'))
		{
			print 'Nem sikerült megjeleníteni a hozzászólásokat!';
		}
		else
		{
			print '<table border="1" cellpadding="5">';
			
			while ($sor=mysqli_fetch_assoc($eredmeny))
			{
				print '<tr style="background: grey; font-weight: bold;">';
				print '<td>'.$sor['azonosito'].'</td>';
				print '<td>'.$sor['nev'].'</td>';
				print '<td>'.date('Y.m.d H:i:s', $sor['datum']).'</td>';
				print '</tr>';
				print '<tr>';
				print '<td colspan="3">'.$sor['hozzaszolas'].'</td>';
				print '</tr>';
				
				
				
			}
		}
		
		?>
		
		
    </body>
</html>
