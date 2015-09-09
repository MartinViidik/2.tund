<?php
	$first_name = "Martin";
	$last_name = "Viidik";
	
	echo $first_name." ".$last_name;
?> 
<br>
<?php

	$age = 18;
	
	// testib loogikat, juhul kui vanus on väiksem kui 18, siis kirjutab ""alaealine""
	// kui 18 või üle, siis ""täisealine""
	
	if($age < 19) {
		// tõene
		echo "alaealine";
		
	} else {
		// väär
		echo "täisealine";
	}

?>
<br>
<?php

	// vastavalt vanusele trükime niimitu korda välja sõna "palju"
	
	for($i = 0; $i < $age; $i = $i + 1) {
		
		// tegevus mis kordub
		echo "palju ";
		
	}

		echo "õnne!";
		

?>