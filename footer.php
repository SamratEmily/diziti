<!-- Footer -->
<footer class="dz-footer" id="contact">
    <div class="dz-container">
        <div class="dz-footer-grid">
            <!-- About Column -->
            <div class="dz-footer-about">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="dz-logo">Dizi<span>ti</span></a>
                <p>We craft data-driven digital strategies that transform brands and accelerate growth. From SEO to full-stack marketing — we deliver measurable results.</p>
                <div class="dz-footer-social">
                    <a href="#" aria-label="Twitter"><i class="fab fa-x-twitter"></i></a>
                    <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" aria-label="Dribbble"><i class="fab fa-dribbble"></i></a>
                    <a href="#" aria-label="GitHub"><i class="fab fa-github"></i></a>
                </div>
            </div>

            <!-- Services Column -->
            <div>
                <h4>Services</h4>
                <ul class="dz-footer-links">
                    <li><a href="#">SEO Optimization</a></li>
                    <li><a href="#">Content Strategy</a></li>
                    <li><a href="#">PPC Management</a></li>
                    <li><a href="#">Web Development</a></li>
                    <li><a href="#">Brand Strategy</a></li>
                </ul>
            </div>

            <!-- Company Column -->
            <div>
                <h4>Company</h4>
                <ul class="dz-footer-links">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Case Studies</a></li>
                    <li><a href="#">Careers</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>

            <!-- Contact Column -->
            <div>
                <h4>Contact</h4>
                <ul class="dz-footer-links">
                    <li><a href="mailto:hello@diziti.com"><i class="fas fa-envelope" style="margin-right:8px;color:var(--dz-primary);"></i>hello@diziti.com</a></li>
                    <li><a href="tel:+1234567890"><i class="fas fa-phone" style="margin-right:8px;color:var(--dz-primary);"></i>+1 (234) 567-890</a></li>
                    <li><a href="#"><i class="fas fa-map-marker-alt" style="margin-right:8px;color:var(--dz-primary);"></i>San Francisco, CA</a></li>
                </ul>
            </div>
        </div>

        <div class="dz-footer-bottom">
            &copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>. All rights reserved. Crafted with <i class="fas fa-heart" style="color:var(--dz-primary);"></i> by Diziti.
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
