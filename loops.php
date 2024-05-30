<?php
for($z=0; $z<=10; $z++)
{
    echo 'Numri eshte:' . $z .'<br>';
    if($z==6)
    {
        continue;
    }
}
?>


<p>Foreach Loops</p>

<?php

$txt = array(1,28,3,4,5,6,7,90);
sort($txt);
foreach($txt as $x)
{
    echo "$x <br>";
}
?>

<br>

<?php
$text=array(2,3,5,22,11,6,3,5);
sort($text);

$txt= count($text);
for($x=0; $x<$txt; $x++)
{
    echo $text[$x].'<br>';
}
?>




<p>While loops</p>

<?php
    
        $x = 0;
        
        while($x <= 10)
        {
            echo $x."<br>";
            $x++;

            // Pyetje? Si mund te i rrisim nga dy vlera, ose me shume.
        }
    ?>
<br>
<?php
        $x = 0;
        
        while($x <= 10)
        {
            echo $x."<br>";
            $x++;
            if($x==6)
            {
                break; //e nderpret loop edhe nese nuk ka perfundue ende.
            }
            // Pyetje? Si mund te i rrisim nga dy vlera, ose me shume.
                //$x+=2;
        }
    ?>
<p>Do while loops</p>

<?php
    
        $y = 0;
        do{
            echo $y . '<br>';
            $y++;
            if($y==6)
            {
                break; //e nderpret loop edhe nese nuk ka perfundue ende.
            }
        }
        while($y <= 10)
    ?>




<?php
for($x=1; $x<=5; $x++){
    for($y=1; $y<=5; $y++)
    {
        echo $x. " ";

    }
    echo "<br>";
}


?>
<br>

<?php
for($x=1; $x<=5; $x++){
    for($y=1; $y<=5; $y++)
    {
        echo $y. " ";

    }
    echo "<br>";
}


?>
<br>



<?php
$z = 1;
for($x=1; $x<=5; $x++){
    for($y=1; $y<=5; $y++)
    {
        echo $z. " ";
        $z++;

    }
    echo "<br>";
    $z = $x+1;
}
?>
<br>



<?php

for($x=1; $x<=5; $x++){
    for($y=1; $y<=5; $y++)
    {
        echo 'X'. " ";


    }
    echo "<br>";
 }
?>
<br>



<?php
$x = 5;

for($y=1; $y<=$x; $y++){
    for($z=0; $z<$y; $z++)
    {
        echo '*'. " ";
    }
    echo "<br>";
 }
?>
<br>




<?php
$x = 1;

for($y=1; $y<=5; $y++){
    for($z=5; $z>=$y; $z--)
    {
        echo '*'. " ";
    }
    echo "<br>";
 }
?>
<br>






<?php

for($x=1; $x<=5; $x++){
    for($y=1; $y<=5; $y++){
        if($x == $y)
          { echo 'X'. " ";
      
    }
    else{
        echo '0'." ";
        }
    }
    echo "<br>";
}
 ?>
<br>





<?php

for($x=1; $x<=5; $x++){
    for($y=1; $y<=5; $y++){
        if($x+$y==6)
          { echo 'X'. " ";
      
    }
    else{
        echo '0'." ";
        }
    }
        echo "<br>";
}
 ?>
<br>




<?php

for($x=1; $x<=5; $x++){
    for($y=1; $y<=5; $y++){
        if($x+$y==6 || $x ==$y)
          { echo 'X'. " ";
      
    }
    else{
        echo '0'." ";
        }
    }
        echo "<br>";
}
 ?>
<br>





<?php

for($x=1; $x<=5; $x++){
    for($y=1; $y<=5; $y++){
        if($x+$y==6 || $x ==$y ||$y==3 || $y==1 ||$x==1 ||$x==5)
          { echo 'X'. " ";
      
    }
    else{
        echo '0'." ";
        }
    }
        echo "<br>";
}
 ?>
<br>






<?php

for($x=1; $x<=5; $x++){
    for($y=1; $y<=5; $y++){
        if($x+$y==6 || $x ==$y || $y==3 || $x==3)
          { echo $z. " ";
      
    }
    else{
        echo $z." ";
        }
    }
        echo "<br>";
}
 ?>
<br>