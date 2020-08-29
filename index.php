<?php
require_once 'includes/template-functions.php';
/**
 * the template for pages.
 */

defined( 'LISTERPATH' ) || exit;

lister_head();

$social_links = array(
	'linkedin'  => 'https://www.linkedin.com/in/rudy-lister-a32013113/',
	'github'    => 'https://github.com/MrLister',
	'wordpress' => 'https://profiles.wordpress.org/mrlister1/',
	'facebook'  => 'https://www.facebook.com/Mr.RLister',
	'twitter'   => 'https://twitter.com/WILvoiceDERNESS',
	'instagram' => 'https://www.instagram.com/rudylister/',
	'email'     => 'mailto: mr.r.lister@gmail.com',
);
?>
<header id="page-header-dup">
	<div class="header-branding">
		<img src="<?php echo LISTERASSETSURL; ?>/images/Rudy%20Lister.jpeg" class="profile-img" />
		<div class="title-socials-wrap">
			<h1><?php page_title(); ?></h1>
			<div class="socials">
				<a href="<?php echo $social_links['linkedin']; ?>" target="_blank" class="social-link linkedin-link"><i class="fab fa-linkedin"></i></a>
				<a href="<?php echo $social_links['github']; ?>" target="_blank" class="social-link github-link"><i class="fab fa-github"></i></a>
				<a href="<?php echo $social_links['wordpress']; ?>" target="_blank" class="social-link wordpress-link"><i class="fab fa-wordpress"></i></a>
				<a href="<?php echo $social_links['facebook']; ?>" target="_blank" class="social-link facebook-link"><i class="fab fa-facebook"></i></a>
				<a href="<?php echo $social_links['twitter']; ?>" target="_blank" class="social-link twitter-link"><i class="fab fa-twitter"></i></a>
				<a href="<?php echo $social_links['instagram']; ?>" target="_blank" class="social-link instagram-link"><i class="fab fa-instagram"></i></a>
				<a href="<?php echo $social_links['email']; ?>" target="_blank" class="social-link email-link"><i class="fas fa-envelope-square"></i></a>
			</div>
		</div>
	</div>
	<nav id="scroll-nav" class="navbar navbar-expand-lg">
		<button class="mobile-btn navbar-toggler" type="button" data-toggle="collapse" data-target="#scroll-lister-nav" aria-controls="scroll-lister-nav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="hang-a-bur hang-a-bur-top"></span>
			<span class="hang-a-bur hang-a-bur-middle"></span>
			<span class="hang-a-bur hang-a-bur-bottom"></span>
		</button>
		<div class="collapse navbar-collapse" id="scroll-lister-nav">
			<ul class="nav nav-list navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="#page-header" link-target="page-header">Top</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#portfolio" link-target="portfolio">Portfolio</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#about-me" link-target="about-me">About me</a>
				</li>
			</ul>
		</div>
	</nav>
