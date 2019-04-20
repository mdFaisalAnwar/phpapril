<!DOCTYPE html>
<html>
<body>

<?php
    
    $firstName="Faisal";
    $lastName="Anwar";
echo "$firstName $lastName";
   echo"<br>";
    
    $st="string";
   // var_dump($st);
    
    echo"<br>";
    $n=123;
    
   // var_dump($n);
    
    
    echo"<br>";
    $n=123.99;
    
    var_dump($n);
    echo"<br>";
    $a =array('hi','hello','h r u');
    
        var_dump($a);
    
    echo "<br>";
    
    echo "hi";
echo "<br>";
echo $_SERVER['PHP_SELF'];
    echo"<br>";echo"<br>";
    
    
    $a =array(
    array('hi','ki', 'kolo'),
    array('hiss','kdfi', 'kso')
        
    );
    
    echo $a[0][0]."<br>";
    echo $a[1][1]."<br>";
    echo $a[1][2]."<br>";
    echo $a[0][2]."<br>";
    echo"<br>";echo"<br>";
    
    
    $a=array(
    'name'=>'Suny',
        'age'=>'23'
    
    );
    
    echo $a['name'];
  
    echo"<br>";echo"<br>";
    var_dump($a);
    
    
        echo"<br>";echo"<br>";
    
    $s="WE are here";
    
    echo strlen($s);
    
    echo"<br>";echo"<br>";
    echo str_word_count($s);
        
    echo"<br>";echo"<br>";
        
    $st="Mohammad Faisal Anwar";
   // print_r(explode(" ",$st));
    
 $ar =(explode(" ",$st));
    
    echo $ar[0]." ". $ar[1]." ". $ar[2];
    
     echo"<br>";echo"<br>";
    
    
   ///////////////
    
    $arr=array('Coders' , 'Trust', 'Success', 'Story');
    
   print_r($arr); 
   echo"<br>";echo"<br>";
    
    echo ($arr[0]." ".$arr[1]." ".$arr[2]." ".$arr[3]);
    
    echo"<br>";echo"<br>";
    echo implode(" ",$arr);
    
    
    ///////////////////
    
      echo"<br>";echo"<br>";
    $st="Mohammad,Faisal,Anwar";
   // print_r(explode(" ",$st));
    
 $ar =(explode(",",$st));
    
    echo $ar[0]." ". $ar[1]." ". $ar[2];
    
     echo"<br>";echo"<br>";
    
    //////////////////// ture means case insensative 
    define("YOYO", "Party Party!!",true);
    
    echo yoyo;
    
    /////////////////
       echo"<br>";echo"<br>";
    
    $a=1;
    $b=$a+1;
    echo $b;
    /////////////////
       echo"<br>";echo"<br>";
    
    $a=20;
    $b=$a/10;
    echo $b;
    /////////////////
       echo"<br>";echo"<br>";
    
    $a=20;
    $b=$a%10;
    echo $b;
     /////////////////
       echo"<br>";echo"<br>";
    
    $a=20;
    $a+=15;
    echo $a;
   
    
    
      /////////////////
       echo"<br>";echo"<br>";
    
    $a=20;
  
    echo $a++;
       
    echo"<br>";echo"<br>";
   echo ++$a;
    //////////////////
        echo"<br>";echo"<br>";
    
    $a="";
    echo empty($a);
     echo"<br>";echo"<br>";
    echo is_int($a);
    
  
    echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";

echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
    
    var a="Faisal";
    var b="kabir";
    var c="Sohel";
    
    a=strlen(a);
    b=strlen(b);
    c=strlen(c);
    echo "a" " " "b" " " "c";
    
    
     if (($a % 2) == 1)
  { echo "$a is odd." ;}
  if (($a % 2) == 0)
  { echo "$a is even." ;}
    
         if (($b % 2) == 1)
  { echo "$b is odd." ;}
  if (($b % 2) == 0)
  { echo "$b is even." ;}
         if (($c % 2) == 1)
  { echo "$c is odd." ;}
  if (($c % 2) == 0)
  { echo "$c is even." ;}
    
    
    
        
?>

</body>
</html>