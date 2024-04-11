<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2>Contact</h2>
            <p class='fontStyle'>Need Help? <span>Contact Us</span></p>
        </div>

        <div class="row gy-4">

            <div class="col-md-6">
                <div class="info-item  d-flex align-items-center">
                    <i class="icon bi bi-map flex-shrink-0"></i>
                    <div>
                        <h3><strong>Our Address</strong></h3>
                        <p>Shop No. 104/105, Silver Complex, Junagadh 362001, Gujarat India.</p>
                    </div>
                </div>
            </div><!-- End Info Item -->

            <div class="col-md-6">
                <div class="info-item d-flex align-items-center">
                    <i class="icon bi bi-envelope flex-shrink-0"></i>
                    <div>
                        <h3><strong>Email Us</strong></h3>
                        <p>contact@ZestyBites.com</p>
                    </div>
                </div>
            </div><!-- End Info Item -->

            <div class="col-md-6">
                <div class="info-item  d-flex align-items-center">
                    <i class="icon bi bi-telephone flex-shrink-0"></i>
                    <div>
                        <h3><strong>Call Us</strong></h3>
                        <p>+91 8200872202</p>
                    </div>
                </div>
            </div><!-- End Info Item -->

            <div class="col-md-6">
                <div class="info-item  d-flex align-items-center">
                    <i class="icon bi bi-clock flex-shrink-0"></i>
                    <div>
                        <h3><strong>Opening Hours</strong></h3>
                        <div>Monday-Sunday: 11AM - 11PM;
                        </div>
                    </div>
                </div>
            </div><!-- End Info Item -->

        </div>

        <form action="contactForm.php" method="post" role="form" class="php-email-form p-3 p-md-4">
            <div class="row">
                <div class="col-xl-6 form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" style="border-radius: 10px;" required>
                </div>
                <div class="col-xl-6 form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" style="border-radius: 10px;" required>
                </div>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" style="border-radius: 10px;" required>
            </div>
            <div class="form-group">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" style="border-radius: 10px;" required></textarea>
            </div>
            <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
        </form><!--End Contact Form -->

    </div>
</section>