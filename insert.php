<?php
$con=mysqli_connect('localhost','root','','blog');
$col=array();

if($con)
{
    $sql = "SHOW COLUMNS FROM users";
$result = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($result)){
    $col[]=$row['Field'];
}
}
print_r($col);
$i = 0;
foreach($col as $value){
    ${'something'.$i} = $value;
    $i++;
    }

echo $something0;
?>