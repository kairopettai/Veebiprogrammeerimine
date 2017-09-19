<?php
	//See on kommentaar. Järgmisena paar muutujat.
	$myName = "Kairo";
	$myFamilyName = "Pettai";
	
	$monthNameEt = ["jaanuar", "veebruar", "märts", "aprill", "mai", "juuni", "juuli", "august", "september", "oktoober", "november", "detsember"];
	//var_dump($monthNameEt);
	//echo $monthNameEt[9];
	$monthNow = $monthNameEt[date("n")-1];
	//Vaatame mis kell on ja määrame päeva osa.
	$hourNow = date("H");
	//echo $hourNow
	$partOfDay = "";
	if ( $hourNow < 8){
		$partOfDay = "varajane hommik";
	}
	if ( $hourNow  >= 8 and $hourNow < 16){
		$partOfDay = "koolipäev";
	}
	if ($hourNow > 16){
		$partOfDay = "vaba aeg";
	}
		$timeNow = strtotime(date("d:m:Y H:i:s"));
		echo $timeNow;
		$schoolDayEnd = strtotime(date("d:m:Y" ." " ." 15:45" ));
		$toTheEnd = $schoolDayEnd - $timeNow;
		//echo (round($toTheEnd / 60));
		
		//tegeleme vanusega
		$myBirthYear;
		$ageNotice = "";
		//var_dump($_POST);
		if ( isset($_POST["birthYear"]) ){
			$myBirthYear = $_POST["birthYear"];
			$myAge = date("Year") - $_POST["birthYear"];
			//echo $myAge;
			$ageNotice = "<p>Teie vanus on ligikaudu " . $myAge ." aastat.</p>";
			
			$ageNotice .= "<p>Olete elanud järgmistel aastatel:</p>";
			$ageNotice .= "<ul>";
			$yearNow = date("Y");
			for ($i = $myBirthYear; $i <=$yearNow; $i ++){
				$ageNotice .= "<li>" .$i ."</li> \n";
			}
		    $ageNotice .= "</ul>";
		}	
		
		//teeme tsükli
		/*for ($i = 0; $i < 5; $i ++){
			echo "ha";
		}*/
			
	
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Kairo Pettai veebiprogrammeerimine</title>
</head>
<body>
    <h1>
	<?php
		echo $myName ." " .$myFamilyName;
	?>

	veebiprogrammeerimine</h1>
    <p>See leht on loodud õppetöö raames ning ei sisalda mingit tõsiseltvõetavalt sisu.</p>
    <p>Olen 20-aastane Pärnust pärit noormees.</p>
    <P>Mängin bändis POSÕ, kuulake, see on hea.</p> 
	
	<?php
		echo "<p>See on esimene jupp PHP abil väljastatud teksti</p>";
		echo "<p>Täna on ";
		echo date("d. ") .$monthNow .date(" Y") ." Kell lehe avamisel oli " .date("H:i:s");
		echo ", käes on " . $partOfDay."</p>";
	?>
	
	<h2>Natuke aastaarvudest</h2>
	<form method="POST">
		<label>Teie sünniaasta: </label>
		<input type="number" name="birthYear" id="birthYear" min="1900" max="2017" value="<?php echo $myBirthYear; ?>">
		<input type="submit" name="submitBirthYear" value="Kinnita">
	
	</form>
	<?php  //!= tähendab et kui ta ei ole võrdne tühjusega
		if ($ageNotice != ""){
			echo $ageNotice;
		}
	?>
	
	
	
</body>
</html>