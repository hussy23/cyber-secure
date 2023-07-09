<!-
Code Initiator - Hussain Moulana
Begin Date - June - 2023
>
<link href="images/Logo 2.jpg" rel="short icon" type="image/jpg"/>
<?php include('database.php') ?>

<!DOCTYPE php>

<html lang="en">
<head>
<link rel="stylesheet" href="main.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title> DC vs MARVEL - Login </title>
<style>
  body{
	margin: 0 auto;
	background-image: url("images/PAGE 1.jpg");
	background-repeat: no-repeat;
	background-size: 100% 1000px;
      }
</style>

</head>
<body>
 
    <div class="header">
    <a class="logo" href="index.php"> <img src="images/logo.jpg" alt="image">  </a>  
            <nav class="header-left">
                <a  href="index.php" >Home</a>
                
                <div class="dropdown">
                    <a href="comics.php"> comics </a> <button class="dropbtn"> 
                        <em class="fa fa-caret-down"></em></button>
                
                    <div class="dropdown-options">
                      <a href="MARVEL.php" > SOFTWARE </a>
                      <a href="DC.php" > TUTORIAL </a>
                      <a href="comicsoffer.php" > Offers</a>
                    </div> 
                    </div>
               
               <a href="contact.php">Contact</a>
               <a href="aboutus.php" > About </a>
               <a href="feedback.php" >Feedback</a> 
                   
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
            <a href="reg.php" > Sign Up </a>
            <a class="active" href="login.php"><strong> Login </a></strong>             
            </nav>
    </div>

<style>
h1{
     color: mediumvioletred;  
      font-family: cursive;
    font-size: 30px;
    text-align:center;
  }
      
.login{
       padding-left: 100px;
       padding-right:100px;
       width: 450px;
       height: 500px;
       text-align:left;
       margin: 0 auto;
       background-color: grey ;
       margin-top: 40px;
       
}

.login img{
	width: 100px;
	height: 100px;
	margin-top:40px;
       display: block;
        margin-left: auto;
        margin-right: auto;
}

.loginbtn {
  background-color: white;
  color: black;
  padding: 5px 5px;
  margin: 10px 0;
  border-radius: 4px;
  cursor: pointer;
  width: 40%;
  font-size:15px;
}

.loginbtn:hover{
    background-color:lightsalmon ;
    
}

  input[type=text], input[type=password], input[type=email] {
  width: 110%;
  padding: 10px;
  opacity :0.7;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
}

input[type=text]:focus, input[type=password]:focus, input [type=email]:focus {
  background-color: lightgray;
  outline: none;
}

</style>
</head>
    <body>
      
       <div class="login">
           <img src="images/LOGIN.png" alt="image"> 
           <h1> LOGIN </h1>
           <p style="text-align:center; font-weight:bold"><em>Don't have an account?<br> Click <a href="reg.php"> SignUp </a> </em> </p>
            <form action="login.php" method="POST">
                <?php include('errors.php'); ?>
                <div class="logdetail">
                  <input type="hidden" name="id" value="<?php echo $id; ?>">
                  <strong>Username </strong> <input type="text" name="username" placeholder="Enter username" required >
                    <strong>Password </strong> <input type="password" name="password" placeholder="Enter password" required>
           
                     <button type="submit" class="loginbtn" value ="login" name="login_user">  Login </button> 
                     <em class="fa fa-question-circle" aria-hidden="true">  <a href="fp.php" > Forgot Username/Password </a></em>
                
                 </div>
            </form>
       </div>
<br>
<br>
       <div class="footer">
        <div class="footer-left">
                
            <a href="https://www.google.com/maps/d/edit?mid=1HqXfCxWrmokna6IfjvKOA2PTFogndeJ1&usp=sharing" target="_blank"><em class="fa fa-map-marker" style=" font-size:15px"> </em> No. 7 Ridgewayplace, Colombo 04 <br> </a>
            <em class="fa fa-phone-square" style=" font-size:15px"> </em> 011-123-1234 <br>
            <em class="fa fa-mobile" style="font-size:20px"></em> 0771234567 <br>
            <a href="mailto:dc.vs.marvel000@gmail.com" target="_blank">  <em class="fa fa-envelope" style=" font-size:15px"></em> dc.vs.marvel000@gmail.com  </a> 
        </div>
        
        <div class="footer-center">
            <a href="https://www.facebook.com/TheMarvelvsDc/" target="_blank"><em class="fa fa-facebook-official" style="color:blue; font-size:40px"></em></a> 
            <a href="https://www.instagram.com/themarvelvsdc/?hl=en" target="_blank"> <em class="fa fa-instagram" style="color:magenta; font-size:40px"></em> </a> 
            <a href="https://twitter.com/TheMarvelvsDC?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" target="_blank"><em class="fa fa-twitter-square" style="color:#00acee; font-size:40px" ></em> </a>  
            </a>  <br>
             &copy;2021-2025 copyright by Nixon<br>
             all rights reserved.<br>
                Designed by Hussain Moulana!  
        </div>
        
        <div class="footer-right">
            
            <H6> PAYMENT METHODS </H6>
            <a href="https://www.visa.com.lk/pay-with-visa/contactless-payments/contactless-payments.html" target="_blank"> <em class="fa fa-cc-visa" style=" font-size:50px; color:navy;"></em></a>
            <a href="https://src.mastercard.com/profile/enroll" target="_blank"><em class="fa fa-cc-mastercard"  style=" font-size:50px; color:red"></em></a>
            <a href="https://www.paypal.com/lk/webapps/mpp/pay-online" target="_blank"> <em class="fa fa-cc-paypal"  style=" font-size:50px; color:darkslateblue"></em></a> <br> <br>
            <em class="fa fa-motorcycle" style=" font-size:20px"> Free Delivery Island-wide!</em> <br>
           
        </div>
        
    </div>       

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
</body>    
</php>