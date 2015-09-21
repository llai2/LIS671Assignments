<?php

//set up a function to calculate the ISBN numbers separately	
function calculateIsbn($one, $two, $three, $four, $five, $six, $seven, $eight, $nine, $ten) 
{
	
	$isbnValid = (((10 * $one) + (9 * $two) + (8 * $three) + (7 * $four) + (6 * $five) + (5 * $six) + (4 * $seven) + (3 * $eight) + (2 * $nine) + (1 * $ten)) % 11);
	return $isbnValid;
}

//divide up the numbers to assign variables to the function
$isbnNumber = "0545029376";
$numberOne = substr($isbnNumber, 0, 1);
$numberTwo= substr($isbnNumber, 1, 1);
$numberThree = substr($isbnNumber, 2, 1);
$numberFour = substr($isbnNumber, 3, 1);
$numberFive = substr($isbnNumber, 4, 1);
$numberSix = substr($isbnNumber, 5, 1);
$numberSeven = substr($isbnNumber, 6, 1);
$numberEight= substr($isbnNumber, 7, 1);
$numberNine = substr($isbnNumber, 8, 1);
$numberTen = substr ($isbnNumber, 9, 1);

//when numberTen is X, replace it with 10 and then place it in the function
if ($numberTen == "X")
	{
	$numberTen = "10";
	}
else 
	{
	$numberTen = $numberTen;
	}
	
//take all the variables and assign it to the function
$isbnValid2 = calculateIsbn($numberOne, $numberTwo, $numberThree, $numberFour, $numberFive, $numberSix, $numberSeven, $numberEight, $numberNine, $numberTen);

//an if/else statement that states that if the remainder of the function is 0, then it is valid. If not, it is not valid. 
if ($isbnValid2 == 0)
	{
	echo "Checking isbn: " . $isbnNumber . " for validity...";
	echo "<br>";
	echo "The ISBN Number is Valid";
	}
else 
	{
	echo "Checking isbn: " . $isbnNumber . " for validity...";
	echo "<br>";
	echo "The ISBN Number is NOT Valid";
	}

echo "<br> <br> <br>";

echo "Coin Toss!";
//single coin toss and print result
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
//continuously cointoss() for the x amount of times 
function coinTossMachine($zero)
{
do
{
coinToss();
$zero--;

} while ($zero > 0);
}

//flipping a coin 1 time
echo "<br>";
//flipping a coin 1 time
echo "Flipping a coin 1 time....";
$OneTime = coinTossMachine(1);
echo $OneTime;

//flipping a coin 3 times
echo "<br>";

echo "Flipping a coin 3 times....";
$ThreeTimes = coinTossMachine(3);
echo $ThreeTimes;

//flipping a coin 5 times
echo "<br>";
echo "Flipping a coin 5 times....";
$FiveTimes = coinTossMachine(5);
echo $FiveTimes;

//flipping a coin 7 times
echo "<br>";
echo "Flipping a coin 7 times....";
$SevenTimes = coinTossMachine(7);
echo $SevenTimes;

echo "<br>";
echo "<br>";
echo "Start of two coin toss </br>";

//assign new variables for the loops 
$tossCount = 0; 
$gotTwoHeads= 0; //flag to indicate two heads in a row

// get first toss and also continue it 
$toss1 = coinToss();


// continously loop until you get two heads in a row
while($gotTwoHeads==0){
	$toss2 = coinToss();
	$tossCount++;

//check if two tosses are heads , if not, update the toss1 to be toss2 since it is now our previous toss
	if(($toss1 == 0) and ($toss1 == $toss2)){
		$gotTwoHeads=1;
	}else{
		$toss1=$toss2;
	} 
}


//an echo statement to show how many times before two heads in a row 
echo ($tossCount-1) ."times before two heads in a row";



?>