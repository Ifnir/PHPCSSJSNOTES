$excludeField = ["TYPE", "CONFIGURABLE_ATTRIBUTES"];
$dynamicFields = ["TYPE" => "simple", "CONFIGURABLE_ATTRIBUTES" => ""];

/*
* https://www.php.net/manual/en/function.array-flip.php
* https://www.php.net/manual/en/function.array-diff-key.php
*
* returns []
*
*/

return array_diff_key($dynamicFields, array_flip($excludeField));


/************************************************************************/
$example1 = 
[
  "size" => 
    [
      "en" => "L"
    ]
];

array_map(function ($value) {
  return $value['en'];
}, $example1);

/*
*
* https://www.php.net/manual/en/function.array-map.php
*
* return ["size" => "L"]
*/
