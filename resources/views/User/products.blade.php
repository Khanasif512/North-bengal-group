<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
  <title>Chemical Product Catalog | ChemCorp - Corporate B2B Chemical Supply</title>

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
      <h1>Chemical Product Catalog</h1>
      <div class="breadcrumb-custom">
        <a href="{{ route('home') }}">Home</a> / <span>Products Portfolio</span>
      </div>
      <p class="mt-3 text-light opacity-75 max-w-600 mx-auto small">
        B2B commercial chemical portfolio. Browse by category, inspect analytical specifications, and request batch quotations or technical documentation.
      </p>
    </div>
  </section>

  <!-- ===== PRODUCTS CATALOG SECTION ===== -->
  <section class="section">
    <div class="container">

      <!-- Search & Category Filters -->
      <div class="filter-search-wrapper">
        <div class="row g-3 align-items-center">
          <div class="col-lg-5">
            <div class="search-input-wrap">
              <i class="bi bi-search"></i>
              <input type="text" id="productSearchInput" placeholder="Search by chemical name, formula, or CAS number...">
            </div>
          </div>
          <div class="col-lg-7">
            <div class="filter-btn-group justify-content-lg-end">
              <button type="button" class="filter-btn active" data-filter="all">
                All Products <span class="count-badge">12</span>
              </button>
              <button type="button" class="filter-btn" data-filter="industrial">
                Industrial <span class="count-badge">3</span>
              </button>
              <button type="button" class="filter-btn" data-filter="pharma">
                Pharma API <span class="count-badge">3</span>
              </button>
              <button type="button" class="filter-btn" data-filter="agro">
                Agrochemical <span class="count-badge">2</span>
              </button>
              <button type="button" class="filter-btn" data-filter="specialty">
                Specialty <span class="count-badge">2</span>
              </button>
              <button type="button" class="filter-btn" data-filter="water">
                Water Treatment <span class="count-badge">2</span>
              </button>
            </div>
          </div>
        </div>
      </div>

      <!-- No Products Message (Hidden by default) -->
      <div id="noProductsMessage" class="text-center py-5" style="display:none;">
        <i class="bi bi-search fs-1 text-muted"></i>
        <h4 class="mt-3">No matching chemical compounds found</h4>
        <p class="text-muted">Try adjusting your search query or filter category, or contact our sales chemists for custom sourcing.</p>
        <a href="{{ route('contact') }}" class="btn-premium mt-2">Enquire Custom Chemical</a>
      </div>

      <!-- Product Showcase Grid -->
      <div class="row g-4" id="productGrid">

        <!-- Product 1: Sulfuric Acid -->
        <div class="col-md-6 col-lg-4 product-item" data-category="industrial">
          <div class="card-premium">
            <div class="card-img-wrap">
              <span class="category-badge-chip">Industrial</span>
              <span class="cas-pill">CAS: 7664-93-9</span>
              <img src="https://images.unsplash.com/photo-1603126857599-f6e157fa2fe6?auto=format&fit=crop&w=600&q=80" alt="Sulfuric Acid">
            </div>
            <div class="card-body">
              <h5>Sulfuric Acid</h5>
              <span class="chemical-formula">H₂SO₄ | Molecular Weight: 98.079</span>
              <p class="text-muted small">High-purity industrial grade acid for battery manufacture, fertilizer processing, and metallurgy.</p>
              
              <div class="product-specs-list">
                <div class="spec-row"><span class="spec-label">Assay / Purity:</span><span class="spec-val">98.0% Tech Min</span></div>
                <div class="spec-row"><span class="spec-label">Appearance:</span><span class="spec-val">Clear, oily liquid</span></div>
                <div class="spec-row"><span class="spec-label">Packaging:</span><span class="spec-val">35kg Jerrycan / 1000kg IBC</span></div>
              </div>

              <div class="card-actions">
                <a href="{{ route('product-details') }}" class="btn-soft w-100 justify-content-center">
                  <i class="bi bi-info-circle"></i> View Specs
                </a>
                <button type="button" class="btn-premium py-2 px-3 small" data-bs-toggle="modal" data-bs-target="#rfqModal" data-product-name="Sulfuric Acid" data-product-cas="7664-93-9">
                  Enquire
                </button>
              </div>
            </div>
          </div>
        </div>

        <!-- Product 2: Caustic Soda Flakes -->
        <div class="col-md-6 col-lg-4 product-item" data-category="industrial">
          <div class="card-premium">
            <div class="card-img-wrap">
              <span class="category-badge-chip">Industrial</span>
              <span class="cas-pill">CAS: 1310-73-2</span>
              <img src="https://images.unsplash.com/photo-1584308666744-24d5c474f2ae?auto=format&fit=crop&w=600&q=80" alt="Caustic Soda Flakes">
            </div>
            <div class="card-body">
              <h5>Caustic Soda Flakes (NaOH)</h5>
              <span class="chemical-formula">NaOH | Sodium Hydroxide</span>
              <p class="text-muted small">White deliquescent flakes for textile processing, soap manufacturing, and chemical digestion.</p>
              
              <div class="product-specs-list">
                <div class="spec-row"><span class="spec-label">Assay / Purity:</span><span class="spec-val">≥ 99.0% NaOH</span></div>
                <div class="spec-row"><span class="spec-label">Appearance:</span><span class="spec-val">White crystalline flakes</span></div>
                <div class="spec-row"><span class="spec-label">Packaging:</span><span class="spec-val">25kg PP/PE Laminated Bags</span></div>
              </div>

              <div class="card-actions">
                <a href="{{ route('product-details') }}" class="btn-soft w-100 justify-content-center">
                  <i class="bi bi-info-circle"></i> View Specs
                </a>
                <button type="button" class="btn-premium py-2 px-3 small" data-bs-toggle="modal" data-bs-target="#rfqModal" data-product-name="Caustic Soda Flakes (NaOH)" data-product-cas="1310-73-2">
                  Enquire
                </button>
              </div>
            </div>
          </div>
        </div>

        <!-- Product 3: Hydrochloric Acid -->
        <div class="col-md-6 col-lg-4 product-item" data-category="industrial">
          <div class="card-premium">
            <div class="card-img-wrap">
              <span class="category-badge-chip">Industrial</span>
              <span class="cas-pill">CAS: 7647-01-0</span>
              <img src="https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&w=600&q=80" alt="Hydrochloric Acid">
            </div>
            <div class="card-body">
              <h5>Hydrochloric Acid (HCl)</h5>
              <span class="chemical-formula">HCl | Muriatic Acid</span>
              <p class="text-muted small">Industrial grade aqueous acid for metal pickling, pH adjustment, and synthetic resin processing.</p>
              
              <div class="product-specs-list">
                <div class="spec-row"><span class="spec-label">Assay / Purity:</span><span class="spec-val">31% - 33% Grade</span></div>
                <div class="spec-row"><span class="spec-label">Appearance:</span><span class="spec-val">Clear light yellow liquid</span></div>
                <div class="spec-row"><span class="spec-label">Packaging:</span><span class="spec-val">250kg Drum / Tanker</span></div>
              </div>

              <div class="card-actions">
                <a href="{{ route('product-details') }}" class="btn-soft w-100 justify-content-center">
                  <i class="bi bi-info-circle"></i> View Specs
                </a>
                <button type="button" class="btn-premium py-2 px-3 small" data-bs-toggle="modal" data-bs-target="#rfqModal" data-product-name="Hydrochloric Acid (HCl)" data-product-cas="7647-01-0">
                  Enquire
                </button>
              </div>
            </div>
          </div>
        </div>

        <!-- Product 4: Paracetamol API -->
        <div class="col-md-6 col-lg-4 product-item" data-category="pharma">
          <div class="card-premium">
            <div class="card-img-wrap">
              <span class="category-badge-chip">Pharma API</span>
              <span class="cas-pill">CAS: 103-90-2</span>
              <img src="https://images.unsplash.com/photo-1532187863486-abf9dbad1b69?auto=format&fit=crop&w=600&q=80" alt="Paracetamol API">
            </div>
            <div class="card-body">
              <h5>Paracetamol API (Acetaminophen)</h5>
              <span class="chemical-formula">C₈H₉NO₂ | USP / BP Standard</span>
              <p class="text-muted small">Crystalline active pharmaceutical ingredient meeting British & US Pharmacopeia standards.</p>
              
              <div class="product-specs-list">
                <div class="spec-row"><span class="spec-label">Assay / Purity:</span><span class="spec-val">99.0% - 101.0%</span></div>
                <div class="spec-row"><span class="spec-label">Melting Point:</span><span class="spec-val">168°C - 172°C</span></div>
                <div class="spec-row"><span class="spec-label">Packaging:</span><span class="spec-val">25kg Fiber Drum</span></div>
              </div>

              <div class="card-actions">
                <a href="{{ route('product-details') }}" class="btn-soft w-100 justify-content-center">
                  <i class="bi bi-info-circle"></i> View Specs
                </a>
                <button type="button" class="btn-premium py-2 px-3 small" data-bs-toggle="modal" data-bs-target="#rfqModal" data-product-name="Paracetamol API" data-product-cas="103-90-2">
                  Enquire
                </button>
              </div>
            </div>
          </div>
        </div>

        <!-- Product 5: Aspirin API -->
        <div class="col-md-6 col-lg-4 product-item" data-category="pharma">
          <div class="card-premium">
            <div class="card-img-wrap">
              <span class="category-badge-chip">Pharma API</span>
              <span class="cas-pill">CAS: 50-78-2</span>
              <img src="https://images.unsplash.com/photo-1587854692152-cbe660dbde88?auto=format&fit=crop&w=600&q=80" alt="Aspirin API">
            </div>
            <div class="card-body">
              <h5>Acetylsalicylic Acid (Aspirin)</h5>
              <span class="chemical-formula">C₉H₈O₄ | EP / USP Certified</span>
              <p class="text-muted small">Certified medicinal grade API used in formulation of anti-inflammatory & analgesic drugs.</p>
              
              <div class="product-specs-list">
                <div class="spec-row"><span class="spec-label">Assay / Purity:</span><span class="spec-val">99.5% - 101.0%</span></div>
                <div class="spec-row"><span class="spec-label">Heavy Metals:</span><span class="spec-val">≤ 10 ppm</span></div>
                <div class="spec-row"><span class="spec-label">Packaging:</span><span class="spec-val">25kg Kraft Paper Drum</span></div>
              </div>

              <div class="card-actions">
                <a href="{{ route('product-details') }}" class="btn-soft w-100 justify-content-center">
                  <i class="bi bi-info-circle"></i> View Specs
                </a>
                <button type="button" class="btn-premium py-2 px-3 small" data-bs-toggle="modal" data-bs-target="#rfqModal" data-product-name="Acetylsalicylic Acid (Aspirin)" data-product-cas="50-78-2">
                  Enquire
                </button>
              </div>
            </div>
          </div>
        </div>

        <!-- Product 6: Sodium Benzoate -->
        <div class="col-md-6 col-lg-4 product-item" data-category="pharma">
          <div class="card-premium">
            <div class="card-img-wrap">
              <span class="category-badge-chip">Pharma / Food</span>
              <span class="cas-pill">CAS: 532-32-1</span>
              <img src="https://images.unsplash.com/photo-1584017911766-d451b3d0e843?auto=format&fit=crop&w=600&q=80" alt="Sodium Benzoate">
            </div>
            <div class="card-body">
              <h5>Sodium Benzoate (Preservative)</h5>
              <span class="chemical-formula">C₇H₅NaO₂ | FCC / BP / USP</span>
              <p class="text-muted small">High-purity antimicrobial preservative for pharmaceutical suspensions, cosmetics, and food.</p>
              
              <div class="product-specs-list">
                <div class="spec-row"><span class="spec-label">Assay / Purity:</span><span class="spec-val">≥ 99.0% Dry Basis</span></div>
                <div class="spec-row"><span class="spec-label">Appearance:</span><span class="spec-val">White granular powder</span></div>
                <div class="spec-row"><span class="spec-label">Packaging:</span><span class="spec-val">25kg Multi-wall Bag</span></div>
              </div>

              <div class="card-actions">
                <a href="{{ route('product-details') }}" class="btn-soft w-100 justify-content-center">
                  <i class="bi bi-info-circle"></i> View Specs
                </a>
                <button type="button" class="btn-premium py-2 px-3 small" data-bs-toggle="modal" data-bs-target="#rfqModal" data-product-name="Sodium Benzoate" data-product-cas="532-32-1">
                  Enquire
                </button>
              </div>
            </div>
          </div>
        </div>

        <!-- Product 7: Urea Fertilizer -->
        <div class="col-md-6 col-lg-4 product-item" data-category="agro">
          <div class="card-premium">
            <div class="card-img-wrap">
              <span class="category-badge-chip">Agrochemical</span>
              <span class="cas-pill">CAS: 57-13-6</span>
              <img src="https://images.unsplash.com/photo-1567427017947-545c5f8d16ad?auto=format&fit=crop&w=600&q=80" alt="Urea Fertilizer">
            </div>
            <div class="card-body">
              <h5>Urea Fertilizer (Prilled 46% N)</h5>
              <span class="chemical-formula">CH₄N₂O | Agricultural & Tech</span>
              <p class="text-muted small">Standard agricultural fertilizer providing maximum nitrogen availability for crop development.</p>
              
              <div class="product-specs-list">
                <div class="spec-row"><span class="spec-label">Total Nitrogen:</span><span class="spec-val">≥ 46.0%</span></div>
                <div class="spec-row"><span class="spec-label">Biuret:</span><span class="spec-val">≤ 1.0% Max</span></div>
                <div class="spec-row"><span class="spec-label">Packaging:</span><span class="spec-val">50kg Woven PP Bag</span></div>
              </div>

              <div class="card-actions">
                <a href="{{ route('product-details') }}" class="btn-soft w-100 justify-content-center">
                  <i class="bi bi-info-circle"></i> View Specs
                </a>
                <button type="button" class="btn-premium py-2 px-3 small" data-bs-toggle="modal" data-bs-target="#rfqModal" data-product-name="Urea Fertilizer (Prilled 46% N)" data-product-cas="57-13-6">
                  Enquire
                </button>
              </div>
            </div>
          </div>
        </div>

        <!-- Product 8: Zinc Sulfate Monohydrate -->
        <div class="col-md-6 col-lg-4 product-item" data-category="agro">
          <div class="card-premium">
            <div class="card-img-wrap">
              <span class="category-badge-chip">Agrochemical</span>
              <span class="cas-pill">CAS: 7446-19-7</span>
              <img src="https://images.unsplash.com/photo-1585314062340-f1a5a7c9328d?auto=format&fit=crop&w=600&q=80" alt="Zinc Sulfate Monohydrate">
            </div>
            <div class="card-body">
              <h5>Zinc Sulfate Monohydrate</h5>
              <span class="chemical-formula">ZnSO₄·H₂O | Micronutrient</span>
              <p class="text-muted small">Essential micronutrient for agricultural crop fertilization, feed supplement, and water treatment.</p>
              
              <div class="product-specs-list">
                <div class="spec-row"><span class="spec-label">Zinc (Zn) Content:</span><span class="spec-val">≥ 35.5%</span></div>
                <div class="spec-row"><span class="spec-label">Form:</span><span class="spec-val">White crystalline powder</span></div>
                <div class="spec-row"><span class="spec-label">Packaging:</span><span class="spec-val">25kg Bag / 1000kg Jumbo</span></div>
              </div>

              <div class="card-actions">
                <a href="{{ route('product-details') }}" class="btn-soft w-100 justify-content-center">
                  <i class="bi bi-info-circle"></i> View Specs
                </a>
                <button type="button" class="btn-premium py-2 px-3 small" data-bs-toggle="modal" data-bs-target="#rfqModal" data-product-name="Zinc Sulfate Monohydrate" data-product-cas="7446-19-7">
                  Enquire
                </button>
              </div>
            </div>
          </div>
        </div>

        <!-- Product 9: Industrial Acetone -->
        <div class="col-md-6 col-lg-4 product-item" data-category="specialty">
          <div class="card-premium">
            <div class="card-img-wrap">
              <span class="category-badge-chip">Specialty</span>
              <span class="cas-pill">CAS: 67-64-1</span>
              <img src="https://images.unsplash.com/photo-1581093588401-fbb62a02f120?auto=format&fit=crop&w=600&q=80" alt="Industrial Acetone">
            </div>
            <div class="card-body">
              <h5>Industrial Pure Acetone</h5>
              <span class="chemical-formula">C₃H₆O | Technical & Electronic Grade</span>
              <p class="text-muted small">High volatility organic solvent for industrial resins, fiber cleaning, and precision degreasing.</p>
              
              <div class="product-specs-list">
                <div class="spec-row"><span class="spec-label">Purity:</span><span class="spec-val">≥ 99.5% Min</span></div>
                <div class="spec-row"><span class="spec-label">Boiling Point:</span><span class="spec-val">56.05 °C</span></div>
                <div class="spec-row"><span class="spec-label">Packaging:</span><span class="spec-val">160kg Drum / ISO Tank</span></div>
              </div>

              <div class="card-actions">
                <a href="{{ route('product-details') }}" class="btn-soft w-100 justify-content-center">
                  <i class="bi bi-info-circle"></i> View Specs
                </a>
                <button type="button" class="btn-premium py-2 px-3 small" data-bs-toggle="modal" data-bs-target="#rfqModal" data-product-name="Industrial Pure Acetone" data-product-cas="67-64-1">
                  Enquire
                </button>
              </div>
            </div>
          </div>
        </div>

        <!-- Product 10: Isopropyl Alcohol (IPA) -->
        <div class="col-md-6 col-lg-4 product-item" data-category="specialty">
          <div class="card-premium">
            <div class="card-img-wrap">
              <span class="category-badge-chip">Specialty</span>
              <span class="cas-pill">CAS: 67-63-0</span>
              <img src="https://images.unsplash.com/photo-1584308666744-24d5c474f2ae?auto=format&fit=crop&w=600&q=80" alt="Isopropyl Alcohol">
            </div>
            <div class="card-body">
              <h5>Isopropyl Alcohol 99.9% (IPA)</h5>
              <span class="chemical-formula">C₃H₈O | Semiconductor / Pharma</span>
              <p class="text-muted small">High-purity solvent for sanitizers, electronic board cleaning, and medical surface prep.</p>
              
              <div class="product-specs-list">
                <div class="spec-row"><span class="spec-label">Purity:</span><span class="spec-val">≥ 99.9% Pure</span></div>
                <div class="spec-row"><span class="spec-label">Water Content:</span><span class="spec-val">≤ 0.1% Max</span></div>
                <div class="spec-row"><span class="spec-label">Packaging:</span><span class="spec-val">160kg Steel Drum</span></div>
              </div>

              <div class="card-actions">
                <a href="{{ route('product-details') }}" class="btn-soft w-100 justify-content-center">
                  <i class="bi bi-info-circle"></i> View Specs
                </a>
                <button type="button" class="btn-premium py-2 px-3 small" data-bs-toggle="modal" data-bs-target="#rfqModal" data-product-name="Isopropyl Alcohol 99.9% (IPA)" data-product-cas="67-63-0">
                  Enquire
                </button>
              </div>
            </div>
          </div>
        </div>

        <!-- Product 11: Poly Aluminium Chloride (PAC) -->
        <div class="col-md-6 col-lg-4 product-item" data-category="water">
          <div class="card-premium">
            <div class="card-img-wrap">
              <span class="category-badge-chip">Water Treatment</span>
              <span class="cas-pill">CAS: 1327-41-9</span>
              <img src="https://images.unsplash.com/photo-1500382017468-9049fed747ef?auto=format&fit=crop&w=600&q=80" alt="Poly Aluminium Chloride">
            </div>
            <div class="card-body">
              <h5>Poly Aluminium Chloride 30% (PAC)</h5>
              <span class="chemical-formula">[Al₂(OH)ₙCl₆₋ₙ]ₘ | Coagulant</span>
              <p class="text-muted small">High-efficiency inorganic polymer coagulant for drinking water purification and textile ETP plants.</p>
              
              <div class="product-specs-list">
                <div class="spec-row"><span class="spec-label">Al₂O₃ Content:</span><span class="spec-val">≥ 30.0%</span></div>
                <div class="spec-row"><span class="spec-label">Basicity:</span><span class="spec-val">40% - 90%</span></div>
                <div class="spec-row"><span class="spec-label">Packaging:</span><span class="spec-val">25kg Kraft Paper Bag</span></div>
              </div>

              <div class="card-actions">
                <a href="{{ route('product-details') }}" class="btn-soft w-100 justify-content-center">
                  <i class="bi bi-info-circle"></i> View Specs
                </a>
                <button type="button" class="btn-premium py-2 px-3 small" data-bs-toggle="modal" data-bs-target="#rfqModal" data-product-name="Poly Aluminium Chloride 30% (PAC)" data-product-cas="1327-41-9">
                  Enquire
                </button>
              </div>
            </div>
          </div>
        </div>

        <!-- Product 12: Calcium Hypochlorite 70% -->
        <div class="col-md-6 col-lg-4 product-item" data-category="water">
          <div class="card-premium">
            <div class="card-img-wrap">
              <span class="category-badge-chip">Water Treatment</span>
              <span class="cas-pill">CAS: 7778-54-3</span>
              <img src="https://images.unsplash.com/photo-1603126857599-f6e157fa2fe6?auto=format&fit=crop&w=600&q=80" alt="Calcium Hypochlorite">
            </div>
            <div class="card-body">
              <h5>Calcium Hypochlorite 70% (Chlorine)</h5>
              <span class="chemical-formula">Ca(ClO)₂ | Bleaching Powder</span>
              <p class="text-muted small">Industrial disinfectant and bleaching agent for municipal water systems, pools, and industrial sanitation.</p>
              
              <div class="product-specs-list">
                <div class="spec-row"><span class="spec-label">Available Chlorine:</span><span class="spec-val">≥ 70.0% Min</span></div>
                <div class="spec-row"><span class="spec-label">Form:</span><span class="spec-val">White granular / tablet</span></div>
                <div class="spec-row"><span class="spec-label">Packaging:</span><span class="spec-val">45kg Plastic Drum</span></div>
              </div>

              <div class="card-actions">
                <a href="{{ route('product-details') }}" class="btn-soft w-100 justify-content-center">
                  <i class="bi bi-info-circle"></i> View Specs
                </a>
                <button type="button" class="btn-premium py-2 px-3 small" data-bs-toggle="modal" data-bs-target="#rfqModal" data-product-name="Calcium Hypochlorite 70%" data-product-cas="7778-54-3">
                  Enquire
                </button>
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
