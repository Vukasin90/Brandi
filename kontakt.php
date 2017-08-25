<?php
if (isset($_POST["submit"])) {
$to = "vukasin90@gmail.com"; // Vas email
$subject = "Kontakt sa sajta"; // Moyete da napravite i polje naslov poruke
$message=$_POST["poruka"]; // Poruka posetioca
$from =$_POST["email"]; // Email posetioca
$headers = "From:" . $from; // Zaglavlje maila
mail($to,$subject,$message,$headers); // Struktura maila

	$poruka = "Poruka je uspesno prosledjena"; // Poruka o uspesnomslanju poruke	
} else {
	$poruka = "Molimo popunite sva polja!";	
	}
?>