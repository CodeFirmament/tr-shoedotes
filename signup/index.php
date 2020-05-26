<?php
  include_once ("../comp/navbar.php");
  include_once ("../comp/footer.php");
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
    <Header>
      <div class="container p-5 my-4">
        <h1 class= "text-center">sign up to sho.es</h1>
        <?php
        if(isset($_GET["msg"])){
          $error = $_GET["msg"];
          switch ($error) {
            case 'fail':
              echo "<p class= 'text-center' >Something happened :(</p>";
              break;
            case 'capfail':
              echo "<p class= 'text-center' >try again, with less wires this time</p>";
            break;
            case 'wfail':
              echo "<p class= 'text-center' >Huh, i'm not supossed to be showed</p>";
            break;
            default:
              echo "<p class= 'text-center' >wow we got a hacker</p>";
              break;
          }
        }else{echo "<p class= 'text-center' ></p>";}
        ?>
      </div>
    </Header>

    <section>
      <div class="container border mt-5 mb-5 w-50 mx-auto pt-2 pb-2">
        <form action="/comp/controller.php" method="post">
          <div class="form-group">
            <input type="email" class="form-control" placeholder="hello@thisismy.mail" name="email" required>
          </div>
          <div class="form-group">
            <input type="password" class="form-control" placeholder="" name="password" required>
          </div>
          <div class="g-recaptcha" data-theme="dark" data-size="normal" data-sitekey="6LdKo_AUAAAAALri6Bazb40r1EM1sQbhMcaUZ2iP"></div>
          <button type="submit" class="btn btn-primary" name="submit">Register me!</button>
        </form>
      </div>
    </section>
    <div class="gspacet">
    </div>
    <?php
      echo get_footer();
    ?>
</body>
<?php
      script_wallet()
      ?>
</html>
