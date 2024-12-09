```php
$array = [1, 2, 3];
$newArray = [];
foreach ($array as $value) {
if ($value !== 2) {
    $newArray[] = $value;
}
}
print_r($newArray);

//Alternative solution using array_filter
$newArray2 = array_filter($array, function($value){ return $value !==2;});
print_r($newArray2);
```