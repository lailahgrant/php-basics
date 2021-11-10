<?php
$x=$_GET['str'];
$op=$_GET['op']; #for occurance
$y=strlen($x);
echo "string is  $x<br>";
$vow_cnt=total_vowels($x,$y);
echo "Total vowels are  $vow_cnt<br>";



function total_vowels($x,$y)
{
	$vow_cnt=0;
	for($i=0;$i<$y;$i++)
	{
		if(($x[$i]=='a') || ($x[$i]=='e') || ($x[$i]=='o') ||($x[$i]=='u')||($x[$i]=='i')||($x[$i]=='A')||($x[$i]=='E')||($x[$i]=='O')||($x[$i]=='U')||($x[$i]=='I'))
		$vow_cnt++;	
	}
	return $vow_cnt;
}

function occurance($x,$y)
{
	$av=$ev=$iv=$ov=$uv=$cnt=0;
	for($i=0;$i<$y;$i++)
	{
		if(($x[$i]=='a') || ($x[$i]=='A'))
			$av++;

		else if(($x[$i]=='e') ||($x[$i]=='E'))
			$ev++;

		else if(($x[$i]=='i')||($x[$i]=='I'))
			$iv++;

		else if(($x[$i]=='o')||($x[$i]=='O'))
			$ov++;

		else if(($x[$i]=='U')||($x[$i]=='U'))
			$uv++;

		else $cnt++;	
	}

echo "total 'a' is $av<br>";
echo "total 'e' is $ev<br>";
echo "total 'i' is $iv<br>";
echo "total 'o' is $ov<br>";
echo "total 'u' is $uv<br>";
echo "total consonants are  $cnt<br>";
$tot=$av+$ev+$iv+$ov+$uv;
return $tot;	
}
$x=$_GET['str'];
$op=$_GET['op']; #for occurance
$y=strlen($x);
switch($op)
{
	case 1 : echo "string is   $x<br>";
			$vow_cnt=total_vowels($x,$y);
            echo "Total vowels are  $vow_cnt<br>";
            break;

    case 2: echo "string is $x<br>";        
            $cnt=occurance($x,$y);
            echo "length is $cnt<br>";
            break;
}
?>