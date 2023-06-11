<!-
Code Initiator - Hussain Moulana
Begin Date - March - 2023
>
<link href="images/Logo 2.jpg" rel="short icon" type="image/jpg"/>
<!DOCTYPE php>

<html lang="en">
    <head>
        <title>DC vs MARVEL</title>
<style>
body{
	margin: 0 auto;
	background-image: url("images/PAGE 1.jpg");
	background-repeat: no-repeat;
	background-size: 100% 1000px;
      }
      
h1{
    color: rgb(199, 92, 21);  
    font-family: cursive, Times New Roman;
    font-size: 25px;
  }
      
.forgotpass{
       padding-left: 80px;
       padding-right:80px;
       width: 300px;
       height: 450px;
       text-align:center;
       margin: 0 auto;
       background-color: rgb(182, 186, 187) ;
       margin-top: 40px;
}

.forgotpass img{
	width: 100px;
	height: 100px;
	margin-top: 20px;
        
}

.sendbtn {
  background-color: white;
  color: black;
  padding: 5px 5px;
  margin: 10px 0;
  border-radius: 10px;
  cursor: pointer;
  width: 40%;
  font-size:15px;
}

.sendbtn:hover{
    background-color:lightsalmon;
    
}

  input[type=email] {
  width: 100%;
  padding: 10px;
  opacity :0.7;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
}

input[type=text]:focus {
  background-color: lightgray;
  outline: none;
}

</style>
</head>

    <body>
        
         <div class="forgotpass">
           <img src="images/LOGIN.png" alt="image"> <br>
           <h1> RESET USERNAME/PASSWORD </h1>
           WE WILL SEND YOU INSTRUCTIONS TO RESET YOUR USERNAME/PASSWORD <br> <br>
            <form action="fpemail.php" method="POST">
                
                <div class="forgotpassdetails">
                    <strong>Enter Your Registered Email </strong> <input type="email" name="email" placeholder="Email" required> 
                    <button type="submit" class="sendbtn" value ="send"> SEND </button>
                    <a href="login.php" button type="submit"  class="sendbtn" value ="Back" > BACK </a></button>
                </div>
            </form>
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
</html>