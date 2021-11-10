<?php
//numerical arrays
$names=array('Lailah','Grant','Sidon');
echo 'name is '.$names[0].'<br>'; //call values using index or keys
echo $names[2];
echo "<br><br>";

//associative array - specify both key and value
$ages=array('Lailah'=>18,'Grant'=>19,'Sidon'=>20);
echo 'LAilah is '.$ages['Lailah'].' years old';
echo "<br><br>";

//date and time
$date=date('m-d-y');
$time=time('H:i:s');
$day=date('l');
echo 'The current day is '.$day.'<br>';
echo 'The current time is '.$time.'<br><br>';

//isset fn
if(isset($_GET['user'])){
	echo 'Welcome to the website'.$_GET['user'].'<br><br>';
} //on browser,no  display so we add ?user=lilah in the url


$a=array(10,20,30,40,50,60,70);
print_r($a); #prints an array with key and value fn1
echo "<br><br>";
foreach($a as $value)
{
	echo " array contains $value<br>";
}

#var_dump() prints array_keyword,size_of_array,datatype,key and value
$b=array(10,"20",3.7,40,50,60);
var_dump($b);
echo "<br><br>";

#range()  prints all the values btn eg range(10,100) 10 to 100
$c=range(10, 100);
print_r($c);
echo "<br><br>";

$d=range(10, 100,10);#prints 10,20,30 .... 100
print_r($d);
echo "<br><br>";

$e=range("a", "z");
print_r($e);
echo "<br><br>";

//add new component
$f=array(0=>10,'a'=>20,"b"=>30,1.0=>40);
//index array, index can be either string or number
$f[]=50;
echo "<br>";


//add more components but size must be greater than the initial components eg if they are 5 values,add 6+
#if negative value is used,the given value comes before the already used array
$g=array_pad($f, 15, 1200);
print_r($g);
echo "<br><br>";

$go=array_pad($f, 15,1200);
$k=range(10, 100);
print_r($go);
echo "<br><br>";

$g=array_pad($f, -15, 1200);
print_r($g);
echo "<br><br>";

//count() fn counts number of elements in array
$h=count($f);
echo "count fn:  $h<br><br>";

//sizeof() gives the size of array
echo sizeof($f);
echo "<br><br>";

//a) list()
$i=array('a'=>10,'b'=>20,30,40,50);
//print_r($i);
list($m)=$i;
echo "list displays $m<br><br>";

//b) list() prints the values in array 
$ad=array(10,20,30,40,50,60);
list($a,$b,$c,$d)=$ad;
echo "$a<br>";
echo "$b<br>";
echo "$c<br>";
echo "$d<br><br>";

//shuffle() shuffles values in array on every shuffling but index/key dont change
$ac=array("a"=>10,"b"=>20,"c"=>30,"d"=>40,"e"=>50);
shuffle($ac);
print_r($ac);
echo "<br><br>";

//array_slice() slices given values in a given range
$ad=array(10,20,30,40,50,60);
$lo=array_slice($ad, 2,4);
print_r($lo);
echo "<br><br>";

//array_flip() changes key 2 value on and shuffles on refresh
$rt=array_flip($ac);
print_r($rt);
echo "<br><br>";

$p=array(10,20,30,40);
$q=array(50,60,70,80);
$r=array(90,100,110,120);

$multi=array($p,$q,$r);
print_r($multi);
echo "<br><br>";

$z=array(10,20,30,40,50);
echo "<br>Iterator fn like foreach<br>";
echo current($z); #shows value @ index 0
echo "<br>";

echo next($z);  #shows value @ next index
echo "<br>";

echo end($z);   #shows  value @ last index
echo "<br>";

echo prev($z); #shows value @ previous index
echo "<br><br>";

echo "Other array functions<br>";
$v=array_keys($ac); #returns only e array keys 
print_r($v);
echo "<br><br>";

$j=array_values($ac); #returns only e array values with usuall index eg 0,1,2...
print_r($j);
echo "<br><br>";

$at=array("a"=>10,"b"=>20,"c"=>30,"d"=>40,"e"=>50,60,70,80,90);
$w=array_chunk($at, 3); #splits array values in chunks depending on the specified sizes
print_r($w);

$arr=array(array(1,2,3,4,5), array(6,7,3));
echo "before<br>";
var_dump($arr);

