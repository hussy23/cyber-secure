<!-
Code Initiator - Hussain Moulana
Begin Date - June - 2023
>
<link href="images/Logo 2.jpg" rel="short icon" type="image/jpg"/>
<?php
 include('database.php');
 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }


require_once("dbcontroller.php");
$db_handle = new DBController();
if(!empty($_GET["action"])) {
switch($_GET["action"]) {
	case "add":
		if(!empty($_POST["quantity"])) {
			$productByCode = $db_handle->runQuery("SELECT * FROM tblproduct WHERE code='" . $_GET["code"] . "'");
			$itemArray = array($productByCode[0]["code"]=>array('name'=>$productByCode[0]["name"],  'quantity'=>$_POST["quantity"],));
			
			if(!empty($_SESSION["cart_item"])) {
				if(in_array($productByCode[0]["code"],array_keys($_SESSION["cart_item"]))) {
					foreach($_SESSION["cart_item"] as $k => $v) {
							if($productByCode[0]["code"] == $k) {
								if(empty($_SESSION["cart_item"][$k]["quantity"])) {
									$_SESSION["cart_item"][$k]["quantity"] = 0;
								}
								$_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
							}
					}
				} else {
					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
				}
			} else {
				$_SESSION["cart_item"] = $itemArray;
			}
                }
	break;	
}
}
?>
<!DOCTYPE php>
<!DOCTYPE html>
<html lang="en">
<php>
<head>
<link rel="stylesheet" href="main.css">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="js/jquery.js"> </script>
<script type="text/javascript"> 
    
 function validatephone(phone)
  	{
  		
  		phone = phone.replace(/[^0-9]/g,'');
  		$("#phonefield").val(phone);
  		if( phone == '' || !phone.match(/^07[0-9]{8}$/) )
  			{
  				$("#phonefield").css({ 'border':'solid 1px red', 'color':'crimson'});
  				
  				return false;
  			}
  		else
  			{
  				$("#phonefield").css({  'border':'solid 1px white' ,'color':'black'});
  			return true;	
  			}
  	}
 
</script>
<title> DC vs MARVEL </title>
<style>
    
    .header-right{
        float:right;
    }
    .header-left{
      float:left;
    }
    .header1{
    text-align:center;
    font-size:30px;
    font-family:monospace;
    margin-top:10px;
    font-weight:bold;
   
}
    .row {
  display: -ms-flexbox; 
  display: flex;
  -ms-flex-wrap: wrap; 
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 45%; 
  flex: 45%;
}

.col-25{
    padding:40px 220px 40px 220px;
    
}

.column{
    float:left;
    width:47%;
    padding:10px 10px 10px 20px;
    border: 5px solid black;
  border-radius: 13px;
  margin: 10px 10px 10px 25px;
  background-color:lightgrey;  
  font-weight:bold;
    
}

.billing{
    text-align:center; 
    text-decoration:underline;
    font-weight:bold;
    font-family:impact,helvetica; 
    font-size:25px;
}
.container{
    background-color:lightblue;
    padding: 10px 10px 10px 10px;
    border: 5px solid darkblue;
  border-radius: 20px;
  font-family: inherit;
}
input[type=text],input[type=password], input[type=email] {
  width: 70%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
  
}

input[type=text]:focus, input[type=password]:focus, input [type=email]:focus {
  background-color: lightgray;
  outline: none;
  
}

.icon-container {
  margin-bottom: 4px;
  margin-top: 4px;
  padding: 4px 4px;
  font-size: 44px;
}


.btn {
  background-color: seagreen;
  color: white;
  padding: 12px;
  float:left;
  border: none;
  width: 40%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
  margin-right:17px;
  
}

.btn:hover {
  background-color: darkgreen;
}


.edit {
    float :right;
    font-size:20px;
    text-decoration:underline;
    margin-right: 15px;
    margin-bottom: 30px;
}

.edit a{
    color:black;
    font-family: helvetica ;
}

.edit a:hover{
 background-color: darkslateblue;
 color: white;
 cursor: pointer;
 padding: 5px 5px 5px 5px;
}

