<?php
echo "Enter a number: ";
$input = fgets(STDIN);
$input = trim($input);
if(is_numeric($input))
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
