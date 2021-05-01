<?php


require "users.php";

$user1 = new Users;
$user1->id = "1";
$user1->name = "ahmed";
$password = "123";


$user1->setPassword($password);
echo $user1->id;
echo "<br/>";
echo $user1->name;
echo "<br/>";
echo $user1->getPassword();

$user2 = new Users;
$user2->id = "2";
$user2->name = "ahmed2";
$password = "1234";

$user2->setPassword($password);
echo "<br/>";

echo $user2->id;
echo "<br/>";
echo $user2->name;
echo "<br/>";
echo $user2->getPassword();

?>

    
<?php

    if(isset($_REQUEST['status'])){
        
        $user1->status = 1;
    }

?>

<form action="" method="GET">
    <button type="submit" name="status">get job</button>
</form>
