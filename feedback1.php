<!-
Code Initiator - Hussain Moulana
Begin Date - June - 2023
>

<?php
$Email=$_POST ['email'];
$Feedback=$_POST ['feedback'];
if ( !empty($Email) || !empty($Feedback) ){
        $hostname="us-cdbr-east-06.cleardb.net";
        $username="b5b92cc92c7696";
        $password="84e9850f";
        $dbname="heroku_8198dac0f287250";
        
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