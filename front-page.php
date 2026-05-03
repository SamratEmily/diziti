<?php
/**
 * Template Name: Diziti Front Page
 *
 * The front page template for the Diziti theme.
 *
 * @package Diziti
 */

get_header();
?>

<!-- Floating Particles (decorative) -->
<div class="dz-particles" aria-hidden="true">
    <?php for ( $i = 0; $i < 20; $i++ ) : ?>
        <div class="dz-particle" style="
            left: <?php echo rand(5, 95); ?>%;
            animation-duration: <?php echo rand(8, 18); ?>s;
            animation-delay: <?php echo rand(0, 10); ?>s;
            width: <?php echo rand(2, 5); ?>px;
            height: <?php echo rand(2, 5); ?>px;
        "></div>
    <?php endfor; ?>
</div>

<!-- ===========================
     HERO SECTION
     =========================== -->
<section class="dz-hero" id="hero">
    <div class="dz-container">
        <div class="dz-hero-grid">
            <!-- Left: Content -->
            <div class="dz-hero-content dz-reveal">
                <div class="dz-hero-badge">
                    <i class="fas fa-circle"></i>
                    #1 Digital Marketing Agency
                </div>
                <h1>We Build <span class="highlight">Digital Strategies</span> That Drive Growth</h1>
                <p class="dz-hero-desc">
                    Transform your online presence with data-driven SEO, cutting-edge web development, and performance marketing that delivers real, measurable results.
                </p>
                <div class="dz-hero-actions">
                    <a href="#contact" class="dz-btn dz-btn-primary">
                        Start Your Project <i class="fas fa-arrow-right"></i>
                    </a>
                    <a href="#portfolio" class="dz-btn dz-btn-outline" style="border-color:rgba(255,255,255,.2);color:#fff;">
                        <i class="fas fa-play-circle"></i> View Our Work
                    </a>
                </div>
                <div class="dz-hero-stats">
                    <div class="dz-hero-stat">
                        <h3>250<span>+</span></h3>
                        <p>Projects Delivered</p>
                    </div>
                    <div class="dz-hero-stat">
                        <h3>98<span>%</span></h3>
                        <p>Client Satisfaction</p>
                    </div>
                    <div class="dz-hero-stat">
                        <h3>15<span>+</span></h3>
                        <p>Years Experience</p>
                    </div>
                </div>
            </div>

            <!-- Right: Visual -->
            <div class="dz-hero-visual dz-reveal" style="animation-delay:.2s;">
                <img src="<?php echo esc_url( DIZITI_URI . '/assets/images/hero-illustration.png' ); ?>"
                     alt="<?php esc_attr_e( 'Digital marketing strategy illustration', 'diziti' ); ?>"
                     width="540" height="540"
                     loading="eager" />
            </div>
        </div>
    </div>
</section>

<!-- ===========================
     SERVICES SECTION
     =========================== -->
