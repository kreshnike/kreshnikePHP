<?php
    echo strlen(" Prizren ");

?>
<br>

<?php
    echo str_word_count(' Shkolla Digjitale Prizren');
?>
<br>


<?php
    echo strrev(' Kreshnike ');

?>
<br>

<?php
    $pozicioni= strpos('Shkolla Digjitale', 'Shkolla');
    $pozicioni2= strpos('Shkolla Digjitale', 'Prizren'); 
    echo $pozicioni. '<br>';
    echo $pozicioni2;
?>


<?php
    $emri='Shkolla Digjitale Prizren'.'<br>';
    $ndrroje= str_replace('Prizren','Suhareke',$emri);

    echo $emri;
    echo $ndrroje;

?>

