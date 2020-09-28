<?php require_once('connectvars.php'); ?>
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

  <title>Behold my works ye mighty!</title>

  <link rel="shortcut icon" href="img/favicon.ico?v=2" type="image/x-icon">
  <link rel="manifest" href="manifest.json">
  <link rel="icon" href="img/chrome-touch-icon-192x192.png" sizes="192x192" type="image/png">
  <link rel="icon" href="img/chrome-touch-icon-384x384.png" sizes="384x384" type="image/png">

  <link rel="stylesheet" href="css/reset.min.css">
  <link rel="stylesheet" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="css/dressup.css">

</head>

<body class="home">

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
  <div class="float-works-preloader nosel">
    
    <div class="float-works-loader-animation">
      <div class="loader">
        <svg class="circular" viewBox="25 25 50 50">
          <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-miterlimit="10"/>
        </svg>
      </div>
    </div>
    
    <div class="float-works-load-text">
      loading project
    </div>
    
  </div>
  <!--float-works-content-preloader-->

  <div class="projects-header header-cover-specs">

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
          <li><a href="javascript:void(0);" onclick="$('body').animatescroll({scrollSpeed:900,easing:'easeInOutQuart'});" class="active-page">WORKS</a></li>
          <li><a href="http://journal.somethingjustlikethis.com/">JOURNAL</a></li>
          <li><a href="about">ABOUT</a></li>
          <li><a href="sayhello">CONTACT</a></li>
        </ul>

      </div>
      <!--end page nave-->
    </div>
    <!--end page nave wrapper-->

    <div class="pages-header-title">
      <div class="page-content">
        Stuffs i worked on.
      </div>
    </div>

  </div>
  <!--end projects header-->


  <section class="projects-controllers-section">
    <div class="page-content">
      
      <div class="projects-controller-wrapper">
        
        <div class="project-controller" id="project-controller-filter">
          
          <div class="project-controller-title">SHOW ME</div>

          <div class="projects-filter-wrapper nosel">
            <button class="project-filter project-filter-active filter" id="filter-all" data-filter="all"><i class="material-icons">view_module</i><span class="filter-label">Everything</span></button>

            <button class="project-filter filter" id="filter-branding" data-filter=".branding"><i class="fa fa-tag" aria-hidden="true"></i><span class="filter-label">Branding</span></button>

            <button class="project-filter filter" id="filter-animation" data-filter=".animation"><i class="material-icons">layers</i><span class="filter-label">Animation</span></button>

            <div class="filter-btn-break-mobile"></div>

            <button class="project-filter filter" id="filter-illustration" data-filter=".illustration"><i class="material-icons">landscape</i><span class="filter-label">Illustration</span></button>

            <button class="project-filter filter" id="filter-webandui" data-filter=".webandui"><i class="fa fa-window-restore" aria-hidden="true"></i><span class="filter-label">Web &amp; UI</span></button>

            <button class="project-filter filter" id="filter-handmade" data-filter=".handmade"><i class="material-icons">color_lens</i><span class="filter-label">Sketches &amp; Drawings</span></button>
          </div>

        </div>
        <!--end filter wrapper-->

      </div>

    </div>
  </section>
  <!--end project controllers-->

  <section class="projects-content-container" id="projectcontentcontainer">
    <div class="page-content">

      <div class="grid-row grid-group">

        <!--GRID LOOP ADD DATA-->
        <?php
            function redirect($location)
            {
              echo "\n".'<script language="javascript">setTimeout(\'window.location.href="'.$location.'"\', 0);</script>'."\n";
            }

            $dbc = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

            $page = $_GET["page"];

            if(is_null($page) || $page === "0" || $page === "null" || empty($page) || !is_numeric($page)) {
              redirect('portfolio?page=1');
            }

            if($page > "5") {
              redirect('portfolio?page=5');
            }

            $start = 0 + 12 * ($page - 1);
            $rows = 12;

            $query = "SELECT * FROM portfolio order by pid DESC LIMIT $start, $rows";

            $result = mysqli_query($dbc, $query);
            $counter = mysqli_num_rows($result);

              while($row = mysqli_fetch_array($result))
              {
                echo '
                      <div class="grid-col span_1_of_3 mix '.$row['pcategory'].'">
                        <div class="work-card-wrapper">

                          <div class="work-card-cover">
                            <img src="'.$row['pcover'].'" />
                          </div>

                          <div class="work-card-info nosel">
                            <div class="work-card-title" title="'.$row['ptitle'].'">
                              '.$row['ptitle'].'
                            </div>
                            <div class="work-card-category filter" data-filter=".'.$row['pcategory'].'">
                              <span>'.$row['pcategory'].'</span>
                            </div>
                      ';
                if($row['personal'] === "0") {
                  echo '
                            <div class="work-card-client">
                              <span class="work-card-client-for">FOR</span> '.$row['pmadefor'].'
                            </div>
                        ';
                } else if($row['personal'] != "0") {
                  echo '
                            <div class="work-card-client">
                              &nbsp;&nbsp;
                            </div>
                        ';
                }

                    echo '
                          </div>

                          <div class="work-card-btn work-card-btn-home-sec show-work-btn nosel" for-work="'.$row['pid'].'">
                            VIEW PROJECT<i class="material-icons">chevron_right</i>
                          </div>

                        </div>
                      </div>
                      ';
              }

            mysqli_close($dbc);
        ?>
        <!--GRID LOOP ADD DATA-->

      </div>

      <ul class="pagination">
        <li><a href="portfolio?page=1" class="pagination_number <?php if($_GET['page']==1){ echo 'active_pagination_number'; } ?>">1</a></li>
        <li><a href="portfolio?page=2" class="pagination_number <?php if($_GET['page']==2){ echo 'active_pagination_number'; } ?>">2</a></li>
        <li><a href="portfolio?page=3" class="pagination_number <?php if($_GET['page']==3){ echo 'active_pagination_number'; } ?>">3</a></li>
        <li><a href="portfolio?page=4" class="pagination_number <?php if($_GET['page']==4){ echo 'active_pagination_number'; } ?>">4</a></li>
        <li><a href="portfolio?page=5" class="pagination_number <?php if($_GET['page']==5){ echo 'active_pagination_number'; } ?>">5</a></li>
      </ul>

    </div>
    <!--end page-content-->

  </section>