<section class="dz-section dz-section-dark" id="services">
    <div class="dz-container">
        <div class="dz-section-header dz-reveal">
            <span class="dz-badge"><i class="fas fa-layer-group"></i> Our Services</span>
            <h2>Digital Solutions That Accelerate Your Business</h2>
            <p>We combine strategy, creativity, and technology to deliver comprehensive digital marketing solutions tailored to your goals.</p>
        </div>

        <div class="dz-services-grid">
            <!-- Service 1 -->
            <div class="dz-service-card dz-reveal">
                <div class="dz-service-icon"><i class="fas fa-search"></i></div>
                <h3>SEO Optimization</h3>
                <p>Dominate search rankings with our data-driven SEO strategies. We optimize every aspect — from technical audits to content and link building.</p>
                <a href="#" class="dz-service-link">Learn More <i class="fas fa-arrow-right"></i></a>
            </div>

            <!-- Service 2 -->
            <div class="dz-service-card dz-reveal">
                <div class="dz-service-icon"><i class="fas fa-bullhorn"></i></div>
                <h3>PPC Advertising</h3>
                <p>Maximize ROI with precision-targeted paid campaigns across Google, Meta, and LinkedIn. Every dollar works harder with our optimization.</p>
                <a href="#" class="dz-service-link">Learn More <i class="fas fa-arrow-right"></i></a>
            </div>

            <!-- Service 3 -->
            <div class="dz-service-card dz-reveal">
                <div class="dz-service-icon"><i class="fas fa-pen-nib"></i></div>
                <h3>Content Strategy</h3>
                <p>Engage your audience with compelling content that converts. We craft blog posts, videos, and social content backed by keyword research.</p>
                <a href="#" class="dz-service-link">Learn More <i class="fas fa-arrow-right"></i></a>
            </div>

            <!-- Service 4 -->
            <div class="dz-service-card dz-reveal">
                <div class="dz-service-icon"><i class="fas fa-code"></i></div>
                <h3>Web Development</h3>
                <p>Lightning-fast, responsive websites built for conversion. Modern tech stacks, CMS integrations, and performance-first architecture.</p>
                <a href="#" class="dz-service-link">Learn More <i class="fas fa-arrow-right"></i></a>
            </div>

            <!-- Service 5 -->
            <div class="dz-service-card dz-reveal">
                <div class="dz-service-icon"><i class="fas fa-chart-line"></i></div>
                <h3>Analytics & Insights</h3>
                <p>Turn data into actionable intelligence. We set up comprehensive tracking, dashboards, and reporting to measure what matters.</p>
                <a href="#" class="dz-service-link">Learn More <i class="fas fa-arrow-right"></i></a>
            </div>

            <!-- Service 6 -->
            <div class="dz-service-card dz-reveal">
                <div class="dz-service-icon"><i class="fas fa-palette"></i></div>
                <h3>Brand Identity</h3>
                <p>Build a brand that resonates. From logo design to complete visual systems, we create identities that stand out in crowded markets.</p>
                <a href="#" class="dz-service-link">Learn More <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
</section>

<!-- ===========================
     STATS BAR
     =========================== -->
<section class="dz-stats-bar">
    <div class="dz-container">
        <div class="dz-stats-grid">
            <div class="dz-stat-item dz-reveal">
                <h3 data-count="500">0+</h3>
                <p>Clients Worldwide</p>
            </div>
            <div class="dz-stat-item dz-reveal">
                <h3 data-count="1200">0+</h3>
                <p>Projects Completed</p>
            </div>
            <div class="dz-stat-item dz-reveal">
                <h3 data-count="50">0+</h3>
                <p>Team Members</p>
            </div>
            <div class="dz-stat-item dz-reveal">
                <h3 data-count="15">0+</h3>
                <p>Industry Awards</p>
            </div>
        </div>
    </div>
</section>

<!-- ===========================
     CASE STUDIES / PORTFOLIO
     =========================== -->
<section class="dz-section" id="portfolio" style="background:#f8fafc;">
    <div class="dz-container">
        <div class="dz-section-header dz-reveal">
            <span class="dz-badge"><i class="fas fa-briefcase"></i> Case Studies</span>
            <h2>Our Latest Success Stories</h2>
            <p>Explore how we've helped brands across industries achieve transformative digital growth with measurable results.</p>
        </div>

        <div class="dz-masonry dz-reveal">
            <!-- Case Study 1 -->
            <div class="dz-case-card">
                <img src="<?php echo esc_url( DIZITI_URI . '/assets/images/case-study-1.png' ); ?>"
                     alt="E-Commerce SEO case study" width="600" height="600" loading="lazy" />
                <div class="dz-case-overlay">
                    <span class="dz-case-tag">E-Commerce</span>
                    <h3>Luxury Brands Platform</h3>
                    <p>+340% organic traffic growth in 8 months through technical SEO and content strategy.</p>
                </div>
            </div>

            <!-- Case Study 2 -->
            <div class="dz-case-card">
                <img src="<?php echo esc_url( DIZITI_URI . '/assets/images/case-study-2.png' ); ?>"
                     alt="SaaS analytics dashboard case study" width="600" height="600" loading="lazy" />
                <div class="dz-case-overlay">
                    <span class="dz-case-tag">SaaS</span>
                    <h3>Analytics Dashboard Redesign</h3>
                    <p>Redesigned UX resulted in 52% increase in user engagement and 28% lower churn.</p>
                </div>
            </div>

            <!-- Case Study 3 -->
            <div class="dz-case-card">
                <img src="<?php echo esc_url( DIZITI_URI . '/assets/images/case-study-3.png' ); ?>"
                     alt="Fintech mobile app case study" width="600" height="600" loading="lazy" />
                <div class="dz-case-overlay">
                    <span class="dz-case-tag">FinTech</span>
                    <h3>FinVest Mobile App</h3>
                    <p>Full-stack development and go-to-market strategy. 100k+ downloads in first quarter.</p>
                </div>
            </div>

            <!-- Case Study 4 -->
            <div class="dz-case-card">
                <img src="<?php echo esc_url( DIZITI_URI . '/assets/images/case-study-4.png' ); ?>"
                     alt="Healthcare website redesign case study" width="600" height="600" loading="lazy" />
                <div class="dz-case-overlay">
                    <span class="dz-case-tag">Healthcare</span>
                    <h3>MediCare Plus Redesign</h3>
                    <p>Responsive redesign led to 180% increase in appointment bookings and improved accessibility.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===========================
     TESTIMONIALS
     =========================== -->
