<?php

$smTitle = 'Luxury Hotel Experience';
$title = 'Contact Us';
include('includes/head.php');
include('includes/header.php');

?>


    <main>

    <?php
        include('includes/pageHeroSection.php');
    ?>

        <div class="container margin_120_95">
            <div class="row justify-content-between">
                <div class="col-xl-4 col-lg-5 order-lg-2">
                    <div class="contact_info">
                        <ul class="clearfix">
                            <li>
                                <i class="bi bi-geo-alt"></i>
                                <h4>Address</h4>
                                <div>Khadinmore, Above Smart Bazar, <br>Chinsurah</div>
                            </li>
                            <li>
                                <i class="bi bi-envelope-paper"></i>
                                <h4>Email address</h4>
                                <p><a href="#0">hotelplazachinsurah@gmail.com</a> - <a href="#0">hotelplazachinsurah@gmail.com</a></p>
                            </li>
                            <li>
                                <i class="bi bi-telephone"></i>
                                <h4>Telephone</h4>
                                <div>+91 9147709877<br><small>Monday to Friday 9am - 7pm</small></div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 order-lg-1">
                    <h3 class="mb-3">Get in Touch</h3>
                    <div id="message-contact"></div>
                    <form id="contactform" onsubmit="return sendToWhatsApp()" autocomplete="off">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-floating mb-4">
                                    <input class="form-control" type="text" id="name_contact" name="name_contact" placeholder="Name" required="">
                                    <label for="name_contact">Name</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating mb-4">
                                    <input class="form-control" type="text" id="lastname_contact" name="lastname_contact" placeholder="Last Name">
                                    <label for="lastname_contact">Last name</label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-floating mb-4">
                                    <input class="form-control" type="email" id="email_contact" name="email_contact" placeholder="Email">
                                    <label for="email_contact">Email</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating mb-4">
                                    <input class="form-control" type="text" id="phone_contact" name="phone_contact" placeholder="Telephone">
                                    <label for="phone_contact">Telephone</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-floating mb-4">
                            <textarea class="form-control" placeholder="Message" id="message_contact" name="message_contact"></textarea>
                            <label for="message_contact">Message</label>
                        </div>

                        <p class="mt-3"><input type="submit" value="Send via WhatsApp" class="btn_1 outline"></p>
                    </form>
                </div>
            </div>
            <!-- /row -->
        </div>
      <!-- /container -->

        <div class="map_contact">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d923.4052560666597!2d88.38120399620365!3d22.892006823685108!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjLCsDUzJzMxLjIiTiA4OMKwMjInNTIuMyJF!5e0!3m2!1sen!2sin!4v1710240000000" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
        

    </main>

<?php

include('includes/foot.php');

?>

<script>
    function sendToWhatsApp2new() {
        const name = document.getElementById("name_contact").value.trim();
        const lastname = document.getElementById("lastname_contact").value.trim();
        const email = document.getElementById("email_contact").value.trim();
        const phone = document.getElementById("phone_contact").value.trim();
        const message = document.getElementById("message_contact").value.trim();

        // Simple form validation
        if (!name || !lastname || !email || !phone || !message) {
            alert("Please fill in all fields.");
            return false;
        }

        const fullMessage = `*Contact Form Submission*\n` +
                        `*Name:* ${name} ${lastname}\n` +
                        `*Email:* ${email}\n` +
                        `*Phone:* ${phone}\n` +
                        `*Message:* ${message}`;

        const whatsappNumber = "918961260326"; // Change this to your WhatsApp number
        const whatsappURL = `https://wa.me/${whatsappNumber}?text=${encodeURIComponent(fullMessage)}`;

        window.open(whatsappURL, '_blank');
        return false; // Prevent default form submission
    }
</script>

<!-- You can put your js only for this page.  -->
<script src="assets/js/datepicker_inline.js"></script>
<!-- You can put your js only for this page.  -->
 
