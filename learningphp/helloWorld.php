<h1 style="color:Orange;">----------Rules of PHP------------</h1>


<?php echo "Hello World";?></br> <!-- in php echo is use to print-->
<script>document.write("This is from JAVA Script");</script></br>
<h4>This is from HTML</h4></br>
<p>in php echo is use to print</p>
<h4 style="color:green;">----------echo use to print PHP ------------</h4>

<?php 
echo "comment style in php";
//single line comment style for php

/*double line commentstyle
use for more line
use it for pharagraph comment
*/
?>
<h4 style="color:green;">----------Rules of writing PHP code------------</h4>
<p>
1.We can't write HTML code inside PHP directly.
2.We can write HTML code inside PHP by using Quotes"html".
3.We can write PHP code anywhere inside HTML using <?php   ?>.
</p>

<!--We can write PHP into HTML tag like:  -->
<h3><?php echo "write php into html tag"; ?></h3>
</br>

<!--We can also write HTML into PHP tag like:  -->
<?php echo "<h1>write html into php</h1>
			</br>
			use cotation for print String like 7+9=16"; ?>

<!--Addition 4+7 in PHP:  --></br></br>
<?php echo 4+7;
		echo "</br>";
	  echo 7+7; ?>  
</br></br>

<!--Substruction 7-4 in PHP:  -->
<?php echo 7-4 ?>   </br></br>

<!--Multiputation 4*7 in PHP:  -->
<?php echo 4*7 ?>  
</br></br>

<!--Divide 77/7  in PHP:  -->
<?php echo 77/7 ?>  
</br></br>

<!--Modulas 77%6  in PHP:  -->
<?php echo 77%6 ?>  
</br></br>


<!----------------------Variable  in PHP:  --------------------->
<h4 style="color:green;">----------Variable rules------------</h4>

<p>1.variable start with $ sign.   
2.variable name start with letter or underscore.    
3.variable name can't start with number.   
4.variable name can only contain alpha-numeric characters and underscore(A-z,0-9, and _). 
5.variable name is case-sensitive(like: $age and $AGE are not same).
6.if we change the value of variable in 2nd time then 2nd value will print not 1st value.
7.Use double "" for print value variable as String. </p>

<h4 style="color:green;">----------Variable declare------------</h4>
<?php 
$bangladesh=1971;
$azad=1994;
$love= "I love my country";
$love= "I love my Bangladesh";


echo $bangladesh;
echo "</br>";

echo $azad;
echo "</br>";

echo $love;

echo "</br> <h4 >----------Concatenation rules------------</h4> ";
echo "<p>Banladesh is</p>"; echo$azad-$bangladesh; echo"<p>years older then azad</p>";

echo $azad . $bangladesh ;
echo "</br>";
echo $azad . $bangladesh . $love;

echo "</br>";
echo "Hello "." World";

echo "</br>";
echo "Hello ".$azad." World";
?>

<h4 style="color:green;">----------Data type------------</h4>
<p>String =Hello World</p>
<p>Inreger =1234567890</p>
<p>Float =235.00545</p>
<p>Boolean =True or False</p>
<p>Array =array("mango","jackfruit","lemon")</p>
<p>NUll =Null Value</p>

<h4 style="color:green;">----------var_dump show Data type is using ------------</h4>

<?php 
// var_dump show which Data type is using 
 $x=11262;
 var_dump($x);
 echo "</br>";
 
  $x=112.62;
 var_dump($x);
 echo "</br>";
 
  $x="date.....type";
 var_dump($x);
 echo "</br>";
 
  $x=null;
 var_dump($x);
 
?>

</br>
<h4 style="color:green;">----------Array and declare it by index (start from 0)-------------</h4>

<?php 
 
$color=array("White", "red", "Yellow", "Green");
 echo $color[2];
  echo "</br>";
   echo $color[0];
 echo "</br>";
echo $color[3];
  echo "</br>";
  //count use to show array size
   echo count($color);
?>

</br>
<h4 style="color:green;">----------If Else Statement (==,<=,>=,!=,>,<)(Boolean)-------------</h4>
<?php
$a=40;
$b=59;
if($a<=$b){
	echo "$a is less then $b ";
}else{
	echo "$a is gretter then $b";
	
}
?>

</br>
<?php
$a=40;
$b=59;
if($a==$b){
	echo "$a is same as $b ";
}else{
	echo "$a is not same as $b";	
}
?>

</br>
<?php
$a=40;
$b=59;
if($a!=$b){
	echo "$a is not equal $b ";
}else{
	echo "$a is equal $b";	
}
?>
</br>
<h4 style="color:green;">----------Looping (while, do while, for, for each)-------------</h4>
</br>
<h4 style="color:orange;">----------Looping (while)-------------</h4>


<?php
$a=5;
$b=10;
while($a<=$b){
	echo"this is while";
	  echo "</br>";
	echo $a;
	  echo "</br>";
	$a++;
}
?>

</br>
<h4 style="color:orange;">----------Looping (do while)-------------</h4>

<?php
$a=5;
$b=10;

do{
	echo"this is do while";
	  echo "</br>";
	echo $a;
	  echo "</br>";
	$a++;
}while($a<=$b)
?>

</br>
<h4 style="color:orange;">----------Looping (for)-------------</h4>

<?php
$a=5;
$b=10;
for($a;$a<=$b;$a++){
	echo"this is do while";
	  echo "</br>";
	  echo $a;
	  echo "</br>";
}
?>