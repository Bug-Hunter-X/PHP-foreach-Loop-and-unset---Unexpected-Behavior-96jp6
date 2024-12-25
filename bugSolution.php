```php
<?php
function my_function($arr) {
  $keysToRemove = [];
  foreach ($arr as $key => $value) {
    if ($value === 'apple') {
      $keysToRemove[] = $key;
    }
  }
  foreach ($keysToRemove as $key) {
    unset($arr[$key]);
  }
  return $arr;
}

$fruits = array('apple', 'banana', 'apple', 'orange');
$newFruits = my_function($fruits);
print_r($newFruits);
?>
```