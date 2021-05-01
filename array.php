<?php 

    //$arr = array(1,20,5,3,70);

    $arr = [
         "id" => "1",
         "name" => "ahmed",
         "age" =>"20",
    ];

    echo print_r($arr);
    echo "<br/>";

    $arr["num"] = "20245878";
    echo print_r($arr);

    echo "<br/>";

    echo print_r($arr["name"]);


    // Array function 

    echo "<br/>";
    $arr2 = array(1,20,5,3,70);
    echo "max :" . max($arr2);
    echo "<br/>";

    // Trie
    sort($arr2);
    echo "sort :" . print_r($arr2);
    rsort($arr2);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body>
    <br>
    min: <?php echo min($arr2);?>
    <br>
    count: <?php echo count($arr2);?>
    <br>
    sort: <?php echo print_r($arr2)?>
</body>
</html>