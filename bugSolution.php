```php
function my_function($a, $b) {
  if ($b === 0) {
    return INF; // Return positive infinity if denominator is zero 
  } elseif ($a === 0) {
    return 0; // Return 0 if numerator is zero
  }
  return $a / $b;
}
```