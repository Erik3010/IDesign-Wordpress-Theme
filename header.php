<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('title') ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body>

    <header>
        <div class="container">
            <nav>
                <div class="logo">
                    <h1>Logo</h1>
                </div>
                <ul>
                    <li><a href="<?= get_home_url() ?>">Home</a></li>
                    <li><a href="<?= get_home_url() ?>#about">About Us</a></li>
                    <li><a href="<?= get_home_url() ?>/contact-us">Conctact Us</a></li>
                    <li>
                        <div class="hamburger">
                            <div class="h-line"></div>
                            <div class="h-line"></div>
                            <div class="h-line"></div>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="banner" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/banner.jpg)">
        <div class="overlay">
            <h1>Welcome to <span>IDesign</span></h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, inventore.</p>
            <button class="btn">Read more</button>
        </div>
    </div>

    <?php wp_head() ?>