<?php
// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['contact_form'])) {
    $name = htmlspecialchars(strip_tags($_POST['name'] ?? ''));
    $email = htmlspecialchars(strip_tags($_POST['email'] ?? ''));
    $phone = htmlspecialchars(strip_tags($_POST['phone'] ?? ''));
    $address = htmlspecialchars(strip_tags($_POST['address'] ?? ''));
    $property_type = htmlspecialchars(strip_tags($_POST['property_type'] ?? ''));
    $message = htmlspecialchars(strip_tags($_POST['message'] ?? ''));
    
    $to = 'support@firepreventivesystems.com';
    $subject = 'New Contact Form Submission - Fire Preventive Systems';
    $body = "New submission from the website contact form:\n\n";
    $body .= "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Phone: $phone\n";
    $body .= "Property Address: $address\n";
    $body .= "Property Type: $property_type\n";
    $body .= "Message: $message\n";
    
    $headers = "From: noreply@firepreventivesystems.com\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
    
    $sent = mail($to, $subject, $body, $headers);
    $form_success = $sent ? true : false;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fire Protection Services In California | Fire Sprinkler System | Fire Preventive Systems</title>
    <meta name="description" content="Fire Preventive Systems provides cutting-edge wildfire protection with automated sprinkler systems. Protect your home and business from wildfires in California.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<!-- Top Bar -->
<div class="top-bar">
  <div class="top-bar-inner">
    <div class="social-links">
      <a href="https://www.facebook.com/firepreventivesystems" target="_blank" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
      <a href="https://www.instagram.com/firepreventivesystems" target="_blank" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
      <a href="https://www.linkedin.com/company/fire-preventive-systems" target="_blank" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
      <a href="https://twitter.com/firepreventive" target="_blank" aria-label="X (Twitter)"><i class="fab fa-x-twitter"></i></a>
    </div>
    <div class="contact-info">
      <span><i class="fas fa-map-marker-alt"></i> 2681 Ventura Blvd Oxnard Ca 93036</span>
      <a href="mailto:support@firepreventivesystems.com"><i class="fas fa-envelope"></i> support@firepreventivesystems.com</a>
      <a href="tel:8663581115"><i class="fas fa-phone"></i> 866-358-1115</a>
    </div>
  </div>
</div>
<!-- Header -->
<header class="site-header">
  <div class="header-inner">
    <a href="/" class="logo"><img src="assets/logo.png" alt="Fire Preventive Systems" width="140" height="80"></a>
    <a href="#contact" class="btn btn-primary">Get Started</a>
  </div>
</header>
<!-- Hero -->
<section class="hero">
  <div class="hero-bg"></div>
  <div class="hero-overlay"></div>
  <div class="hero-content">
    <p class="hero-eyebrow">Wild Fire Protection System</p>
    <h1>Protect Your Home &amp; Business from<br>Wildfires with Fire Preventive Systems</h1>
    <p class="hero-desc">At Fire Preventive Systems, we bring cutting-edge protection to your doorstep with our automated sprinkler system, designed to safeguard your home from the growing threat of wildfires. Seamlessly connected to real-time weather alerts, our system springs into action when you need it most, delivering proactive defense against encroaching flames.</p>
    <a href="#contact" class="btn btn-hero">Start Here</a>
  </div>
</section>
<!-- About -->
<section class="about-section">
  <div class="container">
    <div class="about-grid">
      <div class="about-image">
        <img src="assets/about-sprinkler.jpg" alt="Wildfire sprinkler system protecting a home">
      </div>
      <div class="about-content">
        <h2>About Our System</h2>
        <p>Our wildfire defense system is more than just sprinklers&mdash;it&rsquo;s a lifeline. Connected to advanced weather monitoring, it detects local fire hazards and nearby fire alerts. When danger looms, the system deploys a protective water barrier around your home, suppressing embers and reducing fire risk. It&rsquo;s like having a personal firefighter on standby, 24/7.</p>
      </div>
    </div>
  </div>
</section>
<!-- CTA Band -->
<section class="cta-band">
  <div class="container">
    <h2>Advanced Wildfire Defense<br>Engineered for Peace of Mind</h2>
    <a href="#contact" class="btn btn-white">Order Your System Now!</a>
  </div>
