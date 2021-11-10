<?php
	#reverse of a word
	$c=strrev("lailah");
	echo "reverse of lailah is $c<br>";
	
	#compare 2 strings
	$a="Hello";
	#$b="Hello";
	$b="ello";
	if ((strcmp($a, $b)==0)) #==0 true for $b="Hello";
		echo "strings are equal<br>";
	else
		echo "strings are not equal<br>";

	#counts the word in a string
	echo str_word_count("Kemigisa Lailah Grant");
	echo "<br>";

	#finds the position of a given word in a strin.. it starts from 0
	#echo strpos("Kemigisa Lailah", "Kemigisa"); 1
	echo strpos("Kemigisa Lailah", "migisa");
	echo "<br>";

	#from upper to lower
	$c="KEMIGISA";
	/*$b=strtolower($c);
	echo "$b";*/
	echo strtolower($c);
	echo "<br>";

	#from lower to upper
	$z="lailah";
	echo strtoupper($z);
	echo "<br>";

	#capitalize
	$s="grant";
	$l=ucfirst($s);
	echo "$l<br>";

	#capitalize every word
	$e="kemigisa lailah grant";
	echo ucwords($e);
	echo "<br>";

	#explode() return no of commas
	$eid="Hello, how, are, you";
	$e=explode(',',$eid);
	if(count($e)>=2)
		echo "<br>sting contains , symbol";
	else
		echo "<br>string doesnt contain , symbol";
	echo "<br>";

	#explode() prints in arrays (actual use of the fn)
	$eid="Hello, how, are,you";
	$e=explode(',',$eid);
	/*$eid="Hello_how_are_you";
	$e=explode('_',$eid); 2*/
	print_r($e); #prints an array with key and value
	echo "<br>";

	#implode() works with array & displays any symbol
	$a=array("how", "are", "you", "Lailah");
	$i=implode('#', $a);
	echo "$i <br>";

	#ltrim() removes space on the left 
	$a="    Hello how you Miss Lailah";
	$i=ltrim($a);
	echo "$i<br>";

	#rtrim() removes space from the right
	$a="my name is Lailah    ";
	$i=rtrim($a);
	echo "$i<br>";

	#trim() removes space on both LHS and RHS
	$a="    i hate you    ";
	$i=trim($a);
	echo "$i<br>";
 
	#<<< EOS  ..... EOS hear doc string. EOS can be any name.
	$a=<<< EOS
my name is Kemigisa Lailah Grant.
And this is my story.
I hate people
why??????
They suck..
some people call me weird,, but 
I think i am extraordinary 
EOS;
echo "$a<br>";

$a=<<< LAILAH
my name is Kemigisa Lailah Grant.
And this is my story.
I hate people
why??????
They suck..
some people call me weird,, but 
I think i am extraordinary..
ANYWAY,, I GUESS TAHTS IT 
LAILAH;
echo "$a<br>";


?>