<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $from = 'From: TangledDemo';
  $to = 'jonatan.ostling@gmail.com';
  $subject = 'Hello';

  $body = "From: $name\n E-Mail: $email\n Message:\n $message";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Byggest / Offert</title>
    <link href="https://fonts.googleapis.com/css?family=Allerta+Stencil|Montserrat" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="css/main.css" media="screen" title="no title" charset="utf-8">
  </head>
  <body>
    <div class="topContainer">
      <div class="container">
        <header class="page-header">
          <a href="index.html"><img src="img/logo.png" alt="Byggest Logo" class="headerLogo"></a>
          <nav class="navbar navbar-inverse">
            <ul class="nav nav-tabs nav-justified">
              <li><a href="index.html">HEM</a></li>
              <li><a href="vvs.html">VVS</a></li>
              <li><a href="renovering.html">RENOVERING</a></li>
              <li><a href="about.html">OM OSS</a></li>
              <li class="active"><a href="offert.html">OFFERT</a></li>
              <li><a href="contact.html">KONTAKT</a></li>
            </ul>
          </nav>
        </header>
      </div>
    </div>

    <div class="container4">
      <h1 class="center">Boka gratis offertbesök!</h1>
      <?php
      if ($_POST['submit']) {
        if (mail ($to, $subject, $body, $from)) {
          echo '<p>Your message has been sent!</p>';
        } else {
          echo '<p>Something went wrong, go back and try again!</p>';
        }
      }
      ?>
      <form method="post" action="offert.php">

        <label>Name</label>
        <input name="name" placeholder="Type Here">

        <label>Email</label>
        <input name="email" type="email" placeholder="Type Here">

        <label>Message</label>
        <textarea name="message" placeholder="Type Here"></textarea>

        <input id="submit" name="submit" type="submit" value="Submit">

      </form>
      <!-- <form id="contact" action="offert.php" class="form-horizontal" role="form" method="post">
        <div class="form-group">
          <label for="email" class="col-sm-2 control-label">E-mail</label>
          <div class="col-sm-10">
            <input type="email" name="email" class="form-control" id="email" placeholder="exempel&#64;email.com">
          </div>
        </div>
        <div class="form-group">
          <label for="message" name="message" class="col-sm-2 control-label">Meddelande</label>
          <div class="col-sm-10">
            <textarea id="message" class="form-control" rows="4"></textarea>
            <input class="send-button" name="submit" type="submit" id="submit">Skicka!</input>
          </div>
        </div>
      </form> -->
    </div>


    <footer class="footer">
      <div class="container footerText">
        <h2>Hör av dig till oss!</h2>
      <div class="row">
        <div class="col-md-6 align-left">
          <img src="img/logo.png" alt="Byggest Logo" class="footerLogo">
          <p>Byggest VVS &amp; EL AB<br>Klostervägen 27<br>196 31 Kungsängen</p>
        </div>
        <div class="col-md-6 contact-info align-left">
          <p><strong>Tel:</strong> <span class="highlight2">08-40 888 609</span></p>
          <p><strong>E-mail:</strong> <span class="highlight2">info@byggest.se</span></p>
        </div>
      </div>
    </div>


      <div class="container footerText">
        <p>&#169; 2017 Jonatan Östling</p>
      </div>
    </footer>


    <script src="https://code.jquery.com/jquery-2.1.4.min.js" charset="utf-8"></script>
    <script src="js/bootstrap.js" charset="utf-8"></script>
  </body>
</html>
