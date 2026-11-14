<footer>
  <div class="pre-footer-strip">
    <div class="container">
      <div class="pre-footer-content">
        <div class="pre-footer-text">
          <h4>Ready to discuss your bulk chemical supply requirements?</h4>
          <p>Connect with our technical chemists or request a formal commercial proposal.</p>
        </div>
        <div class="pre-footer-actions">
          <a href="tel:+8801711234567" class="btn-outline-premium py-2 px-3 small">
            <i class="bi bi-telephone-fill me-1"></i> +880 1711-234567
          </a>
          <a href="{{ route('contact') }}" class="btn-premium py-2 px-4 small">
            <i class="bi bi-chat-dots-fill me-1"></i> Contact Desk
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="main-footer">
    <div class="container">
      <div class="row g-4 g-lg-5">
        <div class="col-lg-4 col-md-6">
          <div class="footer-brand">
            <div class="brand-icon"><i class="bi bi-radioactive"></i></div>
            North Bengal<span>Group</span>
          </div>
          <p class="footer-about">
            North Bengal Group is a multi-sector business organization based in Rangpur. Starting with a single venture, we have expanded into chemicals, metal industries, transportation, and international trading.
          </p>
          <div class="footer-cert-tags">
            <span class="cert-tag"><i class="bi bi-patch-check me-1"></i> ISO 9001:2015</span>
            <span class="cert-tag"><i class="bi bi-check2-circle me-1"></i> GMP Certified</span>
            <span class="cert-tag"><i class="bi bi-shield-check me-1"></i> REACH Compliant</span>
          </div>
          <div class="footer-social-wrapper">
            <div class="footer-social-title">Connect With Us</div>
            <div class="social-links">
              <a href="https://linkedin.com" target="_blank" rel="noopener" class="social-icon in" title="Follow us on LinkedIn" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
              <a href="https://facebook.com" target="_blank" rel="noopener" class="social-icon fb" title="Follow us on Facebook" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
              <a href="https://twitter.com" target="_blank" rel="noopener" class="social-icon tw" title="Follow us on X Twitter" aria-label="X Twitter"><i class="bi bi-twitter-x"></i></a>
              <a href="https://youtube.com" target="_blank" rel="noopener" class="social-icon yt" title="Subscribe to YouTube" aria-label="YouTube"><i class="bi bi-youtube"></i></a>
              <a href="https://wa.me/8801711234567" target="_blank" rel="noopener" class="social-icon wa" title="Chat on WhatsApp" aria-label="WhatsApp"><i class="bi bi-whatsapp"></i></a>
              <a href="https://instagram.com" target="_blank" rel="noopener" class="social-icon ig" title="Follow us on Instagram" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-2 col-md-6 col-6">
          <h5>Navigation</h5>
          <ul>
            <li><a href="{{ route('home') }}"><i class="bi bi-chevron-right"></i> Home</a></li>
            <li><a href="{{ route('about') }}"><i class="bi bi-chevron-right"></i> Corporate Profile</a></li>
            <li><a href="{{ route('products') }}"><i class="bi bi-chevron-right"></i> Product Catalog</a></li>
            <li><a href="{{ route('quality') }}"><i class="bi bi-chevron-right"></i> Quality & R&D</a></li>
            <li><a href="{{ route('gallery') }}"><i class="bi bi-chevron-right"></i> Photo Gallery</a></li>
            <li><a href="{{ route('videos') }}"><i class="bi bi-chevron-right"></i> Video Library</a></li>
            <li><a href="{{ route('contact') }}"><i class="bi bi-chevron-right"></i> Contact Us</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-6 col-6">
          <h5>Product Divisions</h5>
          <ul>
            <li><a href="{{ route('products') }}"><i class="bi bi-chevron-right"></i> Industrial Chemicals</a></li>
            <li><a href="{{ route('products') }}"><i class="bi bi-chevron-right"></i> Pharmaceutical APIs</a></li>
            <li><a href="{{ route('products') }}"><i class="bi bi-chevron-right"></i> Agrochemical Solutions</a></li>
            <li><a href="{{ route('products') }}"><i class="bi bi-chevron-right"></i> Specialty & Solvents</a></li>
            <li><a href="{{ route('products') }}"><i class="bi bi-chevron-right"></i> Water Treatment Line</a></li>
            <li><a href="{{ route('products') }}"><i class="bi bi-chevron-right"></i> Polymers & Resins</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-6">
          <h5>Corporate Office</h5>
          <div class="footer-contact-item">
            <i class="bi bi-geo-alt-fill"></i>
            <div><strong>Headquarters & Lab</strong>House # 08, Road 08, Block # A
              Nobodoy Housing, Mohammadpur
              Dhaka-1207
              Bangladesh</div>
          </div>
          <div class="footer-contact-item">
            <i class="bi bi-telephone-fill"></i>
            <div><strong>B2B Sales Hotline</strong><a href="tel:+8801711234567">+880 1711-234567</a></div>
          </div>
          <div class="footer-contact-item">
            <i class="bi bi-envelope-fill"></i>
            <div><strong>Commercial Desk</strong><a href="mailto:info@chemcorp.com.bd">info@chemcorp.com.bd</a></div>
          </div>
          <div class="footer-contact-item">
            <i class="bi bi-clock-fill"></i>
            <div><strong>Operating Hours</strong>Sat - Thu: 9:00 AM - 6:00 PM</div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="footer-bottom">
    <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center gap-2">
      <div>© {{ date('Y') }} North Bengal Group. All rights reserved | Empowering North Bengal's Economic Growth</div>
      <div>
        <a href="{{ route('privacy') }}">Privacy Policy</a> |
        <a href="{{ route('terms') }}">Terms & Conditions</a> |
        <a href="{{ route('quality') }}">Safety & Compliance</a>
      </div>
    </div>
  </div>
</footer>

<div class="floating-actions">
  <a href="https://wa.me/8801711234567" target="_blank" rel="noopener" class="btn-float btn-float-whatsapp" title="Direct WhatsApp Chat with B2B Sales" aria-label="WhatsApp Chat">
    <i class="bi bi-whatsapp"></i>
  </a>
  <button type="button" id="backToTopBtn" class="btn-float btn-float-top" title="Back to top" aria-label="Back to top">
    <i class="bi bi-arrow-up"></i>
  </button>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>