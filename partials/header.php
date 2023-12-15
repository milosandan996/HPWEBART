<!DOCTYPE html>
<?php
$curent = $_SERVER['REQUEST_URI'];
$canonicalURL = "https://hp-web-art.rs" . $curent;
?>
<html lang="sr">
    <head>
        <title>
            <?php
            if ($curent == '/index.php' || $curent == '/') {
                echo 'IZRADA SAJTOVA i SEO OPTIMIZACIJA | HP WEB ART';
            } else if ($curent == '/seo-optimizacija.php') {
                echo 'SEO OPTIMIZACIJA WEB SAJTA | HP WEB ART';
            } else if ($curent == '/cena-sajta.php') {
                echo 'CENA IZRADE WEB SAJTA | HP WEB ART';
            } else if ($curent == '/izrada-sajtova-kontakt.php') {
                echo 'KONTAKT ZA CENU WEB SAJTA | HP WEB ART';
            } else {
                echo 'IZRADA SAJTOVA i SEO OPTIMIZACIJA | HP WEB ART';
            }
            ?>
        </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Milos Andan|milos.andan996@gmail.com">
        <meta name="description" content="
        <?php
        if ($curent == '/index.php' || $curent == '/') {
            echo 'Povoljna cena za izradu Web Sajta, SEO optimizacija, responsive dizajn, grafički dizajn, brending i još mnogo toga...';
        } else if ($curent == '/seo-optimizacija.php') {
            echo 'Mi gradimo poverenje kod pretraživača. Svaki izvršeni zadatak ima određenu svrhu koja poboljšava rangiranje vaše veb stranice.';
        } else if ($curent == '/cena-sajta.php') {
            echo 'U cenu sajta uključeni hosting, cPanel i domen. Izuzetno povoljne cene. Pogledajte detaljnu ponudu za izradu sajta.';
        } else if ($curent == '/izrada-sajtova-kontakt.php') {
            echo 'Ako želite da zakoračite u internet poslovanje, da ono postane poznato i da ga Google uvek prikazuje na svojoj PRVOJ strani - javite se da se nama.';
        } else if ($curent == '/blog.php') {
            echo ' Pridružite nam se u otkrivanju sveta Frontenda i pronalaženju novih načina za pisanje što boljeg i stabilnijeg koda';
        }
        ?>
              ">
        <meta name="keywords" content="web sajt, izrada web sajta, cena izrade sajta, koliko kosta sajt, SEO optimizacija, seo optimizacija sajta, blog">

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
        <link rel="apple-touch-icon" href="iosLogo.png">

        <!--Android compatibility-->
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="application-name" content="HP Web Art">
        <link rel="icon" href="androidLogo.png">

        <!--CSS FILES-->
        <link href="css/owl.carousel.css" rel="stylesheet" type="text/css">
        <link href="css/owl.theme.default.css" rel="stylesheet" type="text/css">
        <link href="css/theme.css" rel="stylesheet" type="text/css">


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
                            <img class="logoHeader" src="logo.png" alt="HP Web Art | LOGO">
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
                                <li class="nav-item mb-3 mb-md-0 animation <?php
                                if ($curent == '/index.php' || $curent == '/') {
                                    echo 'active';
                                }
                                ?>" data-animation="slideDown5">
                                    <a class="nav-link underline" href="https://hp-web-art.rs"><strong>Izrada sajta</strong></a>
                                </li>
                                <li class="nav-item ml-md-4 mb-3 mb-md-0 animation <?php
                                if ($curent == '/seo-optimizacija.php') {
                                    echo 'active';
                                }
                                ?>" data-animation="slideDown4">
                                    <a class="nav-link underline" href="https://hp-web-art.rs/seo-optimizacija.php"><strong>SEO Optimizacija sajta</strong></a>
                                </li>
                                <li class="nav-item ml-md-4 mb-3 mb-md-0 animation <?php
                                if ($curent == '/cena-sajta.php') {
                                    echo 'active';
                                }
                                ?>" data-animation="slideDown3">
                                    <a class="nav-link" href="https://hp-web-art.rs/cena-sajta.php"><strong>Cena izrade sajta</strong></a>
                                </li>
                                <li class="nav-item ml-md-4 mb-3 mb-md-0 animation <?php
                                if ($curent == '/izrada-sajtova-kontakt.php') {
                                    echo 'active';
                                }
                                ?>" data-animation="slideDown2">
                                    <a class="nav-link" href="https://hp-web-art.rs/izrada-sajtova-kontakt.php"><strong>Kontakt</strong></a>
                                </li>

                                <li class="nav-item ml-md-4 mb-3 mb-md-0 animation <?php
                                if ($curent == '/blog.php') {
                                    echo 'active';
                                }
                                ?>" data-animation="slideDown">
                                    <a class="nav-link" href="https://hp-web-art.rs/blog.php"><strong>Blog</strong></a>
                                </li>

                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </header>