<?php
/**
 * header template.
 */

defined( 'LISTERPATH' ) || exit;

?>
<!DOCTYPE html>
<html>
<head>
	
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title><?php page_title(); ?></title>
	<link rel="shortcut icon" type="image/png" href="<?php echo LISTERSITEURL; ?>favicon.png"/>
	<?php load_head(); ?>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-155739403-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-155739403-1');
	</script>

</head>
<body>
	<div id="page-wrap">
