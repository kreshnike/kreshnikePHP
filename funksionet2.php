<?php
    function numri()
    {
        $x = "6"; //deklarimi i variablave ne menyre lokale
        $y = 2;
        return $x * $y;
    }
    echo numri();
?>
<br>


<?php
$x = 11;
$y = 10;
function mbledh()
{
    global $x;
    global $y;
    return $x + $y;
}
echo mbledh();
echo $x;
?>
<br>


<?php
    function fiks ($x = 20, $y =30)
    {
        echo "<b>Vlera eshte:</b> x=".$x. " dhe y=".$y;
    }
    fiks();
?>
<br>


<?php
    function mePresje(float $a, float $b)
    {
        return(int)($a + $b);
    }
    echo mePresje(1.5, 3.3);
?>
<br>


<?php
    function mePres($a, $b)
    {
        return ($a +$b);
    }
    echo mePres(1.5, 3.3);

?>
<br>



<?php
function mePres1($a, $b)
{
    return round($a + $b);
}
echo mePres1(1.5, 3.3);
?>
