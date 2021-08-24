<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!----Bootstrap----->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Candal|Lora" rel="stylesheet">
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/video.css">
</head>
<body>
<div class="header">
   <div class="logo">
      <a href="index.html"><img src="asset/image/Narayani namastute Logo (2).png" alt="logo"></a>
    </div>
     <div id="sidenav">
     <?php
     include 'include/header.php';
     ?>
     </div>
     <div id="menubtn">
      <img src="asset/image/menubtn.png" alt="menubtn" id="menu">
    </div>
    <section id="videoBanner">
    <video src="asset/video/production ID_5091624.mp4" type="video/mp4" autoplay muted loop></video>
     </section>
</div>


    <!-------------video----------------->
    <div class="container video">
      <div class="row">
        <div class="col-md-8">
          <div class="videoTop1">
            <embed src="https://www.youtube.com/embed/yWrO5VhUBVA" type="">
          </div>
        </div>
        <div class="col-md-4">
          <div class="videoTop2">
            <embed src="https://www.youtube.com/embed/fjkRAsZI19o" type="">
            <embed src="https://www.youtube.com/embed/fjkRAsZI19o" type="">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="videobuttom">
            <embed src="https://www.youtube.com/embed/yWrO5VhUBVA" type="">
          </div>
        </div>
        <div class="col-md-4">
          <div class="videobuttom">
            <embed src="https://www.youtube.com/embed/yWrO5VhUBVA" type="">
          </div>
        </div>
        <div class="col-md-4">
          <div class="videobuttom">
            <embed src="https://www.youtube.com/embed/yWrO5VhUBVA" type="">
          </div>
        </div>
      </div>
    </div>
  
  <!-----------Footer------------->
  <?php
    include 'include/footer.php';
    ?>


   <script src="js/nav.js"></script>
</body>
</html>