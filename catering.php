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
<body>
    <img src ="assets/images/goods.jpg" width=100%> 
    <div class="cater-info">
        <h4>From galas to working lunches, we have specifically designed options to meet your every need. Our reputation for quality has come from delivering unrivaled levels of service and support to our clients.</h4>
        <h4> Download our menu here.</h4>
        <a href="ap/cater.txt" download>
        <button class="button" class="fa fa-download"> <b>DOWNLOAD</b></button>
    </a>
    </div>
<div id="cater">
    <div class="cater-container">
        <br>
        <h2 style="color:black; text-align: center;">BOOK FOR EVENTS</h2>
        <br>
        <div class="container1">
            <form action="/action_page.php">
              <div class="row1">
                <div class="col-25">
                  <label for="fname">First Name</label>
                </div>
                <div class="col-75">
                  <input type="text" id="fname" name="firstname" placeholder="Your name..">
                </div>
              </div>
              <div class="row1">
                <div class="col-25">
                  <label for="lname">Last Name</label>
                </div>
                <div class="col-75">
                  <input type="text" id="lname" name="lastname" placeholder="Your last name..">
                </div>
              </div>
              <div class="row1">
                <div class="col-25">
                  <label for="country">Location</label>
                </div>
                <div class="col-75">
                  <select id="country" name="country">
                    <option value="australia">Kathmandu</option>
                    <option value="canada">Bhaktapur</option>
                    <option value="usa">Lalitpur</option>
                  </select>
                </div>
              </div>
              <div class="row1">
                <div class="col-25">
                  <label for="subject">Subject</label>
                </div>
                <div class="col-75">
                  <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
                </div>
              </div>
              <br>
                <div class="row1">
                <center><input type="submit" value="REGISTER"></center>
              </div>
            </form>
          </div>
    </div>
  </div>

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