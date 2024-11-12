<!-- Start Banner 
      ============================================= -->
<section class="overflow-hidden banner-area text-light text-default" id="home">
    <div style="position: absolute; width: 100%; height: 100%; overflow: hidden; z-index: -1;">
        <video id="background-video" autoplay muted loop style="width: 100%; height: 100%; object-fit: cover; left: 0; transform: scale(1.3); filter: brightness(0.8)">
            <source src="<?= SERVER_NAME ?>assets/img/antara/Bumper web Komersil 2.mp4" type="video/mp4" media="screen and (min-width:768px)">
            <source src="<?= SERVER_NAME ?>assets/img/antara/Bumper web Komersil 2.mp4" type="video/mp4">
            <track label="English" kind="captions" srclang="en" src="resources/myvideo-en.vtt" default>
            Your browser does not support the video tag.
        </video>
    </div>


    <div class="animated-wave">
        <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
            <defs>
                <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
            </defs>
            <g class="parallax">
                <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
                <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
                <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
                <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
            </g>
        </svg>

    </div>

    <div class="container">
        <div class="double-items" style="min-height: 75vh; align-content: space-evenly;">
            <div class="row align-center">
                <div class="col-lg-6 info">
                    <h2 class="wow fadeInLeft" data-wow-defaul="300ms" style="text-align: left;">Bersama, Mari Pimpin Masa Depan Digital Indonesia</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Banner -->
<button id="sound-button" onclick="toggleSound()" style="position: fixed; bottom: 100px; right: 30px; width: fit-content; z-index: 10; background-color: rgba(0, 0, 0, 0.5); border: 2px solid #fff; border-radius: 100%; padding: 10px 14px; cursor: pointer; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); transition: background-color 0.3s;">
    <span style="font-weight: bold; color: #333;"><?= isset($_COOKIE['mute']) ? '🔇' : '🔊' ?></span>
</button>