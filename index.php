<!DOCTYPE html>
<html lang="en">
  <head>
  
  
  <meta charset="utf-8">
  
  
  
  
   <link rel="stylesheet" type="text/css" href="VENDORS/CSS/normalize.css">
   <link rel="stylesheet" type="text/css" href="VENDORS/CSS/grid.css">
   <link rel="stylesheet" type="text/css" href="VENDORS/CSS/ionicons.min.css">
    <link rel="stylesheet" type="text/css" href="VENDORS/CSS/animate.css">
   <link rel="stylesheet" type="text/css" href="RESOURCES/CSS/style.css">
    <link rel="stylesheet" type="text/css" href="RESOURCES/CSS/queries.css">
  <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;1,100;1,300&display=swap" rel="stylesheet">
   <title>Laliga</title>
    
   <?php
  
   
   $mysqlconnect= mysqli_connect('localhost','root','','laliga');
   
   if($mysqlconnect==false)
   {
       echo ("my sql is not conneected");
       
   }
   else
   {
       echo("successfully connected");
   }
  
?>

    

</head>   
        <body>   
          <header>
            <nav>
                <div class="row" >
                <ul class="main-nav  js--main-nav" >
                    <li><a href="#home">Home</a></li>
                    <li><a href="#Detail">About Us</a></li> 
                    <li><a href="#features">Chart</a></li>
                    <li><a href="#contact">Contact Us</a></li>
                </ul>
                   <a class="mobile-nav-icon js--nav-icon"><i class="ion-navicon-round"></i></a>
                </div>
            </nav>
                <div class="hero-text-box" id="home">
                  <h1>laliga</h1>
                  <a class="btn btn-ghost js--scroll-to-start" href="#">Show more</a>
                </div>
          </header>
          
          
          
          <section class="section-features js--section-features" id="features">
             <div class="row">
                 <h2>New Update</h2>
             </div>
               <div class="row" > 
                <div class="col-sm-6">
                  <div class="card bg-light">
                    <div class="card-body">
                      <h5 class="card-title">CLUB</h5>
                      <p class="card-text"></p>
                      <a class="btn btn-warning" style="border-radius:200px; margin-left:36%;" onclick="location.href='http://localhost/Laliga/CLUB/club.php'">NO MORE</a>
                    </div>
                  </div>
                </div>
           
                <div class="col-sm-6">
                  <div class="card border-dark">
                    <div class="card-body">
                      <h5 class="card-title">PLAYER</h5>
                      <p class="card-text"></p>
                      <a class="btn btn-warning" style="border-radius:200px; margin-left:36%;" onclick="location.href='http://localhost/Laliga/Player/player.php'">NO MORE</a>
                    </div>
                  </div>
                </div>
              </div>
          </section>
          
         
         <section class="customer-view" id="Detail">
             <div class="row">
               <h2>About Us</h2>  
             </div>
             
             <div class="row">
                <p>gfsfdgfdgffg</p>   
             </div>
         </section> 
          
          
          
          <section class="section-form" id="contact">
              <div class="row">
                  <h6>We're happy to hear from you</h6>
              </div>
              
              <div class="row">
                  <form method="post" action="#"  class="contact-form">
                      <div class="row">
                          <div class="col span-1-of-3">
                              <label for="name">Name</label>
                          </div>
                         
                          <div class="col span-2-of-3">
                              <input type="text" name="name" id="name" placeholder="Your Name" required>
                          </div> 
                      </div>
                      
                       <div class="row">
                          <div class="col span-1-of-3">
                              <label for="email">Email</label>
                          </div>
                         
                          <div class="col span-2-of-3">
                              <input type="email" name="email" id="email" placeholder="Your Email" required>
                          </div> 
                      </div>
                      
                      
                       <div class="row">
                          <div class="col span-1-of-3">
                              <label>How did you find us?</label>
                          </div>
                         
                          <div class="col span-2-of-3">
                              <select name="Find-us" id="Find-us">
                                  <option value="Friends" selected>Friends</option>
                                  <option value="Search">Search engine</option>
                                  <option value="Ad" >Advertisement</option>
                                  <option value="Other">Other</option>
                              </select>
                          </div> 
                      </div>
                      
                      
                      <div class="row">
                          <div class="col span-1-of-3">
                              <label>Drop us a line</label>
                          </div>
                         
                          <div class="col span-2-of-3">
                              <textarea name="message" placeholder="Your message"></textarea>
                          </div> 
                      </div>
                      
                      
                       <div class="row">
                          <div class="col span-1-of-3">
                              <label>&nbsp;</label>
                          </div>
                         
                          <div class="col span-2-of-3">
                              <input type="submit" value="Send it">
                          </div> 
                      </div>
                        
                  </form>
                  
              </div>
              
          </section>
          
          
          <footer>
              <div class="row">
                  <div class="col span-1-of-2">
                      <ul class="footer-nav">
                          <li><a href="#">About us</a></li>
                          <li><a href="#">Latest update</a></li>
                          <li><a href="#">Contact</a></li>
                      </ul>
                  </div>
                  
                  
                   <div class="col span-1-of-2">
                      <ul class="social-links">
                          <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                          <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                          <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                          <li><a href="#"><i class="ion-social-instagram"></i></a></li>
                      </ul>
                  </div>  
              </div>
              
              <div class="row">
                  <p style="margin-left: 40%;">
                      copyright &copy; 2021 by LaLiga. All rights reserved.
                  </p>
              </div>
               
          </footer>
      


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/respond.js@1.4.2/src/respond.js"></script>
<script src="https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/selectivizr@1.0.3/selectivizr.min.js"></script>
<script src="VENDORS/JAVASCRIPT/jquery.waypoints.min.js"></script>
<script src="RESOURCES/JAVASCRIPT/script.js"></script>
    
        </body>
</html>                            





   

  
    
                          





   

  
    
