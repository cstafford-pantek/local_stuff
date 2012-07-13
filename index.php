<?php
$json_data = array ('stuff'=>1,
					fname => "Chris",
					lname => "Stafford",
					phone => "12345",
					email => "c@s.com",
					user_id => "001",
					address1 => "1607 Chelmsford",
					apt => "apt 1",
					city => "Cleveland",
					state => "Ohio",
					zip => "44124",
					addy_type => "home");
$t = json_encode($json_data);

header("Location: catch.php?throw=$t");
?>

