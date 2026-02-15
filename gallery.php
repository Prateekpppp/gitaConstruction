<?php

$smTitle = 'Luxury Hotel Experience';
$title = 'Image Gallery';
include('includes/head.php');
include('includes/header.php');

?>


    <main>

    <?php
        include('includes/pageHeroSection.php');
    ?>

      <div class="container margin_120_95">
            <div class="isotope-wrapper">
                <div class="row justify-content-center">
                    <div class="item col-xl-4 col-lg-6 col-mb-6 mb-4">
                        <div class="item-img" data-cue="slideInUp">
                            <img src="assets/images/image3.jpg" alt="">
                            <div class="content">
                                <a data-fslightbox="gallery_1" data-type="image" href="assets/images/image3.jpg"><i class="bi bi-arrows-angle-expand"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item col-xl-4 col-lg-6 col-mb-6 mb-4">
                        <div class="item-img" data-cue="slideInUp">
                            <img src="assets/images/image4.jpg" alt="">
                            <div class="content">
                                <a data-fslightbox="gallery_1" data-type="image" href="assets/images/image4.jpg"><i class="bi bi-arrows-angle-expand"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item col-xl-4 col-lg-6 col-mb-6 mb-4">
                        <div class="item-img" data-cue="slideInUp">
                            <img src="assets/images/image5.jpg" alt="">
                            <div class="content">
                                <a data-fslightbox="gallery_1" data-type="image" href="assets/images/image5.jpg"><i class="bi bi-arrows-angle-expand"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/row -->
            </div>
      </div>
      <!-- /container -->



    </main>

<?php

include('includes/foot.php');

?>