</section>
<!-- Why Choose -->
<section class="why-section">
  <div class="container">
    <h2>Why Choose Fire Preventive Systems?</h2>
    <div class="features-grid">
      <div class="feature-card">
        <div class="feature-icon"><i class="fas fa-robot"></i></div>
        <h3>Smart Automation</h3>
        <p>Integrated with local weather data, our sprinklers activate automatically when fire risks spike&mdash;no manual intervention required.</p>
      </div>
      <div class="feature-card">
        <div class="feature-icon"><i class="fas fa-clock"></i></div>
        <h3>24/7 Wildfire Monitoring</h3>
        <p>Built to perform in extreme conditions, ensuring your home stays defended even when you&rsquo;re away.</p>
      </div>
      <div class="feature-card">
        <div class="feature-icon"><i class="fas fa-shield-alt"></i></div>
        <h3>Total Coverage</h3>
        <p>Strategically installed to shield your entire property, from rooftops to the soffit and fascia, with precision water distribution.</p>
      </div>
      <div class="feature-card">
        <div class="feature-icon"><i class="fas fa-microchip"></i></div>
        <h3>Reliable Technology</h3>
        <p>Our system combines advanced hardware with intelligent software and it&rsquo;s built to perform in extreme conditions.</p>
      </div>
    </div>
  </div>
</section>
<!-- How It Works -->
<section class="how-section">
  <div class="container">
    <p class="section-label">How It Works</p>
    <h2>Our wildfire defense system is more than just sprinklers&mdash;it&rsquo;s a lifeline</h2>
    <div class="how-grid">
      <div class="how-visual">
        <img src="assets/how-it-works.jpg" alt="How wildfire defense works">
      </div>
      <div class="how-steps">
        <div class="step">
          <div class="step-number">1</div>
          <div>
            <h3>Detect &amp; Monitor</h3>
            <p>Our advanced system continuously tracks wildfire threats using real-time data, AI-driven monitoring, and satellite insights.</p>
          </div>
        </div>
        <div class="step">
          <div class="step-number">2</div>
          <div>
            <h3>Defend with Smart Sprinklers</h3>
            <p>When a wildfire approaches, our automated wildfire sprinklers activate, creating a protective barrier.</p>
          </div>
        </div>
        <div class="step">
          <div class="step-number">3</div>
          <div>
            <h3>Integrated with Local Weather Data</h3>
            <p>Our sprinklers activate automatically every hour as long as the fire is active near your home.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- FAQ -->
<section class="faq-section">
  <div class="container">
    <h2>Frequently Asked Questions</h2>
    <div class="faq-list">
      <div class="faq-item active">
        <button class="faq-question" onclick="toggleFaq(this)" aria-expanded="true">
          How does the automated sprinkler system know when to turn on?
          <i class="fas fa-chevron-up faq-icon"></i>
        </button>
        <div class="faq-answer" style="display:block">
          <p>Our system is smarter than your average sprinkler&mdash;it&rsquo;s connected to real-time weather monitoring networks. When conditions like extreme heat, low humidity, high winds, or nearby wildfire alerts signal a threat, the system activates automatically to protect your home. You don&rsquo;t need to lift a finger; it&rsquo;s designed to respond faster than the flames can spread.</p>
        </div>
      </div>
      <div class="faq-item">
        <button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false">
          Will the sprinklers damage my property or waste water?
          <i class="fas fa-chevron-down faq-icon"></i>
        </button>
        <div class="faq-answer" style="display:none">
          <p>Not at all! Our wildfire defense system is engineered for efficiency. It uses targeted water distribution to create a protective barrier around your home, focusing on key areas like roofs, walls, and vegetation. We customize each installation to minimize runoff and maximize coverage, so you&rsquo;re saving your property&mdash;not soaking it unnecessarily. Plus, it only runs when a fire risk is detected, conserving water for when it truly counts.</p>
        </div>
      </div>
      <div class="faq-item">
        <button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false">
          Can I install this system on any type of home?
          <i class="fas fa-chevron-down faq-icon"></i>
        </button>
        <div class="faq-answer" style="display:none">
          <p>Absolutely. Whether you own a sprawling ranch, a cozy cabin, or a modern two-story, our team tailors every Fire Preventive Systems setup to your property&rsquo;s unique layout. From sloped roofs to wooded lots, we assess your home&rsquo;s vulnerabilities and design a solution that fits. During your free consultation, we&rsquo;ll walk you through how it works for your space&mdash;no cookie-cutter fixes here!</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Final CTA -->
<section class="final-cta">
  <div class="final-cta-overlay"></div>
  <div class="container final-cta-content">
    <h2>Protect Your Home Today!</h2>
    <p>Ready to defend what matters most? Contact Fire Preventive Systems for a free consultation. We&rsquo;ll assess your property, design your custom wildfire defense plan, and install a system that keeps you one step ahead of disaster. Call us at 866-358-1115 or request a quote online now.</p>
    <a href="#contact" class="btn btn-outline-white">Get Started Today</a>
  </div>
