<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bakery Site</title>
    <!-----------------THE MAIN STYLE SHEET---------------------------------------------------->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!------------This link is for icons in the page------------------------------------------->
    <script src="https://kit.fontawesome.com/4e40b5e662.js" crossorigin="anonymous"></script>
    <!-------------------buttons-by shreya i guess--------------------------------------------->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
    
* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container1 {

  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  margin-left: 10px;
  margin-right: 2px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #000;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 20%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

/*hr {
  border: 1px solid lightgrey;
}
*/
span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width:1373px) {
  /*.row {
    flex-direction: column-reverse;
  }*/
  .col-25 {
    margin-bottom: 20px;
  }

}

/*social media*/
#social {
  margin: 20px 10px;
  text-align: center;
}

.smGlobalBtn{ /* global button class */
    display: inline-block;
    position: relative;
    cursor: pointer;
    width: 50px;
    height: 50px;
    box-shadow: 0 2px 2px #999;
    padding: 0px;
    text-decoration: none;
    text-align: center;
    color: #fff;
    font-size: 25px;
    font-weight: normal;
    line-height: 2em;
    border-radius: 25px;
    -moz-border-radius:25px;
    -webkit-border-radius:25px;
}
/* facebook button class*/
.facebookBtn{
    background: #4060A5;
}

.facebookBtn:before{ /* use :before to add the relevant icons */
    font-family: "FontAwesome";
    content: "\f09a"; /* add facebook icon */
}

.facebookBtn:hover{
    color: #4060A5;
    background: #fff;
}

/* twitter button class*/
.twitterBtn{
    background: #00ABE3;
}

.twitterBtn:before{
      font-family: "FontAwesome";
      content: "\f099"; /* add twitter icon */
}

.twitterBtn:hover{
      color: #00ABE3;
      background: #fff;
}
/* google plus button class*/
.googleplusBtn{
    background: #e64522;
}

.googleplusBtn:before{
      font-family: "FontAwesome";
      content: "\f0d5"; /* add googleplus icon */
}

.googleplusBtn:hover{
      color: #e64522;
      background: #fff;
}

/* linkedin button class*/
.linkedinBtn{
    background: #0094BC;
}

.linkedinBtn:before{
      font-family: "FontAwesome";
      content: "\f0e1"; /* add linkedin icon */
}

.linkedinBtn:hover{
      color: #0094BC;
      background: #fff;
}
/*drop down*/
.dropdown {
  float: left;
  overflow: hidden;
  position: static;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: #ccc;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}

/* GALLERY */
div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 180px;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}


input[type=text] {
  margin-top: 10px;
  -webkit-transition: width 0.4s ease-in-out;
  

  transition: width 0.4s ease-in-out;

  }

input[type=text]:focus {
  width: 100%;
}
.emp{
  width: 100%;
}
@media screen and (max-width:800px){
  .btn{
    width: 100%;
  }
  
}
    
    </style>
</head>
<body>
 <!--================================= main nav bar ==================================================-->
    <!--================================= main nav bar ==================================================-->
        <?php include('header.php'); ?>
    <!---**********************************NAV BAR ENDS HERE************************************************-->
<br>
<br>
<br>
<br>
<body>
 <center> <h2> <strong> Please fill out the information below </strong> </h2> </center>
 
<div class="row">
  <div class="col-75">
    <div class="container1">
      <form action="/action_page.php">
      
        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
       <!--      <label for="fname"><i class="fa fa-user"></i> Full Name</label>
             --><input type="text" id="fname" name="firstname" placeholder="Full name">
           <!--  <label for="email"><i class="fa fa-envelope"></i> Email</label> -->
            <input type="text" id="email" name="email" placeholder="Email">
           <!--  <label for="adr"><i class="fa fa-address-card-o"></i> Address</label> -->
            <input type="text" id="adr" name="address" placeholder="Address">
           <!--  <label for="city"><i class="fa fa-institution"></i> City</label> -->
            <input type="text" id="city" name="city" placeholder="City">

            <div class="row">
              <div class="col-50">
               <!--  <label for="state">State</label> -->
                <input type="text" id="state" name="state" placeholder="State">
              </div>
              <div class="col-50">
               <!--  <label for="zip">Zip</label> -->
                <input type="text" id="zip" name="zip" placeholder="Zip">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment or scan to pay</h3>
            <!-- <label for="fname">Accepted Cards</label> -->
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
           <!--  <label for="cname">Name on Card</label> -->
            <input type="text" id="cname" name="cardname" placeholder="Card Name">
            <!-- <label for="ccnum">Credit card number</label> -->
            <input type="text" id="ccnum" name="cardnumber" placeholder="Card Number">
         <!--    <label for="expmonth">Exp Month</label> -->
            <input type="text" id="expmonth" name="expmonth" placeholder="Exp Month">
            <div class="row">
              <div class="col-50">
                <!-- , -->
                <input type="text" id="expyear" name="expyear" placeholder="Exp Year">
              </div>
              <div class="col-50">
               <!--  <label for="cvv">CVV</label> -->
                <input type="text" id="cvv" name="cvv" placeholder="CVV">
              </div>
            </div>
          </div>
          
        </div>
        <br>
        <label>
         <center><input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label></center> 
       <center> <input type="button" value="Order" class="btn"></center>
      </form>
  </div>
  </div>
  <br>
  <div class="col-25" style="background-color: #f1f1f1" >
    <div class="container" >
     <div id="site">

  <div id="content">
    <center> <p><b>CART </b></p> </center>
    <form id="shopping-cart" action="cart.html" method="post">
      <table class="shopping-cart">
        <thead>
        <tr>
          <th scope="col">Item</th>
          <th scope="col">Qty</th>
          <th scope="col" colspan="2">Price</th>
        </tr>
        </thead>
        <tbody>
        
        </tbody>
      </table>
      <p id="sub-total">
        <strong>Sub Total</strong>: <span id="stotal"></span>
      </p>
      <ul id="shopping-cart-actions">
        
        <li>
          <input type="submit" name="delete" id="empty-cart" class="emp" value="Empty Cart" />
        </li>
      <hr>
      <hr>
    <hr>
   <center> <div class="col-25" style="background-color: #f1f1f1">
    <div class="container" >

    
     
     <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script type="text/javascript">
            function generateBarCode()
            {
                // var nric = $('#text').val();
                var url = 'https://api.qrserver.com/v1/create-qr-code/?data=' + nric + '&amp;size=50x50';
                $('#barcode').attr('src', url);
            }
        </script>
    </head>
    <body>
        <!-- <input id="text" type="text" 
            value="NRIC or Work Permit" style="Width:20%" -->
       <!--      onblur='generateBarCode();' />  -->

      <img id='barcode' 
            src="https://api.qrserver.com/v1/create-qr-code/?data=HelloWorld&amp;size=100x100" 
            alt="" 
            title="Scan on your phone for payment" 
            width="200" 
            height="200" />
    </body>
    </div>
  </div>
  </div>
  

