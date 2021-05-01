<?php
    
    $var = Null;
    $var1 ="ahmed";

    echo "var is null :". is_null($var);
    echo "<br/>";
    echo "var1 is null :". is_null($var1);
    echo "<br/>";

    echo "var :" . isset($var); 
    echo "<br/>";
    echo "var 1 :" . isset($var1); 

    // is_float() / is_bool()

    $var2 = "5";
    echo "<br/>";

    echo gettype($var2);

    echo "<br/>";

    (integer)$var2;

    settype($var2,'integer');
    echo gettype($var2);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body>
</body>
</html>