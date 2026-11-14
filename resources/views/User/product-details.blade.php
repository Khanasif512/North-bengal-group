<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
  <title>Sulfuric Acid (H₂SO₄) 98% Industrial Grade | ChemCorp Product Details</title>

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
      <h1>Sulfuric Acid 98%</h1>
      <div class="breadcrumb-custom">
        <a href="{{ route('home') }}">Home</a> / <a href="{{ route('products') }}">Products</a> / <span>Industrial Grade Sulfuric Acid</span>
      </div>
    </div>
  </section>

  <!-- ===== PRODUCT DETAILS SPEC SHEET ===== -->
  <section class="section">
    <div class="container">
      <div class="row g-5">
        <!-- Product Image Gallery -->
        <div class="col-lg-6">
          <div class="position-sticky" style="top: 100px;">
            <div class="card-img-wrap rounded-4 shadow-sm" style="height:440px;">
              <img id="mainProductImage" src="https://images.unsplash.com/photo-1603126857599-f6e157fa2fe6?auto=format&fit=crop&w=1000&q=80"
                   class="w-100 h-100 object-fit-cover rounded-4" alt="Sulfuric Acid High Purity">
            </div>

            <!-- Thumbnail Switcher -->
            <div class="row g-2 mt-3">
              <div class="col-3">
                <img src="https://images.unsplash.com/photo-1603126857599-f6e157fa2fe6?auto=format&fit=crop&w=300&q=80"
                     data-full-img="https://images.unsplash.com/photo-1603126857599-f6e157fa2fe6?auto=format&fit=crop&w=1000&q=80"
                     class="thumb-switch active-thumb rounded-3 w-100" style="height:75px;object-fit:cover;cursor:pointer;" alt="Storage drums">
              </div>
              <div class="col-3">
                <img src="https://images.unsplash.com/photo-1532187863486-abf9dbad1b69?auto=format&fit=crop&w=300&q=80"
                     data-full-img="https://images.unsplash.com/photo-1532187863486-abf9dbad1b69?auto=format&fit=crop&w=1000&q=80"
                     class="thumb-switch rounded-3 w-100" style="height:75px;object-fit:cover;cursor:pointer;" alt="Lab test">
              </div>
              <div class="col-3">
                <img src="https://images.unsplash.com/photo-1581093588401-fbb62a02f120?auto=format&fit=crop&w=300&q=80"
                     data-full-img="https://images.unsplash.com/photo-1581093588401-fbb62a02f120?auto=format&fit=crop&w=1000&q=80"
                     class="thumb-switch rounded-3 w-100" style="height:75px;object-fit:cover;cursor:pointer;" alt="Industrial plant">
              </div>
              <div class="col-3">
                <img src="https://images.unsplash.com/photo-1567427017947-545c5f8d16ad?auto=format&fit=crop&w=300&q=80"
                     data-full-img="https://images.unsplash.com/photo-1567427017947-545c5f8d16ad?auto=format&fit=crop&w=1000&q=80"
                     class="thumb-switch rounded-3 w-100" style="height:75px;object-fit:cover;cursor:pointer;" alt="Packaging">
              </div>
            </div>

            <!-- Quality & Safety Trust Strip -->
            <div class="trust-badge-row mt-4">
              <div class="trust-badge-item"><i class="bi bi-file-earmark-check-fill"></i> COA Provided</div>
              <div class="trust-badge-item"><i class="bi bi-shield-check"></i> MSDS / SDS Available</div>
              <div class="trust-badge-item"><i class="bi bi-truck-front-fill"></i> UN 1830 Approved</div>
            </div>
          </div>
        </div>

        <!-- Product Information & Specifications -->
        <div class="col-lg-6">
          <div class="d-flex align-items-center gap-2 mb-2">
            <span class="badge-tag mb-0">Industrial Division</span>
            <span class="badge bg-secondary">CAS No: 7664-93-9</span>
          </div>

          <h1 class="mt-2" style="font-size:2.4rem;">Sulfuric Acid 98%</h1>
          <p class="text-primary fw-bold fs-5 mb-3">Formula: H₂SO₄ | Molecular Weight: 98.079 g/mol</p>
          
          <p class="text-muted">
            ChemCorp’s premium-grade 98% Technical & Battery grade Sulfuric Acid is an ultra-dense, odorless, oily liquid manufactured via the catalyzed contact process. It conforms to rigorous international standards for heavy chemical manufacturing, battery electrolyte production, mineral leaching, and agricultural fertilizers.
          </p>

          <!-- Specifications Table -->
          <h5 class="mt-4 mb-3"><i class="bi bi-sliders2 text-info me-2"></i> Technical Specifications</h5>
          <div class="product-spec-table mb-4">
            <table class="table table-bordered mb-0">
              <tbody>
                <tr><th>Chemical Name</th><td>Sulfuric Acid / Hydrogen Sulfate</td></tr>
                <tr><th>CAS Number</th><td>7664-93-9</td></tr>
                <tr><th>EINECS Number</th><td>231-639-5</td></tr>
                <tr><th>Assay (H₂SO₄ Content)</th><td>≥ 98.0% Min (Battery grade: 98.5%)</td></tr>
                <tr><th>Physical Appearance</th><td>Clear, colorless, viscous oily liquid</td></tr>
                <tr><th>Density at 20°C</th><td>1.84 g/cm³</td></tr>
                <tr><th>Iron (Fe) Content</th><td>≤ 0.005% Max</td></tr>
                <tr><th>Residue on Ignition</th><td>≤ 0.02% Max</td></tr>
                <tr><th>Available Packaging</th><td>35kg Poly Jerrycans, 250kg HM-HDPE Drums, 1000kg IBC Totes, Bulk Tanker</td></tr>
              </tbody>
            </table>
          </div>

          <!-- Applications -->
          <h5 class="mb-3"><i class="bi bi-check-circle-fill text-info me-2"></i> Key Industrial Applications</h5>
          <div class="d-flex flex-wrap gap-2 mb-4">
            <span class="badge bg-light text-dark border p-2 px-3">Lead-Acid Battery Electrolytes</span>
            <span class="badge bg-light text-dark border p-2 px-3">Phosphate & Sulfate Fertilizer Production</span>
            <span class="badge bg-light text-dark border p-2 px-3">Metal Pickling & Steel Processing</span>
            <span class="badge bg-light text-dark border p-2 px-3">Textile Dyeing & Rayon Manufacture</span>
            <span class="badge bg-light text-dark border p-2 px-3">Chemical Synthesis & Petrochemicals</span>
          </div>

          <!-- B2B Action Buttons -->
          <div class="d-flex flex-wrap gap-3 pt-2">
            <button type="button" class="btn-premium" data-bs-toggle="modal" data-bs-target="#rfqModal" data-product-name="Sulfuric Acid 98%" data-product-cas="7664-93-9">
              <i class="bi bi-send-check-fill"></i> Request Quotation / RFQ
            </button>
            <a href="{{ route('contact') }}" class="btn-outline-premium text-dark border-dark">
              <i class="bi bi-telephone-inbound-fill"></i> Inquire with Technical Sales
            </a>
            <button type="button" class="btn-premium py-2 px-3 small" onclick="alert('Technical Data Sheet (TDS) is available on request. Please submit the RFQ form.');">
              <i class="bi bi-file-earmark-pdf-fill text-danger me-1"></i> Download TDS / SDS
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== RELATED PRODUCTS SECTION ===== -->
  <section class="section">
    <div class="container">
      <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
          <span class="badge-tag mb-1">Same Division</span>
          <h2 class="section-title mb-0">Related Chemical Products</h2>
        </div>
        <a href="{{ route('products') }}" class="btn-soft">View Full Catalog →</a>
      </div>

      <div class="row g-4 mt-1">
        <div class="col-md-6 col-lg-3">
          <div class="card-premium">
            <div class="card-img-wrap">
              <span class="category-badge-chip">Industrial</span>
              <img src="https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&w=500&q=80" alt="Hydrochloric Acid">
            </div>
            <div class="card-body">
              <h5>Hydrochloric Acid (HCl)</h5>
              <span class="chemical-formula">CAS: 7647-01-0 | 33% Grade</span>
              <p class="text-muted small">Industrial acid for pickling, pH regulation, and chemical synthesis.</p>
              <div class="card-actions">
                <a href="{{ route('product-details') }}" class="btn-soft w-100 justify-content-center">View Details</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="card-premium">
            <div class="card-img-wrap">
              <span class="category-badge-chip">Industrial</span>
              <img src="https://images.unsplash.com/photo-1584308666744-24d5c474f2ae?auto=format&fit=crop&w=500&q=80" alt="Caustic Soda">
            </div>
            <div class="card-body">
              <h5>Caustic Soda Flakes</h5>
              <span class="chemical-formula">CAS: 1310-73-2 | 99% Pure</span>
              <p class="text-muted small">High-purity sodium hydroxide flakes for soaps and textiles.</p>
              <div class="card-actions">
                <a href="{{ route('product-details') }}" class="btn-soft w-100 justify-content-center">View Details</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="card-premium">
            <div class="card-img-wrap">
              <span class="category-badge-chip">Specialty</span>
              <img src="https://images.unsplash.com/photo-1581093588401-fbb62a02f120?auto=format&fit=crop&w=500&q=80" alt="Acetone">
            </div>
            <div class="card-body">
              <h5>Industrial Acetone</h5>
              <span class="chemical-formula">CAS: 67-64-1 | 99.5% Min</span>
              <p class="text-muted small">High purity organic solvent for precision industrial coating.</p>
              <div class="card-actions">
                <a href="{{ route('product-details') }}" class="btn-soft w-100 justify-content-center">View Details</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="card-premium">
            <div class="card-img-wrap">
              <span class="category-badge-chip">Water Treatment</span>
              <img src="https://images.unsplash.com/photo-1500382017468-9049fed747ef?auto=format&fit=crop&w=500&q=80" alt="Poly Aluminium Chloride">
            </div>
            <div class="card-body">
              <h5>Poly Aluminium Chloride</h5>
              <span class="chemical-formula">CAS: 1327-41-9 | 30% Al₂O₃</span>
              <p class="text-muted small">High-efficiency coagulant for industrial ETP and municipal water.</p>
              <div class="card-actions">
                <a href="{{ route('product-details') }}" class="btn-soft w-100 justify-content-center">View Details</a>
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