</header>
<header id="page-header">
	<div class="header-branding">
		<svg
		   xmlns:dc="http://purl.org/dc/elements/1.1/"
		   xmlns:cc="http://creativecommons.org/ns#"
		   xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
		   xmlns:svg="http://www.w3.org/2000/svg"
		   xmlns="http://www.w3.org/2000/svg"
		   xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
		   xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
		   width="60"
		   height="60"
		   viewBox="0 0 210 297"
		   version="1.1"
		   id="svg8"
		   inkscape:version="0.92.4 (5da689c313, 2019-01-14)"
		   sodipodi:docname="mrlister-logo.svg">
		  <defs
			 id="defs2" />
		  <sodipodi:namedview
			 id="base"
			 pagecolor="#ffffff"
			 bordercolor="#666666"
			 borderopacity="1.0"
			 inkscape:pageopacity="0.0"
			 inkscape:pageshadow="2"
			 inkscape:zoom="0.7"
			 inkscape:cx="335.6446"
			 inkscape:cy="557.38301"
			 inkscape:document-units="mm"
			 inkscape:current-layer="text817"
			 showgrid="false"
			 inkscape:window-width="1920"
			 inkscape:window-height="1016"
			 inkscape:window-x="0"
			 inkscape:window-y="27"
			 inkscape:window-maximized="1" />
		  <metadata
			 id="metadata5">
			<rdf:RDF>
			  <cc:Work
				 rdf:about="">
				<dc:format>image/svg+xml</dc:format>
				<dc:type
				   rdf:resource="http://purl.org/dc/dcmitype/StillImage" />
				<dc:title />
			  </cc:Work>
			</rdf:RDF>
		  </metadata>
		  <g
			 inkscape:label="Layer 1"
			 inkscape:groupmode="layer"
			 id="layer1">
			<g
			   aria-label="Mr"
			   transform="scale(0.77207126,1.2952172)"
			   style="font-style:normal;font-weight:normal;font-size:187.06776428px;line-height:1.25;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill:#000000;fill-opacity:1;stroke:none;stroke-width:4.67669392;opacity:1"
			   id="text817">
			  <g
				 id="g825"
				 transform="translate(10.731337,24.375865)">
				<path
				   sodipodi:nodetypes="ccccccccccccccccccccccccccccccc"
				   inkscape:connector-curvature="0"
				   id="path819"
				   style="font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:187.06776428px;font-family:ChunkFive;-inkscape-font-specification:'ChunkFive, Normal';font-variant-ligatures:normal;font-variant-caps:normal;font-variant-numeric:normal;font-feature-settings:normal;text-align:start;writing-mode:lr-tb;text-anchor:start;stroke-width:6.62855339"
				   d="m 175.5614,51.999945 v 15.990752 l 0.25983,9.514323 v 41.21871 -5.98471 l 67.17958,-1.3e-4 V 77.50502 H 228.73479 V 39.261551 h 14.26602 V -13.19507 L 144.71625,2.9530288 119.27542,105.66385 93.077792,4.2987033 H -5.2281337 V 39.261551 H 8.5191326 V 158.78568 H -5.4875161 v 34.96283 H 64.805112 V 158.78568 H 50.020315 V 51.999945 h 1.037529 c 8.68774,37.644708 7.390829,33.037208 8.68774,37.644708 L 85.555703,193.74851 H 139.76661 L 167.00177,88.317934 c 1.81567,-6.23369 5.44703,-24.121647 7.52208,-36.317989 z" />
				<path
				   sodipodi:nodetypes="ccscccccccccccc"
				   inkscape:connector-curvature="0"
				   id="path821"
				   style="font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:187.06776428px;font-family:ChunkFive;-inkscape-font-specification:'ChunkFive, Normal';font-variant-ligatures:normal;font-variant-caps:normal;font-variant-numeric:normal;font-feature-settings:normal;text-align:start;writing-mode:lr-tb;text-anchor:start;stroke-width:3.65625286"
				   d="m 243.00081,174.16431 h -7.15366 v -15.39825 c 0,-13.15581 7.29673,-16.59425 20.17331,-16.59425 v -25.8631 c -14.73653,0 -18.45644,5.08292 -22.17633,12.25882 l -4.2922,-9.56787 -53.65901,-2.4e-4 -3.1e-4,19.43471 14.76575,2.4e-4 v 35.72994 l -14.90882,-2.4e-4 v 19.5842 l 67.25127,2.4e-4 z" />
			  </g>
			</g>
		  </g>
		</svg>
		<div class="title-socials-wrap">
			<h1><?php page_title(); ?></h1>
			<div class="socials">
				<a href="<?php echo $social_links['linkedin']; ?>" target="_blank" class="social-link linkedin-link"><i class="fab fa-linkedin"></i></a>
				<a href="<?php echo $social_links['github']; ?>" target="_blank" class="social-link github-link"><i class="fab fa-github"></i></a>
				<a href="<?php echo $social_links['wordpress']; ?>" target="_blank" class="social-link wordpress-link"><i class="fab fa-wordpress"></i></a>
				<a href="<?php echo $social_links['facebook']; ?>" target="_blank" class="social-link facebook-link"><i class="fab fa-facebook"></i></a>
				<a href="<?php echo $social_links['twitter']; ?>" target="_blank" class="social-link twitter-link"><i class="fab fa-twitter"></i></a>
				<a href="<?php echo $social_links['instagram']; ?>" target="_blank" class="social-link instagram-link"><i class="fab fa-instagram"></i></a>
				<a href="<?php echo $social_links['email']; ?>" target="_blank" class="social-link email-link"><i class="fas fa-envelope-square"></i></a>
			</div>
		</div>
	</div>
	<nav id="main-nav" class="navbar navbar-expand-lg">
		<button class="mobile-btn navbar-toggler" type="button" data-toggle="collapse" data-target="#main-lister-nav" aria-controls="main-lister-nav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="hang-a-bur hang-a-bur-top"></span>
			<span class="hang-a-bur hang-a-bur-middle"></span>
			<span class="hang-a-bur hang-a-bur-bottom"></span>
		</button>
		<div class="collapse navbar-collapse" id="main-lister-nav">
			<ul class="nav nav-list navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="#page-header" link-target="page-header">Top</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#portfolio" link-target="portfolio">Portfolio</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#about-me" link-target="about-me">About me</a>
				</li>
			</ul>
		</div>
	</nav>
