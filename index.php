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
      		<video id="video-bg" autoplay loop muted playsinline>
            	<source src="./media/imgAll/video/Sabafa-Video.mp4" type="video/mp4" alt="HTML5 background video">
          	</video>
		    <div class="controls" role="group" aria-label="Video controls">
				<button id="muteBtn" class="control-btn" aria-label="Unmute">
					<i class="fa-solid fa-volume-xmark" aria-hidden="true"></i>
				</button>
				<button id="playPauseBtn" class="control-btn" aria-label="Pause">
					<i class="fa-solid fa-pause" aria-hidden="true"></i>
				</button>
			</div>

		</div>
	</div>
</div>
</section>
<!-- hero-area-end -->

<!-- Common-Product-Items Start -->
<section class="Common-Product-Items-area">
	<div class="container-fluid">
		<div class="row">
			<div class="section-titleAll">
				<h2>New Arrivals</h2>
				<p>A blend of classic silhouettes and our signature shine, embodied by enigmatic sequins.</p>
			</div>
		</div>
		<div class="Common-Product-Items-slider">
			<div class="items">
				<img class="img-fluid" src="<?php echo $sSiteURL; ?>media/imgAll/slider/IMG 240_JPEG_v01_2000x3000.webp" alt="" title="">
				<div class="Common-Product-Items-itemBox">
					<h5>Royal Rhythm Salwar kameez</h5>
					<p>BDT 120,000</p>
				</div>
			</div>
			<div class="items">
				<img class="img-fluid" src="<?php echo $sSiteURL; ?>media/imgAll/slider/IMG 1680_JPEG_v01_1666x2500_1333x2000.webp" alt="" title="">
				<div class="Common-Product-Items-itemBox">
					<h5>Panjabi</h5>
					<p>BDT 55,000</p>
				</div>
			</div>
			<div class="items">
				<img class="img-fluid" src="<?php echo $sSiteURL; ?>media/imgAll/slider/IMG 298_JPEG_v01_2000x3000.jpg" alt="" title="">
				<div class="Common-Product-Items-itemBox">
					<h5>Panjabi</h5>
					<p>BDT 55,000</p>
				</div>
			</div>

			<div class="items">
				<img class="img-fluid" src="<?php echo $sSiteURL; ?>media/imgAll/slider/1lac20_1333x2000.webp" alt="" title="">
				<div class="Common-Product-Items-itemBox">
					<h5>Panjabi</h5>
					<p>BDT 55,000</p>
				</div>
			</div>
			<div class="items">
				<img class="img-fluid" src="<?php echo $sSiteURL; ?>media/imgAll/slider/75km.webp" alt="" title="">
				<div class="Common-Product-Items-itemBox">
					<h5>Panjabi</h5>
					<p>BDT 55,000</p>
				</div>
			</div>
			<div class="items">
				<img class="img-fluid" src="<?php echo $sSiteURL; ?>media/imgAll/slider/IMG 2212_JPEG_v01_1333x2000.webp" alt="" title="">
				<div class="Common-Product-Items-itemBox">
					<h5>Panjabi</h5>
					<p>BDT 55,000</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Common-Product-Items End -->

<!-- Common Section Start -->
<section class="Common-section-area">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="video-containerAll">
					<video id="video-bg" autoplay loop muted playsinline>
						<source src="./media/imgAll/video/8751963-uhd_4096_2160_24fps.mp4" type="video/mp4" alt="HTML5 background video">
					</video>
					<div class="Common-section-contentBox">
						<h3>Womenswear</h3>
						<a href="#" class="btn cm-btn">EXPLORE</a>
					</div>
				</div>
			</div>
		</div>
	</div>

</section>
<!-- Common Section End -->

