<html> 
    
<?php
$m=date("M");
echo " Its $m right now". "<br>";
if($m=="Aug"){
echo "It's August, so it's still holiday.<br>";    
}
else{
echo "Not August, This is $m so i don't have any holidays<br>";    
}

$color="red";
if($color=="red"){
echo "The color is red<br>";    
}
else{
echo "the color is not red<br>";
}
$grade=20;
if($grade >= 80 ){
echo "The grade is Excellent<br>";    
}
elseif($grade >= 70 && $grade < 80){
echo "the grade is Great<br>";    
}
elseif ($grade >= 60 && $grade < 70){
echo "the grade is Good<br>";    
}
elseif ($grade >= 50 && $grade < 60){
echo "the grade is Pass<br>" ;   
}
else {
echo "The grade is Fail<br>";
}

$age;
$name;
$age=5;
$name="john";
if( $age >= 18){
echo "$name,$age years old is legible for voting<br>";
}
elseif ($age < 18 && $age >= 0){
echo "$name,$age year(s) old is not legible for voting<br>";   
}
else{
echo "Incorrect data: Person named '$name' is $age years old-Check the name or the age you inputed<br>";    
}
?>

</form>
</body>
</html> 