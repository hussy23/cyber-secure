<!-
Code Initiator - Hussain Moulana
Begin Date - March - 2023
>
<link href="images/Logo 2.jpg" rel="short icon" type="image/jpg"/>
<?php include('database.php')

 ?>
<!DOCTYPE html>

<html lang="en">
<head>
<link rel="stylesheet" href="main.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title> DC vs MARVEL - Login </title>
<style>
  body{
	margin: 0 auto;
	background-image: url("images/updateprofile.jpg");
	background-repeat: no-repeat;
	background-size: 100% 1000px;
      }
      
h1{
     color: red;  
     font-family: cursive;
    font-size: 30px;
    text-align:center;
  }
      
.delete{
       padding-left: 100px;
       padding-right:100px;
       width: 500px;
       height: 400px;
       text-align:center;
       margin: 0 auto;
       background-color: hsla(0, 9%, 96%, 0.74);
       margin-top: 110px;
       border-radius:40px;
       font-family: monospace;
       font-size:20px;
}

.delete img{
	width: 100px;
	height: 100px;
	margin-top:20px;
       display: block;
        margin-left: auto;
        margin-right: auto;
}

.delbtn {
  background-color: white;
  color: black;
  padding: 5px 5px;
  margin: 10px 0;
  border-radius: 4px;
  cursor: pointer;
  width: 40%;
  font-size:15px;
  font-family: monospace;
}
.cancelbtn {
  background-color: white;
  color: black;
  padding: 5px 5px;
  margin: 10px 0;
  border-radius: 4px;
  cursor: pointer;
  width: 40%;
  font-size:15px;
  font-family: monospace;
}
.cancelbtn:hover{
    background-color:red ;
    
}
.delbtn:hover{
    background-color:red ;
    
}



</style>
</head>
    <body>
    <div class="header">
        <a class="logo" href="index.php"> <img src="images/logo.jpg" alt="image">  </a>
  
            <nav class="header-left">
                <a class="active" href="index.php">Home</a>
                
                <div class="dropdown">
                    <a href="comics.php"> comics </a> <button class="dropbtn"> 
                        <em class="fa fa-caret-down"></em></button>
                                                       
                
                    <div class="dropdown-options">
                      <a href="MARVEL.php"> MARVEL </a>
                      <a href="DC.php"> DC</a>
                      <a href="comicsoffer.php"> Offers</a>
                    </div> 
                    </div>
               
               <a href="contact.php">Contact</a>
               <a href="aboutus.php" > About </a>
               <a href="feedback.php">Feedback</a>  
                   
             </nav>
             <div class="search-right">
                <form class="search" method="POST" action="search.php" style=" margin:auto">
                    <input type="text" placeholder="Whats on your mind?? " name="search">
                    <button type="submit"><em class="fa fa-search"></em></button>
                
                </form>
                 
             </div>
             
        <div class="cart-right">
            <a href="cart.php" >
             <span class="fa fa-shopping-cart"></span> Your Cart
            </a>
        </div>

        <nav class="header-right">
        <a href="reg.php"> Sign Up </a>
        <a href="login.php"> Login</a>
        </nav>
             
    </div>  

       <div class="delete">
           <br>
           <img src="images/LOGIN.png" alt="image"> 
           <h1> DELETE ACCOUNT </h1>
          
            <form action="delete.php" method="POST">
               
                    <div class="logdetail">
                       <?php  if (isset($_SESSION['username'])) : ?>
                           <strong><?php echo $_SESSION['username']; 
                                if (isset($_POST['del_user'])) {
                                 $username = ($_SESSION['username']);
                                 $query = "DELETE from customers WHERE username='$username'";

                            if ($db->query($query) === TRUE) {
                               echo '<script> alert ("YOUR ACCOUNT IS DELETED"); window.location="index.php"; </script>';
                               } 
                               else
                           { echo "Error deleting record: " . $db->error;
                            }
                        }    
                        ?><br> Do You Wish To Delete Your Account?? </strong> <br><br>
              
                     <button type="submit" class="delbtn" value ="delete" name="del_user">  YES </button> 
                     <button type="submit" class="cancelbtn" value ="cancel" > <a href='account.php'> NO </a> </button> 
                
                 </div>
            </form>
            <?php endif ?>
       </div>
    </body>
    
    </html>  



<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/614a223925797d7a890022a1/1fg4pbckd';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</php>