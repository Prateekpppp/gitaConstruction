<?php

$smTitle = 'Luxury Hotel Experience';
$title = 'Our Rooms';
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
                      <img src="assets/images/image1.webp" alt="" class="img-fluid rounded-img">
                      <!--<div data-cue="slideInUp" class="img_over"><span data-jarallax-element="-30"><img src="media/img/about/home02.jpg" alt="" class="rounded-img"></span></div>-->
                  </div>
              </div>
              <div class="col-lg-5">
                  <div class="intro">
                      <div class="title">
                          <small><?= $appName ?></small>
                          <h2>Our History</h2>
                      </div>
                      <p class="lead">A Premium Hospitality Experience</p>
                      <p>At <?= $appName ?>, we are dedicated to providing top-notch hospitality with modern amenities and world-class service. Our hotel is designed to cater to both leisure and business travelers, offering a luxurious stay and unmatched convenience.</p>
                      <!--<p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo.</p>-->
                      <p><em>A unit of Gita Construction</em></p>
                  </div>
              </div>
          </div>
          <!-- /Row -->
      </div>
      <!-- /container -->

      <div class="bg_white">
          <div class="container margin_120_95">
              <div>
                  <div class="row justify-content-between">
                      <div class="col-lg-5 fixed_title">
                          <div class="title">
                              <small>Welcome to <?= $appName ?> </small>
                              <h2>A Premium Hospitality Experience</h2>
                              <p>At <?= $appName ?>, we are dedicated to providing top-notch hospitality with modern amenities and world-class service. Our hotel is designed to cater to both leisure and business travelers, offering a luxurious stay and unmatched convenience. </p>
                          </div>
                          <div class="list_ok">
                              <ul>
                                  
                                  
                                  
                                  <li data-cue="slideInUp" data-delay="200">
                                      <h5>Our Vision</h5>
                                      <p>To redefine hospitality in Chinsurah by offering world-class accommodation, fine dining, and exceptional event hosting services.</p>
                                  </li>
                                  <li data-cue="slideInUp" data-delay="300">
                                      <h5>Our Mission</h5>
                                      <p> To provide a comfortable and luxurious stay for our guests To serve delightful and hygienic cuisine at our in-house restaurant To host grand events with seamless arrangements and premium facilities 🌟 Experience comfort, luxury, and elegance – all under one roof! 🌟</p>
                                  </li>
                                  <!--<li data-cue="slideInUp" data-delay="200">-->
                                  <!--    <h5>Local Restaurants</h5>-->
                                  <!--    <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur.</p>-->
                                  <!--</li>-->
                                  <!--<li data-cue="slideInUp" data-delay="300">-->
                                  <!--    <h5>Nature</h5>-->
                                  <!--    <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur.</p>-->
                                  
                                  <li data-cue="slideInUp" data-delay="400">
                                      <h5>Rooms Your Home Away From Home</h5>
                                      <p>Our rooms are designed for luxury and relaxation, featuring modern interiors, high-end furnishings, and world-class amenities. Whether you’re traveling for business or leisure, we have the perfect accommodation for you.</p>
                                  </li>
                              </ul>
                          </div>
                      </div>
                      <div class="col-lg-6 ">
                          <div data-cue="fadeIn" data-delay="500">
                              <figure><img src="assets/images/image3.jpg" alt="" class="img-fluid rounded-img"></figure>
                          </div>
                          <div data-cue="fadeIn" data-delay="500">
                              <figure>
                                  <img src="assets/images/image4.jpg" alt="" class="img-fluid rounded-img">
                              </figure>
                          </div>
                          <div data-cue="fadeIn" data-delay="500">
                              <figure>
                                  <img src="assets/images/image5.jpg" alt="" class="img-fluid rounded-img">
                              </figure>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!-- /container-->
      </div>
      <!-- /bg_white -->


    </main>

<?php

include('includes/foot.php');

?>