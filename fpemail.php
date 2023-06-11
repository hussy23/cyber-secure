<!-
Code Initiator - Hussain Moulana
Begin Date - March - 2023
>

<?php
$Email=$_POST ['email'];
$hostname ="us-cdbr-east-04.cleardb.com";
$username="b8f5fe66220704";
$password="5b7f8b7c";
$dbname="heroku_611d7b294f31a80";
        
        $connection= new mysqli ($hostname,$username,$password, $dbname);
           
           if ($connection-> connect_error)
           {
               die ("Error in connection");
           
           } else {
     $SELECT = "SELECT email From customers Where email = ? Limit 1";
     $sql = $connection->prepare($SELECT);
     $sql->bind_param("s", $Email);
     $sql->execute();
     $sql->bind_result($Email);
     $sql->store_result();
     $rnum = $sql->num_rows;
     if ($rnum==0) {
      $sql->close();
        $connection->close();
          echo '<script> alert ("Sorry this email doesnt exist."); window.location="index.php"; </script>';
     }else {
         echo '<script> alert("An email has been sent with the link to reset your username/password");  window.location = "index.php"; </script>';
     }
    }
 die();

?>