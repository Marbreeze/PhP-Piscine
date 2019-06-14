#!/usr/bin/php
<?php
echo "Enter a number: ";
$input = fgets(STDIN); //get input from std
$input = trim($input); //sterge spatiul
if(is_numeric($input)) // verifica daca e numeric sau nu
{
  if($input % 2 == 0)
    echo ("The number $input is Even\n");
  else
    echo ("The number $input is Odd\n");
}
else {
  echo("This is not a number\n");
}
?>
