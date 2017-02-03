# ingredient-parser
This PHP parser takes basic string and tries to extract items such as Quanity, Units, Ingreident, and any addtional notes. 

### Usage
After adding this repo to your project you only need to call one PHP function. 
```php
$ReturnArray = ParserIndgredient($IngredientTest);

```
This function accepts a string similar to: 
* 1 c. white rice
* 1 lb. shrimp, peeled and deveined

and has the possible return values: 
```
array(4) { 
    ["quantity"]=> string(1) "1" 
    ["unit"]=> string(3) "lb." 
    ["info"]=> string(19) "peeled and deveined" 
    ["name"]=> string(6) "shrimp" 
}

```


### How to contribute
Inlcuded the repo is ingredient-parser-tester.php. This contains a simple way to add example ingredient strings and confirm their returned array outputs.
