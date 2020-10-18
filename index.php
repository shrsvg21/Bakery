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
  
  <!-----------------------------------slider start ------------------------------------------->
  <div class="slideshow-container">

    <div class="image-container">
      <img src="assets/images/yum.jpg" class="image fade" />
    </div>
    <div class="image-container">
      <img src="assets/images/y.jpg" class="image fade" />
    </div>
    <div class="image-container">
      <img src="assets/images/cake.jpg" class="image fade" />
    </div>

    <a class="prev" onclick="newSlide(-1)">&#10094;</a>
    <a class="next" onclick="newSlide(1)">&#10095;</a>      

  </div>
  <!--*************************** slider ends*************************************************-->

  <!-------------------THree boxes starts--------------------------------------------------------------->
  <div class="threebox">
        <br>
       <center> <h3> From freshly baked cupcakes and </h3></center>
        <h3>rich fudgy brownies to decadent cream cheese-filled pumpkin muffins,</h3></center>
        <br>
        <br>
        <div class="about-inner-wrap">
          <div class="each-box">
            <img src="assets/images/pic.jpg">
            <h3>OUR RESTAURANTS</h3>
            <p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur deleniti obcaecati odio sunt maxime ab esse iure beatae possimus magni corrupti quas ipsam, aut officia earum unde quidem neque adipisci! </p>
            <a href="restaurants.html" class="w3-btn w3-black">RESTAURANTS</a>
            <hr>
          </div>
          <div class="each-box">
              <img src="assets/images/pic2.jpg">
              <h3>OUR MENU</h3>
              <p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur deleniti obcaecati odio sunt maxime ab esse iure beatae possimus magni corrupti quas ipsam, aut officia earum unde quidem neque adipisci! </p>
              <a href="menu.html" class="w3-btn w3-black">MENU</a>
              <hr>
            </div>
          <div class="each-box">
              <img src="assets/images/pic3.jpg">
              <h3>BOOK FOR EVENTS</h3>
              <p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur deleniti obcaecati odio sunt maxime ab esse iure beatae possimus magni corrupti quas ipsam, aut officia earum unde quidem neque adipisci! </p>
              <a href="catering.html" class="w3-btn w3-black">BOOK NOW</a>
              <hr>
            </div>
        </div>
      </div>
  <!--***************************there boxes ends*************************************************-->

  <!------------------------------About us section starts--------------------------------------------->
  <div  id="about" class="about-section">

        <div class="inner-container">
           <a name="about"> <h1> ABOUT US</h1></a>
            <p class="text">
                lorem  Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,
                 remaining essentially unchanged.
            </p>
        </div>
</div>
  <!--*************************** ABOUT US SECTION ENDS *************************************************-->

   <!------------------------------our story section starts--------------------------------------------->
   <div id="story-behind">
        <div class="story-container">
          <br>
          <h1>OUR STORY</h1>
          <br>
          <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
          <br>
          <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, </p>
          <br> 
          <p>sometimes by accident, sometimes on purpose (injected humour and the like).</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus repellat consequuntur est pariatur amet quod officiis minus in, et facilis doloribus quia iusto optio a fugiat saepe eum earum ipsum.</p>
        <br>
          <center><img src="assets/images/c1.jpg"></center>
        </div>
      </div>
   <!--*************************** our story SECTION ENDS *************************************************-->


    <!------------------------------map section starts--------------------------------------------->
    <div class="map-responsive">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.451278418032!2d85.30937981506199!3d27.70334958279355!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1855bfb12acf%3A0x7ea7da1507064f1f!2sNew%20Rd%2C%20Kathmandu%2044600!5e0!3m2!1sen!2snp!4v1592193221015!5m2!1sen!2snp" 
            width="600" height="400" frameborder="0" style="border:0;" allowfullscreen="" ></iframe>
    </div>
   <!--*************************** map SECTION ENDS *************************************************-->


    <!------------------------------footer section starts--------------------------------------------->
   <!---Foorer --->
    <?php include('footer.php'); ?>
   <!--*************************** footer SECTION ENDS *************************************************-->
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
      <script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
      
      <!--**********************************login pop up ends*****************************************-->
      <!--------------------------messenger------------------------------------------------------->
      <!-- Load Facebook SDK for JavaScript -->
      <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v7.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your Chat Plugin code -->
      <div class="fb-customerchat"
        attribution=setup_tool
        page_id="571305969637566"
  theme_color="#0084ff">
      </div>
      <!-----------------------------------messenger ends------------------------------------------------------>

  <!--####################################### SCRIPTS ########################################################-->

    <!------------------------- import jquery for nav------------------->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

   <!----------------for slider ------------------------->
 <script src="https://code.jquery.com/jquery-1.12.1.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax.js/1.4.2/parallax.min.js"></script>

  <!----------------------------Main script file-------------------------->
  <script src="assets/js/script.js"></script>

</body>
</html>