<!-- Common Section Start -->
<section class="Common-bothImg-section-area">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="Common-bothImg-containerAll">
					<div class="row">
						<div class="col-md-6">
							<div class="Common-bothImg-wrap-box">
								<img class="img-fluid" src="<?php echo $sSiteURL; ?>media/imgAll/slider/IMG 2212_JPEG_v01_1333x2000.webp" alt="" title="">
								<div class="Common-bothImg-section-contentBox">
									<h3>Womenswear</h3>
									<a href="#" class="btn cm-btn">EXPLORE</a>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="Common-bothImg-wrap-box">
								<img class="img-fluid" src="<?php echo $sSiteURL; ?>media/imgAll/slider/IMG 2212_JPEG_v01_1333x2000.webp" alt="" title="">
								<div class="Common-bothImg-section-contentBox">
									<h3>Womenswear</h3>
									<a href="#" class="btn cm-btn">EXPLORE</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</section>
<!-- Common Section End -->

</main>

<?php include_once "common/footer.php"; ?>

<?php echo $sJSjQuery ?>
<?php echo $sJSBootStrap ?>
<?php echo $sPopper ?>
<?php echo $sJSSlick;?>
<?php echo $sJSEMM ?>

<script>
    // Run after DOM ready
    document.addEventListener('DOMContentLoaded', () => {
      const video = document.getElementById('video-bg');
      const playPauseBtn = document.getElementById('playPauseBtn');
      const muteBtn = document.getElementById('muteBtn');
      const status = document.getElementById('status');

      function logStatus(text) {
        console.log('[VIDEO TEST]', text);
        status.textContent = 'Status: ' + text;
      }

      // Sanity checks
      if (!video) {
        console.error('video element not found (id="video-bg")');
        logStatus('ERROR - video element missing');
        return;
      }
      if (!playPauseBtn || !muteBtn) {
        console.error('control buttons not found');
        logStatus('ERROR - control buttons missing');
        return;
      }

      // Update icons based on state
      function updatePlayIcon() {
        const i = playPauseBtn.querySelector('i');
        if (!i) return;
        if (video.paused) {
          i.classList.remove('fa-pause'); i.classList.add('fa-play');
          playPauseBtn.setAttribute('aria-label','Play');
        } else {
          i.classList.remove('fa-play'); i.classList.add('fa-pause');
          playPauseBtn.setAttribute('aria-label','Pause');
        }
      }
      function updateMuteIcon() {
        const i = muteBtn.querySelector('i');
        if (!i) return;
        if (video.muted) {
          i.classList.remove('fa-volume-high'); i.classList.add('fa-volume-xmark');
          muteBtn.setAttribute('aria-label','Unmute');
        } else {
          i.classList.remove('fa-volume-xmark'); i.classList.add('fa-volume-high');
          muteBtn.setAttribute('aria-label','Mute');
        }
      }

      // Initial UI sync
      updatePlayIcon();
      updateMuteIcon();

      // Play/Pause (also support touchstart for mobile immediate feedback)
      function togglePlay() {
        try {
          if (video.paused) {
            const playPromise = video.play();
            if (playPromise !== undefined) {
              playPromise.then(() => {
                logStatus('Playing');
              }).catch(err => {
                console.warn('play() rejected:', err);
                logStatus('Play blocked (check autoplay policy)');
              });
            }
          } else {
            video.pause();
            logStatus('Paused');
          }
        } catch (err) {
          console.error('togglePlay error', err);
        }
        updatePlayIcon();
      }
      playPauseBtn.addEventListener('click', togglePlay);
      playPauseBtn.addEventListener('touchstart', (e) => { e.preventDefault(); togglePlay(); });

      // Mute/unmute
      function toggleMute(e) {
        video.muted = !video.muted;
        updateMuteIcon();
        logStatus(video.muted ? 'Muted' : 'Unmuted');
      }
      muteBtn.addEventListener('click', toggleMute);
      muteBtn.addEventListener('touchstart', (e) => { e.preventDefault(); toggleMute(); });

      // Keep UI in sync if other scripts change video
      video.addEventListener('play', updatePlayIcon);
      video.addEventListener('pause', updatePlayIcon);
      video.addEventListener('volumechange', updateMuteIcon);
      video.addEventListener('error', (e) => {
        console.error('Video error event', e);
        logStatus('Video error (see console)');
      });
    });
  </script>
</body>

</html>