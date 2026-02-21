
<footer class="revealed">
        <div class="footer_bg">
            <div class="gradient_over"></div>
            <div class="background-image" data-background="url(media/img/rooms/3.jpg)"></div>
        </div>
        <div class="container">
            <div class="row move_content">
                <div class="col-lg-4 col-md-12">
                    <h5>Contacts</h5>
                    <ul>
                        <li><?= $address ?></li>
                        <li><strong><a href="mailto:<?= $email ?>"><?= $email ?></a></strong></li>
                        <li><strong><a href="tel:+91<?= $whatsapp ?>">+91  <?= $whatsapp ?></a></strong></li>
                    </ul>
                    <div class="social">
                        <ul>
                            <li><a href="https://www.instagram.com/hotel_plaza_and_restaurant" target="_blank"><i class="bi bi-instagram"></i></a></li>
                            <li><a href="https://wa.me/+91<?= $whatsapp ?>" target="_blank"><i class="bi bi-whatsapp"></i></a></li>
                            <!--<li><a href="#0"><i class="bi bi-facebook"></i></a></li>-->
                            <!--<li><a href="#0"><i class="bi bi-twitter-x"></i></a></li>-->
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 ms-lg-auto">
                    <h5>Explore</h5>
                    <div class="footer_links">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="about.php">About Us</a></li>
                            <li><a href="room.php">Rooms</a></li>
                            <!-- <li><a href="news-1">News & Events</a></li> -->
                            <li><a href="contacts.php">Contacts</a></li>
                            <li><a href="about.php">Terms and Conditions</a></li>
                            <li><strong><a href="tel:+919147709879">Enquiry</a></strong></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <!-- <div id="newsletter">
                        <h5>Newsletter</h5>
                        <div id="message-newsletter"></div>
                        <form method="post" action="phpmailer/newsletter_template_email" name="newsletter_form" id="newsletter_form">
                            <div class="form-group">
                                <input type="email" name="email_newsletter" id="email_newsletter" class="form-control" placeholder="Your email">
                                <button type="submit" id="submit-newsletter"><i class="bi bi-send"></i></button>
                            </div>
                        </form>
                        <p>Receive latest offers and promos without spam. You can cancel anytime.</p>
                    </div> -->
                </div>
            </div>
            <!--/row-->
        </div>
        <!--/container-->
        <div class="copy">
            <div class="container">
                © <?= $appName ?> - by <a href="#">Gita Construction</a>
            </div>
        </div>
    </footer>
    <!-- /footer -->

    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewbox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
        </svg>
    </div>
    <!-- /back to top -->

<!-- COMMON SCRIPTS -->
<script src="assets/js/common_scripts.js"></script>
<script src="assets/js/common_functions.js"></script>
<script src="assets/js/validate.js"></script>

<!-- Event snippet for <?= $appName ?> Call conversion page
In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
<script>
function gtag_report_conversion(url) {
  var callback = function () {
    if (typeof(url) != 'undefined') {
        //   window.location = url;
        window.open(url, '_blank');
    }
  };
//   gtag('event', 'conversion', {
//       'send_to': 'AW-10837975799/sRQCCNmnqP8aEPfF-a8o',
//       'value': 20.0,
//       'currency': 'INR',
//       'event_callback': callback
//   });
  return false;
}
</script>
<!-- You can put your js only for this page.  -->
<script src="assets/js/datepicker_search.js"></script>
<script src="assets/js/datepicker_inline.js"></script>
<!-- You can put your js only for this page.  -->


</body></html>