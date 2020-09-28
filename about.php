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
  function i_handle_your_error($errno,$errstr)
  {
    return true;
  }

  set_error_handler('i_handle_your_error');
  $know = $_GET["know"];

  if($know === "more") {
    echo '<title>Seriously?! You wanna know more about me?!</title>';
  }else if( empty($know) || $know === "null" || !is_numeric($know) || is_null($know)) {
    echo '<title>Seriously?! You wanna read about me?!</title>';
  }

  restore_error_handler();
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

<body class="home about">

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
  <div class="bio-header header-cover-specs">

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
          <li><a href="javascript:void(0);" onclick="$('body').animatescroll({scrollSpeed:900,easing:'easeInOutQuart'});" class="active-page">ABOUT</a></li>
          <li><a href="sayhello">CONTACT</a></li>
        </ul>

      </div>
      <!--end page nave-->
    </div>
    <!--end page nave wrapper-->

    <div class="pages-header-title">
      <div class="page-content">
        Hello World!
      </div>
    </div>

  </div>
  <!--end projects header-->

  <div class="about-page-content-section">
    <div class="page-content page-content-card">
      <div class="about-page-paper about-page-paper-spacer remove-card-border-mobile">
        
        <div class="about-paper-title">
          NICE TO MEET YOU.
        </div>

        <?php
        set_error_handler('i_handle_your_error');
        $know = $_GET["know"];

        if($know === "more") {
          echo '<p>Was that Star Wars thing too much? Okay... moving on.</p>';
        }else if( empty($know) || $know === "null" || !is_numeric($know) || is_null($know)) {
          echo '';
        }
        restore_error_handler();
        ?>

        <p>I should confess that I am kind of an introvert, so I use this overly used thing for (mostly)procrastination called as the "internet" to show-off my skills. I can't say that I'm a pro at what I do, but I can say that I am really OCD about delivering a good work that I myself and the people I worked for will be proud to look at, and in this process I am trying my best - well not to be a pro but a better version of myself.</p>
        <p>In other words I am kind of a pain in the two rounded portions of the anatomy, located on the posterior of the pelvic region of apes - as I nitpick a lot. Not because I am purposely annoying, but because I have a thing for my work being perfect. And yes, I took that really fancy definition of butts from <a href="https://en.wikipedia.org/wiki/Buttocks" target="_blank">Wikipedia</a> (yes that's NSFW).</p>
        <p>I am Sudipto Mondal, a self taught Graphic/Motion Designer and a Front-End Designer/Developer. And I am avid about drawing, illustrating, moving and coding stuffs.</p>

      </div>

      <div class="about-page-paper about-page-paper-spacer remove-card-border-mobile">
        
        <div class="about-paper-title">
          KEEP THIS A SECRET.
        </div>

        <p>I have always been a keen learner of the things I like and had the desire to create something of my own since my childhood. I got my first computer in 2010 with Windows XP, Core2Duo and 2GB of ram, I was really excited to try something out with it. I still didn't have the internet so I walked into this nearby Cyber Cafe to get an hands-on experience with the internet, within a minute - I was hooked. The ability to find any information and learn anything, anytime without any limitations was just too amusing to me (yes, I was quite late to join the internet party). Well of course I have been on the internet before this in my school, but we were only allowed to visit the school website and yahoo, so you know... there was no idea what was beyond this wall(Attack on Titan reference intended).</p>
        <p>So... went to that Cafe every evening and started out by downloading some Windows XP themes, free softwares etc. One chilly evening of December I discovered this thing called YouTube, I didn't quite get it at first, but a few moments later I was really into it and ended up spending 4 hours watching funny cats, babies, fail videos, sketches and short films(had to face the warth of my mother ofcourse). During this time I found some channels that provided free Photoshop, After Effects and Sony Vegas Pro templates. It was like a love at first sight sort of moment for me. I downloaded them and started working on them with the "trial version" of the softwares - and repeated this process up to a point till I was able to create the templates of my own. While working and reverse-engineering some design templates I came across this website called <a href="http://www.videocopilot.net/" target="_blank">VideoCopilot.net</a>. At the very first glance itself, it felt like a really unique website, not only because it had a really eye catching and beautiful design, but also because it was selling products of the same domain that I was working on.</p>
        <p>At that very moment, I wanted a similar website of my own. So I started out by downloading simple HTML, CSS website templates and editing them. It felt like an overwhelming thing at first, but as the days passed and I kept practicing I liked it very much, and then started editing complex and dynamic HTML, CSS as well as JavaScript templates this time-which included some sliders, form validations, etc. And finally, after 1.5 years of practising and editing infinite number of templates - I was able to work on websites by myself from scratch, without relying on any templates. I was also able to create my own icons, wallpapers and some short motion graphics and also, I WAS ALSO...! able to get an internet connection at home during this time. Yeah! There was too much stuff happening at the same time.

        <p>I started sharing my works on <a href="https://www.youtube.com/softboxindia" target="_blank">YouTube</a> and <a href="http://softboxindia.deviantart.com/gallery/" target="_blank">DeviantART</a>. People started noticing and coming back for more, this motivated me to keep on doing this and also I really reaaalllyyy enjoyed doing it. This was the time I started accepting freelance offers from clients. This motivation and desire to create, get inspired and learn from the people of the community hasn't left me since, and after few years, I am here - contributing a part of me to this growing community of design and code.

        <p>So... what's the secret? Well... there's no secret I just wanted you to read this little story of mine. Sorry <i class="fa fa-smile-o" aria-hidden="true"></i>. Unless you skipped it, then I am not sorry.</p>

      </div>

      <div class="about-page-paper about-page-paper-spacer remove-card-border-mobile">
        
        <div class="about-paper-title">
          BRANDS I CAN BRAG ABOUT.
        </div>

        <div class="grid-row grid-group brand-holder-shifter">
          <div class="grid-col span_1_of_3">
            <div class="brand-holder-wrapper">
              <div class="brand-img-holder">
                <img src="img/brand-img/brand_google.png" alt="Google" title="Google" />
              </div>
            </div>
          </div>
          <div class="grid-col span_1_of_3">
            <div class="brand-holder-wrapper">
              <div class="brand-img-holder">
                <img src="img/brand-img/brand_programminghub.png" alt="Programming Hub" title="Programming Hub" />
              </div>
            </div>

          </div>
          <div class="grid-col span_1_of_3">
            <div class="brand-holder-wrapper">
              <div class="brand-img-holder">
                <img src="img/brand-img/brand_velosofy.png" alt="Velosofy" title="Velosofy" />
              </div>
            </div>
          </div>
        </div>
        
        <div class="spacer-bottom-on-phone"></div>

      </div>

       <div class="about-page-paper about-page-paper-spacer remove-card-border-mobile">
        
          <div class="about-paper-title">
            BELIEVE ME I AM LEGIT.
          </div>

          <div class="abt-exp-wrapper">
            <div class="abt-exp-row">

              <div class="abt-exp-col abt-exp-row-title">
                Experience—
              </div>

              <div class="abt-exp-col abt-exp-large">
                
                <div class="abt-exp-box">
                  <div class="small-paper-title">Freelance Designer and Developer</div>
                  <div class="abt-exp-time">January 2012 - Present</div>
                </div>

                <div class="abt-exp-box">
                  <div class="small-paper-title">Motion Graphic Designer</div>
                  <div class="abt-exp-for">The Curious Engineer</div>
                  <div class="abt-exp-time">June 2015 - Present</div>
                </div>

                <div class="abt-exp-box">
                  <div class="small-paper-title">Lead UI/UX Designer</div>
                  <div class="abt-exp-for">Programming Hub</div>
                  <div class="abt-exp-time">June 2016 - November 2016</div>
                </div>

                <div class="abt-exp-box">
                  <div class="small-paper-title">Motion Graphic Designer</div>
                  <div class="abt-exp-for">Think with Google</div>
                  <div class="abt-exp-time">February 2016 - April 2016</div>
                </div>

                <div class="abt-exp-box">
                  <div class="small-paper-title">Web Developer</div>
                  <div class="abt-exp-for">Destylio</div>
                  <div class="abt-exp-time">September 2015 - January 2016</div>
                </div>

                <div class="abt-exp-box">
                  <div class="small-paper-title">Designer Intern</div>
                  <div class="abt-exp-for">StupidSid</div>
                  <div class="abt-exp-time">November 2013 - June 2014</div>
                </div>

              </div>

            </div>
          </div>

          <a href="bucket/resume.pdf" class="page-button-big" target="_blank">
            My Resume<i class="material-icons">chevron_right</i>
          </a>
          <div class="spacer-bottom-on-phone"></div>

      </div>

      <div class="about-page-paper about-page-paper-spacer remove-card-border-mobile">
        
        <div class="about-paper-title">
          WHO GIVES A FAQ?
        </div>

        <p>
        <strong>
          Q: What tools do you use?
        </strong><br/>
          I use Photoshop and Illustrator for my Designs, After Effects for Motion Graphics, Premiere Pro and sometimes Sony Vegas Pro for Editing and Audition for Sounds. For development purposes, I use Codepen, Atom, Sublime Text and sometimes Web Maker as well.
        </p>

        <p>
        <strong>
          Q: Are you available for freelance/commission?
        </strong><br/>
          Maybe I am. Maybe I am not. Just Kidding! Ofcourse I am, <a href="mailto:iwant@somethingjustlikethis.com?subject=Hey%20There">email</a> me or <a href="sayhello">send me a message</a> with any opportunities.
        </p>

        <p>
        <strong>
          Q: Why does this website have a weirdly long address?
        </strong><br/>
          Because I wanted something just like that. See what I did there? <span style="font-family: sans-serif; font-weight: normal; white-space: nowrap;">( ͡° ͜ʖ ͡°)</span>. And also, while I was working on this website Coldplay and Chainsmokers came out with this <a href="https://youtu.be/FM7MFYoylVs" target="_blank">awesome song</a> which I became obsessed with.
        </p>

        <p>
        <strong>
          Q: Did you create this website?
        </strong><br/>
          Yes!
        </p>

        <p>
        <strong>
          Q: C'mon... Really?
        </strong><br/>
          Yes I did! Everything on this website including the HTML, CSS, JavaScript, the custom WordPress theme for my journal and even the Graphics you see are hand crafted by me from scratch. Except some third party jQuery plugins, like the Slimscroll, YouTube Popup and Gridder.
        </p>

        <p>
        <strong>
          Q: Why is this website so unprofessional?
        </strong><br/>
          More like a little casual. Because I wanted to make you feel like, a part of me is personally communicating to you through this website.
        </p>

        <p>
        <strong>
          Q: Why are you trying so hard to be funny?
        </strong><br/>
          Deal with it!
          <span style="font-family: sans-serif; font-weight: normal; white-space: nowrap;">(•_•)</span> <span style="font-family: sans-serif; font-weight: normal; white-space: nowrap;">( •_•)>⌐■-■ (⌐■_■)</span><br/>I am sorry, I got problems. Please ignore my bad sense of humour.
        </p>

        <p>
        <strong>
          Q: You said you were an introvert but it doesn't seem like it, what's with that?
        </strong><br/>
          I am an introvert, but not on the internet. I like to open up, showoff and speak my heart out here, which I find it a little hard to do in real life, unless I get really close to someone. 
        </p>

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