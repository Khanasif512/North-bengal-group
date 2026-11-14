<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
  <title>North Bengal Group</title>

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  @vite(['resources/css/style.css', 'resources/js/script.js'])
</head>

<body>

  @include('User.Partials.header')

  @include('User.Partials.navbar')

  <!-- ===== HERO SLIDER / CAROUSEL ===== -->
  <section class="hero-carousel">
    <div id="heroSlider" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5500">

      <!-- Indicators -->
      <div class="carousel-indicators hero-carousel-indicators">
        <button type="button" data-bs-target="#heroSlider" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#heroSlider" data-bs-slide-to="1" aria-label="Slide 2"></button>
        
      </div>

      <div class="carousel-inner">
        <!-- Slide 1: Bangladesh Industrial Chemicals -->
        <div class="carousel-item active">
          <div class="hero-slide" style="background-image: url('https://images.unsplash.com/photo-1532187863486-abf9dbad1b69?auto=format&fit=crop&w=1920&q=80');">
            <div class="container">
              <div class="row align-items-center">
                <div class="col-lg-9 col-xl-8">
                  <div class="badge-tag">
                    <i class="bi bi-patch-check-fill text-info"></i> Bangladesh's Leading Chemical Supplier
                  </div>
                  <h1>Trusted <span>Business Solutions</span> Across North Bengal</h1>
                  <p>We are the premier manufacturer and distributor of high-purity industrial chemicals, pharmaceutical APIs, and specialty formulations.</p>
                  <div class="d-flex flex-wrap gap-3">
                    <a href="{{ route('products') }}" class="btn-premium">
                      <i class="bi bi-grid-3x3-gap-fill"></i> Explore Products
                    </a>
                    <a href="{{ route('contact') }}" class="btn-premium btn-premium-reverse">
                      <i class="bi bi-send-fill"></i> Get Corporate Quotation
                    </a>
                  </div>


                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Slide 2: Pharmaceutical Grade & APIs -->
        <div class="carousel-item">
          <div class="hero-slide" style="background-image: url('https://images.unsplash.com/photo-1587854692152-cbe660dbde88?auto=format&fit=crop&w=1920&q=80');">
            <div class="container">
              <div class="row align-items-center">
                <div class="col-lg-9 col-xl-8">
                  <div class="badge-tag">
                    <i class="bi bi-shield-fill-check text-info"></i> DGDA & ISO 9001:2015 Approved
                  </div>
                  <h1>Certified <span>Pharmaceutical APIs</span> & Specialized Solvents</h1>
                  <p>We are here to empower the economic growth of North Bengal through innovation, reliability, and quality service that creates lasting impact.</p>
                  <div class="d-flex flex-wrap gap-3">
                    <a href="{{ route('products') }}" class="btn-premium">
                      <i class="bi bi-grid-3x3-gap-fill"></i> Explore Products
                    </a>
                    <a href="{{ route('contact') }}" class="btn-premium btn-premium-reverse">
                      <i class="bi bi-send-fill"></i> Get Corporate Quotation
                    </a>
                  </div>


                </div>
              </div>
            </div>
          </div>
        </div>


      </div>

      <!-- Controls -->
      <button class="carousel-control-prev hero-carousel-control" type="button" data-bs-target="#heroSlider" data-bs-slide="prev" aria-label="Previous Slide">
        <i class="bi bi-chevron-left"></i>
      </button>
      <button class="carousel-control-next hero-carousel-control" type="button" data-bs-target="#heroSlider" data-bs-slide="next" aria-label="Next Slide">
        <i class="bi bi-chevron-right"></i>
      </button>
    </div>
  </section>

  <!-- ===== SISTER CONCERNS ===== -->
  <section class="section">
    <div class="container">
      <div class="text-center">
        <span class="badge-tag">Our Business Network</span>
        <h2 class="section-title center clients-title">Our Sister Concerns</h2>
        <p class="section-subtitle mx-auto">
          A diverse group of businesses spanning industry, chemicals, international trade, metals and transportation.
        </p>
      </div>

      <div class="row g-4">
        <div class="col-md-6 col-lg-4">
          <article class="feature-box h-100 text-center">
            <img src="{{ asset('Images/codex-clipboard-52001514-6691-4621-8d1f-25f91502392f.png') }}" alt="LOO Industries logo" class="sister-concern-logo">
            <h3 class="h5">LOO Industries</h3>
            <p class="text-muted mb-0">An industrial business in the group's regional network.</p>
          </article>
        </div>
        <div class="col-md-6 col-lg-4">
          <article class="feature-box h-100 text-center">
            <img src="{{ asset('Images/codex-clipboard-97a1ceaa-ed3a-4a3f-9b95-3c975b00c258.png') }}" alt="Bin Sami Corporation logo" class="sister-concern-logo">
            <h3 class="h5">Bin Sami Corporation</h3>
            <p class="text-muted mb-0">A group company contributing to a broad, multi-sector business network.</p>
          </article>
        </div>
        <div class="col-md-6 col-lg-4">
          <article class="feature-box h-100 text-center">
            <a href="{{ route('uttara-chemicals') }}" aria-label="Visit the Uttara Chemicals page">
              <img src="{{ asset('Images/uttara-chemecials-clear.png') }}" alt="Uttara Chemicals logo" class="sister-concern-logo">
            </a>
            <h3 class="h5">Uttara Chemicals</h3>
            <p class="text-muted mb-0">Chemical supply for manufacturing and industrial requirements.</p>
          </article>
        </div>
        <div class="col-md-6 col-lg-4">
          <article class="feature-box h-100 text-center">
            <a href="{{ route('dow-international') }}" aria-label="Visit the DOW International page">
              <img src="{{ asset('Images/dow-international-clear.png') }}" alt="DOW International logo" class="sister-concern-logo">
            </a>
            <h3 class="h5">DOW International</h3>
            <p class="text-muted mb-0">Part of the group's international business and trading network.</p>
          </article>
        </div>
        <div class="col-md-6 col-lg-4">
          <article class="feature-box h-100 text-center">
            <img src="{{ asset('Images/afia-metal-industries-clear.png') }}" alt="AFIA Metal Industries logo" class="sister-concern-logo">
            <h3 class="h5">AFIA Metal Industries</h3>
            <p class="text-muted mb-0">Metal and alloy supply for manufacturing, construction and engineering.</p>
          </article>
        </div>
        <div class="col-md-6 col-lg-4">
          <article class="feature-box h-100 text-center">
            <img src="{{ asset('Images/afia-transport-clear.png') }}" alt="AFIA Transport logo" class="sister-concern-logo">
            <h3 class="h5">AFIA Transport</h3>
            <p class="text-muted mb-0">Transportation services supporting business and regional supply needs.</p>
          </article>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== CORPORATE INTRO ===== -->
  <section class="section about-section">
    <div class="container">
      <div class="text-center mb-5">
        <span class="badge-tag">Our Services</span>
      </div>

      <div class="row align-items-center g-4 about-feature-row">
        <div class="col-lg-4">
          <div class="about-image-wrap">
            <img src="{{ asset('Images/Chemical Supply.png') }}"
              class="about-image" alt="Chemical supply operations">
          </div>
        </div>
        <div class="col-lg-8">
          <div class="about-copy">
            <h3 class="about-title">Chemical Supply</h3>
            <p class="about-description">We specialize in the regional supply and distribution of metals and alloys, catering to manufacturing, construction, and engineering sectors with consistent quality, stringent compliance, and reliable logistics. From sourcing certified materials to thorough quality inspection, secure storage, and timely delivery, our operations are built to support high-volume, precision-critical projects.</p>
            <p class="about-description">Our dedication to material integrity, industry standards, and dependable supply ensures that our clients can maintain production efficiency and meet project timelines with confidence.</p>



            <div class="about-actions">
              <a href="{{ route('chemicals') }}" class="btn-premium">Learn More <i class="bi bi-arrow-right"></i></a>
              <a href="{{ route('quality') }}" class="btn-premium btn-premium-reverse">Our Quality Standards</a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <section class="section about-section">
    <div class="container">

      <div class="row align-items-center g-4 about-feature-row">
        <div class="col-lg-8">
          <div class="about-copy">
            <h3 class="about-title">Metal Industries</h3>
            <p class="about-description">We specialize in the regional supply and distribution of metals and alloys, catering to manufacturing, construction, and engineering sectors with consistent quality, stringent compliance, and reliable logistics. From sourcing certified materials to thorough quality inspection, secure storage, and timely delivery, our operations are built to support high-volume, precision-critical projects.</p>
            <p class="about-description">Our dedication to material integrity, industry standards, and dependable supply ensures that our clients can maintain production efficiency and meet project timelines with confidence.</p>



            <div class="about-actions">
              <a href="{{ route('chemicals') }}" class="btn-premium">Learn More <i class="bi bi-arrow-right"></i></a>
              <a href="{{ route('quality') }}" class="btn-premium btn-premium-reverse">Our Quality Standards</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="about-image-wrap">
            <img src="{{ asset('Images/Metal Industries.png') }}"
              class="about-image" alt="Metal industries operations">
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- ===== CLIENTS ===== -->
  <section class="section clients-section">
    <div class="container">
      <div class="text-center mb-5 clients-heading">
        <span class="badge-tag">Trusted Partnerships</span>
        <h2 class="section-title center clients-title">Our Clients</h2>

      </div>

      <div class="row g-4 justify-content-center">
        <div class="col-6 col-md-4 col-lg-2">
          <div class="client-logo-card">
            <img src="{{ asset('Images/Clients/bosundhora-paper-mills.png') }}" alt="Bashundhara Paper Mills">
          </div>
        </div>
        <div class="col-6 col-md-4 col-lg-2">
          <div class="client-logo-card">
            <img src="{{ asset('Images/Clients/organikare.png') }}" alt="Organikare">
          </div>
        </div>
        <div class="col-6 col-md-4 col-lg-2">
          <div class="client-logo-card">
            <img src="{{ asset('Images/Clients/kohinoor-chemical-1.png') }}" alt="Kohinoor Chemical">
          </div>
        </div>
        <div class="col-6 col-md-4 col-lg-2">
          <div class="client-logo-card">
            <img src="{{ asset('Images/Clients/one-pharma.png') }}" alt="One Pharma">
          </div>
        </div>
        <div class="col-6 col-md-4 col-lg-2">
          <div class="client-logo-card">
            <img src="{{ asset('Images/Clients/pharmasia.png') }}" alt="Pharmasia">
          </div>
        </div>
        <div class="col-6 col-md-4 col-lg-2">
          <div class="client-logo-card">
            <img src="{{ asset('Images/Clients/biopharma.png') }}" alt="Biopharma">
          </div>
        </div>
        <div class="col-6 col-md-4 col-lg-2">
          <div class="client-logo-card">
            <img src="{{ asset('Images/Clients/rangs-pharma.png') }}" alt="Rangs Pharma">
          </div>
        </div>
        <div class="col-6 col-md-4 col-lg-2">
          <div class="client-logo-card">
            <img src="{{ asset('Images/Clients/remark-hb.png') }}" alt="Remark HB">
          </div>
        </div>
        <div class="col-6 col-md-4 col-lg-2">
          <div class="client-logo-card">
            <img src="{{ asset('Images/Clients/mgi-meghna-2.png') }}" alt="Meghna Group of Industries">
          </div>
        </div>
        <div class="col-6 col-md-4 col-lg-2">
          <div class="client-logo-card">
            <img src="{{ asset('Images/Clients/pran-logo.png') }}" alt="PRAN">
          </div>
        </div>
        <div class="col-6 col-md-4 col-lg-2">
          <div class="client-logo-card">
            <img src="{{ asset('Images/Clients/raident-care.png') }}" alt="Raident Care">
          </div>
        </div>
        <div class="col-6 col-md-4 col-lg-2">
          <div class="client-logo-card">
            <img src="{{ asset('Images/Clients/global-heavy-chem.png') }}" alt="Global Heavy Chemicals">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== PRODUCT CATEGORIES SHOWCASE ===== -->
  <section class="section">
    <div class="container">
      <div class="text-center">
        <span class="badge-tag">Divisions & Sectors</span>
        <h2 class="section-title center clients-title">Product Categories</h2>
        <p class="section-subtitle mx-auto">Explore our portfolio categorized by industrial application. Pure corporate presentation with technical specifications.</p>
      </div>

      <div class="row g-4">
        <!-- Category 1 -->
        <div class="col-md-6 col-lg-4">
          <div class="category-card">
            <div class="category-card-img">
              <img src="https://images.unsplash.com/photo-1603126857599-f6e157fa2fe6?auto=format&fit=crop&w=700&q=80" alt="Industrial Chemicals">
              <div class="category-card-overlay"></div>
            </div>
            <div class="category-card-content">
              <h5>Industrial Chemicals</h5>
              <p class="text-muted small">Acids, alkalis, solvents, and base chemicals engineered for continuous industrial manufacturing operations.</p>
              <div class="d-flex justify-content-between align-items-center mt-3 pt-2 border-top">
                <span class="text-muted small fw-medium"><i class="bi bi-layers me-1 text-info"></i> 40+ Products</span>
                <a href="{{ route('products') }}" class="text-info fw-semibold small">Browse Category →</a>
              </div>
            </div>
          </div>
        </div>

        <!-- Category 2 -->
        <div class="col-md-6 col-lg-4">
          <div class="category-card">
            <div class="category-card-img">
              <img src="https://images.unsplash.com/photo-1532187863486-abf9dbad1b69?auto=format&fit=crop&w=700&q=80" alt="Pharmaceutical Grade">
              <div class="category-card-overlay"></div>
            </div>
            <div class="category-card-content">
              <h5>Pharmaceutical Grade (APIs)</h5>
              <p class="text-muted small">High-assay Active Pharmaceutical Ingredients and excipients certified under USP, BP, and EP pharmacopeias.</p>
              <div class="d-flex justify-content-between align-items-center mt-3 pt-2 border-top">
                <span class="text-muted small fw-medium"><i class="bi bi-layers me-1 text-info"></i> 30+ APIs</span>
                <a href="{{ route('products') }}" class="text-info fw-semibold small">Browse Category →</a>
              </div>
            </div>
          </div>
        </div>

        <!-- Category 3 -->
        <div class="col-md-6 col-lg-4">
          <div class="category-card">
            <div class="category-card-img">
              <img src="https://images.unsplash.com/photo-1567427017947-545c5f8d16ad?auto=format&fit=crop&w=700&q=80" alt="Agrochemicals">
              <div class="category-card-overlay"></div>
            </div>
            <div class="category-card-content">
              <h5>Agrochemical Solutions</h5>
              <p class="text-muted small">Specialized fertilizers, micronutrients, soil conditioners, and crop protection chemicals for commercial agriculture.</p>
              <div class="d-flex justify-content-between align-items-center mt-3 pt-2 border-top">
                <span class="text-muted small fw-medium"><i class="bi bi-layers me-1 text-info"></i> 25+ Products</span>
                <a href="{{ route('products') }}" class="text-info fw-semibold small">Browse Category →</a>
              </div>
            </div>
          </div>
        </div>

        <!-- Category 4 -->
        <div class="col-md-6 col-lg-4">
          <div class="category-card">
            <div class="category-card-img">
              <img src="https://images.unsplash.com/photo-1581093588401-fbb62a02f120?auto=format&fit=crop&w=700&q=80" alt="Specialty Chemicals">
              <div class="category-card-overlay"></div>
            </div>
            <div class="category-card-content">
              <h5>Specialty & Solvents</h5>
              <p class="text-muted small">High-purity organic solvents, reagents, catalysts, and formulation additives for high-precision synthesis.</p>
              <div class="d-flex justify-content-between align-items-center mt-3 pt-2 border-top">
                <span class="text-muted small fw-medium"><i class="bi bi-layers me-1 text-info"></i> 35+ Solvents</span>
                <a href="{{ route('products') }}" class="text-info fw-semibold small">Browse Category →</a>
              </div>
            </div>
          </div>
        </div>

        <!-- Category 5 -->
        <div class="col-md-6 col-lg-4">
          <div class="category-card">
            <div class="category-card-img">
              <img src="https://images.unsplash.com/photo-1500382017468-9049fed747ef?auto=format&fit=crop&w=700&q=80" alt="Water Treatment">
              <div class="category-card-overlay"></div>
            </div>
            <div class="category-card-content">
              <h5>Water Treatment Chemicals</h5>
              <p class="text-muted small">Flocculants, coagulants, biocides, and pH regulators designed for municipal and industrial effluent treatment plants (ETP).</p>
              <div class="d-flex justify-content-between align-items-center mt-3 pt-2 border-top">
                <span class="text-muted small fw-medium"><i class="bi bi-layers me-1 text-info"></i> 20+ Compounds</span>
                <a href="{{ route('products') }}" class="text-info fw-semibold small">Browse Category →</a>
              </div>
            </div>
          </div>
        </div>

        <!-- Category 6 -->
        <div class="col-md-6 col-lg-4">
          <div class="category-card">
            <div class="category-card-img">
              <img src="https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&w=700&q=80" alt="Polymers & Resins">
              <div class="category-card-overlay"></div>
            </div>
            <div class="category-card-content">
              <h5>Polymers & Resins</h5>
              <p class="text-muted small">Specialized binders, epoxy resins, plasticizers, and polymer emulsions for paints, coatings, and plastics manufacturing.</p>
              <div class="d-flex justify-content-between align-items-center mt-3 pt-2 border-top">
                <span class="text-muted small fw-medium"><i class="bi bi-layers me-1 text-info"></i> 18+ Grades</span>
                <a href="{{ route('products') }}" class="text-info fw-semibold small">Browse Category →</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="text-center mt-5">
        <a href="{{ route('products') }}" class="btn-premium">
          <i class="bi bi-collection-fill"></i> View Complete Product Catalog
        </a>
      </div>
    </div>
  </section>


  <!-- ===== WHY CHOOSE US ===== -->
  <section class="section">
    <div class="container">
      <div class="text-center">
        <span class="badge-tag">Corporate Excellence</span>
        <h2 class="section-title center clients-title">Why Industry Choose Us</h2>
        <p class="section-subtitle mx-auto">We combine global chemical sourcing, analytical laboratory testing, and certified supply chain infrastructure.</p>
      </div>
      <div class="row g-4">
        <div class="col-md-6 col-lg-3">
          <div class="feature-box">
            <div class="feature-icon"><i class="bi bi-patch-check-fill"></i></div>
            <h5>Certified Quality</h5>
            <p class="text-muted small mb-0">ISO 9001:2015, GMP, and REACH certified compounds backed by comprehensive Batch Test Certificates (COA).</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="feature-box">
            <div class="feature-icon"><i class="bi bi-truck"></i></div>
            <h5>Bulk Supply Chain</h5>
            <p class="text-muted small mb-0">Reliable logistics network capable of dispatching tanker loads, IBC totes, and drums with prompt lead times.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="feature-box">
            <div class="feature-icon"><i class="bi bi-mortarboard-fill"></i></div>
            <h5>Technical Chemist Support</h5>
            <p class="text-muted small mb-0">Our formulation specialists and chemical engineers provide dedicated product formulation advisory.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="feature-box">
            <div class="feature-icon"><i class="bi bi-shield-lock-fill"></i></div>
            <h5>Safety & Hazard Protocols</h5>
            <p class="text-muted small mb-0">Strict adherence to hazardous material handling, UN-rated packaging, and GHS-compliant labeling.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== CTA BANNER ===== -->
  <section class="section pb-5">
    <div class="container">
      <div class="cta-banner">
        <h2>Require Custom Chemical Synthesisy?</h2>
        <p>Our technical sales team is ready to discuss your specific purity requirements, packaging configurations, and scheduled deliveries.</p>
        <div class="d-flex justify-content-center flex-wrap gap-3">
          <a href="{{ route('contact') }}" class="btn-premium">
            <i class="bi bi-envelope-check-fill"></i> Request Corporate Proposal
          </a>
          <a href="tel:+8802410023608" class="btn-premium btn-premium-reverse">
            <i class="bi bi-telephone-outbound-fill"></i> Call Sales Desk
          </a>
        </div>
      </div>
    </div>
  </section>

  @include('User.Partials.footer')

</body>

</html>