foreach($arr as $k1 => $q)
{
	foreach($q as $k2 => $r)
	{
		if($r==3)
		{
			unset($arr[$k1][$k2]);
		}
	}
}
echo "<br><br>after:<br>";
print_r($arr);
echo "<br><br>";

$country="Uganda";
$capital="Kampala";
$airport="Entebbe";
$indcity="Mukono";

$comp=compact("country","capital","airport","indcity");
print_r($comp);
echo "<br><br>";
print_r(each($comp)); #each iterative
echo "<br><br>";

#aray-key-exists checks for a given array key
$cv=array("a"=>10,"b"=>20,"c"=>30);
if(array_key_exists("a", $cv))
echo "yes  key exists";
else
echo "key doesnt exist";
echo "<br><br>";

$re=array("a"=>10,"b"=>20,"c"=>30);
if(array_search(700, $re))
{
	echo "yes it is there in the array";
}
else
{
	echo "not in array";
}
echo "<br><br>";

$we=array("a"=>10,"b"=>20,"c"=>30);
$rev=array_reverse($we);
print_r($rev);
echo "<br><br>";

$we1=array(1000,2000,3000,4000);
$merge=array_merge($we,$we1);
print_r($merge);
echo "<br><br>";

#array_diff prints only arrays that appear in one array
$we2=array(1000,2000,3000,10);
#$we2=array(1000,2000,3000); it only prints the $we(associative)
$dif=array_diff($we, $we2);
print_r($dif);
echo "<br><br>";

#
function arr_union($we,$we1)
{
	$a_merge=array_merge($we,$we1);
	$union=array_unique($a_merge);
	return $union;
}
$uni=arr_union($we,$we1);
print_r($uni);
echo "<br><br>";

function ar_union($we,$we2) #userdefined fn
{
	$ar_merge=array_merge($we,$we2);
	$union1=array_unique($ar_merge);
	return $union1;
}
$unii=ar_union($we,$we2);
print_r($unii);
echo "<br><br>";

function pass_fail($res)
{
	if(($res>=50))
	{
		return $res;
	}
}
$res=array(50,20,80,90,10,45,86,75,96,32);
$pass=array_filter($res,'pass_fail');
print_r($pass);
echo "<br><br>";

$a=40;
echo "Value of a before using unset fn is $a<br>";
unset($a);
echo "Value of a after using unset fn is $a<br>";
echo "<br><br>";

#extract() returns the key of arrays on echo,,
$pearl=array("country"=>"Uganda","capital"=>"Kampala","airport"=>"Entebbe","indcity"=>"Mukono");
extract($pearl);
echo "$country";
echo "<br>$capital";
echo "<br>$airport";
echo "<br>$indcity";
echo "<br><br>";

$l=array(10,20,30,40,50);
$z=array_sum($l); //inbuit fn array_sum
print_r($z);
echo "<br><br>";

$y=array_product($l); //inbuit fn array_product

print_r($y);
echo "<br><br>";

//array_push adds elements/given values @ e end of the array in stack datatype  
$s=array();
array_push($s, 10,20,30,40,50); //gives automatic index
$s[]=60;//gives automatic index
$s[9]=70; //gives specified index 9
print_r($s);
echo "<br><br>";

//array_pop fn extracts the last array value(Last In First Out) works on array & stack datatype. 

array_pop($s);
echo "<br>after pop function<br>";
print_r($s);
echo "<br><br>";

//in Queue datatype,(First In First Out), unshift adds @ the 1st, shift removes at the 1st of the array
$b=array();
array_push($b, 100,200,300,400);
print_r($b);

echo "<br>after shift function<br>";
		array_shift($b);
		print_r($b);
echo "<br><br>";		

echo "<br>after unshift function<br>";
		array_unshift($b, 1000,2000,3000);
		print_r($b);
echo "<br><br>";

echo "<br>after<br>";
array_shift($b);
print_r($b);
echo "<br><br>";

echo "Sorting<br>";
$t=array(65,48,32,94,62,10,66,99);
sort($t);
print_r($t);
echo "<br><br>";

//
rsort($t);
print_r($t);
echo "<br><br>";

//sort the array by values without changing the keys in ascending
asort($t);
print_r($t);
echo "<br><br>";

//Sort the array by values(changing the keys) in ascending
ksort($t);
print_r($t);
echo "<br><br>";

//sort the array by values without changing the keys in descending
arsort($t);
print_r($t);
echo "<br><br>";

//Sort the array by values(changing the keys) in descending
krsort($t);
print_r($t);
echo "<br><br>";



?>