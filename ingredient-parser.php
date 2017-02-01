<?php

//This Function Takes a Ingredient String and returns an Asssoc Array That may contain the keys:
	//Amount, Unit, Name, Info
	//The Info field contians any addtional info contained within the ingredient string
function ParserIndgredient($IngredientString){
	$IngredientData = array();
	if (preg_match("/[0-9][\/][0-9]|[0-9]/", $IngredientString)) { //Check To See If The Ingredient contains a certain amount.
		
	} 
	//We Dont a have an ingrident quqnaitiy thus we could only have an ingredient and possibly an info value	
	//We Can spilt these two strings up by spilting on the ","
	$ArrayString = explode(",", $IngredientString);
	if(count($ArrayString) > 4){
		$IngredientData['info'] = $ArrayString[1];
	} 
	$IngredientData['name'] = $ArrayString[0];
	
	
	return $IngredientData;
}
?>