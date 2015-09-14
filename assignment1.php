<?php 
$change = 159;

{
//tells the total amount of change being dispensed
echo "You are due " . $change . " cents back in change total";

// divide by 100 (integer) (dollars)
$change2 = (int) ($change / 100);
// remainder from the division
$remainder = ($change % 100);
echo "<br>";
echo "You Have " . ($change2) . " Dollars.";

// use the remainder and divde by 25 (quarters) 
$quarters2 = (int)($remainder / 25);
// create a new remainder by taking the old one and subtracting the new change
$remainder2 = ($remainder - ($quarters2 * 25));
echo "<br>"; 
echo "You Have " . ($quarters2) . " Quarters.";

//use the remainder and divide by 10 (dimes)
$dimes = (int) ($remainder2 / 10);
// create a new remainder by taking the old one and subtracting the new change
$remainder3 = ($remainder2 - ($dimes * 10));
echo "<br>";
echo "You Have " . ($dimes) . " Dimes.";

//use the remainder and divide by 5 (nickels)
$nickels = (int) ($remainder3 / 5);
//create a new remainder by taking the old one and subtracting the new change 
$remainder4 = ($remainder3 - ($nickels * 5));
echo "<br>";
echo "You Have " . ($nickels) . " Nickels";

//use the remainder and divide by 1 (pennies)
$pennies = (int) ($remainder4 / 1);
echo "<br>";
echo "You Have " . ($pennies) . " Pennies.";

}
echo "<br>";
echo "<br>";


{
$beer = 10;
//start from original beer count and count all the way down to 0. Then execute the last line. 
do
{
	echo "<br>";
	echo $beer . " bottles of beer on the wall, " . $beer . " bottles of beer!";
	--$beer;	
} while ($beer > 0);
echo "<br>";
echo "Take one down and pass it around. 0 bottles of beer!";
}
 
?> 
