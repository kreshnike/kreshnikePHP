<?php
$x = array("Prizren","Prishtine", "Digjitale");
rsort($x);

$y = count($x);
$z = 0;
for($z=0;   $z < $y;   $z++)
{
    echo $x[$z]."<br>";
  
}
?>



<?php
 $arr = array("id1"=>1, "id2"=>2, "id3"=>3);
			rksort($arr)
			foreach($arr, $as, $x=>3,  $x_value)
			{
				echo $arr ["id1"] $x_value;
				echo "<br>"
			}

?>