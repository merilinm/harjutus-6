<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>harjutus-6 - Loogika operaatorid</title>
</head>
<body>
	<h2>Tingimuslaused</h2>
	<?php
	$a = 4;
	$b = 5;
	if ($a < $b) {
		echo "$a on väiksem kui $b";
	}
	echo "<br>";
	$a = 6;
	$b = 5;
	if ($a < $b) {
		echo "$a on väiksem kui $b";
	} elseif ($a == $b) {
		echo "$a on $b";
	} elseif ($a > $b) {
		//Kuna see on tõene, siis väljestatakse see tekst.
		echo "$a on suurem kui $b";
	}
	echo "<br>";
	$a = 5;
	$b = 5;
	if ($a < $b) {
		echo "$a on väiksem kui $b";
	} elseif ($a == $b) {
		//Kuna see on tõene, siis väljestatakse see tekst.
		echo "$a on $b";
	} elseif ($a > $b) {
		echo "$a on suurem kui $b";
	}
	echo "<br>";
	$a = 3;
	$b = 5;
	if ($a < $b) {
		//Kuna see on tõene, siis väljestatakse see tekst.
		echo "$a on väiksem kui $b";
	} elseif ($a == $b) {
		echo "$a on $b";
	} elseif ($a > $b) {
		echo "$a on suurem kui $b";
	}
	echo "<br>";	
	$age = 18;
	$age_limit = 18;
	if ($age >= $age_limit) {
		echo "Olete piisavalt vana. Tulge edasi!";
	} elseif ($age < $age_limit) {
		echo "Kahjuks olete liiga noor. Te peate olema vähemalt 18 aastat vana. Tulge n aasta pärast tagasi";
	}
	echo "<br>";
	$var1 = 3;
	$var2 = 3;
	$var3 = 4;
	$var4 = 5;
	if (($var1 == $var2) && ($var3 > $var4)) {
		// See koodiplokk ei käivitu, kuna muutuja 3 on väiksem muutuja 4st.
		echo "Mõlema komponentlause tõeväärtus on true";
	}
	if (($var1 == $var2) || ($var3 > $var4)) {
		// See koodiplokk käivitub, kuna esimene tehe on tõene.
		echo "Ühe komponentlause tõeväärtus on true";
	}
	echo "<br>";
	if (!isset($nothing)) {
		echo "Muutuja nothing on väätustatud.";
	}
	?>
	<h3>Switch</h3>
	<?php
	$current_language = "it";
	switch ($current_language) {
		case 'et':
			echo "Tere! Kuidas sul läheb?";
			break;
	echo "<br>";			
		case 'ru':
			echo "Добро пожаловать! Как дела?";
			break;	
	echo "<br>";				
		case 'fi':
			echo "Tervetuloa! Miten menee?";
			break;
	echo "<br>";
		default:
			echo "Hello! How are you doing?";
	}
	?>
</body>
</html>