<!--end projects grid container-->

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

  <div class="float-work-overflow float-overflow">


  <!--READER LOOP ADD DATA-->
  <?php
      $dbc = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

      $page = $_GET["page"];

      $start = 0 + 12 * ($page - 1);
      $rows = 12;

      $query = "SELECT * FROM portfolio order by pid DESC LIMIT $start, $rows";

      $result = mysqli_query($dbc, $query);
      $counter = mysqli_num_rows($result);

        while($row = mysqli_fetch_array($result))
        {
          echo '
                <div class="float-works-wrap float-wrap" work-number="'.$row['pid'].'">

                  <div class="float-works-close nosel">
                    <i class="material-icons" id="float-works-close">close</i>
                  </div>

                  <div class="float-works-paper">

                    <div class="page-content-reader">

                      <div class="navicrum nosel">
                        WORKS
                        <i class="material-icons">chevron_right</i> '.$row['pcategory'].'
                        <i class="material-icons">chevron_right</i>
                      </div>

                      <div class="float-works-title">
                        '.$row['ptitle'].'
                      </div>
                    ';

            if($row['personal'] === "0") {
              echo '
                      <ul class="float-works-specs nosel">
                        <li class="work-client-shift">
                          <strong>Made For</strong> '.$row['pmadefor'].'
                        </li>
                        <li>
                          <strong>My Job</strong> '.$row['pmyrole'].'
                        </li>
                        <li class="work-tools-shift">
                          <strong>Made With</strong>
                          '.$row['ptools'].'
                        </li>
                      </ul>
                    ';
                  }
              else {
                echo '';
              }

          if(is_null($row['pvideolink']) && $row['personal'] === "0" && $row['hidecover'] === "0") {
              echo '
                        <div class="float-works-thumb">
                          <img src="'.$row['pcover'].'" />
                        </div>
                      ';
          }
          else if(!is_null($row['pvideolink']) && $row['hidecover'] === "0") {
            echo '
                    <div class="embed-container">
                      <iframe src="https://www.youtube.com/embed/'.$row['pvideolink'].'?&showinfo=0&controls=0&rel=0" frameborder="0"></iframe>
                    </div>
            ';
          }
          else if($row['personal'] != "0" && $row['hidecover'] === "0") {

            if(!is_null($row['ppersonalwork'])) {
                echo '
                      <div class="float-works-thumb">
                        <img src="'.$row['ppersonalwork'].'" />
                      </div>
                    ';
            }
            else {
                echo '';
            }

          } else if ($row['hidecover'] != "0") {
              echo '';
          }

                echo '
                      <div class="float-works-details">
                        '.$row['pdesc'].'
                      </div>
                    ';

          if(is_null($row['pack'])) {
            echo '';
          }
          else {
            echo '
                      <hr class="hr-pipe" align="left" />

                      <div class="float-works-ack"'; if($row['personal'] != "0"){echo 'style="margin-bottom:80px;"';} echo '>

                        <div class="ack-title">
                          ACKNOWLEDGEMENTS
                        </div>

                        <div class="ack-details">
                          '.$row['pack'].'
                        </div>

                      </div>
                  ';
                }

              echo '
                    </div>
                ';

            if($row['personal'] === "0") {
              echo '
                    <div class="float-reader-footer">

                      <div class="page-content-reader">

                        <div class="float-reader-footer-title">
                          Like what you see?
                        </div>

                        <div class="float-reader-footer-details">

                          <p>
                            Want something just like this for yourself?
                          </p>
                          <p>
                            Well you can always <a href="mailto:iwant@somethingjustlikethis.com?subject=Hey%20There">email</a> me or <a href="sayhello">send me a message</a> with any freelance or commission opportunities. Or you can just ask me something regarding your project, i will be more than happy to answer it <i class="fa fa-smile-o" aria-hidden="true"></i>.
                          </p>
                          <p>
                              Let\'s build something together that you and i both will be proud of, no matter how big or small it is.
                          </p>

                        </div>

                      </div>

                    </div>
                    ';
                  }
              else {
                echo '';
              }

              echo '
                  </div>

                </div>
                ';

        }

      mysqli_close($dbc);
  ?>
  <!--READER LOOP ADD DATA-->

  </div>
  <!--end float works overflow-->
  <!--end page reader modal-->
</div>
<!--end body container-->

<script src='js/jquery.min.js' id="first-script"></script>
<script src='js/jquery-ui.min.js'></script>
<script src='js/animatescroll.min.js'></script>
<script src='js/jquery.slimscroll.js'></script>
<script src="js/jquery.mixitup.min.js"></script>
<script src="js/appengine.js"></script>
<script>
$(function(){
  $('#projectcontentcontainer').mixItUp({
    animation: {
      enable: false
    },
    callbacks: {
      onMixLoad: function(){
        $(this).mixItUp('setOptions', {
          animation: {
            enable: true,
            effects: 'scale(0.01)',
            perspectiveOrigin: '100% 0',
            reverseOut: true,
            easing: 'cubic-bezier(0.655, 0.000, 0.415, 1.000)'
          },
        });
      }
    }
  });
});
</script>

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