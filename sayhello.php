<?php 
function redirect($location)
{
  echo "\n".'<script language="javascript">setTimeout(\'window.location.href="'.$location.'"\', 10000);</script>'."\n";
}

function i_handle_your_error($errno,$errstr)
{
  return true;
}

if(isset($_POST['submit'])){

    set_error_handler('i_handle_your_error');

    $to = "iwant@somethingjustlikethis.com";
    $from = $_POST['email'];
    $full_name = $_POST['fullname'];
    $subject = "Message Submission From Something Just Like This";
    //$subject2 = "Copy of your Message to SomethingJustLikeThis.com";
    $message = " " . $full_name . " wrote the following:" . "\n\n" . $_POST['message'];
    //$message2 = "Here is a copy of your message " . $full_name . "\n\n" . $_POST['message'];
    $headers = "From:" . $from;
    //$headers2 = "From:" . $to;
    $mailcheckflag = @mail($to,$subject,$message,$headers);
    //mail($from,$subject2,$message2,$headers2);
    //echo "Mail Sent. Thank you " . $full_name . ", we will contact you shortly.";
    // header('Location: thank_you.php');
    }

?>

<html>
<head>
  <meta charset="UTF-8">
  <meta name="author" content="Sudipto Mondal">
  <meta name="description" content="Hi, I am Sudipto Mondal. A self taught Graphic/Motion Designer and a Front-End Designer/Developer.">
  <meta name="keywords" content="Graphic Designer,Animation,Illustrator,Iconography,Typography,Web Designer,Web Developer,Artist,HTML,CSS,JavaScript">
  <meta name="viewport" content="width=device-width">
  <meta name="theme-color" content="#39187b" for="mainpage">
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-capable" content="yes">

  <?php 

    if(isset($_POST['submit'])) {

      if($mailcheckflag) {
        echo '<title>Smooth! Your message was delivered to me.</title>';
      }
      else {
        echo '<title>Something fishy happened. Can you smell it?</title>';
      }

    }
    else {
      echo '<title>C\'mon talk to me!</title>';
    }

  ?>

  <link rel="shortcut icon" href="img/favicon.ico?v=2" type="image/x-icon">
  <link rel="manifest" href="manifest.json">
  <link rel="icon" href="img/chrome-touch-icon-192x192.png" sizes="192x192" type="image/png">
  <link rel="icon" href="img/chrome-touch-icon-384x384.png" sizes="384x384" type="image/png">

  <link rel="stylesheet" href="css/reset.min.css">
  <link rel="stylesheet" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="css/dressup.css">

</head>

<body class="home sayhello">

  <div id="preloader-wrapper">
    <div id="preloader-content">
    <div id="preloader-animation" class="nosel">
      <img src="img/preloader.gif"/>
    </div>
    <!--<div id="preloader-progress-bg">
      <div id="preloader-progress"></div>
    </div>-->
    </div>
  </div>
  <!--end preloader-->

