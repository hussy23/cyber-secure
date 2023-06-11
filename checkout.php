<!-
Code Initiator - Hussain Moulana
Begin Date - June - 2023
>

<?php
    $fname = $_POST['fname'];
    $comicname = $_POST['comicname'];
    $price = $_POST['price'];
    $carddetails = $_POST['carddetails'];
    $billingaddress = $_POST['billingaddress'];
    if ( !empty($fname) || !empty($comicname) || !empty($price) || !empty($carddetails) || !empty($billingaddress) ){
        $hostname="us-cdbr-east-06.cleardb.net";
        $username="b5b92cc92c7696";
        $password="84e9850f";
        $dbname="heroku_8198dac0f287250";

        $connection= new mysqli ($hostname, $username, $password, $dbname);

           if ($connection-> connect_error)
           {
               die ("Error in connection");

           } else {
            $INSERT = "INSERT into checkout ( fname, comicname, price, carddetails,billingaddress) values (?, ?)";
            $sql = $connection->prepare($INSERT);
            $sql->bind_param("ss",$fname, $comicname, $price, $carddetails, $billingaddress);
            $sql->execute();

            echo '<script> alert ("Your order has been received. Check your email to receive your order ID" );window.location="index.php"; </script>';
     } 
     
     $sql->close();
     $connection->close();
 die();
}
?>
