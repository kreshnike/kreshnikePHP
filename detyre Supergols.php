<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<p>$_POST</p>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Email: <input type="email" name="Email" >
    <br>
    <br>
    Password: <input type="password" name="Password" >
    <br>
    <br>
    <input type="submit" value="Log in">
</form>
<?php
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") 
        {
            // Mbledh apo merr vleren e inputit.
            $z = $_POST['Password'];
            $y = $_POST['Email'];
            if (empty($y) or empty($z)) 
            {
                echo "<script>window.alert('Email and Password are empty');</script>";
            } 

            else if ($y=="kreshnikealiaaj@gmail.com" and $z=="majla")
            {
                echo "<script>window.alert('Email and Password are correct');</script>";
                
            }



            else 
            {
                echo "<script>window.alert('Email and Password are incorrect');</script>";;
            }
        }
    ?>


</body>
</html>