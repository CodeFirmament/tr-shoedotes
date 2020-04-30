<?php
  include_once ("../comp/navbar.php");
  include_once ("../comp/footer.php");
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

<!-- Personalized files-->
<link rel="stylesheet" href="/comp/styles/base.css">

</head>

<body id="welcome-bg">

    <?php
      echo get_navbar();
     ?>
    <Header>
      <div class="container p-5 my-4">
        <h1 class= "text-center">sho.es</h1>
      </div>
    </Header>

    <section>
      <div class="container border mt-5 mb-5 w-50 mx-auto pt-2 pb-2">
        <form action="/comp/controller.php" method="post">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="hello@thisismy.mail" name="email">
          </div>
          <div class="form-group">
            <input type="password" class="form-control" placeholder="abc123" name="password">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </section>
    <div class="gspacet">
    </div>
    <?php
      echo get_footer();
    ?>
</body>
</html>
