<footer>
   <div class="container">
        <div class="row" style="margin-top: 2rem;">
            <div class="col-md-6 ftr-about-us">
                
                <h3><i class="fa fa-paint-brush" aria-hidden="true"></i> About Us</h3><hr style="margin:0">
                <p><?php echo get_theme_mod('about_us_text') ?></p>
            </div>
            <div class="col-md-3 quicklink">
                
                <h3><i class="fa fa-link" aria-hidden="true"></i> Quick Links</h3><hr style="margin:0">
                <p><a href="#">Our Team</a></p>
                <p><a href="#">Areas Covered</a></p>
                <p><a href="#">Join Us</a></p>
                <p><a href="#">Contact Us</a></p>
                <p><a href="#">Become a Member</a></p>
                <p class="social">
                <a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></i></a>
                <a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-pinterest-square" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </p>
            </div>
            <div class="col-md-3 supporandtos">
                <h3><i class="fa fa-cog fa-spin"></i> Support &amp; ToS</h3><hr style="margin:0">
                <p>
                    <p><a href="#"><i class="fa fa-question" aria-hidden="true"></i> Help &amp; Support</a></p>
                    <p><a href="#"><i class="fa fa-eye" aria-hidden="true"></i> Terms of Service</a></p>
                    <p><a href="#"><i class="fa fa-usd" aria-hidden="true"></i></i> Fees &amp; Charge</a></p>
                    <p><a href="#"><i class="fa fa-address-card" aria-hidden="true"></i> Contact Us</a></p>
                    
                </p>
            </div>
        </div><hr style="margin-bottom: 0px;">
        <p style="text-align: center; "><i class="fa fa-copyright" aria-hidden="true"></i> <?php the_time('Y'); ?> <?php bloginfo('name'); ?>, All rights reserved. </p>
    </div>
</footer><!-- #footer -->


<?php wp_footer(); ?>

</body>
</html>