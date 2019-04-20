<!DOCTYPE html>
<html>
<body>

<?php
    
 

  
    
    $a="Faisal";
    $b="kabir";
    $c="Sohel";
    
    echo "$a". " ". "$b". " " ."$c"."<br><br>";
    
    $lowestName=min(strlen($a),strlen($b),strlen($c));
 
    
    If ($lowestName <max(strlen($a),strlen($b),strlen($c)))
     {  echo "The shortest name is : kabir and Sohel<br><br>";  }
   
        
    
     if ((strlen($a) % 2) == 1)
  { echo "$a is Diffrent.<br><br>";}
  if ((strlen($a) % 2) == 0)
  { echo "$a is General.<br><br>" ;}
    
         if ((strlen($b) % 2) == 1)
  { echo "$b is Diffrent.<br><br>" ;}
  if ((strlen($b) % 2) == 0)
  { echo "$b is General.<br><br>" ;}
    
         if ((strlen($c) % 2) == 1)
  { echo "$c is Diffrent.<br><br>" ;}
  if ((strlen($c) % 2) == 0)
  { echo "$c is General.<br><br>" ;}
    
    //////////////////////////
    
    $i=1;
    $j='1';
    if($i==$j)
        {
        echo "match!";
        }
    
    else{
        echo "does not match";
    }
    /////////////////
    
    $i=110;
    $j=20;
    
    if($i>$j)
    {
        echo $i;
    }
        else 
        {
            echo $j;
        }
    
    echo "<br>";
/////////////////
    
    $i=110;
    $j=110;
    $k=25;
    
    if($i>$j && $i >$k)
    {echo $i;}
    else if($j>$i && $j>$k)
    {echo $j;}
    
    else{
        echo $k;
    }
    
    //////////////////
    
    $a="How many character are in this text";
        
    function getLength($str)   
    {
      return $result=strlen($str);
        
    }
   echo getLength($a);
    echo "<br><br>";
    
    /////////////////////
    
  
    
function oddeven($num)
{

if (($num % 2) == 0)
{ echo "$num is Even.<br><br>" ;}

else
{
if (($num % 2) == 1)
{ 
    echo "$num is Odd.<br><br>" ;
}
}
}
echo oddeven(123456789);

    ////////////////////
    
  /*  
    function oddeven1($str)
{

if ((strlength($str) % 2) == 0)
{ echo "$str lenght is Even .<br><br>" ;}

else
{
if ((strlength($str) % 2) == 1)
{ 
    echo "$str length is Odd.<br><br>" ;
}
}
}
echo oddeven1(faisal);
*/
    
    
    //////////////////////
    
    function namePass($name,$x,$y)
    {
     return ("Welcome"." ".$name. " You pass two number ". $x." and ".$y." Output is ".($x+$y)); 
    }
    
echo namePass('faisal',5,6);
    
    ///////////////////////////
     echo "<br>"; echo "<br>";
    
    
   for ($x = 1; $x <= 10; $x++) {
    echo "The number is: 2*$x "."= ".($x*2)."<br>";
} 
    
    ///////////////////////////
    
         echo "<br>"; echo "<br>";
    
    
   for ($x = 20; $x >= 10; $x--) {
    echo "The number is:".$x."<br>";
} 
    
   echo "<br>"; echo "<br>";
    
    ////////////////////////////
    
    for($i=0; $i>10; $i++)
    {
     for($j=0; $j<20;$j++)
     {
      echo $i." ".$j."<br>";
     }
   
    }
    ////////////////////////////
     $a="Faisal";
    $b="kabir";
    $c="Sohel";
    
    echo "$a". " ". "$b". " " ."$c"."<br><br>";
    
    $lowestName=min(strlen($a),strlen($b),strlen($c));
 
    
    If ($lowestName <max(strlen($a),strlen($b),strlen($c)))
     {  
        
       
        
        
        echo "The shortest name is : kabir and Sohel<br><br>";  }
   
        
    
     if ((strlen($a) % 2) == 1)
  { echo "$a is Diffrent.<br><br>";}
  if ((strlen($a) % 2) == 0)
  { echo "$a is General.<br><br>" ;}
    
         if ((strlen($b) % 2) == 1)
  { echo "$b is Diffrent.<br><br>" ;}
  if ((strlen($b) % 2) == 0)
  { echo "$b is General.<br><br>" ;}
    
         if ((strlen($c) % 2) == 1)
  { echo "$c is Diffrent.<br><br>" ;}
  if ((strlen($c) % 2) == 0)
  { echo "$c is General.<br><br>" ;}
    ///////////////////////////
    

  // Show min and max string length
    
    $data = array(
    "163",
    "630",
    "hhhh",
    "924",
    "4",
    "54"
);
        
    $lengths = array_map('strlen', $data);

echo "The shortest is " . min($lengths) .
     ". The longest is " . max($lengths);
    
    
 ?>

</body>
</html>