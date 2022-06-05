# Harmony Framework
**A common-component PHP abstraction framework**

## Framework Fundamentals
The Framework is formed of two classes of components:
- **Common** for components that work in any environment
- Environment-specific (e.g. **CLI/Web**) for components that can only work properly in specific environments

To main consistency, functions:
- Always use `bool` as the return type to indicate successful execution (handy for use directly within `if` condition blocks)
- If the function needs to output extra information, the first parameter is reserved as a pointer parameter for delivering that output, with the value of the passed variable being unchanged if the function fails to complete successfully.

## Example function
Function:
```php
<?php namespace math;

function add(int &$result, int $num1, int $num2):bool{
  $result = $num1 + $num2;
  return true;
}
```
Example Usage:
```php
<?php

$num1 = 2;
$num2 = 4;
if(\math\add($result, int $num1, int $num2)){
  echo "$num1 plus $num2 is $result.";
}else{
  echo "I could not calulate $num1 plus $num2!";
}
```
Result: `2 plus 4 is 6.`