<div class="bodycontainer">
  <div class="float-works-preloader-overlay"></div>

  <div class="sayhello-header header-cover-specs">

    <div class="page-nave-wrap nosel">
      <div class="page-nave">

        <a href="/" class="nave-logo">
          <img src="img/mark.png" />
        </a>

        <div class="menu-icon-mobile">
          <i class="material-icons">menu</i>
        </div>
        <ul class="navi">
          <li>
            <div class="menu-ctrl"><i class="material-icons menu-back">chevron_left</i> <span class="bck-text">BACK</span></div>
          </li>
          <li><a href="/">HOME</a></li>
          <li><a href="portfolio">WORKS</a></li>
          <li><a href="http://journal.somethingjustlikethis.com/">JOURNAL</a></li>
          <li><a href="about">ABOUT</a></li>
          <li><a href="sayhello" class="active-page">CONTACT</a></li>
        </ul>

      </div>
      <!--end page nave-->
    </div>
    <!--end page nave wrapper-->

    <div class="pages-header-title">
      <div class="page-content">
        Say Hello...
      </div>
    </div>

  </div>
  <!--end projects header-->

  <div class="about-page-content-section">
    <div class="page-content page-content-card">
      <div class="about-page-paper about-page-paper-spacer remove-card-border-mobile">
        
        <div class="form-error-area nosel">
          <p class="form-error-msg"><i class="material-icons" id="formerroricon">error</i></p>
        </div>

        <?php 

        if(isset($_POST['submit'])) {

          $full_name_trim = $_POST['fullname'];
          $trimmedname = explode(' ',trim($full_name_trim));

          if($mailcheckflag) {
            echo '
                  <div class="contact-onsub-header">
                    NICEEE!
                  </div>
                  <div class="contact-onsub-content-wrapper">
                    <div class="contact-onsub-status">
                      Give yourself a nice hard pat on the back '. $trimmedname[0] . '!
                    </div>
                      <p>I was lonely and sad - but then i got your message, and i was never the same again. Now i party hard, word hard and i am happy. The purpose of my life is fulfilled.</p>
                      <p>Too much? Okay, I will stop. Seriosuly tho... thank you for your message, I will reply ASAP.</p>
                  </div>
                 ';
          }
          else {
            echo '
                  <div class="contact-onsub-header">
                    OH SNAP!
                  </div>
                  <div class="contact-onsub-content-wrapper">
                    <div class="contact-onsub-status">
                      Sorry '. $trimmedname[0] . ',
                    </div>
                      <p>Your message was not delivered to me due to an error. This is a server issue i suppose. ARRGH! They are annoying. Nevermind, I will try to fix this ASAP!</p>
                      <p>Meanwhile you can try to send me your message directly at <a href="mailto:iwant@somethingjustlikethis.com?subject=Hey%20There">iwant@somethingjustlikethis.com</a>.</p>
                  </div>
                 ';
          }

        }
        else {
        echo '
              <!--CONTACT-->
                <div class="about-paper-title" id="contact-form-speaker">C\'MON TYPE SOMETHING!</div>

                <form action="" method="post" id="sayhelloform">
                  
                  <div class="form-group">
                    <input type="text" id="thefullname" name="fullname" autocomplete="off"/>
                    <label class="control-label" for="input">FULL NAME</label><i class="bar"></i>
                  </div>
                  <div class="form-group">
                    <input type="text" id="theemail" name="email" autocomplete="off"/>
                    <label class="control-label" for="input">EMAIL</label><i class="bar"></i>
                  </div>
                  <div class="form-group">
                    <textarea id="themsg" name="message" autocomplete="off"></textarea>
                    <label class="control-label" for="textarea">WRITE SOMETHING</label><i class="bar"></i>
                  </div>
                  
                  <div class="form-submit-container">
                    <button type="submit" class="page-button-big" name="submit">
                      OKAY! SEND IT<i class="material-icons">chevron_right</i>
                    </button>
                  </div>

                </form>
                <!--END CONTACT-->

                <div class="spacer-bottom-on-phone"></div>
             ';

          restore_error_handler();
        }
        ?>

      </div>

    </div>
  </div>
  <!--end about page content section-->

  <section class="page-contact">

    <div class="page-content">

      <div class="home-sec-title">
        Find Me. Follow Me.
      </div>

      <div class="home-contact-content">
        I need followers. Please do it.<br/>
        Yes, that's a sarcastic joke. Follow me or don't - your choice.<br/>
        Forget what I said, please follow.
      </div>

      <hr class="contact-sec-pipe" align="left" />

      <div class="home-contact-social nosel">
        <a href="https://dribbble.com/sudipto" target="_blank" class="contact-social-icon"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
        <a href="https://www.behance.net/sudiptomondal" target="_blank" class="contact-social-icon"><i class="fa fa-behance" aria-hidden="true"></i></a>
        <a href="https://otpidusprime.deviantart.com" target="_blank" class="contact-social-icon"><i class="fa fa-deviantart" aria-hidden="true"></i></a>
        <a href="https://codepen.io/sudipto" target="_blank" class="contact-social-icon"><i class="fa fa-codepen" aria-hidden="true"></i></a>
        <a href="https://www.linkedin.com/in/sudiptohmondal" target="_blank" class="contact-social-icon"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
      </div>

    </div>

  </section>
  <!--end page contact-->

  <div class="page-footer">
    <div class="page-content">
      copyright
      <span class="footer-copy-icon">&copy;</span> 2017
    </div>
  </div>
  <!--end page contact-->
</div>
<!--end body container-->

<script src='js/jquery.min.js' id="first-script"></script>
<script src='js/jquery-ui.min.js'></script>
<script src='js/animatescroll.min.js'></script>
<script src="js/appengine.js"></script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-96530765-1', 'auto');
  ga('send', 'pageview');

</script>

</body>

</html>