</div>
  </div>
</div> </center>
<hr>
 </body>

<!--popup-->
<div class="form-popup" id="myForm" >

    <form  action="/action_page.php" class="form-container">
    

    


    <span class="close" onclick="closeForm()">&times;</span> <br>

      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>
  
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
   
      <button type="submit" class="btn">Login</button> <hr>
      <p> <b>Or login via social media </p> <br>
    <center><a href="https://www.facebook.com/" class="fbbtn" style="color:  #3B5998">
          <i class="fa fa-facebook fa-fw" style="color:  #3B5998"></i> Login with Facebook
         </a></center> <br> 
          <center><a href="https://www.twitter.com/" class="twitterbtn" style="color: #55ACEE">
          <i class="fa fa-twitter fa-fw" style="color: #55ACEE"></i> Login with Twitter
         </a></center> <br> 
          <center><a href="https://www.gmail.com/" class="googlebtn"style="color: red">
          <i class="fa fa-google fa-fw" style="color: red"></i> Login with Google
         </a></center> <hr>
         <p><b> Don't have an account?</b> <a href="#"  style="color: #55ACEE"> SignUp </a> </p>
    </form>
  </div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
</body>

</body>

</body>
<div class="form-popup" id="myForm" >

    <form  action="/action_page.php" class="form-container">
    <span class="close" onclick="closeForm()">&times;</span> <br>

      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>
  
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
   
      <button type="submit" class="btn">Login</button> <hr>
      <p> <b>Or login via social media </p> <br>
    <center><a href="https://www.facebook.com/" class="fbbtn" style="color:  #3B5998">
          <i class="fa fa-facebook fa-fw" style="color:  #3B5998"></i> Login with Facebook
         </a></center> <br> 
          <center><a href="https://www.twitter.com/" class="twitterbtn" style="color: #55ACEE">
          <i class="fa fa-twitter fa-fw" style="color: #55ACEE"></i> Login with Twitter
         </a></center> <br> 
          <center><a href="https://www.gmail.com/" class="googlebtn"style="color: red">
          <i class="fa fa-google fa-fw" style="color: red"></i> Login with Google
         </a></center> <hr>
         <p><b> Don't have an account?</b> <a href="#"  style="color: #55ACEE"> SignUp </a> </p>
    </form>
  </div>
<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
<!---------jquery for nav------------------->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<!---------script link-->
<script src="ap/js/ap-script.js"></script>
  
<!--------------------------------footer starts----------------------------------------->

<!--  -->


       <!---------------------------login popup----------------------------------------------->
  <div class="form-popup" id="myForm" >

        <form  action="/action_page.php" class="form-container">
    
        <span class="close" onclick="closeForm()">&times;</span> <br>
    
          <label for="email"><b>Email</b></label>
          <input type="text" placeholder="Enter Email" name="email" required>
      
          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw" required>
       
          <button type="submit" class="btn">Login</button> <hr>
          <p> <b>Or login via social media </p> <br>
        <center><a href="https://www.facebook.com/" class="fbbtn" style="color:  #3B5998">
              <i class="fa fa-facebook fa-fw" style="color:  #3B5998"></i> Login with Facebook
             </a></center> <br> 
              <center><a href="https://www.twitter.com/" class="twitterbtn" style="color: #55ACEE">
              <i class="fa fa-twitter fa-fw" style="color: #55ACEE"></i> Login with Twitter
             </a></center> <br> 
              <center><a href="https://www.gmail.com/" class="googlebtn"style="color: red">
              <i class="fa fa-google fa-fw" style="color: red"></i> Login with Google
             </a></center> <hr>
             <p><b> Don't have an account?</b> <a href="#"  style="color: #55ACEE"> SignUp </a> </p>
        </form>
      </div>
      
      <!--**********************************login pop up ends*****************************************-->


 <!--####################################### SCRIPTS ########################################################-->

    <!------------------------- import jquery for nav------------------->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <!--scrpt for menu page------------------------------------------------>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.shop.js"></script>
   <!----------------------------Main script file-------------------------->
   <script src="assets/js/script.js"></script>


</html> 
