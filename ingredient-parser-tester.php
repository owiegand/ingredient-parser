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

$IngredientStringArray[] = "2 lb. chicken wings";
$IngredientResultArray[] = array("2","lb.","chicken wings");

$IngredientStringArray[] = "2 tbsp. olive oil";
$IngredientResultArray[] = array("2","tbsp.","olive oil");

$IngredientStringArray[] = "1 tsp. garlic powder";
$IngredientResultArray[] = array("1","tsp.","garlic powder");

$IngredientStringArray[] = "1/4 c. hot sauce (such as Franks)";
$IngredientResultArray[] = array("1/4","c.","hot sauce");

$IngredientStringArray[] = "4 tbsp. butter";
$IngredientResultArray[] = array("4","tbsp.","butter");

$IngredientStringArray[] = "2 tbsp. honey";
$IngredientResultArray[] = array("2","tbsp.","honey");

$IngredientStringArray[] = "Ranch dressing,for serving";
$IngredientResultArray[] = array("for serving", "Ranch dressing");

$IngredientStringArray[] = "Carrot sticks, for serving";
$IngredientResultArray[] = array("for serving", "Carrot sticks");

$IngredientStringArray[] = "celery sticks, for serving";
$IngredientResultArray[] = array("for serving", "celery sticks");















//Test Each Condition
$Count =0;
foreach($IngredientStringArray as $key => $IngredientTest){
	$ReturnArray = ParserIndgredient($IngredientTest);
	
	if(array_diff($ReturnArray, $IngredientResultArray[$key])){
		echo "Failure On: ".$IngredientStringArray[$key]."<br>";
	}
	
	$Count++;
}
echo $Count." Successful Runs";





?>