<?php $name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="From: $name - $email \n  Message: $message";
$recipient = "cpolstra@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
?>

<!DOCTYPE html>
<!--[if lte IE 6]><html class="preIE7 preIE8 preIE9"><![endif]-->
<!--[if IE 7]><html class="preIE8 preIE9"><![endif]-->
<!--[if IE 8]><html class="preIE9"><![endif]-->
<!--[if gte IE 9]><!--><html><!--<![endif]-->
  <head>
    <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Chad Polstra - Front End Web Developer</title>
  <meta name="author" content="Chad Polstra">
  <meta name="description" content="A Personal Site For My Ramblings">
  <meta name="keywords" content="Chad Polstra, Front End Web Developer, UI Developer">
  <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
  <link rel="manifest" href="favicon/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">
  <link rel="shortcut icon" href="favicon/favicon.ico?v=2" type="image/x-icon">
  <link rel="icon" href="favicon/favicon.ico?v=2" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Barrio|Open+Sans" rel="stylesheet">
  <link rel="stylesheet" href="stylesheet.css" type="text/css">
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-100094145-1', 'auto');
  ga('send', 'pageview');

  </script>
  </head>
  <body>
    <header>
        <section>
          <h1><a href="/">Artslop.com</a></h1>
          <div id="menu">
          
        </div>
        </section>
    </header>
    <div id="siteContainer">
    <!-- BEGIN ABOUT SECTION -->
      <div id="intro">
        <section>
          <div>
            <?php echo "<h1>Thank You!</h1><p>Click <a href='/'>here</a> to return.</p>"; ?>
          </div>    
        </section>
      </div>
    </div>
    <footer>
      <section>
        <p>&nbsp;</p>
      </section>
    </footer>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.21/jquery-ui.min.js" type="text/javascript"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.5.3/modernizr.min.js" type="text/javascript"></script>
  </body>
</html>

