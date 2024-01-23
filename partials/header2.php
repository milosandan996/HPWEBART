<!DOCTYPE html>
<?php
$curent = $_SERVER['REQUEST_URI'];
$canonicalURL = "https://hp-web-art.rs" . $curent;
?>
<html lang="sr">
    <head>
        <title>
            <?php
            if ($post !== null) {
                echo $post['title'] . ' | HP WEB ART'; // Dodajte željeni dodatak na kraj naslova
            } else if ($curent == '/blog.php') {
                echo 'UPLOVITE U SVET FRONTENDA: SAVETI, TRIKOVI i NOVOSTI';
            } else if ($curent == '/blog.php?page=1' || $curent == '/blog.php?page=2' || $curent == '/blog.php?page=3' || $curent == '/blog.php?page=4' || $curent == '/blog.php?page=5' || $curent == '/blog.php?page=6' || $curent == '/blog.php?page=7' || $curent == '/blog.php?page=8' || $curent == '/blog.php?page=9' || $curent == '/blog.php?page=10' || $curent == '/blog.php?page=11' || $curent == '/blog.php?page=12' || $curent == '/blog.php?page=13' || $curent == '/blog.php?page=14') {
                echo 'HP WEB ART | Saveti, Trendovi i vodiči za efikasan dizajn i razvoj sajtova';
            }
            ?>
        </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Milos Andan|milos.andan996@gmail.com">
        <meta name="description" content="Saveti, vodiči i najnovije informacije o izradi web stranica. Naučite korake za uspešan dizajn, programiranje i optimizaciju web stranica. Saznajte kako poboljšati korisničko iskustvo i postići visoke rezultate na pretraživačima.">
        <meta name="keywords" content="web sajt, izrada web sajta, cena izrade sajta, koliko kosta sajt, SEO optimizacija, seo optimizacija sajta, blog">
        <meta property="og:title" content="IZRADA SAJTOVA i SEO OPTIMIZACIJA | HP WEB ART" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="https://hp-web-art.rs" />
        <meta property="og:description" content="Povoljna cena za izradu Web Sajta, SEO optimizacija, responsive dizajn, grafički dizajn, brending i još mnogo toga..." />
        <meta property="og:site_name" content="HP Web Art" />
        <meta property="og:locale" content="sr_RS" />
        
        <?php
        if ($curent == '/index.php' || $curent == 'http://hp-web-art.rs/index.php' || $curent == 'https://hp-web-art.rs/index.php' || $curent == 'http://www.hp-web-art.rs/' || $curent == 'https://www.hp-web-art.rs/') {
            echo '<link rel="canonical" href="https://hp-web-art.rs">';
        } else {
            echo '<link rel="canonical" href="' . $canonicalURL . '">';
        }
        ?>


        <!--ios compatibility-->
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-title" content="HP Web Art">
        <link rel="apple-touch-icon" href="https://hp-web-art.rs/iosLogo.png">

        <!--Android compatibility-->
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="application-name" content="HP Web Art">
        <link rel="icon" href="https://hp-web-art.rs/androidLogo.png">

        <!--CSS FILES-->
        <link href="https://hp-web-art.rs/css/owl.carousel.css" rel="stylesheet" type="text/css">
        <link href="https://hp-web-art.rs/css/owl.theme.default.css" rel="stylesheet" type="text/css">
        <link href="https://hp-web-art.rs/css/theme.css" rel="stylesheet" type="text/css">


        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=AW-11363263512">
        </script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'AW-11363263512');
        </script>
    </head>
    <body>
        <header>
            <div id="top">
                <div class="container">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand"  href="https://hp-web-art.rs">
                            <img class="logoHeader" src="https://hp-web-art.rs/logo.png" alt="HP Web Art | LOGO">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#main-nav" aria-controls="main-nav" 
                                aria-expanded="false" aria-label="Toggle navigation">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                        <div class="collapse navbar-collapse text-center" id="main-nav">
                            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                                <li class="nav-item mb-3 mb-md-0 animation" data-animation="slideDown5">
                                    <a class="nav-link underline" href="https://hp-web-art.rs"><strong>Izrada sajta</strong></a>
                                </li>
                                <li class="nav-item ml-md-4 mb-3 mb-md-0 animation" data-animation="slideDown4">
                                    <a class="nav-link underline" href="https://hp-web-art.rs/seo-optimizacija.php"><strong>SEO Optimizacija sajta</strong></a>
                                </li>
                                <li class="nav-item ml-md-4 mb-3 mb-md-0 animation" data-animation="slideDown3">
                                    <a class="nav-link" href="https://hp-web-art.rs/cena-sajta.php"><strong>Cena izrade sajta</strong></a>
                                </li>
                                <li class="nav-item ml-md-4 mb-3 mb-md-0 animation" data-animation="slideDown2">
                                    <a class="nav-link" href="https://hp-web-art.rs/izrada-sajtova-kontakt.php"><strong>Kontakt</strong></a>
                                </li>

                                <li class="nav-item ml-md-4 mb-3 mb-md-0 animation active" data-animation="slideDown">
                                    <a class="nav-link" href="https://hp-web-art.rs/blog.php"><strong>Blog</strong></a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </header>