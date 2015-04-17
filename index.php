<!DOCTYPE html>
<!-- IN JADE YOU USE ALL HTML TAGS WITH NO "< >" SYMBOLS ALL HTML TAGS ARE USED WITHOUT SYMBOLS; HTML, DIV, BODY, META,-->
<!-- CHILD ELEMENTS ARE SPECIFIED THROUGH INDENTATION. RATHER THAN PUTTING THEM INSIDE OPENING AND CLOSING TAG OF THE PARENT ELEMENT.-->
<!-- FOR EXAMPLE, HEAD IS INSIDE HTML BECAUSE IT'S IDENTED ONE LEVEL FURTHER. IT WOULD BE A SIBLING OF HTML IF IT WAS ON THE SAME LEVEL.-->
<!-- META, TITLE, LINK, SCRIPT ARE ALL INSIDE HEAD. & BODY IS A SIBLING OF HEAD.-->
<!-- ALL data that is normall found inside after a tag is added with (). example: <link rel="stylesheet"> would look like "link(rel="stylesheet),-->
<!-- THE "INCLUDES" are simply the same content placed in a separate jade sheet to keep this page simpler.-->
<html lang="en" class="no-js">
  <head>
    <title>Double Donation Event</title>
    <meta charset="utf-8">
    <!-- if you remove this meta tag, the NSA will spy on you through your Xbox Kinect camera-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/modernizr.js"></script>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/app.css">
    <!-- Icon-->
    <link rel="icon" type="<?php echo get_template_directory_uri(); ?>/image/png" href="img/favicon.ico">
    <!-- Font Awesome-->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <!-- OwlCarousel-->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/plugins/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/plugins/owlcarousel/assets/owl.theme.default.min.css">
    <!-- Scrollpane-->
    <link type="text/css" href="<?php echo get_template_directory_uri(); ?>/js/jscrollpane/jquery.jscrollpane.css" rel="stylesheet" media="all">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/plugins/jscrollpane/scripts/jquery.jscrollpane.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/plugins/jscrollpane/scripts/jquery.mousewheel.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/plugins/jscrollpane/scripts/mwheelIntent.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/core.js"></script>
    <!--The UA-xxxxxxxxx-15 needs to be replaced for the proper google analytics id.-->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-xxxxxxxxx-15', 'auto');
      ga('send', 'pageview');
      $(function()
      {
      	$('.scroll-pane').jScrollPane();
      });
    </script>
  </head>
  <body class="gray8">
    <div data-offcanvas="" class="off-canvas-wrap">
      <div class="inner-wrap"><a href="#" class="left-off-canvas-toggle show-for-medium-down off-canvas-button">
          <div class="fa fa-bars">	MENU</div></a>
        <!-- Off Canvas Menu-->
        <aside class="left-off-canvas-menu off-canvas-nav">
          <!-- whatever you want goes here-->
          <ul class="off-canvas-list">
            <li><a href="#">Item 1</a></li>
            <li><a href="#">Item 2</a></li>
            <li><a href="#">Item 3</a></li>
            <li><a href="#">Item 4</a></li>
            <li><a href="#" class="sub">Sub item</a></li>
            <li><a href="#">Item 6</a></li>
            <li></li>
          </ul>
          <ul class="social-icons small-block-grid-3">
            <li><a href="#" class="fa fa-twitter"></a></li>
            <li><a href="#" class="fa fa-facebook"></a></li>
            <li><a href="#" class="fa fa-youtube-play"></a></li>
          </ul>
        </aside>
        <!-- main content goes here-->
        <div class="header">
          <div class="nav white">
            <div class="row">
              <div class="logocontainer small-4 small-centered medium-4 medium-uncentered columns"><img src="<?php echo get_template_directory_uri(); ?>/img/DevDuo-full.png" class="logo small-12"></div>
              <div class="small-10 medium-6 show-for-medium-up columns">
                <ul class="inline-list text-center right">
                  <li class="hide-for-small-only">
                    <h2 class="nav-link"><a href="#" class="active">Videos</a></h2>
                  </li>
                  <li class="hide-for-small-only active">
                    <h2 class="nav-link"><a href="#">Blog</a></h2>
                  </li>
                  <li class="hide-for-small-only">
                    <h2 class="nav-link"><a href="#">Nosotros</a></h2>
                  </li>
                  <li class="hide-for-small-only">
                    <h2 class="nav-link"><a href="#">Recursos</a></h2>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="row small-collapse content white">
            <div class="row small-collapse brand1">
              <!-- Carrousel
              .owl-carousel.white
              	.item
              		img(src="img/carousel/slide1.png")
              	.item
              		img(src="img/carousel/slide1.png")
              	.item
              		img(src="img/carousel/slide1.png")
              	.item
              		img(src="img/carousel/slide1.png")
              -->
            </div>
            <div class="row page-header">
              <div class="small-10 columns small-centered">
                <h2>Videos</h2>
              </div>
            </div>
            <div class="row">
              <div class="small-10 columns small-centered">
                <ul class="small-block-grid-1 medium-block-grid-2 videos">
                  <li class="video-card"><a href-"#>
                      <div class="info">
                        <h3 class="title">Centrando con CSS</h3>
                      </div>
                      <div class="small-12"><img src="<?php echo get_template_directory_uri(); ?>/img/thumbs/thumbnail-01.jpg"></div>
                      <div class="info-bottom border-html">
                        <h3 class="tag">#HTML</h3>
                        <p>This is the subtitle of the video</p>
                      </div></a></li>
                  <li class="video-card"><a href-"#>
                      <div class="info">
                        <h3 class="title">Utilizando Clases</h3>
                      </div>
                      <div class="small-12"><img src="<?php echo get_template_directory_uri(); ?>/img/thumbs/thumbnail-02.jpg"></div>
                      <div class="info-bottom border-html">
                        <h3 class="tag">#HTML</h3>
                        <p>This is the subtitle of the video</p>
                      </div></a></li>
                  <li class="video-card"><a href-"#>
                      <div class="info">
                        <h3 class="title">This is the title</h3>
                      </div>
                      <div class="small-12"><img src="<?php echo get_template_directory_uri(); ?>/img/thumbs/thumbnail-03.jpg"></div>
                      <div class="info-bottom border-html">
                        <h3 class="tag">#HTML</h3>
                        <p>This is the subtitle of the video</p>
                      </div></a></li>
                  <li class="video-card"><a href-"#>
                      <div class="info">
                        <h3 class="title">This is the title</h3>
                      </div>
                      <div class="small-12"><img src="<?php echo get_template_directory_uri(); ?>/img/thumbs/thumbnail-02.jpg"></div>
                      <div class="info-bottom border-css">
                        <h3 class="tag">#CSS</h3>
                        <p>This is the subtitle of the video</p>
                      </div></a></li>
                  <li class="video-card"><a href-"#>
                      <div class="info">
                        <h3 class="title">This is the title</h3>
                      </div>
                      <div class="small-12"><img src="<?php echo get_template_directory_uri(); ?>/img/thumbs/thumbnail-05.jpg"></div>
                      <div class="info-bottom border-css">
                        <h3 class="tag">#CSS</h3>
                        <p>This is the subtitle of the video</p>
                      </div></a></li>
                  <li class="video-card"><a href-"#>
                      <div class="info">
                        <h3 class="title">This is the title</h3>
                      </div>
                      <div class="small-12"><img src="<?php echo get_template_directory_uri(); ?>/img/thumbs/thumbnail-06.jpg"></div>
                      <div class="info-bottom border-css">
                        <h3 class="tag">#CSS</h3>
                        <p>This is the subtitle of the video</p>
                      </div></a></li>
                  <li class="video-card"><a href-"#>
                      <div class="info">
                        <h3 class="title">This is the title</h3>
                      </div>
                      <div class="small-12"><img src="<?php echo get_template_directory_uri(); ?>/img/thumbs/thumbnail-07.jpg"></div>
                      <div class="info-bottom border-sass">
                        <h3 class="tag">#SASS</h3>
                        <p>This is the subtitle of the video</p>
                      </div></a></li>
                  <li class="video-card"><a href-"#>
                      <div class="info">
                        <h3 class="title">This is the title</h3>
                      </div>
                      <div class="small-12"><img src="<?php echo get_template_directory_uri(); ?>/img/thumbs/thumbnail-08.jpg"></div>
                      <div class="info-bottom border-sass">
                        <h3 class="tag">#SASS</h3>
                        <p>This is the subtitle of the video</p>
                      </div></a></li>
                  <li class="video-card"><a href-"#>
                      <div class="info">
                        <h3 class="title">This is the title</h3>
                      </div>
                      <div class="small-12"><img src="<?php echo get_template_directory_uri(); ?>/img/thumbs/thumbnail-09.jpg"></div>
                      <div class="info-bottom border-sass">
                        <h3 class="tag">#SASS</h3>
                        <p>This is the subtitle of the video</p>
                      </div></a></li>
                  <li class="video-card"><a href-"#>
                      <div class="info">
                        <h3 class="title">This is the title</h3>
                      </div>
                      <div class="small-12"><img src="<?php echo get_template_directory_uri(); ?>/img/thumbs/thumbnail-10.jpg"></div>
                      <div class="info-bottom border-zf">
                        <h3 class="tag">#foundation</h3>
                        <p>This is the subtitle of the video</p>
                      </div></a></li>
                  <li class="video-card"><a href-"#>
                      <div class="info">
                        <h3 class="title">This is the title</h3>
                      </div>
                      <div class="small-12"><img src="<?php echo get_template_directory_uri(); ?>/img/thumbs/thumbnail-11.jpg"></div>
                      <div class="info-bottom border-zf">
                        <h3 class="tag">#foundation</h3>
                        <p>This is the subtitle of the video</p>
                      </div></a></li>
                  <li class="video-card"><a href-"#>
                      <div class="info">
                        <h3 class="title">This is the title</h3>
                      </div>
                      <div class="small-12"><img src="<?php echo get_template_directory_uri(); ?>/img/thumbs/thumbnail-12.jpg"></div>
                      <div class="info-bottom border-tb">
                        <h3 class="tag">#bootstrap</h3>
                        <p>This is the subtitle of the video</p>
                      </div></a></li>
                </ul>
                <div class="pagination-section">
                  <div class="pagination-centered">
                    <ul class="pagination">
                      <li class="arrow unavailable"><a href="">«</a></li>
                      <li class="current"><a href="">1</a></li>
                      <li><a href="">2</a></li>
                      <li><a href="">3</a></li>
                      <li><a href="">4</a></li>
                      <li class="unavailable"><a href="">…</a></li>
                      <li><a href="">12</a></li>
                      <li><a href="">13</a></li>
                      <li class="arrow"><a href="">»</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="small-12 footer gray9">
            <!--go to footer.jade file to edit content in the body.-->
            <div class="row">
              <div class="medium-12 columns footer-links"><img src="<?php echo get_template_directory_uri(); ?>/img/logoGray.svg" class="hide-for-small-only footer-logo columns small-1">
                <ul class="inline-list right social-icons">
                  <li><a href="tel:7138880070" class="fa fa-phone"></a></li>
                  <li><a href="mailto:joey@houstonglooringone.com" class="fa fa-globe"></a></li>
                  <li><a href="." data-reveal-id="map" class="fa fa-map"></a></li>
                  <li><a href="" class="fa fa-facebook"></a></li>
                  <li><a href="" class="fa fa-twitter-square"></a></li>
                  <li><a href="" class="fa fa-youtube-play"></a></li>
                  <li><a href="" class="fa fa-google-plus-square"></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- close the off-canvas menu--><a class="exit-off-canvas"></a>
      </div>
    </div>
    <footer>
      <!-- These are the scripts needed to run all basic plugins for our sites.-->
    </footer>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/foundation.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/fastclick.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/plugins/owlcarousel/owl.carousel.js"></script>
    <script>
      //This activates foundations Javascripts
      $(document).foundation({
      	tab: {
      		callback : function (tab) {
      			console.log(tab);
      		}
      	}
      });

      //This enables the FastClick javascript which is necessary for Owlcarousel
      window.addEventListener('load', function() {
      	new FastClick(document.body);
      }, false);

      // run foundation.js function
      $(document).foundation();
      $('a[href^="#bottom"], a[href^="#top"]').on('click', function(event) {

      		var target = $( $(this).attr('href') );

      		if( target.length ) {
      				event.preventDefault();
      				$('html, body').animate({
      						scrollTop: target.offset().top
      				}, 1000);
      		}

      });
      // Main Owl Carousel Settings
      	$(document).ready(function(){
      		$(".owl-carousel").owlCarousel();
      	});

      	$('.owl-carousel').owlCarousel({
      		loop: true,
      		margin:0,
      		nav:false,
      		dots: true,
      		autoplay: true,
      		autoplayTimeout: 3000,
      		autoplaySpeed: 4500,
      		responsive:{
      			0:{
      				items:1
      			},
      			600:{
      				items:1
      			},
      			1000:{
      				items:1
      			}
      		}
      	})
    </script>
  </body>
</html>
