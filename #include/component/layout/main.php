<!-- Start Banner 
      ============================================= -->
<section class="overflow-hidden banner-area text-light text-default" id="home">
    <div class="overflow-hidden position-absolute w-100" style="z-index: -1;">
        <video id="background-video" autoplay muted loop class="w-100 vh-100 left-0" style="object-fit: cover; transform: scale(1.3); filter: brightness(0.8)">
            <source src="<?= SERVER_NAME ?>assets/img/antara/Bumper web Komersil 2.webm" type="video/webm">
            Your browser does not support the video tag.
        </video>
    </div>


    <div class="animated-wave">
        <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
            <defs>
                <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
            </defs>
            <g class="parallax">
                <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7)" />
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
                    <h2 class="wow fadeInLeft text-center text-lg-start" data-wow-default="300ms">Bersama, Mari Pimpin Masa Depan Digital Indonesia</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Banner -->
<button id="sound-button" onclick="toggleSound()" class="position-fixed rounded-circle" style="bottom: 100px; right: 30px; width: fit-content; z-index: 10; background-color: rgba(0, 0, 0, 0.5); border: 2px solid #fff; padding: 10px 14px; cursor: pointer; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); transition: background-color 0.3s;">
    <span class="fw-bold" style="color: #333;"><?= isset($_COOKIE['mute']) ? '🔇' : '🔊' ?></span>
</button>