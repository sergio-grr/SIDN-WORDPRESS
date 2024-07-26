<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?></title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/styles.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/section.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/section2.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class="fade-out">
        <div class="container header-container">
            <div class="image-text-container">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/poison-text.png" alt="Poison text" class="img-fluid mt-2 mb-5">
            </div>
            <div class="principal-title">
                <h1 class="buy-poison">Buy poison.</h1>
                <h2 class="trust-us">Trust us.</h2>
            </div>
            <div class="content-row">
                <div class="frame-container">
                    <ul class="frame">
                        <li>
                            <div class="text-box">
                                <p><small>
                                    Your children are safe, why would a company lie to you? We are
                                    your friends, pal. Buy poison today and we grant you total
                                    transparency and full refunds* if you are not satisfied with our
                                    service. We care about you ♥</small>
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="button-container">
                                <div class="rectangule1"></div>
                                <button class="uppercase"><strong>Drink now!</strong></button>
                                <div class="rectangule2"></div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="poison-img-container">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/drink-poison.png" alt="Drink poison" class="img-fluid">
                </div>
            </div>
            <div class="responsibility">
                <h4>
                    *We keep the right to deny any refunds on our own terms. Total
                    <br>
                    responsibility is up to the final user buying poison.
                </h4>
            </div>
        </div>
    </header>
  
    <section id="section1" class="development fade-out">
        <div class="container">
            <div class="section-title">
                <span class="section-number"><strong>0 3  -  0 5</strong></span>
                <h2>Cruelty <br><span class="highlight">Free </span></h2>
                <div class="text-center">
                    <p>Except for the human subjects...</p>
                </div>
            </div>
            <div class="content row justify-content-center position-relative">
                <div class="background-rectangle"></div>
                <div class="col-md-6 text-left">
                    <h3>Look, a cute puppy</h3>
                    <p>Here on POISON we know that cute small animals go viral and get the youth's attention. Take a good look at the dog here and think carefully if you empathize with this company. We are so cool and quirky hehe uwu. Go right now to that form and buy the damn poison already. We are running out of ideas to trick you people into buying our product.</p>
                </div>
                <div class="col-md-6">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/dolphin.png" alt="Cute Puppy" class="img-fluid rounded">
                </div>
            </div>
        </div>
    </section>

    <section id="section2" class="flavours fade-out">
        <div class="container">
            <div class="section-title">
                <span class="section-number2"><strong> 0 2  -  0 5</strong></span>
                <h2>Our <br><span class="highlight">Flavours</span></h2>
            </div>
            <div class="carousel-container">
                <div class="row carousel" id="card-row">
                    <!-- Tarjetas visibles inicialmente -->
                    <div class="col-md-3 mb-4 card-container">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-img-container">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/cards/mushroom.png" alt="Mushroom" class="card-img-top">
                                    <h5 class="card-title">MUSHROOM</h5>
                                </div>
                                <p class="card-text">Dignissim placerat viverra iaculis lacus netus.</p>
                                <a href="#" class="btn">Details →</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4 card-container">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-img-container">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/cards/snake.png" alt="Snake" class="card-img-top">
                                    <h5 class="card-title">SNAKE</h5>
                                </div>
                                <p class="card-text">Sit proin faucibus in enim, amet pretium ac nunc. Ullamcorper molestie ut facilisis sed.</p>
                                <a href="#" class="btn">Details →</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4 card-container">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-img-container">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/cards/weird-frog.png" alt="Weird Frog" class="card-img-top">
                                    <h5 class="card-title">WEIRD FROG</h5>
                                </div>
                                <p class="card-text">Vehicula euismod mauris pharetra aliquam amet, et quam enim viverra.</p>
                                <a href="#" class="btn">Details →</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4 card-container">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-img-container">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/cards/jellyfish.png" alt="Jellyfish" class="card-img-top">
                                    <h5 class="card-title">JELLYFISH</h5>
                                </div>
                                <p class="card-text">Amet lorem metus, in diam.</p>
                                <a href="#" class="btn">Details →</a>
                            </div>
                        </div>
                    </div>
                    <!-- Tarjetas ocultas inicialmente -->
                    <div class="col-md-3 mb-4 card-container hidden">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-img-container">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/cards/spider.png" alt="Spider" class="card-img-top">
                                    <h5 class="card-title">SPIDER</h5>
                                </div>
                                <p class="card-text">Quisque id vel in vel tellus. Arcu orci pharetra ut magna tristique lacus sapien, purus.</p>
                                <a href="#" class="btn">Details →</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4 card-container hidden">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-img-container">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/cards/big-spider.png" alt="Big Spider" class="card-img-top">
                                    <h5 class="card-title">BIG SPIDER</h5>
                                </div>
                                <p class="card-text">Ut felis, in vestibulum fames nunc libero, laoreet neque.</p>
                                <a href="#" class="btn">Details →</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4 card-container hidden">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-img-container">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/cards/scorpion.png" alt="Scorpion" class="card-img-top">
                                    <h5 class="card-title">SCORPION</h5>
                                </div>
                                <p class="card-text">Augue pharetra gravida congue quisque vestibulum dictumst eget leo magna.</p>
                                <a href="#" class="btn">Details →</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4 card-container hidden">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-img-container">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/cards/death-kiss.png" alt="Death Kiss" class="card-img-top">
                                    <h5 class="card-title">DEATH KISS</h5>
                                </div>
                                <p class="card-text">Ut amet lacus fringilla nibh ac non lobortis tempor. Magna turpis nulla quis tempor tellus, ipsum.</p>
                                <a href="#" class="btn">Details →</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4 card-container hidden">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-img-container">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/cards/weird-cult.png" alt="Weird Cult" class="card-img-top">
                                    <h5 class="card-title">WEIRD CULT</h5>
                                </div>
                                <p class="card-text">Et, dictumst convallis nulla nisi fames adipiscing bibendum viverra.</p>
                                <a href="#" class="btn">Details →</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4 card-container hidden">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-img-container">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/cards/some-herb.png" alt="Some Herb" class="card-img-top">
                                    <h5 class="card-title">SOME HERB</h5>
                                </div>
                                <p class="card-text">Sagittis, purus nunc, mattis proin sodales netus venenatis elementum non.</p>
                                <a href="#" class="btn">Details →</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4 card-container hidden">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-img-container">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/cards/lion-bite.png" alt="Lion Bite" class="card-img-top">
                                    <h5 class="card-title">LION BITE</h5>
                                </div>
                                <p class="card-text">Vivamus ut scelerisque eu, risus id varius at turpis. Vitae pellentesque nunc, eu, sed donec integer.</p>
                                <a href="#" class="btn">Details →</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4 card-container hidden">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-img-container">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/cards/rabies.png" alt="Rabies" class="card-img-top">
                                    <h5 class="card-title">RABIES</h5>
                                </div>
                                <p class="card-text">Ut ullamcorper amet, cursus integer nibh felis velit mi.</p>
                                <a href="#" class="btn">Details →</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Botones de dirección para el carrusel -->
                <button class="carousel-control-prev" id="prev-btn">&#10094;</button>
                <button class="carousel-control-next" id="next-btn">&#10095;</button>
            </div>
            <div class="text-center mt-4">
                <button id="load-more-btn" class="btn btn-primary">Load More</button>
                <button id="reset-btn" class="btn btn-secondary" style="display: none;">Reset</button>
            </div>
        </div>
    </section>
     
    <footer>
        <div class="footer-container">
            <div class="logo">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/poison-text.png" alt="Poison text">
            </div>
            <div class="separator"></div>
            <div class="legal-info">Legal notice | Legal information</div>
        </div>
    </footer>

<script src="<?php echo get_stylesheet_directory_uri(); ?>/script.js"></script>
<?php wp_footer(); ?>
</body>
</html>
