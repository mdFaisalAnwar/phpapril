<!DOCTYPE html>
<html>
    <head>
        <title>
            forms
        </title>
    </head>
    
    <?php
    if(isset($_POST['submit']))
        
    {
        if(empty($_POST['username']))
        {
            echo "<p style='color:red' >Field Must Not be Empty</p>";
        } else if(strlen($_POST['username'])<5||strlen($_POST['username'])<10)
        {
             echo "<p style='color:red' >Must be atleast 5 character.</p>";
        } else
        {echo "Welcome: ".$_POST['username'];}
            
    }
    ?>
    <form action="" method="POST">
        <input type="text" name="username" placeholder="Input Anything"><br>
        
        <input type="submit" name="submit" value="OK">

        
        </form>
    
    
//github like code reprogitory.
   //github account require.
    
    
    
    
    
    
    
    
    
</html>