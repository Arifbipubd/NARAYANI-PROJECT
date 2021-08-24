<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Page</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!----Bootstrap----->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Candal|Lora" rel="stylesheet">
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/contact.css">
</head>
<body>
  <div class="header">
    <div class="logo">
        <a href="index.html"><img src="asset/image/Narayani namastute Logo (2).png" alt="logo"></a>
      </div>
   <section id="contactBanner">
   </section>
   <div id="sidenav">
    <?php
     include 'include/header.php';
     ?>
   </div>
   <div id="menubtn">
    <img src="asset/image/menubtn.png" alt="menubtn" id="menu">
  </div>
  
</div>

    <!-------------Contact----------------->
    <section class="contact">
        <div class="content">
            <h2>Get In Touch</h2>
        </div>
        <div class="container contactContainer">
            <div class="contactinfo">
                <div class="box">
                    <div class="icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="text">
                        <h3>Address</h3>

                        <p>
                            Uttara<br>Dhaka <br>Bangladesh
                        </p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                    </div>
                    <div class="text">
                        <h3>Phone</h3>

                        <p>
                          <a href="tel:01712312312">01712312312 </a>
                        </p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </div>
                    <div class="text">
                        <h3>Email</h3>

                        <p>
                          <a href="mailto:infonarayono@gmail.com">infonarayono@gmail.com</a>
                            
                        </p>
                    </div>
                </div>
            </div>
            <div class="contactform">
                <form >
                    <h2>Send Message</h2>
                    <div class="inputbox">
                        <input type="text" name="" required="required">
                        <span>Full Name</span>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="" required="required">
                        <span>Email</span>
                    </div>
                    <div class="inputbox">
                       <textarea required="required"></textarea>
                        <span>Type your message</span>
                    </div>
                    <div class="inputbox">
                        <input type="submit" name="" value="Send">
                       
                    </div>
                </form>
            </div>
        </div>

    </section>
    
  <!-----------Footer------------->
  <?php
    include 'include/footer.php';
    ?>

   <script src="js/nav.js"></script>
</body>
</html>