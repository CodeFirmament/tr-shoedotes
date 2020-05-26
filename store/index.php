<?php
  include_once ("../comp/navbar.php");
  include_once ("../comp/footer.php");
  include_once "../comp/shop_layout.php";
  include_once "../comp/scriptwallet.php";
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!--meta elements-->

  <meta name="description" content="Find comfortable shoes with good deals!">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="shortcut icon" href="/res/img/logos/shodotes.ico" type="image/x-icon">
  <link rel="apple-touch-icon" href="/res/img/logos/shodotes.ico">

  <title>Shoes shop</title>

  <!--Open Graph Protocol for Facebook-->

  <meta property= "og:title" content="Sho.es : find your comfort">
  <meta property= "og:description" content="Find good deals for shoes">
  <meta property= "og:url" content="https://shoppingsho.es">
  <meta property= "og:site_name" content="Shoes shop">
  <meta property= "og:type" content="website">
  <meta property= "og:image" content="url.png">

  <!-- Twitter -->
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@Shoes_shop_w">
<meta name="twitter:creator" content="@Shoes_shop_w">
<meta name="twitter:title" content="Sho.es: find your comfort">
<meta name="twitter:description" content="We are your place for good deals for shoes">
<meta name="twitter:image" content="/res/img/logos/shodotes.png">

  <!--Bootstrap-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!--reCaptcha-->
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<!-- Personalized files-->
<link rel="stylesheet" href="/comp/styles/base.css">

</head>

<body id="welcome-bg">

    <?php
      echo get_navbar();
     ?>

     <header>
       <div class="container-fluid mb-4 text-center">
         <h1>Sho.es Shop</h1>
         <h4>Your style; your world</h4>
       </div>

     </header>
     <section>
     <div class="container-fluid mb-4 text-center">
         <?php
         if(is_session_active()){
            echo session_shop();
         } 
         ?>
     </div>
     <div class="container text-center">
      <?php
      if(is_session_active()){
          // list button
      }else{
        echo view_shop();
      }
      ?>
    </div>

  </section>
    <?php
      echo get_footer();
    ?>
</body>
     
</html>
<?php
      script_wallet()
      ?>