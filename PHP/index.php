<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
   <body> 
    <?php
     // befor if statement
     $USD =22300;
     $EUR =27300;
     $SGD =17000;
     $JYP =120;
     $amount =$_GET['amount'];
     echo " $amount USD is equal ";
     if ($_GET["currency"] == "USD") // if-1 statement; condition: $GET["response"] == "yes"
     {
      echo $amount * $USD; // if-1 code block
     }
     elseif ($_GET["currency"]== "SGD") {
       echo $amount * $SGD; //eleif-2 code block
     }
     else 
     {
      echo $amount * $JPY; // else code block 
     }
//after if statement
     echo "VND";
    ?>
   </body>
</html>
<!-- DinhTheVinh 2121050412 -->