<?php
include('process.php');
//$stuff = $_GET['throw'];

$obj = json_decode($_GET['throw']);
// echo $obj->name; //displays mike
// echo $obj->office[0]; //displays microsoft
print_r($obj);
	// new_contact($obj);

	// function new_contact($dataIn)
	// {
		 $newNewContact = new NewContact();	
		 $info = $newNewContact->set_contact($obj);
		
		//echo "<div class='cust-summ'><b>$info</b></div>";
		//echo '{"members":'.json_encode($info).'}';
		
		// return($info);
	//}
?>