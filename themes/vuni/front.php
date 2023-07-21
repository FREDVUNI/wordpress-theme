<?php

/*
 * Template name: Home!
 */

?>
<!DOCTYPE HTML>
<html>

<head>
    <title>Great theme for WordPress</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
</head>

<body>

    <!-- Header -->
    <header id="header" class="alt">
        <div class="logo"><a href="index.html">Great theme <span>for WordPress</span></a></div>
        <a href="#menu">Menu</a>
    </header>

    <!-- Nav -->
    <nav id="menu">
        <ul class="links">
            <li><a href="index.html">Home</a></li>
            <li><a href="page.html">Sample Page</a></li>
        </ul>
    </nav>

    <!-- Banner -->
    <section class="banner full">
        <article>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slide01.jpg" alt="" />
            <div class="inner">
                <header>
                    <p>A free responsive web site template.</p>
                    <h2>Hielo</h2>
                </header>
            </div>
        </article>
        <article>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slide02.jpg" alt="" />
            <div class="inner">
                <header>
                    <p>Lorem ipsum dolor sit amet nullam feugiat</p>
                    <h2>Magna etiam</h2>
                </header>
            </div>
        </article>
        <article>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slide03.jpg" alt="" />
            <div class="inner">
                <header>
                    <p>Sed cursus aliuam veroeros lorem ipsum nullam</p>
                    <h2>Tempus dolor</h2>
                </header>
            </div>
        </article>
        <article>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slide04.jpg" alt="" />
            <div class="inner">
                <header>
                    <p>Adipiscing lorem ipsum feugiat sed phasellus consequat</p>
                    <h2>Etiam feugiat</h2>
                </header>
            </div>
        </article>
        <article>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slide05.jpg" alt="" />
            <div class="inner">
                <header>
                    <p>Ipsum dolor sed magna veroeros lorem ipsum</p>
                    <h2>Lorem adipiscing</h2>
                </header>
            </div>
        </article>
    </section>

    <!-- One -->
    <section id="one" class="wrapper style2">
        <div class="inner">
            <div class="grid-style">

                <div>
                    <div class="box">
                        <div class="image fit">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/pic02.jpg" alt="" />
                        </div>
                        <div class="content">
                            <header class="align-center">
                                <p>maecenas sapien feugiat ex purus</p>
                                <h2>Lorem ipsum dolor</h2>
                            </header>
                            <p> Cras aliquet urna ut sapien tincidunt, quis malesuada elit facilisis. Vestibulum sit amet tortor velit. Nam elementum nibh a libero pharetra elementum. Maecenas feugiat ex purus, quis volutpat lacus placerat malesuada.</p>
                            <footer class="align-center">
                                <a href="#" class="button alt">Learn More</a>
                            </footer>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="box">
                        <div class="image fit">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/pic03.jpg" alt="" />
                        </div>
                        <div class="content">
                            <header class="align-center">
                                <p>mattis elementum sapien pretium tellus</p>
                                <h2>Vestibulum sit amet</h2>
                            </header>
                            <p> Cras aliquet urna ut sapien tincidunt, quis malesuada elit facilisis. Vestibulum sit amet tortor velit. Nam elementum nibh a libero pharetra elementum. Maecenas feugiat ex purus, quis volutpat lacus placerat malesuada.</p>
                            <footer class="align-center">
                                <a href="#" class="button alt">Learn More</a>
                            </footer>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>




    <!-- Footer -->
    <footer id="footer">
        <div class="copyright">
            &copy; Great Theme. All rights reserved. <script>
                document.write(new Date().getFullYear())
            </script>
        </div>
    </footer>

    <!-- Scripts -->
    <?php wp_footer(); ?>

</body>

</html>