<?php

$smTitle = 'Elegant Event Space';
$title = 'Banquet Hall';
include('includes/head.php');
include('includes/header.php');

?>


    <main>

    <?php
        include('includes/pageHeroSection.php');
    ?>

      <div class="container margin_120_95">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-5">
                <div class="parallax_wrapper inverted">
                <img loading="lazy" src="assets/images/image1.webp" alt="Banquet Interior" class="img-fluid rounded-img">
                <div data-cue="slideInUp" class="img_over">
                    <span data-jarallax-element="-30">
                    <!-- <img loading="lazy" src="img/banquet_2.jpg" alt="Event Setup" class="rounded-img"> -->
                    </span>
                </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="intro">
                <div class="title">
                    <small>Banquet Hall</small>
                    <h2>Chinsurah's Biye Bari</h2>
                </div>
                <p class="lead">Luxury & Elegance Under One Roof</p>
                <p>Our banquet hall at <?= $appName ?> offers the perfect venue for your special events—be it weddings, receptions, corporate meetings, or parties. With elegant decor, spacious layout, and modern amenities, your event will be unforgettable.</p>
                <p><em>Experience grandeur at <?= $appName ?> Banquets</em></p>
                </div>
            </div>
        </div>
      </div>
      <!-- /container -->

    <?php
        include('includes/whyChooseUs.php');
    ?>



    </main>

<?php

include('includes/foot.php');

?>