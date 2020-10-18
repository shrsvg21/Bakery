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
</head>
<body>
 <!--================================= main nav bar ==================================================-->
     <?php include('header.php'); ?>
  <!---**********************************NAV BAR ENDS HERE************************************************-->
  
<!---------------------------------slider------------------------------------------------------>

<!--############################### slider ends ##################################################-->

<div class="container" style="padding:0px; margin-top:-25px;">
        <div class="mySlides">
          <div class="numbertext">1 / 6</div>
          <img src="assets/images/r1.jpg" style="width:100%">
        </div>
      
        <div class="mySlides">
          <div class="numbertext">2 / 6</div>
          <img src="assets/images/w1.jpg" style="width:100%">
        </div>
      
        <div class="mySlides">
          <div class="numbertext">3 / 6</div>
          <img src="assets/images/w3.jpg" style="width:100%">
        </div>
          
        <div class="mySlides">
          <div class="numbertext">4 / 6</div>
          <img src="assets/images/w2.jpg" style="width:100%">
        </div>
      
        <div class="mySlides">
          <div class="numbertext">5 / 6</div>
          <img src="assets/images/fish.jpg" style="width:100%">
        </div>
          
        <div class="mySlides">
          <div class="numbertext">6 / 6</div>
          <img src="assets/images/bur.jpg" style="width:100%">
        </div>
          
        <a class="prev" onclick="plusSlides(-1)">❮</a>
        <a class="next" onclick="plusSlides(1)">❯</a>
      
        <div class="caption-container">
          <p id="caption"></p>
        </div>
      
       
      </div>
      
      <script>
      var slideIndex = 1;
      showSlides(slideIndex);
      
      function plusSlides(n) {
        showSlides(slideIndex += n);
      }
      
      function currentSlide(n) {
        showSlides(slideIndex = n);
      }
      
      function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demo");
        var captionText = document.getElementById("caption");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
        captionText.innerHTML = dots[slideIndex-1].alt;
      }
      </script>  
      
      <br>
      <h1 style="text-align: center;"> <b>OUR RESTAURANT BRANCHES</b></h1>
      <br>
      <div class="restro" style="padding:20px;">
          <div>
          <img src="assets/images/r2.jpg" class="imgs">
        </div>
        
        <div>
          <h1 style="text-align: center;"><b>NEPAL RESTRO </b></h1>
          
      </div>
      
      <div>
          <img src="assets/images/r3.jpg" class="imgs">
        </div>
        
        <div>
          <h1 style="text-align: center;"><b>NEPAL RESTRO</b></h1>
          
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
   <!----------------------------Main script file-------------------------->
   <script src="assets/js/script.js"></script>
</body>
</html>
        