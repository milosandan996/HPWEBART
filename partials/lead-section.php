<section id="section-lead">
    <div class="header" style="background-image: linear-gradient(to right, rgba(0,0,0,0.7),rgba(0,0,0,0.7)), url(images/<?php
    if ($curent == '/index.php' || $curent == '/') {
        echo 'izrada-sajta-cenovnik.webp';
    } else if ($curent == '/seo-optimizacija.php') {
        echo 'seo-izrada-web-sajta.webp';
    } else if ($curent == '/cena-sajta.php') {
        echo 'seo-optimizacija-cena.webp';
    } else if ($curent == '/izrada-sajtova-kontakt.php') {
        echo 'izrada-sajtova-kontakt-cena.webp';
    } else if ($curent == '/blog.php' || $curent == '/blog.php?page=1' || $curent == '/blog.php?page=2' || $curent == '/blog.php?page=3' || $curent == '/blog.php?page=4' || $curent == '/blog.php?page=5' || $curent == '/blog.php?page=6' || $curent == '/blog.php?page=7' || $curent == '/blog.php?page=8' || $curent == '/blog.php?page=9' || $curent == '/blog.php?page=10' || $curent == '/blog.php?page=11' || $curent == '/blog.php?page=12' || $curent == '/blog.php?page=13' || $curent == '/blog.php?page=14') {
        echo 'blog-hp-web-art.webp';
    } else {
        echo 'izrada-sajta-cenovnik.webp';
    }
    ?>)">


        <!--Content before waves-->
        <div class="animation text-center" data-animation="zoom">
            <div class="inner-header flex">
                <h1>
                    <?php
                    if ($curent == '/index.php' || $curent == '/') {
                        echo 'IZRADA WEB SAJTOVA';
                    } else if ($curent == '/seo-optimizacija.php') {
                        echo 'ŠTA JE SEO?';
                    } else if ($curent == '/cena-sajta.php') {
                        echo 'IDEALNA CENA ZA VAŠ SAJT?';
                    } else if ($curent == '/izrada-sajtova-kontakt.php') {
                        echo 'KAKO DO NAS?';
                    } else if ($curent == '/blog.php' || $curent == '/blog.php?page=1' || $curent == '/blog.php?page=2' || $curent == '/blog.php?page=3' || $curent == '/blog.php?page=4' || $curent == '/blog.php?page=5' || $curent == '/blog.php?page=6' || $curent == '/blog.php?page=7' || $curent == '/blog.php?page=8' || $curent == '/blog.php?page=9' || $curent == '/blog.php?page=10' || $curent == '/blog.php?page=11' || $curent == '/blog.php?page=12' || $curent == '/blog.php?page=13' || $curent == '/blog.php?page=14') {
                        echo 'BLOG';
                    }else{
                        echo 'IZRADA WEB SAJTOVA';
                    }
                    ?>
                </h1>
            </div>
            <h3>HP WEB ART | PROFESIONALNO, ODGOVORNO</h3>
        </div>

        <!--Waves Container-->

        <div>
            <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                 viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
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
        <!--Waves end-->

    </div>
    <!--Header ends-->

    <!--Content starts-->

</section>