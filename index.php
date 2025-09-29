<?php include_once "common/config.php"; ?>
<!doctype html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
<title><?php echo $sSiteTitle; ?></title>

<meta name="description" content="<?php echo $sSiteTitle; ?>">
<meta name="keywords" content="<?php echo $sSiteTitle; ?>">

<meta name="author" content="<?php echo $sAuthor; ?>">
<meta name="Developer" content="<?php echo $sDeveloper; ?>">
<meta name="resource-type" content="document">
<meta name="contact" content="<?php echo $sEmail; ?>">
<meta name="copyright" content="Copyright (c) <?php echo gmdate("Y"); ?>. All Rights &reg; Reserved by <?php echo $sSiteURL; ?>.">

<meta name="robots" content="index, follow">
<meta name="googlebot" content="index, follow">
<meta name="googlebot-news" content="index, follow">
<meta name="msnbot" content="index, follow">

<meta property="fb:app_id" content="<?php echo $sAppId; ?>">
<meta property="og:site_name" content="<?php echo $sSiteName; ?>">

<meta property="og:url" content="<?php echo $sSiteURL; ?>">
<meta property="og:type" content="article">
<meta property="og:image" content="<?php echo $sLogoURLfb; ?>">
<meta property="og:locale" content="en_US">

<link rel="image_src" href="<?php echo $sLogoURLfb; ?>">
<link rel="canonical" href="<?php echo $sSiteURL; ?>">

<link type="image/x-icon" rel="shortcut icon" href="<?php echo $sFavicon; ?>">
<link type="image/x-icon" rel="icon" href="<?php echo $sFavicon; ?>">

<?php
echo $sCSSBootStrap;
echo $sCSSFontAwesome;
echo $sCSSGoogleFont;
echo $sCSSSFancybox;
echo $sCSSAnimate;
echo $sCSSSlick;
echo $sCSSSlickTheme;
echo $sCSSEMM;
?>

</head>

<body>

<?php echo $sFbRoot; ?>

<?php include_once "common/header.php"; ?>

<!-- Back to top button -->
<a id="button"><i class="fa-solid fa-arrow-turn-up"></i></a>

<main>
<!-- hero-area-start -->
<section class="hero-area">
<div class="overly"></div>
<div class="container-fluid">
<div class="row">
	<div class="col-lg-12">
		<div class="video-container">
      		<video autoplay loop muted class="video-bg w-100" id="video-bg">
            <source src="./media/imgAll/video/Sabafa-Video.mp4" type="video/mp4" alt="HTML5 background video">
          	</video>
			<div class="playpause-area">
				<button id='toggle' class="fas fa-pause"></button>
			</div>
		</div>
	</div>
</div>
</section>
<!-- hero-area-end -->



</main>

<?php include_once "common/footer.php"; ?>

<?php echo $sJSjQuery ?>
<?php echo $sJSBootStrap ?>
<?php echo $sPopper ?>
<?php echo $sJSSlick;?>
<?php echo $sJSEMM ?>
</body>

</html>