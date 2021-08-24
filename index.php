<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!----Bootstrap----->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Candal|Lora" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
   <link rel="stylesheet" href="css/style.css">
   <!-- <link rel="stylesheet" href="css/homeVideo.css"> -->
</head>
<body >
 <div class="header">
 <div id="sidenav">
    <?php
    include 'include/header.php';
    ?>
 </div>
 <div id="menubtn">
  <img src="asset/image/menubtn.png" alt="menubtn" id="menu">
</div>
<div class="logo">
  <a href="index.html"><img src="asset/image/Narayani namastute Logo (2).png" alt="logo"></a>
</div>
<section id="homeBanner">
  <video src="asset/GalaryImage/Logo String.mp4" type="video/mp4" autoplay muted loop></video>
</section>

    </div>


    <!-----------------Home About-------------------->

    <div class="container homeAbout">
      <div class="row">
        <div class="col-md-8 homeAboutLeft">
          <h1>About Us</h1>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto praesentium hic laudantium commodi, sed ex molestias alias veniam quisquam? Magni ut placeat, earum mollitia quisquam qui fugiat, dicta dolorum odio non, nisi porro fuga voluptatem ab adipisci consequuntur rem atque consectetur totam? Excepturi qui vero eveniet ipsa facilis cumque, illum architecto eaque incidunt ex aperiam, quidem sit odio a magni molestiae quasi labore accusantium hic? Veniam error quae repellendus atque suscipit aut est commodi corrupti eligendi. Eum nam rerum a voluptatem, dolorem commodi deleniti enim deserunt, molestias iusto reprehenderit dolorum error soluta dolore! Debitis modi illum accusantium. At, ea sed. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum animi quae quas accusantium natus a sunt enim odit, deserunt nemo, rerum deleniti qui omnis odio. Dignissimos a, sed nostrum praesentium quam consectetur quaerat aut eaque reprehenderit libero dolores dolor odit itaque natus ipsam illo sint quibusdam doloribus error ad iure laudantium expedita? Officia quas animi minima, non explicabo rem libero quis sed nulla modi sequi eligendi molestias sunt amet molestiae quidem fugit tenetur exercitationem enim necessitatibus repudiandae. Totam voluptas unde numquam e</p>
        </div>
        <div class="col-md-4 homeAboutRight">
          <img src="asset/image/homeGalary.jpeg" alt="">
        </div>
      </div>
      <div class="homeAboutButton">
        <a href="about.php"><button>See More</button></a>
      </div>
    </div>




<!------------------Galary------------------->

