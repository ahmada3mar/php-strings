
<h1 style="display:flex; justify-content:center" > First task </h1>
<div style="display: flex;
    justify-content: center;
    flex-direction: column;
    align-items: center;
    text-align: center;">





<?php 

echo strtoupper("1- ) all uppercase letters <br/>") ;

echo strtolower("2- ) all lowercase letters <br/>") ;

echo ucfirst("3- ) first character of all the words uppercase <br/>") ;

echo "<br/>////////////////////////////////////////////////////////////////////////////////// <br/>" ;

echo implode(":", str_split("082307" , 2 ));

$str = 'The quick brown fox jumps over the lazy dog.';

echo "<br/>////////////////////////////////////////////////////////////////////////////////// <br/>" ;


if (strpos($str,'jumps') !== false) 
 {
    echo 'jumps was found';
 }
else
 {
    echo 'jumps was not found';
 }

 echo "<br/>////////////////////////////////////////////////////////////////////////////////// <br/>" ;

 echo substr(strrchr('www.example.com/public_html/index.php', "/"), 1);

echo "<br/>////////////////////////////////////////////////////////////////////////////////// <br/>" ;

echo strstr("Orange@example.com", '@', true);
echo "<br/>////////////////////////////////////////////////////////////////////////////////// <br/>" ;

echo substr("Orange@example.com",-3);
echo "<br/>////////////////////////////////////////////////////////////////////////////////// <br/>" ;
echo substr(str_shuffle('1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz'), 0, 7);
echo "<br/>////////////////////////////////////////////////////////////////////////////////// <br/>" ;
echo str_replace("the" , "that" , "the quick brown fox jumps over the lazy dog");
echo "<br/>////////////////////////////////////////////////////////////////////////////////// <br/>" ;

$first = 'football';
$second = 'footboll';
$pos = strspn($first ^ $second, "\0");
printf('First difference between two strings at position %d: "%s" vs "%s"', $pos, $first[$pos], $second[$pos]);


echo "<br/>////////////////////////////////////////////////////////////////////////////////// <br/>" ;


$str = "Twinkle, twinkle, little star,\nHow I wonder what you are.\nUp above the world so high,\nLike a diamond in the sky.";
$arra1 = explode("\n", $str);

 echo   '<div style="width:780px;">'.
            var_dump($arra1)
        .'</div>';
echo "<br/>////////////////////////////////////////////////////////////////////////////////// <br/>" ;

$sampil= "z";
$nextchar = ++ $sampil;

echo strlen($nextchar) > 1 ?  $nextchar[0] :  $nextchar;

echo "<br/>////////////////////////////////////////////////////////////////////////////////// <br/>" ;


echo substr(strstr("Orange@example.com", '@', false),1);

echo "<br/>////////////////////////////////////////////////////////////////////////////////// <br/>" ;

$txt = "The brown fox";
$befortxt = "the";
$aftertxt = 'quick';
$txtpos = stripos($txt , $befortxt) + strlen($befortxt) ;


echo substr_replace("The brown fox"," ". $aftertxt, $txtpos  , 0);

echo "<br/>////////////////////////////////////////////////////////////////////////////////// <br/>" ;

$txt = "The quick brown fox";

echo strstr($txt, ' ', true);

echo "<br/>////////////////////////////////////////////////////////////////////////////////// <br/>" ;

$txt = "000547023.24";

 echo ltrim($txt, '0');

 echo "<br/>////////////////////////////////////////////////////////////////////////////////// <br/>" ;


 $txt = "The quick brown fox jumps over the lazy dog";

 echo str_replace("fox","",$txt);

 echo "<br/>////////////////////////////////////////////////////////////////////////////////// <br/>" ;


 $txt = " The quick brown fox jumps over the lazy dog///";

 echo str_replace("/","",$txt);


 echo "<br/>////////////////////////////////////////////////////////////////////////////////// <br/>" ;

 $txt = "http://www.example.com/5478631";
 $pos = strrpos($txt , "/");
 echo substr($txt ,$pos + 1);


 echo "<br/>////////////////////////////////////////////////////////////////////////////////// <br/>" ;

 $txt = '\1+2/32:2-3/43';
 echo str_replace( array("/", '"', "+",":","\\" , "-"), ' ',  $txt);


 echo "<br/>////////////////////////////////////////////////////////////////////////////////// <br/>" ;

 $txt = 'The quick brown fox jumps over the lazy dog';

 $myArray = explode(' ', $txt);

$first_5 = array_slice( $myArray,0,5);

echo implode(' ',$first_5);

echo "<br/>////////////////////////////////////////////////////////////////////////////////// <br/>" ;

$txt = '2,543.12';
echo str_replace( ",", '',  $txt);

echo "<br/><br/>////////////////////////////////////////////////////////////////////////////////// <br/><br/>" ;

$first = "a" ;
for ($i = 1; $i <= 26; $i++) {
    echo( $first ++);
}

echo "<br/><br/>////////////////////////////// The End ///////////////////////////////////<br/> <br/>" ;
?>


</div>