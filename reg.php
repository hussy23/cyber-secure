<!-
Code Initiator - Hussain Moulana
Begin Date - March - 2023
>
<link href="images/Logo 2.jpg" rel="short icon" type="image/jpg"/>
<?php include('database.php') ?>
<!DOCTYPE php>
<html lang="en">
<head>
<link rel="stylesheet" href="main.css">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="incdec.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title> DC vs MARVEL - SignUp </title>
<style>
    
body {
  background-image: url("images/SIGNUP.jpg");
  background-size: 100% 1300px;
}

h1{
    text-align:center;
    font-family: cursive;
    font-size: 35px;
    margin-bottom:4px;
}

.register {
  padding-left: 100px;
  padding-right:100px;
  background-color: WHITE;
  width: 670px;
  height: 1000px;
  text-align:left;
  margin: 0 auto;
 margin-top: 40px;
 margin-bottom:40px;

  
}

input[type=text], input[type=password], input[type=email] {
  width: 100%;
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
hr {
  border: 2px solid #f1f1f1;
  margin-bottom: 15px;
}

.registerbtn {
  background-color: royalblue;
  color: white;
  padding: 10px 5px;
  margin: 10px 0;
  border: none;
  cursor: pointer;
  width: 40%;
  font-size:15px;
}

.registerbtn:hover{
    background-color:darkslateblue;
    color:black;
}

a {
  color: darkblue;
}

.signup {
  background-color: #f1f1f1;
  text-align: center;
  opacity:0.7;
  padding-top:5px;
  padding-bottom:5px;
  font-weight:bold;
}

 @media screen and (max-width: 700px) {
  .padding{   
     float: none;
    display: block;
    text-align: left;
  }
</style>
</head>
</html>
<body>
    <div class="header">
    <a class="logo" href="index.php"> <img src="images/logo.jpg" alt="image">  </a>
  
            <nav class="header-left">
                <a href="index.php" >Home</a>
                <div class="dropdown">
                    <a href="comics.php"> comics </a> <button class="dropbtn"> 
                        <em class="fa fa-caret-down"></em></button>
                
                    <div class="dropdown-options">
                      <a href="MARVEL.php" > MARVEL </a>
                      <a href="DC.php" > DC</a>
                      <a href="comicsoffer.php" > Offers</a>
                    </div> 
                    </div>

               <a href="contact.php">Contact</a>
               <a href="aboutus.php" > About </a>
               <a href="feedback.php" >Feedback</a>  
                   
             </nav>
  
             <nav class="header-right">
            <a class="active" href="reg.php" > <strong>Sign Up </a></strong>
            <a href="login.php" > Login </a>             
            </nav>
    </div>
   
        
    <form name="form" action="reg.php" method="POST" onsubmit="return validate()">
      <div class="padding">
          <div class="register" >
               <?php include('errors.php'); ?>
             <h1><u>Sign Up</u> </h1>
             <p style="text-align:center; font-weight:bold">Please fill in this form to register your DC vs MARVEL account.
                 <div class="signup">
                     <em>Already have an account? Click <a href="login.php"> Login </a> </em>
                 </div>
        <hr>
        <strong>Create Username </strong>
        <input type="text" name="username" value="<?php echo $username; ?>" required>
        
            <strong>First Name</strong>
            <input type="text" name="fname" value="<?php echo $fname; ?>" required>
            
             <strong>Last Name</strong>
            <input type="text" name="lname" value="<?php echo $lname; ?>" required>
            
            <strong>Email</strong>
           <input type="email" name="email" value="<?php echo $email; ?>" required>
            

            <strong>Password</strong>
            <input type="password" placeholder="Enter Password" name="password_1" id="psw" required>

            <strong>Re-Enter Password</strong>
            <input type="password" placeholder="Confirm Password" name="password_2" id="cpsw" required>
            
        <hr>
               

            <button type="submit" class="registerbtn" value ="submit" name="reg_user">Register</button>
        
  
  </div>
  </div>
</form>
     <script>
     var password = document.getElementById("psw")
  , confirm_password = document.getElementById("cpsw");

        function validatePassword(){
             if(password.value !== confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
        </script>

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
             &copy;2021-2025 copyright by DC vs MARVEL<br>
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