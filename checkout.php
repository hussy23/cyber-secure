<!-
Code Initiator - Hussain Moulana
Begin Date - March - 2023
>

<?php
    $fname = $_POST['fname'];
    $comicname = $_POST['comicname'];
    $price = $_POST['price'];
    $carddetails = $_POST['carddetails'];
    $billingaddress = $_POST['billingaddress'];
    if ( !empty($fname) || !empty($comicname) || !empty($price) || !empty($carddetails) || !empty($billingaddress) ){
        $hostname="us-cdbr-east-04.cleardb.com";
        $username="b8f5fe66220704";
        $password="5b7f8b7c";
        $dbname="heroku_611d7b294f31a80";

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
