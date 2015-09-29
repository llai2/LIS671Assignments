<?php
//put together all the data into an array
$bookdata = array (
	array("PHP and MySQL Web Development", "Luke Welling", 144, "Paperback", 31.63),
	array("Web Design with HTML, CSS, JavaScript, and jQuery", "Jon Duckett", 135, "Paperback", 41.23),
	array("PHP Cookbook: Solution & Examples for PHP Programmers", "David Sklar", 14, "Paperback", 40.88),
	array("JavaScript and JQuery: Interactive Front-End Web Development", "Jon Duckett", 251, "Paperback", 22.09),
	array("Modern PHP: New Features and Good Practices", "Josh Lockhart", 7, "Paperback", 28.49),
	array("Programming PHP", "Kevin Tatroe", 26, "Paperback", 28.96),
);

//create a function that prints out all the data in a table format
function bookCount($books){
echo "<table>";
for ($y = 0; $y <=4; $y++)
{
	echo "<tr>";
for ($x = 0; $x <= 4; $x++)
	{


	echo "<td>", $books[$x][$y] , "</td>";

		}
	echo "</tr>";
}
}
echo "</table>";


//call the function once to display the data
$callOnce = bookCount($bookdata);
echo $callOnce;

//calculate total price 
echo "Total Price  ". (($bookdata[0][4]) + ($bookdata[1][4]) + ($bookdata[2][4]) + ($bookdata[3][4]) + ($bookdata[4][4]));

echo "<br>";
echo "Coin Toss!";
//function to perform cointoss and then determine heads or tails
function coinToss(){
	$coinToss = mt_rand(0,1);
	if ($coinToss == 0)
	{
		echo "<br>Heads<br>";
	}
	else 
	{
		echo "<br>Tails<br>";
	}
	return $coinToss;
}
//created a function for user input number of times 
function coinToss2($numOfTimes){
//assign new variables for the loops 
$tossCount = 0; 
$gotTwoHeads= 1; 

// get first toss and also continue it 
$toss1 = coinToss();


// continously loop until the specified amount of times 
while($gotTwoHeads != $numOfTimes){
	$toss2 = coinToss();
	$tossCount++;

//check if two tosses are heads, if it is, continue to desired number. If not, update toss2 to toss1 as it is now our previous toss. 
//Also keep $getTwoHeads back at default.
	if(($toss1 == 0) and ($toss1 == $toss2)){
		$gotTwoHeads++;
	}else{
		$toss1=$toss2;
		$gotTwoHeads=1;
	} 
}

//print the number of tosses needed for the desired number of times in a row
echo "Needed ".$tossCount." for ". $numOfTimes . "in a row <br>";

}


coinToss2(4);




?>
