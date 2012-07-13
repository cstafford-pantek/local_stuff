<?php
$json_data = array ('stuff'=>1,
					fname => "Chris",
					lname => "Stafford",
					mi => "B",
					phone => "12345",
					email => "c@s.com",
					user_id => "001",
					maiden => "Tenny",
					gender => "male",
					dob => "1-5-72",
					marital => "married",
					address1 => "1607 Chelmsford",
					address2 => "address2",
					apt => "apt 1",
					city => "Cleveland",
					state => "Ohio",
					zip => "44124",
					zip_sub => "1234",
					addy_type => "home");
$t = json_encode($json_data);

header("Location: catch.php?throw=$t");
?>