</section>
<!-- Contact Form (replaces Typeform) -->
<section class="contact-section" id="contact">
  <div class="container">
    <div class="contact-wrapper">
      <div class="contact-info-col">
        <h2>Get Your Free Consultation</h2>
        <p>Ready to protect your home from wildfires? Fill out the form and our team will contact you within 24 hours to discuss your custom fire protection plan.</p>
        <div class="contact-detail"><i class="fas fa-phone"></i><a href="tel:8663581115">866-358-1115</a></div>
        <div class="contact-detail"><i class="fas fa-envelope"></i><a href="mailto:support@firepreventivesystems.com">support@firepreventivesystems.com</a></div>
        <div class="contact-detail"><i class="fas fa-map-marker-alt"></i><span>2681 Ventura Blvd Oxnard Ca 93036</span></div>
      </div>
      <div class="contact-form-col">
        <?php if (isset($form_success) && $form_success): ?>
        <div class="form-success">
          <i class="fas fa-check-circle"></i>
          <h3>Thank You!</h3>
          <p>Your submission has been received. We&rsquo;ll be in touch within 24 hours.</p>
        </div>
        <?php elseif (isset($form_success) && !$form_success): ?>
        <div class="form-error"><p>There was an issue sending your message. Please call us at 866-358-1115.</p></div>
        <?php endif; ?>
        <form method="POST" action="#contact" class="contact-form" id="contactForm">
          <input type="hidden" name="contact_form" value="1">
          <div class="form-row">
            <div class="form-group">
              <label for="name">Full Name *</label>
              <input type="text" id="name" name="name" placeholder="Your full name" required>
            </div>
            <div class="form-group">
              <label for="email">Email Address *</label>
              <input type="email" id="email" name="email" placeholder="your@email.com" required>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group">
              <label for="phone">Phone Number *</label>
              <input type="tel" id="phone" name="phone" placeholder="(555) 123-4567" required>
            </div>
            <div class="form-group">
              <label for="property_type">Property Type</label>
              <select id="property_type" name="property_type">
                <option value="">Select property type</option>
                <option value="Single Family Home">Single Family Home</option>
                <option value="Ranch/Farm">Ranch / Farm</option>
                <option value="Cabin">Cabin</option>
                <option value="Commercial">Commercial Building</option>
                <option value="Other">Other</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="address">Property Address</label>
            <input type="text" id="address" name="address" placeholder="Street address, City, State, ZIP">
          </div>
          <div class="form-group">
            <label for="message">Additional Information</label>
            <textarea id="message" name="message" rows="4" placeholder="Tell us more about your property or any specific concerns..."></textarea>
          </div>
          <button type="submit" class="btn btn-primary btn-submit">
            <i class="fas fa-fire-extinguisher"></i> Get My Free Consultation
          </button>
        </form>
      </div>
    </div>
  </div>
</section>
<!-- Footer -->
<footer class="site-footer">
  <div class="footer-brand-bar">
    <div class="container footer-brand-inner">
      <a href="/" class="footer-logo"><img src="assets/logo.png" alt="Fire Preventive Systems" width="120" height="68"></a>
      <p>Wild Fire Protection Systems<br>Fire Preventive Systems</p>
    </div>
  </div>
  <div class="footer-nav-bar">
    <div class="container footer-nav-inner">
      <nav><a href="fire-maps.php">Fire Maps</a></nav>
      <nav class="footer-nav-right">
        <a href="privacy-policy.php">Privacy Policy</a>
        <span>|</span>
        <a href="terms-of-service.php">Terms of Service</a>
      </nav>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="container footer-bottom-inner">
      <p>&copy;2025 Fire Preventing Systems. All Rights Reserved.</p>
      <div class="footer-contact">
        <span><i class="fas fa-map-marker-alt"></i> 2681 Ventura Blvd Oxnard Ca 93036</span>
        <a href="mailto:support@firepreventivesystems.com"><i class="fas fa-envelope"></i> support@firepreventivesystems.com</a>
        <a href="tel:8663581115"><i class="fas fa-phone"></i> 866-358-1115</a>
      </div>
      <div class="footer-social">
        <a href="https://www.facebook.com/firepreventivesystems" target="_blank"><i class="fab fa-facebook-f"></i></a>
        <a href="https://www.instagram.com/firepreventivesystems" target="_blank"><i class="fab fa-instagram"></i></a>
        <a href="https://www.linkedin.com/company/fire-preventive-systems" target="_blank"><i class="fab fa-linkedin-in"></i></a>
        <a href="https://twitter.com/firepreventive" target="_blank"><i class="fab fa-x-twitter"></i></a>
      </div>
    </div>
  </div>
</footer>
<script src="script.js"></script>
</body>
</html>