</header>
<main id="main-content">
	<section class="cta-section">
		<header class="section-header">
			<h1>
				<span>Hello, <br /> I am a web developer Driven, Creative, and <span class="character-bounce">passionate!</span> My name is Rudy Lister</span>
			</h1>
		</header>
		<div class="content-wrap cta-content-wrap">
			<p>
				I have 8 plus years of web development experience
				Primarily working with WordPress, PHP, JS, and CSS
			</p>
			<a href="#portfolio" link-target="portfolio"><button class="btn btn-success">View Portfolio</button></a>
		</div>
	</section>
	<?php
	$arr_browsers = [ 'Opera', 'Edge', 'Chrome', 'Safari', 'Firefox', 'MSIE', 'Trident' ];

	$agent = $_SERVER['HTTP_USER_AGENT'];

	$user_browser = '';
	foreach ( $arr_browsers as $browser ) {
		if ( strpos( $agent, $browser ) !== false ) {
			$user_browser = $browser;
			break;
		} else {
			$user_browser = 'window-maximize';
		}
	}

	switch ( $user_browser ) {
		case 'MSIE':
			$user_browser = 'Internet Explorer';
			break;

		case 'Trident':
			$user_browser = 'Internet Explorer';
			break;

		case 'Edge':
			$user_browser = 'Microsoft Edge';
			break;
	}

	?>
	<section id="portfolio" class="portfolio-section">
		<header class="section-header">
			<h1>
				Portfolio
			</h1>
		</header>
		<div class="content-wrap portfolio-content-wrap">
			<p>
				Here are some of the exciting projects that I worked on over the years. HTML5, PHP, CSS, SASS, and JavaScript/JSON are the languages that were used on these projects. WordPress, Shopify, and Laravel are some of the CMS/Platforms. <br />
				I have also worked with frameworks such as Bootstrap, jQuery, Foundation, and many different JavaScript frameworks. Take a look at some of my projects.
			</p>
			<div class="projects-wrapper">
				<div class="card project-1">
					<a href="https://hitandrunbattingcages.com" target="_blank" class="project-img-link">
						<div class="card-header">
						</div>
					</a>
					<div class="card-body">
						<h6 class="project-title">hitandrunbattingcages.com</h6>
						
						<div class="project-links">
							<a href="https://hitandrunbattingcages.com" target="_blank"><?php echo sprintf( "<i class='fa fa-%s'></i> %s", strtolower( $user_browser ), $user_browser ); ?></a><a href="https://github.com/Wonkasoft/hitandrun/tree/production" target="_blank"><i class="fab fa-github"></i> GITHUB</a>
						</div>
					</div>
				</div>

			<div class="card project-2">
				<a href="<?php echo LISTERSITEURL; ?>/email-markup.html" target="_blank" class="project-img-link">
					<div class="card-header">
					</div>
				</a>
				<div class="card-body">
					<h6 class="project-title">HTML Email</h6>
					<div class="project-links">
						<a href="<?php echo LISTERSITEURL; ?>/email-markup.html" target="_blank"><?php echo sprintf( "<i class='fa fa-%s'></i> %s", strtolower( $user_browser ), $user_browser ); ?></a><a href="https://github.com/Wonkasoft/apera-email-template" target="_blank"><i class="fab fa-github"></i> GITHUB</a>
					</div>
				</div>
			</div>

			<div class="card project-3">
				<a href="https://www.keepcalmhomebuyers.com/" target="_blank" class="project-img-link">
					<div class="card-header">
					</div>
				</a>
				<div class="card-body">
					<h6 class="project-title">keepcalmhomebuyers.com</h6>
					<div class="project-links">
						<a href="https://www.keepcalmhomebuyers.com/" target="_blank"><?php echo sprintf( "<i class='fa fa-%s'></i> %s", strtolower( $user_browser ), $user_browser ); ?></a><a href="https://github.com/Wonkasoft/keepcalm-homebuyers/tree/production" target="_blank"><i class="fab fa-github"></i> GITHUB</a>
					</div>
				</div>
			</div>

			<div class="card project-4">
				<a href="https://www.jethrobodidley.com/" target="_blank" class="project-img-link">
					<div class="card-header">
					</div>
				</a>
				<div class="card-body">
					<h6 class="project-title">jethrobodidley.com</h6>
					<div class="project-links">
						<a href="https://www.jethrobodidley.com/" target="_blank"><?php echo sprintf( "<i class='fa fa-%s'></i> %s", strtolower( $user_browser ), $user_browser ); ?></a><a href="https://github.com/Wonkasoft/JBD" target="_blank"><i class="fab fa-github"></i> GITHUB</a>
					</div>
				</div>
			</div>

			<div class="card project-5">
				<a href="https://aperabags.com/instagram-feeds/" target="_blank" class="project-img-link">
					<div class="card-header">
					</div>
				</a>
				<div class="card-body">
					<h6 class="project-title">Wonkasoft Instafeed WP Plugin</h6>
					<div class="project-links">
						<a href="https://aperabags.com/instagram-feeds/" target="_blank"><?php echo sprintf( "<i class='fa fa-%s'></i> %s", strtolower( $user_browser ), $user_browser ); ?></a><a href="https://github.com/Wonkasoft/wonkasoft-instafeed" target="_blank"><i class="fab fa-github"></i> GITHUB</a>
					</div>
				</div>
			</div>

			<div class="card project-6">
				<a href="https://wonkasoft.com/wp-jam-session/" target="_blank" class="project-img-link">
					<div class="card-header">
					</div>
				</a>
				<div class="card-body">
					<h6 class="project-title">WP Jam Session Plugin</h6>
					<div class="project-links">
						<a href="https://wonkasoft.com/wp-jam-session/" target="_blank"><?php echo sprintf( "<i class='fa fa-%s'></i> %s", strtolower( $user_browser ), $user_browser ); ?></a><a href="https://github.com/Wonkasoft/wp-jam-session" target="_blank"><i class="fab fa-github"></i> GITHUB</a>
					</div>
				</div>
			</div>
		</div>
		</div>
	</section>
	<section id="about-me" class="about-section">
		<header class="section-header">
			<h1>
				About MrLister
			</h1>
		</header>
		<div class="content-wrap about-content-wrap">
			<div class="img-area">
				<img src="assets/images/code-img.png" class="about-me-img" />
			</div>
			<div class="about-bio-area">
				<p>
					It is with great passion that I put my hands into projects. Much of doing development is a constant learning due to the fact that technology is constantly changing and I find much pleasure in continuing to learn as my skills are growing due to pressing through challenging problem solving in creating complex solutions that will provide the user with ease of use in making their work more efficient as well as more productive.
				</p>
			</div>

			<div class="skills">
				<div class="skill php-skill">
					<i class="fab fa-php" data-toggle="tooltip" title="PHP"></i>
				</div>
				<div class="skill html5-skill">
					<i class="fab fa-html5" data-toggle="tooltip" title="HTML5"></i>
				</div>
				<div class="skill css3-skill">
					<i class="fab fa-css3-alt" data-toggle="tooltip" title="CSS3"></i>
				</div>
				<div class="skill js-skill">
					<i class="fab fa-js" data-toggle="tooltip" title="JS"></i>
				</div>
				<div class="skill node-js-skill">
					<i class="fab fa-node-js" data-toggle="tooltip" title="Node JS"></i>
				</div>
				<div class="skill laravel-skill">
					<i class="fab fa-laravel" data-toggle="tooltip" title="Laravel"></i>
				</div>
				<div class="skill sass-skill">
					<i class="fab fa-sass" data-toggle="tooltip" title="SASS"></i>
				</div>
				<div class="skill wordpress-skill">
					<i class="fab fa-wordpress-simple" data-toggle="tooltip" title="WordPress"></i>
				</div>
				<div class="skill gulp-skill">
					<i class="fab fa-gulp" data-toggle="tooltip" title="Gulp"></i>
				</div>
				<div class="skill bootstrap-skill">
					<i class="fab fa-bootstrap" data-toggle="tooltip" title="Bootstrap"></i>
				</div>
				<div class="skill github-skill">
					<i class="fab fa-github" data-toggle="tooltip" title="Github"></i>
				</div>
				<div class="skill adobe-skill">
					<i class="fab fa-adobe" data-toggle="tooltip" title="Adobe CC"></i>
				</div>
			</div>
		</div>
	</section>
</main>

<?php
lister_footer();
