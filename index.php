<!DOCTYPE HTML>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="css/main.css">
<title>Contact Form</title>
</head>

<body>

    <header class="body">
    </header>

    <section class="body">
      <form method="post" action="index.php">
        <?php
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $from = 'From: TangledDemo';
        $to = 'demo@tangledindesign.com';
        $subject = 'Hello';
        $human = $_POST['human'];

        $body = "From: $name\n E-Mail: $email\n Message:\n $message";

        if ($_POST['submit'] && $human == '4') {
          if (mail ($to, $subject, $body, $from)) {
            echo '<p>Your message has been sent!</p>';
          } else {
            echo '<p>Something went wrong, go back and try again!</p>';
          }
        } else if ($_POST['submit'] && $human != '4') {
          echo '<p>You answered the anti-spam question incorrectly!</p>';
        }
        ?>
        <label>Name</label>
        <input name="name" placeholder="Type Here">

        <label>Email</label>
        <input name="email" type="email" placeholder="Type Here">

        <label>Message</label>
        <textarea name="message" placeholder="Type Here"></textarea>

        <label>*What is 2+2? (Anti-spam)</label>
        <input name="human" placeholder="Type Here">

        <input id="submit" name="submit" type="submit" value="Submit">

      </form>
    </section>

    <footer class="body">
    </footer>

</body>

</html>
