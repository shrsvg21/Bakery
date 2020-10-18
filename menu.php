
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
    
</head>
<body>
    <!--================================= main nav bar ==================================================-->
        <?php include('header.php'); ?>
    <!---**********************************NAV BAR ENDS HERE************************************************-->

<!-----------------------product info starts--------------------------------------------->
<div id="site">
<header id="masthead">
<h1 style="line-height:100px;"> Cookies <span class="tagline"></h1>
</header>
<div id="content">
<div id="products">
<ul>
<li>
<div class="product-image">
<img src="assets/images/chips.jpg" alt="" />
</div>
<div class="product-description" data-name="Fried cookies" data-price="50">
<h3 class="product-name">Fried</h3>

<form class="add-to-cart" action="checkout.html" method="post">
    <div>
            <p class="product-price">Price: RS 50</p>
            <label for="qty-1">Qt</label>
        <input type="text" name="qty-1" id="qty-1" class="qty" value="1" />
    </div>
    <p><input type="submit" value="Add to cart" class="btn" /></p>
</form>
</div>
</li>

<li>
<div class="product-image">
    <img src="assets/images/coo.jpeg" alt="" />
</div>
<div class="product-description" data-name="Chocolate cookies" data-price="50">
    <h3 class="product-name">Chocolate</h3>
    
    <form class="add-to-cart" action="checkout.html" method="post">
        <div>
                <p class="product-price">Price: RS 50</p>
                <label for="qty-1">Qt</label>
            <input type="text" name="qty-1" id="qty-1" class="qty" value="1" />
        </div>
        <p><input type="submit" value="Add to cart" class="btn" /></p>
    </form>
</div>
</li>
<li>
    <div class="product-image">
        <img src="assets/images/pat.jpg"alt="" />
    </div>
    <div class="product-description" data-name="Baked Cookies" data-price="50">
        <h3 class="product-name">Baked</h3>
        
        <form class="add-to-cart" action="checkout.html" method="post">
            <div>
                    <p class="product-price">Price: RS 50</p>
                    <label for="qty-1">Qt</label>
                <input type="text" name="qty-1" id="qty-1" class="qty" value="1" />
            </div>
            <p><input type="submit" value="Add to cart" class="btn" /></p>
        </form>
    </div>
</li>
<li>
<div class="product-image">
    <img src="assets/images/chips.jpg" alt="" />
</div>
<div class="product-description" data-name="Cinnamon cookies" data-price="7">
    <h3 class="product-name">Cinnamon </h3>
    
    <form class="add-to-cart" action="checkout.html" method="post">
        <div>
                <p class="product-price">Price: RS 7</p>
                <label for="qty-1">Qt</label>
            <input type="text" name="qty-1" id="qty-1" class="qty" value="1" />
        </div>
        <p><input type="submit" value="Add to cart" class="btn" /></p>
    </form>
</div>
</li>





</ul>
</div>
<header id="masthead">
<h1> Cakes and bread <span class="tagline"></h1>
</header>
<div id="content">
<div id="products">
    <ul>
        <li>
            <div class="product-image">
                <img src="assets/images/flatbread.jpg" alt="" />
            </div>
            <div class="product-description" data-name="Flatbread" data-price="5">
                <h3 class="product-name">Flatbread</h3>
                
                <form class="add-to-cart" action="checkout.html" method="post">
                    <div>
                            <p class="product-price">Price: RS 5</p>
                            <label for="qty-1">Qt</label>
                        <input type="text" name="qty-1" id="qty-1" class="qty" value="1" />
                    </div>
                    <p><input type="submit" value="Add to cart" class="btn" /></p>
                </form>
            </div>
        </li>
        
        <li>
            <div class="product-image">
                <img src="assets/images/cak.jpg" alt="" />
            </div>
            <div class="product-description" data-name="Cake" data-price="5">
                <h3 class="product-name">Cake</h3>
                
                <form class="add-to-cart" action="checkout.html" method="post">
                    <div>
                            <p class="product-price">Price: RS 5</p>
                            <label for="qty-1">Qt</label>
                        <input type="text" name="qty-1" id="qty-1" class="qty" value="1" />
                    </div>
                    <p><input type="submit" value="Add to cart" class="btn" /></p>
                </form>
            </div>
        </li>
        <li>
                <div class="product-image">
                    <img src="assets/images/bun.jpg" alt="" />
                </div>
                <div class="product-description" data-name="Bun" data-price="10">
                    <h3 class="product-name">Bun</h3>
                    
                    <form class="add-to-cart" action="checkout.html" method="post">
                        <div>
                                <p class="product-price">Price: RS 10</p>
                                <label for="qty-1">Qt</label>
                            <input type="text" name="qty-1" id="qty-1" class="qty" value="1" />
                        </div>
                        <p><input type="submit" value="Add to cart" class="btn" /></p>
                    </form>
                </div>
            </li>
            <li>
                    <div class="product-image">
                        <img src="assets/images/cakes.jpg" alt="" />
                    </div>
                    <div class="product-description" data-name="Moose" data-price="5">
                        <h3 class="product-name">Moose</h3>
                        
                        <form class="add-to-cart" action="checkout.html" method="post">
                            <div>
                                    <p class="product-price">Price: RS 5</p>
                                    <label for="qty-1">Qt</label>
                                <input type="text" name="qty-1" id="qty-1" class="qty" value="1" />
                            </div>
                            <p><input type="submit" value="Add to cart" class="btn" /></p>
                        </form>
                    </div>
                </li>
                <li>
               
            </li>
        
        


        
    </ul>
</div>
	</div>
	
	</div>

</div>
<!--------------------------------footer starts----------------------------------------->
<!---Foorer --->
    <?php include('footer.php'); ?>
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
</body>
</html>	