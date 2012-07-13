<?php

class NewContact
{

function set_contact($dataIn)
{
 $a = $dataIn->fname; //displays mike
 $b = $dataIn->lname; //displays mike
 //echo $dataIn->office[0]; //displays microsoft

 echo "<br><br>Name: " .strtoupper($dataIn->fname). " $dataIn->lname";

}//End Get_ByID



}//end NewContact
?>