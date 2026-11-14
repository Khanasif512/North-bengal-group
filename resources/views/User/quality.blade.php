<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
  <title>Quality Assurance & R&D Lab | ChemCorp Chemical Solutions</title>

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

  <!-- ===== PAGE HEADER ===== -->
  <section class="page-header">
    <div class="container">
      <h1>Quality Assurance & Laboratory R&D</h1>
      <div class="breadcrumb-custom">
        <a href="{{ route('home') }}">Home</a> / <span>Quality Assurance</span>
      </div>
      <p class="mt-3 text-light opacity-75 max-w-600 mx-auto small">
        Analytical precision, batch integrity testing, and global regulatory compliance across every chemical compound.
      </p>
    </div>
  </section>

  <!-- ===== INTRO & QUALITY CONTROL PILLARS ===== -->
  <section class="section">
    <div class="container">
      <div class="text-center">
        <span class="badge-tag">Zero Defect Commitment</span>
        <h2 class="section-title center">Analytical Precision at Every Step</h2>
        <p class="section-subtitle mx-auto">
          From incoming raw chemical materials to containerized finished product delivery, our QA/QC protocols guarantee absolute traceability and consistency.
        </p>
      </div>

      <div class="row g-4">
        <div class="col-md-4">
          <div class="feature-box text-center">
            <div class="feature-icon mx-auto"><i class="bi bi-clipboard2-pulse-fill"></i></div>
            <h5>Batch Analytical Testing</h5>
            <p class="text-muted small mb-0">Every batch undergoes assay calibration, trace metal spectrometry, and moisture analysis with certified COA output.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="feature-box text-center">
            <div class="feature-icon mx-auto"><i class="bi bi-arrow-repeat"></i></div>
            <h5>Strict Process Control</h5>
            <p class="text-muted small mb-0">Automated PLC temperature and pressure controls guarantee repeatable molecular synthesis and stability.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="feature-box text-center">
            <div class="feature-icon mx-auto"><i class="bi bi-shield-lock-fill"></i></div>
            <h5>HazMat Compliant Transport</h5>
            <p class="text-muted small mb-0">UN-certified drums, IBC totes, and stainless tankers configured with full GHS labels and emergency safety documentation.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== CERTIFICATIONS SECTION ===== -->
  <section class="section">
    <div class="container">
      <div class="text-center">
        <span class="badge-tag">Global Compliance</span>
        <h2 class="section-title center">Accreditations & Certificates</h2>
        <p class="section-subtitle mx-auto">Internationally validated standards that satisfy heavy industry and pharmaceutical regulatory bodies.</p>
      </div>
      <div class="row g-4 text-center">
        <div class="col-md-6 col-lg-3">
          <div class="card-premium p-4">
            <i class="bi bi-patch-check-fill" style="font-size:3rem;color:var(--accent);"></i>
            <h5 class="mt-3 mb-1">ISO 9001:2015</h5>
            <p class="text-muted small mb-0">Certified Quality Management Systems across production and logistics.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="card-premium p-4">
            <i class="bi bi-globe2" style="font-size:3rem;color:var(--success);"></i>
            <h5 class="mt-3 mb-1">ISO 14001:2015</h5>
            <p class="text-muted small mb-0">Environmental Stewardship & Zero-Discharge Effluent Management.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="card-premium p-4">
            <i class="bi bi-capsule" style="font-size:3rem;color:var(--gold);"></i>
            <h5 class="mt-3 mb-1">GMP Certified</h5>
            <p class="text-muted small mb-0">Good Manufacturing Practice for Active Pharmaceutical Ingredients (APIs).</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="card-premium p-4">
            <i class="bi bi-shield-check" style="font-size:3rem;color:var(--primary);"></i>
            <h5 class="mt-3 mb-1">REACH & RoHS</h5>
            <p class="text-muted small mb-0">European Union safety standard registration for export chemical compounds.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== LABORATORY FACILITY & INSTRUMENTS ===== -->
  <section class="section">
    <div class="container">
      <div class="row align-items-center g-5">
        <div class="col-lg-6">
          <span class="badge-tag">R&D Testing Center</span>
          <h2 class="section-title">In-House Analytical Chemistry Laboratory</h2>
          <p class="text-muted mt-3">
            Our state-of-the-art testing facility is outfitted with cutting-edge analytical instrumentation operated by veteran analytical chemists and material researchers.
          </p>
          <ul class="list-unstyled mt-4">
            <li class="d-flex align-items-start gap-3 mb-3">
              <i class="bi bi-check-circle-fill text-info fs-5 mt-1"></i>
              <div>
                <strong>HPLC & Gas Chromatography (GC-MS)</strong>
                <p class="text-muted small mb-0">Purity assays, solvent residue quantification, and impurity fingerprinting.</p>
              </div>
            </li>
            <li class="d-flex align-items-start gap-3 mb-3">
              <i class="bi bi-check-circle-fill text-info fs-5 mt-1"></i>
              <div>
                <strong>UV-Vis Spectrophotometry & Flame Atomic Absorption</strong>
                <p class="text-muted small mb-0">Accurate trace metal testing (Lead, Arsenic, Iron, Heavy Metals).</p>
              </div>
            </li>
            <li class="d-flex align-items-start gap-3 mb-3">
              <i class="bi bi-check-circle-fill text-info fs-5 mt-1"></i>
              <div>
                <strong>Automated Karl Fischer Titration</strong>
                <p class="text-muted small mb-0">Precise moisture detection for organic solvents and anhydrous chemicals.</p>
              </div>
            </li>
            <li class="d-flex align-items-start gap-3 mb-3">
              <i class="bi bi-check-circle-fill text-info fs-5 mt-1"></i>
              <div>
                <strong>Batch Traceability & Retention Vault</strong>
                <p class="text-muted small mb-0">Reference samples for every commercial batch retained for 24 months.</p>
              </div>
            </li>
          </ul>
        </div>
        <div class="col-lg-6">
          <div class="position-relative">
            <img src="https://images.unsplash.com/photo-1532187863486-abf9dbad1b69?auto=format&fit=crop&w=900&q=80"
                 class="rounded-4 shadow-lg w-100" style="height:460px;object-fit:cover;" alt="Analytical Chemistry Lab Equipment">
            <div class="position-absolute bottom-0 end-0 m-4 p-3 bg-white rounded-3 shadow d-none d-sm-flex align-items-center gap-3 border">
              <div class="feature-icon mb-0" style="width:48px;height:48px;font-size:1.4rem;"><i class="bi bi-file-earmark-medical-fill"></i></div>
              <div>
                <strong class="d-block text-dark">COA Issued</strong>
                <small class="text-muted">With Every Consignment</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  @include('User.Partials.footer')

</body>
</html>
