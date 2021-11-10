<?php
	function sayhello($msg="This is a function")
	{
		echo "Hi::$msg";
	}
	//sayhello() fn call
	$sh="sayhello"; #place holder
	$sh();

	echo "<br><br>";#fn 2
	#annonymous function/lambda fn
	$add=create_function('$a,$b', '$c=$a+$b; return $c;');
	echo $add(20,30);
	echo "<br><br>";


	function counter()
	{
		#$cnt=1; prints only 1
		static $cnt=1; #hold 1 and increments
		#persists the value if not in increment value
		echo "$cnt<br>";
		$cnt++;
	}
	counter();
	counter();
	counter();
	counter();
	counter();
?>