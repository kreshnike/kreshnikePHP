<?php
   //Krijimi i nje funksioni
   
   function x()  // metoda per funksionet
    {
        echo "Shkolla Digjitale Prizren 1";
    }
    x();
    ?>
    <br>


    <?php
        function text($emri)
        {
            echo "$emri.<br>";
        }
        text("Shkolla"); //Thirrja e funksionit
        text("Shkollaa");
        text("Shkollaaa");

        function text1($emri1, $mbiemri)
        {
            echo $emri1.$mbiemri."<br>";
        }

        text1("Shkolla","Digjitale");
        text1("Shkolla","Digjitale");
        text1("Shkolla","Digjitale");
    ?>
    <br>


    <?php
        function vlera($x,$y)
        {
            echo $x + $y;
            echo $x * $y;
        }
        vlera(5,5);
        echo "<br>";
        vlera(10,10);
    ?>
    <br>


<?php
function number(int $a, int $b)
{
    return $a + $b;

}
number(5,"1days");

?>
<br>





