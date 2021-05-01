<?php

?>

<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body>
    <ul>
    <?php
    for($i=0;$i<10;$i++){
        echo "<li>".$i."</li>";
    }
    ?>
    </ul>

    <ol>
        <?php
            $i = 0;
            while($i<5){
                
                echo "<li> count".$i."</li>";
                $i++;
            }
        ?>
    </ol>
</body>
</html>