<?php
  include_once ("comp/navbar.php");
  include_once ("comp/footer.php");
  include_once "comp/scriptwallet.php";
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!--meta elements-->

  <meta name="description" content="Find comfortable shoes with good deals!">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="shortcut icon" href="res/img/logos/shodotes.ico" type="image/x-icon">
  <link rel="apple-touch-icon" href="res/img/logos/shodotes.ico">

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
<meta name="twitter:image" content="res/img/logos/shodotes.png">

  <!--Bootstrap-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<!-- Personalized files-->
<link rel="stylesheet" href="comp/styles/base.css">

</head>

<body id="welcome-bg">

    <?php
      echo get_navbar();
     ?>
    <Header>
      <div class="container-fluid p-5 my-4 pbg-blueBase">
        <h1 class= "justify-content-center">sho.es</h1>
        <h2 class= "justify-content-center">We offer you the best shoes on your area</h2>
      </div>
    </Header>

    <section>
      <div class="container pt-3 pb-3 mb-5 mt-5 mx-auto">
        <h2>Sho.es care about your style</h2>
        <div class="row">
          <div class="col">
            <p>John Lemon started out his own
            business startup back in New York 15 years ago. We have already our objective solid by his DNA</p>
            <p> Sho.es has the experience in knowing what
            our customers want offering them a good service, promising to improve with each service granted</p>
          </div>
          <div class="col">
            <img src="res/img/stock/001.jpg" width="480" height="336" class="rounded mx-auto d-block" title="Photo by Elevate Digital from Pexels" alt="An error ocurred :(">
          </div>
        </div>
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