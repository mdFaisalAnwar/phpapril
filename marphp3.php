<!DOCTYPE html>
<html>
<body>

<?php
   
   echo "Hi"; echo "<br>";
    
    ////////////////////////////
    
    for($i=0; $i<10; $i++)
    {
     for($j=0; $j<20;$j++)
     {
      echo $i." ".$j."<br>";
     }
   
    }
    
    
      echo "<br>"; echo "<br>";
    ///////////////////////////
  
for ($x = 10; $x <= 20; $x++) { for ($y=1; $y<=10;$y++) { echo "The number is: $x*$y " ."=".($x*$y)." <br>";
    }
    }
    
    
         echo "<br>"; echo "<br>";
    ///////////////////////////
  $sum=0;
for ($x = 12; $x <= 25; $x++) {   echo "The number is: $sum=$sum+$x" ."=".($sum=$sum+$x)." <br>";
                              }
    
    ////////////////////////////
   /* 
    function recurr($value)
    {
        echo "Windows is shutting down!!<br>";
        if ($value==0)
        {
            exit();
        }
        $value--;
        recurr($value);
        
        
    }
    recurr(10);
   */
         
         echo "<br>"; echo "<br>";
    ///////////////////////////
    
    function recurr($value1)
    {
         $sum=0;
        $sum=$sum+$value1;
        echo "The number is: ".$sum."<br>";
        if ($value1==12)
        {
            exit();
        }
        $value1--;
        
        recurr($value1);
        
        
    }
    recurr(25);
   
         
         echo "<br>"; echo "<br>";
    
        ///////////////////////////
   
    

    
    
    
    
    
    
    
    
    
    
    
    
    
 ?>

</body>
</html>