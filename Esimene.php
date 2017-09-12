<?php
	//See on kommentaar. Järgmisena paar muutujat.
	$myName = "Kairo";
	$myFamilyName = "Pettai";
	//Vaatame mis kell on ja määrame päeva osa.
	$hourNow = date("H");
	//echo $hourNow
	$partOfDay = "";
	if ( $hourNow < 8){
		$partOfDay = "varajane hommik";
		
	if ( $hourNow  >= 8 and $hourNow < 16){
		$partOfDay = "koolipäev";
	if ($hourNow <= 16 and $hourNow > 16){
		$partOfDay = "vaba aeg";
		
		$timeNow = strtotime(date("d:m:Y H:i:s"));
		echo $timeNow;
		$schoolTimeToEnd = strtotime(date("d:m:Y" ." " ." 15:45" ));
		$toTheEnd = $schoolDayEnd - $timeNow;
		echo (round($toTheEnd / 60));
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
		echo date("d.m.Y") ." Kell lehe avamisel oli " .date("H:i:s");
		echo ".</p>";
	?>
</body>
</html>