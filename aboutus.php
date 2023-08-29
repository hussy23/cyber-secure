<!-
Code Initiator - Hussain Moulana
Begin Date - June - 2023
>
<link href="images/Logo 2.jpg" rel="short icon" type="image/jpg"/>
<HEAD>
<link rel="stylesheet" href="main.css">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="incdec.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 

<TITLE>Nixon-About</TITLE>
<style>    
@import url('https:fonts.googleapis.com/css2?family=Poppins:wght@200;300;400&display=swap'); 
 body {
    background-image: url("images/backabout.jpg");
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

.section{
    width:100%;
}

.section .container{
    width:80%;
    display: block;
    margin: 0px auto;
    padding: 50px 0px;
}

.container .title{
    width: 100%;
    text-align: left;
    margin-bottom: 20px;
}

.container .title h1{
    text-transform: uppercase;
    font-size: 35px;
    color: blue;
}

.container .title h1::after{
    content: "";
    height: 5px;
    width:100px;
    background-color: blue;
    position: relative;
    right: 590px;
    border-radius: 25px;
    display: block;
    margin: auto;
}

.content{
    float:left;
    width:55%;
}

.image-section{
    float:right;
    padding: 40px  40px;    
    position:relative;
    height: 0px;
    bottom:500px;
    width:40%;
    vertical-align:top;
}


.content .article h3{
    color: #a3a3a3;
    font-size: 17px;
}

.content .article p{
    margin-top 20px;
    font-size: 16px;
    line-height: 1.5;
    color: #333;
}


@media screen and (max width: 768px){
    .container{
        width:80%;
        display: block;
        margin:auto;
    }
    .content{
        float:none;
        width:100%;
        display: block;
        margin: auto;
    }
    .image-section{
        float:none;
        width:100%;
        position: relative;
        bottom: 100px;
        margin-top: 20px;
    }
    .image-section img{
        width:100%;
        height:auto;
        display:block;
        margin:auto;
    }
    .container .title h1{
        text-align: center;
        font-size: 30px;
    }
    
}

</style>
</HEAD>
<BODY>
 <div class="header">
    <a class="logo" href="index.php"> <img src="images/logo.jpg" alt="image">  </a>
  
            <nav class="header-left">
                <a  href="index.php">Home</a>
                <div class="dropdown">
                    <a href="comics.php"> Section </a> <button class="dropbtn"> 
                        <em class="fa fa-caret-down"></em></button>
                        
                    <div class="dropdown-options">
                      <a href="MARVEL.php" > SOFTWARE </a>
                      <a href="DC.php" > TUTORIAL </a>
                      <a href="comicsoffer.php" > Offers </a>
                    </div> 
                    </div>
               
               <a href="contact.php">Contact</a>
               <a class="active" href="aboutus.php"><strong> About </a></strong>
               <a href="feedback.php">Feedback</a>   
                   
             </nav>
             <div class="search-right">
                <form class="search" method="POST" action="search.php" style=" margin:auto">
                    <input type="text" placeholder="Whats on your mind??" name="search">
                    <button type="submit"><em class="fa fa-search"></em></button>
                
                </form>
                 
             </div>
             
        <div class="cart-right">
            <a href="cart.php" >
          <span class="fa fa-shopping-cart"></span> Your Cart </a>
       </div>

       <nav class="header-right">
            <a href="reg.php" > Sign Up </a>
            <a href="login.php" > Login </a>             
            </nav>
    </div>

    <div class="section">
        <div class="container">
            <div class="title">
                <h1>Developer</h1>
            </div>
                <div clas="content">
                    <div class="article">
                        <h3>Hussain Moulana</h3>
                        <p>MSc in Cyber Security Engineering<br /> Bsc (Hons) in Software Engineering<br>
                        
                        <a href="https://www.facebook.com/alizzzz.7" target="_blank"><em class="fa fa-facebook-official" style="color:blue; font-size:40px"></em></a> 
                        <a href="https://www.instagram.com/ali_husssain_/" target="_blank"> <em class="fa fa-instagram" style="color:magenta; font-size:40px"></em> </a> 
                        <a href="https://mobile.twitter.com/hussy_23" target="_blank"><em class="fa fa-twitter-square" style="color:#00acee; font-size:40px" ></em> </a>
                        </p>
                        
                    </div>
                 </div>
            
                 <div class="title">
                <h1>Company</h1>
            </div>
                <div clas="content">
                    <div class="article">
                        <h3>Nixon</h3>
                        <p>Security Systems training and softwares Established in 2023.</br>
                        With the sole aim of prtoecting users against digital threats
                        <br>
                        </p>
                        
                    </div>
                 </div>

                 <div class="title">
                <h1>objective</h1>
            </div>
                <div clas="content">
                    <div class="article">
                        <h3>Iteractive Developments</h3>
                        <p>Website Operates for continuous user interface experience to customers<br>
                        <br>
                        </p>
                        
                    </div>
                 </div>
            
            <div class="image-section">
                <img src="images/me.png" alt="image">
            </div>
            
    </div> 
    

    <div class="footer">
 
       <div class="footer-left">
                
            <a href="https://www.google.com/maps/d/edit?mid=1HqXfCxWrmokna6IfjvKOA2PTFogndeJ1&usp=sharing" target="_blank"><em class="fa fa-map-marker" style=" font-size:15px"> </em> No. 7 Ridgewayplace, Colombo 04 <br> </a> 
            <em class="fa fa-phone-square" style=" font-size:15px"> </em> 011-123-1234 <br> 
            <em class="fa fa-mobile" style="font-size:20px"></em> 0771234567 <br>
            <a href="mailto:nixon@gmail.com" target="_blank"> <em class="fa fa-envelope" style=" font-size:15px"></em> dc.vs.marvel000@gmail.com </a>
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