.cartt{

	font-size: 0.9em;
       
}

.cartt th {
	font-weight: bold;
        font-family:canberra;
        font-size:20px;
}


@media (max-width: 800px) {
  .row {
    flex-direction: column;
  }
  .col-25 {
    margin-bottom: 20px;
  margin-left:12px;
  }
  

  .btn{
     
  padding: 10px;
   width: 60%;
  font-size: 11px;
  margin-right:10px;
  }
}
</style>
<body>
    <?php if (isset($_SESSION['message'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
<?php endif ?>
        
    <div class="header">
    <a class="logo" href="index.php"> <img src="images/logo.jpg" alt="image">  </a>
    <div class="header-left">
    <a  href="index.php">Home <em class style="margin-left:80px"></em></a>
    </div>
          
      <?php  if (isset($_SESSION['username'])) : ?>
    	 <strong><strong><?php echo $_SESSION['username']; ?>, Welcome To Your DC vs MARVEL Account! </strong></strong>
    
        <div class="search-right"> 
            
            <a href="updateprofile.php">Edit Profile</a>
            <a href="delete.php">Delete</a>
            <a href="index.php?logout='1'" >Logout</a>
            
            
        </div>
            <?php endif ?>
        </div>
    
    
 
<div class="row">   
<div class="col-25">
<div class="container">  
<?php
if(isset($_SESSION["cart_item"])){
    $total_quantity = 0;
    $total_price = 0;
?>
<h2 style="text-align:center; font-family:Impact, Charcoal, sans-serif; text-decoration:underline; "> YOUR CART DETAILS
<div class="edit">
    <a href="cart.php">
        <em class="fa fa-arrow-circle-left"> Edit Cart?  </em> </a>
        <br></h2>

<table class="cartt" cellpadding="4" cellspacing="2">
<caption>comics</caption>
<tbody>
<tr>
<th style scope="text-align:left; text-decoration:underline; font-size:25px">Name</th>
<th style scope="text-align:center; text-decoration:underline; font-size:25px" width="10%">Quantity</th>
<th style scope="text-align:right; text-decoration:underline; font-size:25px" width="20%">Price</th>
</tr>	
<?php		
    foreach ($_SESSION["cart_item"] as $item){
        $item_price = $item["quantity"]*$item["price"];
		?>
				<tr>
				<td><?php echo $item["name"]; ?></td>
				<td style="text-align:center;"><?php echo $item["quantity"]; ?></td>
				<td  style="text-align:right;"><?php echo number_format($item_price,2); ?></td>
				
				</tr>
				<?php
				$total_quantity += $item["quantity"];
				$total_price += ($item["price"]*$item["quantity"]);
		}
		?>

<tr>
<td colspan="2" align="left" style="font-weight:bold; font-size:20px; color:red; font-family:cursive">Your Total Bill (GBP):</td>
<td align="right" colspan="2" style="font-size:20px;  text-align:right; color:red; font-family:cursive;"><strong>
    <?php echo number_format($total_price, 2); ?></strong></td>
<td></td>
</tr>
</tbody>
</table>
<span class="fa fa-shopping-cart" style="font-size:30px; padding-left:55px;">  <?php echo $total_quantity; ?> </span>

  <?php
} else {
?>
<div class="emptycart"> <em class="fa fa-exclamation" style="color:red"> Your Cart is Empty </em> </div>
<?php 
}
?>

       
</div>
</div>
</div>
    <form action="index.php" method="POST">
          <div class="row">
          <div class="column">
            <h2 class="billing">Billing Address</h2>
            <em class="fa fa-user"></em> Full Name <br>
                <input type="text" id="fullname" name="fullname" placeholder="Full name" required> <br>
            <em class="fa fa-envelope"></em> Email <br>
                <input type="email" name="email" placeholder="Enter your email" value="<?php echo $email; ?>"required> <br>
            <em class="fa fa-address-card-o"></em> Address <br>
                <input type="text" id="adr" name="address" required> <br>
            <em class="fa fa-globe"></em> Country <br>
                <input type="text" id="country" name="country" value="Sri Lanka" readonly><br>
            <em class="fa fa-phone"></em> Mobile Number <br>
            <input type="text" id="phonefield"  value="" name="phone" maxlength="10" onkeyup=" return validatephone(this.value); " required/> <br>
            <em class="fa fa-institution"></em> City <br>
                <input type="text" id="city" name="city" placeholder="Dehiwela" required><br>
            Zip <br>
                <input type="text" id="zip" name="zip" maxlength="5" required><br>
             
            </div>
          

          <div class="column">
            <h2 class="billing">Payment Details</h2>
             Accepted Cards
             <div class="icon-container">
               <em class="fa fa-cc-visa" style="color:navy;"></em>
               <em class="fa fa-cc-mastercard" style="color:red;"></em>
               <em class="fa fa-cc-paypal" style="color:darkslateblue;"></em>
            </div>
            <em class="fa fa-credit-card-alt"></em> Name on Card <br>
            <input type="text" id="cname" name="cardname" required> <br>
            <em class="fa fa-credit-card-alt"></em> Credit card number <br>
            <input type="text" id="ccnum" name="cardnumber"  maxlength="16"   required> <br>
            Expiry Month<br>
             <select name = "months"  required>
             <option value = "January">January</option>
             <option value = "February">February</option>
             <option value = "March">March</option>
             <option value = "April">April</option>
             <option value = "May">May</option>
             <option value = "June">June</option>
             <option value = "July">July</option>
             <option value = "August">August</option>
             <option value = "September">September</option>
             <option value = "October">October</option>
             <option value = "November">November</option>
             <option value = "December">December</option>
            </select> <br><br>
            
            Expiry Year<br>
            <input list="exp_year" name="expyear" ><br>
            <datalist id="exp_year">
                    <?php 
                         $right_now = getdate();
                         $this_year = $right_now['year'];
                         $end_year=2030;
                            while ($this_year <= $end_year) {
                                   echo "<option>{$this_year}</option>";
                            $this_year++;
                             }
                     ?>
            </datalist>
            </input> <br>
            CVV<br>
            <input type="text" id="cvv" name="cvv" maxlength="3"  placeholder="Enter 3 digit code"  required> <br><br><br>
            <input type="submit" value="Proceed to checkout" onclick="mycheckout()" class="btn">
     </div>
          </div>
        </form> 
      
        <form action="checkout.php" method="POST">
        <script>
     function mycheckout() { 
         alert("Your order has been received. Check your email to receive your order ID");
     }
     {
    $fname = $_POST['fname'];
    $comicname = $_POST['comicname'];
    $price = $_POST['price'];
    $carddetails = $_POST['carddetails'];
    $billingaddress = $_POST['billingaddress'];
    }
 </script>
                            </form>
     
    
 <div class="footer">
        <div class="footer-left">
                
        <a href="https://www.google.com/maps/d/edit?mid=1HqXfCxWrmokna6IfjvKOA2PTFogndeJ1&usp=sharing" target="_blank"><em class="fa fa-map-marker" style=" font-size:15px"> </em> No. 7 Ridgewayplace, Colombo 04 <br> </a>
            <em class="fa fa-phone-square" style=" font-size:15px"> </em> 011-123-1234 <br> 
            <em class="fa fa-mobile" style="font-size:20px"></em> 0771234567 <br>
            <a href="mailto:dc.vs.marvel000@gmail.com" target="_blank">  <em class="fa fa-envelope" style=" font-size:15px"></em> dc.vs.marvel000@gmail.com  </a>        </div>
        
        <div class="footer-center">
        <a href="https://www.facebook.com/TheMarvelvsDc/" target="_blank"><em class="fa fa-facebook-official" style="color:blue; font-size:40px"></em></a> 
        <a href="https://www.instagram.com/themarvelvsdc/?hl=en" target="_blank"> <em class="fa fa-instagram" style="color:magenta; font-size:40px"></em> </a> 
          <a href="https://twitter.com/TheMarvelvsDC?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" target="_blank"><em class="fa fa-twitter-square" style="color:#00acee; font-size:40px" ></em> </a>  
                <br>
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
</html>