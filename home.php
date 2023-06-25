<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    <title>DDCC PH</title>

    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/">
    <link href="sources/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
    
<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="home"><img src="images/ddcc_logo.png" alt="DDCC Logo" width="30px" height="30px"> DDCC</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" 
      aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="gallery">Gallery</a>
          </li>
          <!--<li class="nav-item">
            <a class="nav-link disabled">Disabled</a>
          </li>-->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Social</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="https://www.facebook.com/groups/2101645846761233" target="_blank">Facebook Group</a></li>
              <li><a class="dropdown-item" href="https://discord.com/invite/RJFHhFTuzn" target="_blank">Discord</a></li>
            </ul>
          </li>
        </ul>
        <div class="d-flex">
          <!--<button type="button" class="btn btn-outline-light me-2">Login</button>
          <button type="button" class="btn btn-warning">Sign-up</button>-->
          <span class="like-us">Like us on <a href="https://www.facebook.com/people/DDCC-PH/100083269716165/" class="facebook-page" target="_blank">
            <i class="fa fa-facebook-square" aria-hidden="true" style></i> Facebook</span></a>
        </div>
      </div>
    </div>
  </nav>
</header>

<main>

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="carousel-img" src="images/carousel_1.jpg">
        <div class="container">
          <div class="carousel-caption text-start">
            <h1 class="carousel-header">Welcome to DDCC!</h1>
            <p>A club where you can meet several weebs with similar interests.</p>
            <p><a class="btn btn-lg btn-primary" href="https://www.facebook.com/groups/2101645846761233" target="_blank">Join Now!</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="carousel-img" src="images/carousel_2.jpg">
        <div class="container">
          <div class="carousel-caption">
            <h1 class="">Meet the Memebers!</h1>
            <p>You can meet the official members of DDCC! Some of them kinda bite so be careful.</p>
            <p><a class="btn btn-lg btn-primary" href="https://discord.com/invite/RJFHhFTuzn" target="_blank">Discord</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="carousel-img" src="images/carousel_3.jpg">
        <div class="container">
          <div class="carousel-caption text-end">
            <h1 class="">Say Cheese!</h1>
            <p class="">You can view some meme(o)rable pictures.</p>
            <p><a class="btn btn-lg btn-primary" href="gallery">Browse Gallery</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true" hidden></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true" hidden></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
        <img class="bd-placeholder-img rounded-circle" src="images/founder_1.jpg" width="140" height="140">
        <h2 class="fw-normal">Founder</h2>
        <p>Akihiro Jairo</p>
        <p><a class="btn btn-primary" href="https://www.facebook.com/akihiro.jairo.7" target="_blank">Facebook &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img class="bd-placeholder-img rounded-circle" src="images/founder_2.jpg" width="140" height="140">
        <h2 class="fw-normal">Co-Founder</h2>
        <p>Joon Horikita</p>
        <p><a class="btn btn-primary" href="https://www.facebook.com/Horikitajoon" target="_blank">Facebook &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img class="bd-placeholder-img rounded-circle" src="images/founder_3.jpg" width="140" height="140">
        <h2 class="fw-normal">Club Manager</h2>
        <p>Samuel Migs Gamay</p>
        <p><a class="btn btn-primary" href="https://www.facebook.com/SMGamay" target="_blank">Facebook &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">What's up with the Logo? <span class="text-muted">Who is the little girl inside the Logo?</span></h2>
        <p class="lead">The logo represents our club full of joyful and depressing weebs. Inside the logo is PADORU version of Nero Saber from TYPE-MOON series. 
          The one who created the logo is <a href="https://www.facebook.com/radgeseneres" target="_blank">Radge</a>, our graphic designer.</p>
      </div>
      <div class="col-md-5">
        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" src="images/ddcc_logo.png" width="500" height="500">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading fw-normal lh-1">DDCC 4th Anniversary! <span class="text-muted">4 years and we're still in this together.</span></h2>
        <p class="lead">It has been a blast! Oh, how the years passed by. Some members left and we are glad for those who have stayed! 
          Let's continue making good memories together!
        </p>
      </div>
      <div class="col-md-5 order-md-1">
        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" src="images/fourth_anniversary.png" width="500" height="500">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">So what are our upcoming plans? <span class="text-muted">We don't know yet but here's  
          a lyrics of "Sakana ka Nanda ka? (by Matsuura Kanan)"</span></h2>
        <p class="lead">Karuku nare motto karada mo atama mo

          Ima sekai kara tokihanatarete.
          Nee watashi wa dare darou?
          Sakana ni nareru kana.
          
          Chikara o nuite ukande nagameru.
          
          Minareta itsumo no sora kirei da!
          Aa kono mama aoi mizu ni tokete shimaou.
          
          Nami ka utau you ni yosete hiite.
          
          Yaketa hada ni wa
          hinyari to kimochi ii ne.
          Me o tojita tte mabushii kara.
          Nayami mo kieteku.
          
          SA-KA-NA SA-KA-NA SA-KA-NA.
          Jiyuu na mirai o.
          SA-KA-NA SA-KA-NA SA-KA-NA.
          Oyoide yukou yo.
          Kimagure na yume yurete yurarete.
          tsukamaranai? Oikakeyou!
          SA-KA-NA SA-KA-NA SA-KA-NA.
          Jiyuu na mirai wa.
          SA-KA-NA SA-KA-NA SA-KA-NA.
          Oyogi yasui yo.
          Nani mo motanai kibou igai wa.
          
          kono umi de ashita mo asobou.
          
          
          Karuku naru kitto kokoro wa urei wa.
          
          Namida yori shoppai mizu no naka de.
          Mou watashi wa naiterarenai.
          saa kugurou ka.
          
          Suna ni kakusareta kaigaratachi.
          
          Hirotte mireba yurari to nigetagaru.
          Karappo nano ni fushigi dayo ne.
          Kaihou shite ageyou.
          
          SA-KA-NA SA-KA-NA SA-KA-NA.
          Jiyuu na mirai o.
          SA-KA-NA SA-KA-NA SA-KA-NA.
          Oyoide yukou yo.
          Kimagure na yume yurete yurarete.
          tsukamaranai? Oikakeyou!
          SA-KA-NA SA-KA-NA SA-KA-NA.
          Jiyuu na mirai wa.
          SA-KA-NA SA-KA-NA SA-KA-NA.
          Oyogi yasui yo.
          Nani mo motanai kibou igai wa.
          
          kono umi de ashita mo asobou.
          
          Watashi wa osakana sonna kimochi no mama.
          
          Yukkuri me o akete ashi o tsukete.
          Tachiagaru hito ni mata modori nagara.
          Demo kokoro wa karuku natteta.
        </p>
      </div>
      <div class="col-md-5">
        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" src="images/f4_ddcc.jpg" width="500" height="500">
      </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->


  <!-- FOOTER -->
  <footer class="container">
    <p class="float-end"><a href="#">Back to top</a></p>
    <p>&copy; 2018 - <script>document.write( new Date().getFullYear() );</script> <a href="home">DDCC PH</a>. All rights reserved. <!--&middot; <a href="#">Privacy</a> &middot; 
      <a href="#">Terms</a>--></p>
  </footer>
</main>

    <script src="js/bootstrap.bundle.min.js"></script>

  </body>
</html>
