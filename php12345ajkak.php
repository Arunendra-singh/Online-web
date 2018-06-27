


<?php


echo " <h1>ADD NEW</h1>";
$num = $_POST['username'];
$num1 = $_POST['username1'];
/*
for($i = 0; $i <= $num ; $i++){
	for ($j = $num; $j > $i; $j--){
			echo "&nbsp;";
		}

	for ($k = 1; $k <= $i ; $k++) {

	echo " $i";
}
echo "<br>";
}

*/
for($a = $num; $a <= $num1; $a++){
$table = $a * $a;

if($table % 2 !== 0 && $table % 3 !== 0){

echo "$table";
echo "<br>";
/*

$temp = $table;
   $table    = $num;
   $num    = $temp;
*/
}
else{
echo " $table: Number is even";
echo "<br>";
}


}


?>
<form method="post">
  1 Number:  <input type="text" name="username" value="<?php echo($num);?>"/><br/>
 2 Number:  <input type="text" name="username1" value="<?php echo($num1);?>"/><br/>
 <input type="submit" value="Submit">
</form>