<section class="dz-section" id="testimonials">
    <div class="dz-container">
        <div class="dz-section-header dz-reveal">
            <span class="dz-badge"><i class="fas fa-quote-left"></i> Testimonials</span>
            <h2>What Our Clients Say</h2>
            <p>Don't just take our word for it — hear from the brands we've helped transform their digital presence.</p>
        </div>

        <div class="dz-testimonials-grid">
            <!-- Testimonial 1 -->
            <div class="dz-testimonial-card dz-reveal">
                <div class="dz-testimonial-stars">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                </div>
                <blockquote>"Diziti completely transformed our online presence. Our organic traffic grew 300% in 6 months. Their strategic approach and transparent reporting made all the difference."</blockquote>
                <div class="dz-testimonial-author">
                    <div class="dz-testimonial-avatar">JR</div>
                    <div class="dz-testimonial-info">
                        <h4>James Rodriguez</h4>
                        <p>CEO, TechVault Inc.</p>
                    </div>
                </div>
            </div>

            <!-- Testimonial 2 -->
            <div class="dz-testimonial-card dz-reveal">
                <div class="dz-testimonial-stars">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                </div>
                <blockquote>"The team at Diziti doesn't just execute — they think strategically. Our PPC campaigns now deliver 5x ROI, and their content strategy has positioned us as industry leaders."</blockquote>
                <div class="dz-testimonial-author">
                    <div class="dz-testimonial-avatar">SK</div>
                    <div class="dz-testimonial-info">
                        <h4>Sarah Kim</h4>
                        <p>VP Marketing, NovaPay</p>
                    </div>
                </div>
            </div>

            <!-- Testimonial 3 -->
            <div class="dz-testimonial-card dz-reveal">
                <div class="dz-testimonial-stars">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                </div>
                <blockquote>"From website redesign to full-scale SEO, Diziti handled everything with precision. We saw a 200% lift in qualified leads within the first quarter. Truly exceptional partners."</blockquote>
                <div class="dz-testimonial-author">
                    <div class="dz-testimonial-avatar">MP</div>
                    <div class="dz-testimonial-info">
                        <h4>Michael Patel</h4>
                        <p>Founder, GreenScale</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===========================
     CTA SECTION
     =========================== -->
<section class="dz-cta">
    <div class="dz-container">
        <div class="dz-cta-content dz-reveal">
            <span class="dz-badge" style="margin-bottom:24px;"><i class="fas fa-rocket"></i> Let's Talk</span>
            <h2>Ready to Dominate Your Market?</h2>
            <p>Book a free strategy session and discover how we can transform your digital presence and accelerate your growth.</p>
            <div class="dz-cta-actions">
                <a href="#" class="dz-btn dz-btn-primary">Schedule a Call <i class="fas fa-calendar-alt"></i></a>
                <a href="#" class="dz-btn dz-btn-white">View Pricing <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
