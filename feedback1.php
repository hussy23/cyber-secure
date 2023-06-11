<!-
Code Initiator - Hussain Moulana
Begin Date - March - 2023
>

<?php
$Email=$_POST ['email'];
$Feedback=$_POST ['feedback'];
if ( !empty($Email) || !empty($Feedback) ){
        $hostname="us-cdbr-east-04.cleardb.com";
        $username="b8f5fe66220704";
        $password="5b7f8b7c";
        $dbname="heroku_611d7b294f31a80";
        
        $connection= new mysqli ($hostname,$username,$password, $dbname);
           
           if ($connection-> connect_error)
           {
               die ("Error in connection");
           
           } else {
      $INSERT = "INSERT into feedback (email,  feedback) values(?, ?)";
      $sql = $connection->prepare($INSERT);
      $sql->bind_param("ss",$Email, $Feedback);
      $sql->execute();
      
      echo '<script> alert ("Thank you for your feedback! We will get back to you on it! " );window.location="index.php"; </script>';
     
     } 
     $sql->close();
     $connection->close();
 die();
}
?>