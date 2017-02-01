<?php

//This Function Takes a Ingredient String and returns an Asssoc Array That may contain the keys:
	//quantity, unit, name, info
	//The Info field contians any addtional info contained within the ingredient string
function ParserIndgredient($IngredientString){
	$IngredientData = array();
	if (preg_match("/[0-9][\/][0-9]|[0-9]/", $IngredientString)) { //Check To See If The Ingredient contains a certain amount.
		preg_match('/[0-9][\/][0-9]|[0-9]/', $IngredientString, $matches);
		$IngredientData['quantity'] = $matches[0];
		
		//Check To See If We Have a Matching Unit in our $IngredientString
		$Units = GetCookingUnits();
		
		//Check To See If We Can Find a Matching Unit
		foreach($Units as $Unit){
			if (preg_match("/\s+tsp\s+/", $Unit)) {
				preg_match('/[0-9][\/][0-9]|[0-9]/', $Unit, $matches);
				$IngredientData['unit'] = $matches[0];
				break;
			}
		}

	} 
	//We Dont a have an ingrident quanity thus we could only have an ingredient and possibly an info value	
	//We Can spilt these two strings up by spilting on the ","
	$ArrayString = explode(",", $IngredientString);
	if(count($ArrayString) > 4){
		$IngredientData['info'] = $ArrayString[1];
	} 
	$IngredientData['name'] = $ArrayString[0];
	
	
	return $IngredientData;
}
//This function will return all of the useful cooking units
function GetCookingUnits(){
	$Units = array();
	
	$Units = "teaspoon"; 
	$Units = "t"; 
	$Units = "tsp."; 
	
	$Units = "tablespoon"; 
	$Units = "T"; 
	$Units = "tbl."; 
	$Units = "tbs."; 
	$Units = "tbsp."; 
	
	$Units = "fluid ounce"; 
	$Units = "fl oz";
	 
	$Units = "gill"; 
	
	$Units = "cup"; 
	$Units = "c"; 
	$Units = "c."; 
	
	$Units = "pint"; 
	$Units = "p"; 
	$Units = "pt"; 
	$Units = "fl pt"; 
	$Units = ""; 
	
	$Units = "quart"; 
	$Units = "q"; 
	$Units = "qt"; 
	$Units = "fl"; 
	$Units = "qt";
	 
	$Units = "gallon"; 
	$Units = "g"; 
	$Units = "gal"; 
	
	$Units = "ml"; 
	$Units = "milliliter"; 
	$Units = "millilitre"; 
	$Units = "cc"; 
	$Units = "mL"; 
	
	$Units = "l"; 
	$Units = "liter"; 
	$Units = "litre"; 
	$Units = "L"; 
	
	return $Units;	
}


?>