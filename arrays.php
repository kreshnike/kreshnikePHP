<?php
$x = array("Shkolla","Digjitale","Prizren");
echo $x[0]."<br>".$x[1]."<br>".$x[2];
echo $x;
echo"<br>";
var_dump($x);
echo "<br>";
print_r($x);

?>
<br>


<?php
$x = array("Shkolla","Digjitale","Prizren");
echo count($x);
?>

<br>


<?php
$z = array("id"=>1, "username"=>"Kreshnike", "password"=>"044972303");
echo $z["username"];
echo '<br>';
echo "Username eshte".$z['username'];
?>
<br>




Sortimi Arrays
<h2>Sorting Arrays</h2>
    <h3>sort()</h3>
    <?php 
		//Array mund te renditen ne menyre alfabetike ose numerike nga fillimi apo nga fundi.
			//sort(), kjo metod na mundeson qe ta renditim elementet e nje Array, nga numeri me i vogel.
			$x = array(3,54,12,2,3,4,9,8,5);
			sort($x);
			print_r($x);
            echo "<br>";

			// echo $x[0]."<br>";
			// echo $x[1]."<br>";
			// echo $x[2]."<br>";
			// echo $x[3]."<br>";
			// echo $x[4]."<br>";
			// echo $x[5]."<br>";
			// echo $x[6]."<br>";
			// echo $x[7]."<br>";
			// echo $x[8]."<br>";
			// echo "<br>";
            
			//per ti nxjerr vetem si vlera nga array e perdorim for loop.
			$y = count($x); //vlera 9
			for ($z = 0; $z < $y; $z++)
			{
				echo $x[$z];
				echo "<br>";
			}
		?>
    <br>
    <?php
		//Per renditjen e tekstit
			//$text = array("Shkolla","Digjitale","Prizren");
			$text = array("Shkolla","Digjitale","Prizren", "arianit");
            
            sort($text);
			
            $x = count($text);
        
			for($y=0; $y<$x; $y++)
			{
				echo $text[$y];
				echo "<br>";
			}
		?>

    <h3>rsort()</h3>
    <?php
			$x = array(2,43,65,4,7,2,12,3,9,8);
			rsort($x);
			// sort($x);

			$y = count($x);
        
			for($z=0;$z<$y;$z++)
			{
				echo $x[$z];
				echo "<br>";
			}
            
        //Vazhdim...
		?>


    <h3>asort()</h3>
    <?php
		//Associative Arrays - mund te renditen edhe nga fillimi edhe nga fundi.
		//asort()-mundeson renditjen e elementeve ne baze te vleres.
			
            $mosha = array("Arianit"=>"26", "Florian"=>"27", "Roni"=>"26");
        
			asort($mosha);
        
			foreach($mosha as $x => $x_value)
			{
				echo $x ." - ". $x_value;
				echo "<br>";
			}
		?>


    <h3>ksort()</h3>
    <?php
		//ksort()-mundeson renditjen e ementeve ne baze te qelesit. 
			$mosha = array("Arianit"=>"26", "Florian"=>"27", "Roni"=>"26");
			ksort($mosha);
        
			$mosha1 = array("Arianit"=>"26", "Florian"=>"27", "Roni"=>"26");
        
			foreach($mosha as $x => $x_value)
			{
				echo $x ." ". $x_value;
				echo "<br>";
			}
		?>
    <h3>arsort()</h3>
    <?php
		//Associative Arrays - mund te renditen edhe nga fillimi edhe nga fundi.
		//arsort()-mundeson renditjen e ementeve ne baze te vleres nga fundi ne fillim.
			$mosha = array("Arianit"=>"26", "Florian"=>"27", "Roni"=>"26");
			arsort($mosha);
			foreach($mosha as $x => $x_value)
			{
				echo $x ." ". $x_value;
				echo "<br>";
			}
		?>
    <h3>krsort()</h3>
    <?php
		//Associative Arrays - mund te renditen edhe nga fillimi edhe nga fundi.
		//krsort()-mundeson renditjen e ementeve ne baze te qelesit nga fundi ne fillim. 
			$mosha = array("Arianit"=>"26", "Florian"=>"27", "Roni"=>"26");
			krsort($mosha);
			foreach($mosha as $x => $x_value)
			{
				echo $x ." ". $x_value;
				echo "<br>";
			}
		?>


<h3>pop()</h3>
<?php
$text = array('Shkolla ','Digjitale','Prizren');
array_pop($text);
print_r($text);
?>

<h3>push()</h3>
<?php
$text = array("Shkolla","Digjitale","Prizren");
array_push($text,"Prishtine");
print_r($text);
?>


<h3>unshift()</h3>
<?php
$text = array('Shkolla ','Digjitale','Prizren');
array_unshift($text,"Prishtine");
print_r($text);
?>

<h3>shift()</h3>
<?php
$text = array("Shkolla","Digjitale","Prizren");
array_shift($text);
print_r($text);
?>


<h3>splice()</h3>  e fshin digjitale dhe Prizren ne vend te saj vendos Prishtine
<?php
$text = array("Shkolla","Digjitale","Prizren");
array_splice($text, 1, 2, "Prishtine");
print_r($text);
?>


<h3>splice()</h3>  E fshin digjitale dhe ne vent te saj e vendos Prishtine
<?php
$text = array("Shkolla","Digjitale","Prizren");
array_splice($text, 1, 1, "Prishtine");
print_r($text);
?>