<div class="container homeGalary">
  <div class="panel active" style="background-image: url(asset/image/eventBanner.jpg);">
  </div>
  <div class="panel" style="background-image: url(asset/image/homeGalary.jpeg);">
      <!-- <h3>Main Characters</h3> -->
      </div>
   <div class="panel" style="background-image: url(asset/GalaryImage/harrison-moore-ebejMm2ds6M-unsplash.jpg);">
          </div>
          <div class="panel" style="background-image: url(asset/GalaryImage/steve-gale-e7jq0NH9Fbg-unsplash\ \(1\).jpg);">
          </div>
          <div class="panel" id="abilities" style="background-image: url(asset/image/team.jpg);">
          </div>
          <div class="panel" style="background-image: url(asset/GalaryImage/steve-gale-e7jq0NH9Fbg-unsplash\ \(1\).jpg);">
          </div>
          <div class="panel" style="background-image: url(asset/GalaryImage/steve-gale-e7jq0NH9Fbg-unsplash\ \(1\).jpg);">
          </div>
          <div class="panel" style="background-image: url(asset/GalaryImage/steve-gale-e7jq0NH9Fbg-unsplash\ \(1\).jpg);">
          </div>
          <div class="panel" style="background-image: url(asset/GalaryImage/steve-gale-e7jq0NH9Fbg-unsplash\ \(1\).jpg);">
          </div>
          <div class="panel" style="background-image: url(asset/GalaryImage/steve-gale-e7jq0NH9Fbg-unsplash\ \(1\).jpg);">
          </div>
      </div> 

      <div class="container homeGalaryButton">
            <a href="selfie.php">
              <button>See More</button>
            </a>
          </div>
      <!----------------Vedio------------------------>
      <div class="homeVedio">
        <div class="homeVedios">
          <div class="container">
            <h1>Videos</h1>
            <div class="row  justify-content-center " >
              <div class="col-lg-4 col-md-6 mb-3 mr-3">
                <label class="card cardHeightWidth">
                  <input class="videoInput" type="checkbox"/>
                  <div class="flip-card">
                    <div class="front">
                      <iframe class="yt" src="https://www.youtube.com/embed/cKs8ekNcwp0" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                      <div class=" m-0 p-0" >
                        <h5 class="card-title  mt-3 mb-2 vedioCardContentH3">Durga Puja</h5>
                        <p  class="btn btn-outline-dark btn-sm clickk " >Click to flip</p>
                      </div>
                    </div>
                    <div class="back d-flex  flex-column justify-content-center align-items-center">
                      <p class="card-text-video mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, officiis. Lorem
                        ipsum dolor sit amet consectetur adipisicing elit. Illo, explicabo. Some quick example text to
                        build on the card title and make up the bulk of the card's content.</p>
                        <p  class="btn btn-outline-dark btn-sm clickk" >Click to flip</p>
                    </div>
                  </div>
                </label>
              </div>
              <div class="col-lg-4 col-md-6 mb-3 mr-3">
                <label class="card cardHeightWidth">
                  <input class="videoInput" type="checkbox"/>
                  <div class="flip-card">
                    <div class="front">
                      <iframe class="yt" src="https://www.youtube.com/embed/cKs8ekNcwp0" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                      <div class=" m-0 p-0" >
                        <h5 class="card-title  mt-3 mb-2 vedioCardContentH3">Durga Puja</h5>
                        <p  class="btn btn-outline-dark btn-sm clickk " >Click to flip</p>
                      </div>
                    </div>
                    <div class="back d-flex  flex-column justify-content-center align-items-center">
                      <p class="card-text-video mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, officiis. Lorem
                        ipsum dolor sit amet consectetur adipisicing elit. Illo, explicabo. Some quick example text to
                        build on the card title and make up the bulk of the card's content.</p>
                        <p  class="btn btn-outline-dark btn-sm clickk" >Click to flip</p>
                    </div>
                  </div>
                </label>
              </div>
              <div class="col-lg-4 col-md-6 mb-3 mr-3">
                <label class="card cardHeightWidth">
                  <input class="videoInput" type="checkbox"/>
                  <div class="flip-card">
                    <div class="front">
                      <iframe class="yt" src="https://www.youtube.com/embed/cKs8ekNcwp0" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                      <div class=" m-0 p-0" >
                        <h5 class="card-title  mt-3 mb-2 vedioCardContentH3">Durga Puja</h5>
                        <p  class="btn btn-outline-dark btn-sm clickk " >Click to flip</p>
                      </div>
                    </div>
                    <div class="back d-flex  flex-column justify-content-center align-items-center">
                      <p class="card-text-video mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, officiis. Lorem
                        ipsum dolor sit amet consectetur adipisicing elit. Illo, explicabo. Some quick example text to
                        build on the card title and make up the bulk of the card's content.</p>
                        <p  class="btn btn-outline-dark btn-sm clickk" >Click to flip</p>
                    </div>
                  </div>
                </label>
              </div>
            </div>
          </div>
        </div>
        <div class="vedioSeeMore">
          <a href="video.php">
            <button>See More</button>
          </a>
        </div>
      </div>
    

      <!-----------------Home Press-------------------->
      <div class="homePressRelease">
          <div class="container">
            <h1>Press Release</h1>
            <div class="row">
              <div class="col-lg-3 col-md-12">
                <div class="card homePressCard" style="width: 16rem;">
                  <img src="asset/image/press.jpg" alt="" class="card-img-top" >
                  <div class="card-body mr-2 mb-2 homePressCardContent">
                    <h5 class="card-title">Name</h5>
                    <p class="card-text">Year</p>
                  </div>
                </div>
            </div>
                <div class="col-lg-3 col-md-12">
                  <div class="card homePressCard" style="width: 16rem;">
                    <img src="asset/image/press.jpg" alt="" class="card-img-top" >
                    <div class="card-body mr-2 mb-2 homePressCardContent">
                      <h5 class="card-title">Name</h5>
                      <p class="card-text">Year</p>
                    </div>
                  </div>
              </div>
              <div class="col-lg-3 col-md-12">
                <div class="card homePressCard" style="width: 16rem;">
                  <img src="asset/image/press.jpg" alt="" class="card-img-top" >
                  <div class="card-body mr-2 mb-2 homePressCardContent">
                    <h5 class="card-title">Name</h5>
                    <p class="card-text">Year</p>
                  </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-12">
              <div class="card homePressCard" style="width: 16rem;">
                <img src="asset/image/press.jpg" alt="" class="card-img-top" >
                <div class="card-body mr-2 mb-2 homePressCardContent">
                  <h5 class="card-title">Name</h5>
                  <p class="card-text">Year</p>
                </div>
              </div>
          </div>
            </div>
          </div>
          <div class="homePressSeeMore">
            <a href="press.php"><button>See More</button></a>
          </div>
      </div>
      <!----------------Popular blog---------->
      <div class="homePopularBlogs">
        <div class="container">
        <h1>Popular Blogs</h1>
          <div class="row">
              <div class="col-lg-3 col-md-12">
                <div class="card homeBlogCard" style="width: 16rem;">
                  <img src="asset/image/Blog_1.jpg" class="card-img-top" alt="...">
                  <div class="card-body homeBlogCardContent">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="singleBlog.php" class="btn homeBlogButton"><button>Read More..</button></a>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-12">
                <div class="card homeBlogCard" style="width: 16rem;">
                  <img src="asset/image/Blog_1.jpg" class="card-img-top" alt="...">
                  <div class="card-body homeBlogCardContent">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="singleBlog.php" class="btn homeBlogButton"><button>Read More..</button></a>
                  </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-12">
              <div class="card homeBlogCard" style="width: 16rem;">
                <img src="asset/image/Blog_1.jpg" class="card-img-top" alt="...">
                <div class="card-body homeBlogCardContent">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="singleBlog.php" class="btn homeBlogButton"><button>Read More..</button></a>
                </div>
              </div>
          </div>
          <div class="col-lg-3 col-md-12">
            <div class="card homeBlogCard" style="width: 16rem;">
              <img src="asset/image/Blog_1.jpg" class="card-img-top" alt="...">
              <div class="card-body homeBlogCardContent">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="singleBlog.php" class="btn homeBlogButton"><button>Read More..</button></a>
              </div>
            </div>
        </div>
          </div>
        </div>
        <div class="homeBlogSeeMore">
          <a href="blog.php"><button>See More</button></a>
        </div>
    </div>

    <div class="client">
      <div class="container">
      <h1 class="client-slider-title">Partner</h1>
      <div class="clientlogo">
        <div class="img1">
          <a href=""><img src="asset/image/logo.png" alt="" width="100%"></a>
        </div>
        <div class="img1">
          <a href=""><img src="asset/image/logo.png" alt="" width="100%"></a>
        </div>
        <div class="img1">
          <a href=""><img src="asset/image/logo.png" alt="" width="100%"></a>
        </div>
        <div class="img1">
          <a href=""><img src="asset/image/logo.png" alt="" width="100%"></a>
        </div>
        <div class="img1">
          <a href=""><img src="asset/image/logo.png" alt="" width="100%"></a>
        </div>
        <div class="img1">
          <a href=""><img src="asset/image/logo.png" alt="" width="100%"></a>
        </div>
        <div class="img1">
          <a href=""><img src="asset/image/logo.png" alt="" width="100%"></a>
        </div>
      </div>
    </div>
    </div>
  <!-----------Footer------------->
    <?php
    include 'include/footer.php';
    ?>
     <!-- JQuery -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

   <!-- Slick Carousel -->
   <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

   <!-- Custom Script -->
   <script src="js/scripts.js"></script>

    <script src="js/homeGalary.js"></script>
   <script src="js/nav.js"></script>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>