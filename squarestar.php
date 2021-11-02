<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>squarestar</title>
</head>
<body>
    <h1>squarestar</h1>
<?php
 $star = "*";
 for($i=0;$i<=5;$i++){
 for ($j=0;$j<=5;$j++){
 echo $star;
 }
 echo nl2br ("\r\n");
 }
?> 

<h1>Diagonal</h1>
<?php
 $star = "*";
 for($i=0;$i<=5;$i++){
    
        for ($j=0;$j<=5;$j++){
       if($i==0 || $i==5 || $j==0 || $j==5){
        echo $star;
        }
        else{
            echo str_repeat('&nbsp;', 2);
        }
 }
 echo nl2br ("\r\n");
}
?> 

<h1>hollowsquare</h1>
<?php
 $star = "*";
 for($row=1;$row<=5;$row++){
        for ($colum=1;$colum<=5;$colum++){
            if($row==1 || $row==5 || $colum==1 || $colum==5 || $row==$colum || $colum==($colum - $row + 1)){
             echo $star;
             }
             else{
                 echo str_repeat('&nbsp;', 2);
             }
    
 }
 echo nl2br ("\r\n");
}
?> 

<h1>left Triangle</h1>
<?php
 $star = "*";
 for($i=1;$i<=5;$i++){
        for ($j=1;$j<=5-$i;$j++){
            echo str_repeat('&nbsp;', 2);
        }
            for($j=1;$j<=$i;$j++){
                echo $star;
             }
             
                 echo nl2br ("\r\n");
 }

?> 
<h1>rhombus with star pattern</h1>
<?php
$row_length = 5;
for ($row = 0; $row < $row_length; $row++) {
    for ($spaces = 1; $spaces <= $row_length - $row; $spaces++) {
        echo "&nbsp;";
    }
    for ($column = 1; $column <= $row_length; $column++) {
        if ($column == 1 || $column == $row_length) {
            echo "*&nbsp;";
        } else if ($row == 0 || $row == $row_length - 1) {
            echo "*&nbsp;";
        } else {
            echo "&nbsp;&nbsp;&nbsp;";
        }
    }
    echo '<br>';
}
?>

<h1>+Triangle+</h1>

<?php
$star = "*";
$row_length = 5;
for ($row = 0; $row < $row_length; $row++) {
    for ($column = 5; $column <= $row_length + $row; $column++) {
        echo "$star";
    }
    echo '<br>';
}
?>

<h1> rhombus star </h1>
<?php
$row_length = 5;
for($row=1; $row<=$row_length; $row++){
    echo "&nbsp;";
    for($column=1; $column <= $row_length - $row; $column++){
        echo "&nbsp;";
    }
    for($column=1; $column<=4; $column++){
        echo "*";
    }
   echo "<br>";
}


?>

</body>
</html>



