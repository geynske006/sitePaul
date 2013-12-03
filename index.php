
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>Paul Vanhoutte</title>
	<meta content="Paul, paul, paulvanhoutte, vanhoutte, vanhoutte paul, paulv, paul vanhoutte, paul vanhoute, antiek, decoratie, interieur, modern" name="keywords"/>
	<meta name="description" content="Van antiek naar modern"/>
	<link rel="stylesheet" href="css/reset.css">
 	<link rel="stylesheet" href="css/foundation.css">
  	<link rel="stylesheet" href="css/myCSS.css">
  	<link rel="icon" 
      type="image/png" 
      href="favicon.png">
    <link rel="stylesheet" type="text/css" href="./js/fancybox/jquery.fancybox.css" media="screen" />

    <link rel="stylesheet" href="./css/flexslider.css" type="text/css">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>-->
    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
	<script src="./js/flexslider/jquery.flexslider-min.js"></script>

	<script type="text/javascript">
  $(document).ready(function() {
    $('.flexslider').flexslider();
  });
</script>
</head>
<body>
	<div class="fixed" id="menu">
		<nav>
			<ul>
				<li><a href="#home"><img src="./img/logo.png" id="logo" alt=""></a></li>
				<li id="btnMenu"><a href="#home" class="button" >Home</a></li>
				<li><a href="#aboutMe" class="button" >Meer over mezelf</a></li>
				<li ><a href="#myWork"  class="button" >Mijn werk</a></li>
				<li><a href="#contact"  class="button" >Contact</a></li>
			</ul>
		</nav>
	</div>

	<div id="home" class="row" >
		<div class="large-12 columns">
			<h2>Paul Vanhoutte</h2>
			<div>De zoektocht van iets ouds naar iets moderns start hier.</div>
			<hr />
			<div id="slideIT">
				<div class="flexslider">
				  <ul class="slides">
				    <li>
				      <img src="./img/big/914.jpg" alt=""/>
				    </li>
				    <li>
				      <img src="./img/big/563.jpg" alt=""/>
				    </li>
				    <li>
				      <img src="./img/big/566.jpg" alt=""/>
				    </li>
				  </ul>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="large-12 columns">
			<h3 id="aboutMe">Waarvoor ik sta...</h3>
			<div class="row">
				<div class="large-12 columns">
					<div class="panel">
						<p>Mijn passie voor de oudheid is al heel vroeg begonnen, ik ben gestart als restaurateur van oude gebouwen en natuursteen.</p>
						<p>Na 20 jaar ervaring is mijn specialisatie vooral oude patines terug tot leven brengen. Nu gebruik ik heel oude objecten met als doel deze te plaatsen in de hedendaagse leefomgeving. Ieder object moet dan ook uniek zijn, het moet rust en sereniteit uitstralen zonder daarbij te raken aan de originele kracht en authenticiteit van het geheel.</p>
						<p>Elke toevoeging aan de eenvoud van interieur stuurt je gegarandeerd naar de wereld van zelfvertrouwen. Een zoektocht naar iets anders, een ander interieur, een ruimer bestaan, de gloed van een leven en eenheid met alles wat bestaat. Een levenswijze van doorleefde objecten, maar er zit zoveel meer in. De energie die dan vrijkomt, zet je hele leven op een andere manier in vuur en vlam!</p>
						
					</div>
					<hr />
				</div>
			</div>
			<h3 id="myWork">Mijn werk</h3>
			<div class="row">
				<div class="large-12 columns">
					<div class="panel">
						<?php 
							$dirB = "./img/big/"; /*Directory set for bigger pics*/
							$imgB = glob($dirB . "*.jpg"); /*get all the filenames of the pics*/
							$fileCount = count($imgB);/*count all files in the pics-folder for later use*/

							$dirS = "./img/s/"; /*directory for the thumbnails*/
							$imgS = glob($dirS . "*.jpg"); /*get all filenames. NOTE: needs to be exactly 
							the same as in the big folder or loop will not work correctly*/

							for ($i=0; $i < $fileCount; $i++) { /*Loop @ times the total of the files in folder*/
								$b = $imgB[$i]; /*put big pic name in var to use it in linking for gallery*/
								$s = $imgS[$i]; /*the same shizzle as above*/
								echo "<a class='fancybox' data-fancybox-group='gallery'   href='$b'>
										<img class='afb' src='$s' alt=''/>
								</a>";
							}
						 ?>
					</div>
					<hr />

					<h3 id="contact">Contacteer mij gerust!</h3>
					<div class="row">
						<div  class="large-12 columns">
							<div  class="panel">
								<div id="paneelContact">
	  								<div id="picto">
										<img src="img/pictogramContact.png" alt="">
									</div>

									<div id="contactGev">
										<p><b>GSM:</b> 0477 / 36 26 48</p>
										<p><b>Email:</b> vanhoutte.p@telenet.be</p>
									</div>
								</div>
							</div>
							<hr />
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--SCRIPTS voor laadtijden-->


<script>
    $(document).foundation();
</script>
<script type="text/javascript" src="./js/fancybox/jquery.fancybox.pack.js"></script>
<script type="text/javascript">
	
	$(document).ready(function() {
		/* This is basic - uses default settings */

		$("a.single_image").fancybox();

		/* Using custom settings */

		$("a#inline").fancybox({
			'hideOnContentClick': true
		});

		$("a.group").fancybox({
			'zoomSpeedIn':		300, 
			'zoomSpeedOut':	300, 
			'overlayShow':		false
		});
		/*GALLERY SETUP*/
		$(document).ready(function() {
		$(".fancybox").fancybox({
		openEffect	: 'none',
		closeEffect	: 'none'
			});
		});
	});	
 </script>
  <script>
  document.write('<script src=' +
  ('__proto__' in {} ? 'js/vendor/zepto' : 'js/vendor/jquery') +
  '.js><\/script>')
  </script>
  
  <script src="js/vendor/custom.modernizr.js"></script>
  <script src="js/foundation.min.js"></script>
  

  <script type="text/javascript">
    $(document).ready(function(){
    	/*menu go To Div*/
      $('a[href*=#]').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
        && location.hostname == this.hostname) {
          var $target = $(this.hash);
          $target = $target.length && $target
          || $('[name=' + this.hash.slice(1) +']');
          if ($target.length) {
            var targetOffset = $target.offset().top;
            $('html,body')
            .animate({scrollTop: targetOffset}, 800);
           return false;
          }
        }
      });
    });
  </script>
  <script>
	  	if($(window).width() < 500){ 

				$("#menu").removeClass("fixed");
		}
  </script>
  <script>
$(window).bind('orientationchange', function(event) {
  	$("#menu").removeClass("fixed");
});
  </script>

</body>
  </html>
