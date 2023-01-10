<?php

function removeDuplicate($inputString)
{
  $arr = str_split($inputString);
  $arr_count = count($arr);

  for ($i = 1; $i < $arr_count; $i++) {
    if ($arr[$i-1] == $arr[$i]) {
      unset($arr[$i]);
      unset($arr[$i-1]);
      $cuttedString = implode("",$arr);

      return removeDuplicate($cuttedString);
    }
  }

  return $inputString;
}

$str = "mississippi";
$newstring = removeDuplicate($str);
echo $newstring."<br><br>";




// TO DO: the error in unset is because we are using a string as an array
// need to solve this

?>




<!-- 1. create an array from string
2. compare every letter in array with the next one
3. if == remove both letters
    if else != go to the next letter and compare

    break if no duplicate letters were found -->
