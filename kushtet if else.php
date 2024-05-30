<?php
$x = 5;
if($x <10)
{
    echo '5 eshte me i vogel se 10';
}
else
{
    echo '5 eshte me i madhe se 10';
}
?>
<br>

<?php
$y = 16;
if($y <=10)
{
    echo '$y eshte me i vogel se 10';
}
else if($y >=20)
{
    echo '$y eshte me i madhe ose i barabart se 20';
}
else
{
    echo '$y eshte ne mes te 10 dhe 20';
}
?>
<br>

<?php
$piket = 50;
if($piket < 49)
{
    echo "5";
}
else if($piket >=50 and $piket < 60)
{
  echo "6";  
}
else if($piket >=60 and $piket < 70)
{
  echo "7";  
}
else if($piket >=70 && $piket < 80)
{
  echo "8";  
}
else if($piket >=80 && $piket < 90)
{
  echo "9";  
}
else if($piket >=90 && $piket < 100)
{
  echo "10";  
}
else
{
  echo "Nuk kalon";  
}

?>



<?php
$y=10;
if($y % 2==0)
{
    echo "Vlera e variables eshte qift";
}
else
{
    echo "Vlera e variables eshte tek";
}
?>
<br>


<?php
$z =1;
switch($z)
{
    case 1:
        echo 'Janar';
    break;
    case 2:
        echo 'Shkurt';
    break;
    case 3:
        echo 'Mars';
    break;
    case 4:
        echo 'Prill';
    break;
    case 5:
        echo 'Maj';
    break;
    case 6:
        echo 'Qershor';
    break;
    case 7:
        echo 'Korrik';
    break;
    case 8:
        echo 'Gusht';
    break;
    case 9:
        echo 'Shtator';
    break;
    case 10:
        echo 'Tetor';
    break;
    case 11:
        echo 'Nentor';
    break;
    case 12:
        echo 'Dhjetor';
    break;

    default:
    echo 'Ky muaj nuk ekziston!';
}

?>
<br>


<?php
$ditet = 'E Merkure';
switch($ditet)
{
    case 'E Hene':
        echo 'E Hene eshte dita e pare e javes';
    break;
    case 'E Marte':
        echo 'E Marte eshte dita e dyte e javes';
    break;
    case 'E Merkure':
        echo 'E Merkure eshte dita e trete e javes';
    break;
    case 'E Enjete':
        echo 'E Enjete eshte dita e katert e javes';
    break;
    case 'E Premte':
        echo 'E Premte eshte dita e peste e javes';
    break;
    case 'E Shtune':
        echo 'E Shtune eshte dita e gjashte e javes';
    break;
    case 'E Diel':
        echo 'E Diel eshte dita e shtate e javes';
    break;
    
    default:
    echo 'Kjo dite nuk ekziston!';  
}

?>
<br>


<?php
    $a= 100; $b= 130; $c= 80;

    if($a > $b){
        if($a > $c){
            echo "A eshte me e madhe";
        }
    }
     else{
        if($b > $c){
            echo " B eshte me e madhe";
        }
    }
    

?>



<?php

?>

