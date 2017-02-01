<?php
include('ingredient-parser.php');

//This program will run through some automated tests to check the ingredient-parsers correctness.

$IngredientStringArray = array();
$IngredientResultArray = array();


$IngredientStringArray[] = "1 c. white rice";
$IngredientResultArray[] = array("1","c.","white rice");

$IngredientStringArray[] = "extra-virgin olive oil";
$IngredientResultArray[] = array("extra-virgin olive oil");

$IngredientStringArray[] = "1 lb. shrimp, peeled and deveined";
$IngredientResultArray[] = array("1","lb.","shrimp","peeled and deveined");

$IngredientStringArray[] = "kosher salt";
$IngredientResultArray[] = array("kosher salt");

$IngredientStringArray[] = "Freshly ground black pepper";
$IngredientResultArray[] = array("Freshly ground black pepper");

$IngredientStringArray[] = "Salsa verde with tomatillo";
$IngredientResultArray[] = array("Salsa verde with tomatillo");

$IngredientStringArray[] = "1/4 c. Chopped cilantro";
$IngredientResultArray[] = array("1/4","c.","Chopped cilantro");

$IngredientStringArray[] = "Lime wedges";
$IngredientResultArray[] = array("Lime wedges");




//Test Each Condition
foreach($IngredientStringArray as $key => $IngredientTest){
	$ReturnArray = ParserIndgredient($IngredientTest);
	foreach($ReturnArray as $key2 => $return){
		if($return != $IngredientResultArray[$key][$key]){
			echo "Failure on String: ".$IngredientTest;	
			echo $return." ".$IngredientResultArray[$key][$key];	
			echo "<br>";
		}
	}

}




?>