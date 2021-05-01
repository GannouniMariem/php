
<?php
    include_once('header.php');

      $op = $_GET['op'];
      $number1 = $_GET['number1'];
      $number2 = $_GET['number2'];

      if(empty($number1)){
         $result = "number 1 is empoty";

      }elseif(empty($number2)){

         $result = "number 2 is empoty";

      }elseif(empty($op)){

         $result = "operation is empoty";
      }else{

         if($op === "+"){

            $result = $_GET['number1'] + $_GET['number2'];
   
   
         }elseif($op === "-"){
            $result = $_GET['number1'] - $_GET['number2'];
   
         }elseif($op === "*"){
   
            $result = $_GET['number1'] * $_GET['number2'];
   
         }elseif($op === "/"){
   
            $result = $_GET['number1'] / $_GET['number2'];
   
         }
   
      }
    
  $var = $_GET['number1'];
  $var = $_REQUEST['number1'];

 echo $var;

?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <!-- CSS only -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
      <div class="container mt-3">
                  
            <form action="index.php"  method="GET">
            <div class="mb-3">
               <label for="exampleInputEmail1" class="form-label">Number1</label>
               <input type="number" class="form-control" name="number1" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
               <label for="exampleInputPassword1" class="form-label">Number2</label>
               <input type="number" class="form-control" name="number2" id="exampleInputPassword1">
            </div>

            <div class="mb-3">
               <label for="exampleInputPassword1" class="form-label">operation</label>
               <input type="text" class="form-control" name="op" id="exampleInputPassword1">
            </div>

            <div class="alert  alert-success ml-4">
               <?php  echo $result ?>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>

            </form>

      </div>

</body>
</html>

