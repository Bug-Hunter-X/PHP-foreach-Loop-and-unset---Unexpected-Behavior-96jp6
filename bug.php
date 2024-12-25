```php
<?php
function my_function($arr) {
  foreach ($arr as $key => $value) {
    if ($value === 'apple') {
      unset($arr[$key]);
    }
  }
  return $arr;
}

$fruits = array('apple', 'banana', 'apple', 'orange');
$newFruits = my_function($fruits);
print_r($newFruits);
?>
```