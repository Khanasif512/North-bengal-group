/**
 * ChemCorp - Premium Corporate Chemical Solutions
 * JavaScript Functionality & Chemical Catalog Database
 */

// ===== CHEMICAL PRODUCT DATABASE (FOR DYNAMIC PRODUCT DETAILS) =====
const CHEMICAL_DATABASE = {
  'sulfuric-acid': {
    name: 'Sulfuric Acid 98%',
    category: 'Industrial Division',
    cas: '7664-93-9',
    einecs: '231-639-5',
    formula: 'H₂SO₄',
    molWeight: '98.079 g/mol',
    assay: '≥ 98.0% Tech Min (Battery Grade: 98.5%)',
    appearance: 'Clear, colorless, viscous oily liquid',
    density: '1.84 g/cm³ at 20°C',
    unNumber: 'UN 1830 (Class 8 Corrosive)',
    packaging: '35kg Poly Jerrycans, 250kg HM-HDPE Drums, 1000kg IBC Totes, Bulk Tankers',
    description: 'ChemCorp’s premium-grade 98% Technical & Battery grade Sulfuric Acid is an ultra-dense, odorless, oily liquid manufactured via the catalyzed contact process. It conforms to rigorous international standards for heavy chemical manufacturing, battery electrolyte production, mineral leaching, and agricultural fertilizers.',
    applications: ['Lead-Acid Battery Electrolytes', 'Phosphate & Sulfate Fertilizer Production', 'Metal Pickling & Steel Processing', 'Textile Dyeing & Rayon Manufacture', 'Chemical Synthesis & Petrochemicals'],
    image: 'https://images.unsplash.com/photo-1603126857599-f6e157fa2fe6?auto=format&fit=crop&w=1000&q=80'
  },
  'caustic-soda': {
    name: 'Caustic Soda Flakes (NaOH)',
    category: 'Industrial Division',
    cas: '1310-73-2',
    einecs: '215-185-5',
    formula: 'NaOH',
    molWeight: '39.997 g/mol',
    assay: '≥ 99.0% Sodium Hydroxide',
    appearance: 'White deliquescent crystalline flakes',
    density: '2.13 g/cm³',
    unNumber: 'UN 1823 (Class 8 Corrosive)',
    packaging: '25kg PP/PE Laminated Moisture-Proof Bags, 1000kg Jumbo Bags',
    description: 'Ultra-pure white sodium hydroxide flakes manufactured through membrane electrolysis. Free from carbonates, iron contamination, and heavy metals, offering superior solubility for textile scouring, pulp bleaching, and soap saponification.',
    applications: ['Textile Scouring & Mercerization', 'Detergent & Soap Saponification', 'Pulp & Paper Bleaching', 'Water Treatment & Neutralization', 'Alumina Refining'],
    image: 'https://images.unsplash.com/photo-1584308666744-24d5c474f2ae?auto=format&fit=crop&w=1000&q=80'
  },
  'hydrochloric-acid': {
    name: 'Hydrochloric Acid 33% (HCl)',
    category: 'Industrial Division',
    cas: '7647-01-0',
    einecs: '231-595-7',
    formula: 'HCl (Aqueous)',
    molWeight: '36.46 g/mol',
    assay: '31.0% - 33.0% Pure Aqueous Solution',
    appearance: 'Clear, colorless to light yellow fuming liquid',
    density: '1.16 g/cm³ at 20°C',
    unNumber: 'UN 1789 (Class 8 Corrosive)',
    packaging: '30kg Poly Can, 240kg Drum, 1000kg IBC Tote, Road Tankers',
    description: 'High-purity industrial grade Hydrochloric Acid manufactured through pure hydrogen and chlorine direct synthesis. Widely deployed in steel surface pickling, oil-well acidizing, gelatin processing, and pH regulation in water plants.',
    applications: ['Steel & Metal Pickling', 'Oil-Well Acidizing', 'Industrial pH Regulation & Neutralization', 'Demineralization & Resin Regeneration', 'Food Grade Gelatin Processing'],
    image: 'https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&w=1000&q=80'
  },
  'paracetamol-api': {
    name: 'Paracetamol API (Acetaminophen)',
    category: 'Pharmaceutical Division',
    cas: '103-90-2',
    einecs: '203-157-5',
    formula: 'C₈H₉NO₂',
    molWeight: '151.16 g/mol',
    assay: '99.0% - 101.0% (USP / BP / EP Compliant)',
    appearance: 'White crystalline odorless powder',
    density: '1.26 g/cm³',
    unNumber: 'Non-Hazardous Pharma Grade',
    packaging: '25kg Double-Lined Sealed Fiber Drums, Palletized',
    description: 'Pure Active Pharmaceutical Ingredient (API) formulated to meet USP, BP, and Ph.Eur standards. Engineered with optimal crystal morphology and flow properties for both direct compression (DC) and wet granulation tablet manufacturing.',
    applications: ['Analgesic & Antipyretic Tablets', 'Pediatric Oral Suspensions', 'Effervescent Formulations', 'Cold & Flu Multi-Symptom Capsules'],
    image: 'https://images.unsplash.com/photo-1532187863486-abf9dbad1b69?auto=format&fit=crop&w=1000&q=80'
  },
  'aspirin-api': {
    name: 'Acetylsalicylic Acid (Aspirin API)',
    category: 'Pharmaceutical Division',
    cas: '50-78-2',
    einecs: '200-064-1',
    formula: 'C₉H₈O₄',
    molWeight: '180.16 g/mol',
    assay: '99.5% - 101.0% (Dry Basis)',
    appearance: 'White crystalline powder or needles',
    density: '1.40 g/cm³',
    unNumber: 'Non-Hazardous Pharma Grade',
    packaging: '25kg Polyethylene Lined Fiber Drums',
    description: 'Certified medicinal grade Active Pharmaceutical Ingredient for anti-inflammatory, pain-relief, and cardiovascular blood-thinning tablet formulations. Low free salicylic acid content guaranteed under stability storage.',
    applications: ['Cardiovascular Antiplatelet Therapy', 'Nonsteroidal Anti-Inflammatory Tablets', 'Fast-Dissolving Effervescent Powders', 'Veterinary Analgesics'],
    image: 'https://images.unsplash.com/photo-1587854692152-cbe660dbde88?auto=format&fit=crop&w=1000&q=80'
  },
  'sodium-benzoate': {
    name: 'Sodium Benzoate FCC / Pharma',
    category: 'Pharmaceutical & Food Division',
    cas: '532-32-1',
    einecs: '208-534-8',
    formula: 'C₇H₅NaO₂',
    molWeight: '144.11 g/mol',
    assay: '≥ 99.0% Dry Basis (FCC & BP Grade)',
    appearance: 'White odorless granular or extruded noodles',
    density: '1.44 g/cm³',
    unNumber: 'Non-Hazardous Compound',
    packaging: '25kg Multi-Wall Kraft Paper Bags with PE Inner Liner',
    description: 'High-purity antimicrobial preservative and antifungal agent. Outstanding water solubility and clarity, designed for liquid oral pharmaceuticals, diagnostic syrups, personal care cosmetics, and beverage stabilization.',
    applications: ['Pharmaceutical Liquid Suspensions & Syrups', 'Personal Care, Lotions & Shampoos', 'Carbonated Soft Drinks & Condiments', 'Industrial Corrosion Inhibition'],
    image: 'https://images.unsplash.com/photo-1584017911766-d451b3d0e843?auto=format&fit=crop&w=1000&q=80'
  },
  'urea-fertilizer': {
    name: 'Urea Technical & Fertilizer Grade 46% N',
    category: 'Agrochemical Division',
    cas: '57-13-6',
    einecs: '200-315-5',
    formula: 'CH₄N₂O',
    molWeight: '60.06 g/mol',
    assay: '≥ 46.0% Total Nitrogen Content',
    appearance: 'White spherical uniform prills / granules',
    density: '1.32 g/cm³',
    unNumber: 'Non-Hazardous Solid',
    packaging: '50kg Woven Polypropylene Bags, 1000kg Bulk Jumbo Totes',
    description: 'High-nitrogen fertilizer and industrial raw material. Excellent anti-caking coating guarantees free flow in automated spreaders and smooth dissolution in chemical resin reactions (Urea-Formaldehyde).',
    applications: ['Agricultural Crop Nitrogen Fertilization', 'Urea-Formaldehyde Wood Adhesives', 'Melamine & Cyanuric Acid Synthesis', 'Diesel Exhaust Fluid (DEF / AdBlue) Formulation'],
    image: 'https://images.unsplash.com/photo-1567427017947-545c5f8d16ad?auto=format&fit=crop&w=1000&q=80'
  },
  'zinc-sulfate': {
    name: 'Zinc Sulfate Monohydrate (Zn 35.5%)',
    category: 'Agrochemical Division',
    cas: '7446-19-7',
    einecs: '231-793-3',
    formula: 'ZnSO₄·H₂O',
    molWeight: '179.47 g/mol',
    assay: '≥ 35.5% Elemental Zinc (Zn)',
    appearance: 'White crystalline free-flowing powder',
    density: '3.28 g/cm³',
    unNumber: 'UN 3077 (Class 9 Environmentally Hazardous)',
    packaging: '25kg Laminated Moisture-Proof Bags, 1000kg Bulk Bags',
    description: 'Premium zinc micronutrient salt designed to cure zinc deficiency in agricultural crops (rice, maize, citrus), enriched feed formulation for poultry/livestock, and water flotation metallurgy.',
    applications: ['Soil Micronutrient & Foliar Fertilizer', 'Animal Feed Premixes & Mineral Supplements', 'Viscose Rayon Spinning Bath Additive', 'Water Clarification & Electroplating'],
    image: 'https://images.unsplash.com/photo-1585314062340-f1a5a7c9328d?auto=format&fit=crop&w=1000&q=80'
  },
  'acetone': {
    name: 'Industrial Pure Acetone (Solvent)',
    category: 'Specialty & Solvents Division',
    cas: '67-64-1',
    einecs: '200-662-2',
    formula: 'C₃H₆O',
    molWeight: '58.08 g/mol',
    assay: '≥ 99.5% Pure Technical & ACS Grade',
    appearance: 'Clear, volatile, colorless mobile liquid',
    density: '0.791 g/cm³ at 20°C',
    unNumber: 'UN 1090 (Class 3 Flammable Liquid)',
    packaging: '160kg Heavy-Gauge Steel Drums, ISO Tank Containers',
    description: 'Fast-evaporating, miscibility-grade organic solvent. Excellent solvency power for acrylics, epoxies, and vinyl resins. Used extensively in fiberglass fabrication, industrial painting, and laboratory extraction.',
    applications: ['Fiberglass & Polyester Resin Cleanup', 'Paints, Varnishes & Lacquer Formulations', 'Precision Degreasing & Electronics Assembly', 'Chemical Intermediates (Bisphenol A)'],
    image: 'https://images.unsplash.com/photo-1581093588401-fbb62a02f120?auto=format&fit=crop&w=1000&q=80'
  },
  'ipa': {
    name: 'Isopropyl Alcohol 99.9% (IPA)',
    category: 'Specialty & Solvents Division',
    cas: '67-63-0',
    einecs: '200-661-7',
    formula: 'C₃H₈O',
    molWeight: '60.10 g/mol',
    assay: '≥ 99.9% Pure Electronic & Pharma Grade',
    appearance: 'Clear, water-white transparent liquid',
    density: '0.786 g/cm³ at 20°C',
    unNumber: 'UN 1219 (Class 3 Flammable Liquid)',
    packaging: '160kg Steel Drums, 800kg IBC Totes',
    description: 'Ultra-dry, high-purity Isopropanol. Ultra-low non-volatile residue (NVR) makes it the gold standard for electronics cleaning, cleanroom wipe-down, sanitizing formulation, and pharmaceutical crystallization.',
    applications: ['Semiconductor & Circuit Board Cleaning', 'Hospital Grade Antiseptic Hand Rubs', 'Pharmaceutical Solvent & Crystallization', 'Printing Inks & Flexographic Solvents'],
    image: 'https://images.unsplash.com/photo-1584308666744-24d5c474f2ae?auto=format&fit=crop&w=1000&q=80'
  },
  'pac': {
    name: 'Poly Aluminium Chloride 30% (PAC)',
    category: 'Water Treatment Division',
    cas: '1327-41-9',
    einecs: '215-477-2',
    formula: '[Al₂(OH)ₙCl₆₋ₙ]ₘ',
    molWeight: 'Variable Polymeric',
    assay: '≥ 30.0% Al₂O₃ Active Content',
    appearance: 'Yellow to light-yellow fine spray-dried powder',
    density: '1.20 - 1.35 g/cm³ (Solution)',
    unNumber: 'Non-Hazardous Coagulant',
    packaging: '25kg Double-Woven PP Bags with Inner Plastic Liner',
    description: 'High-performance inorganic polymeric coagulant. Formulated with high basicity for rapid floc formation and settling in drinking water reservoirs, municipal wastewater, and textile dyeing effluent (ETP) plants.',
    applications: ['Drinking Water Purification (Municipal)', 'Textile & Dyeing Effluent Treatment Plants (ETP)', 'Paper Sizing & Retention Agent', 'Industrial Sludge Dewatering'],
    image: 'https://images.unsplash.com/photo-1500382017468-9049fed747ef?auto=format&fit=crop&w=1000&q=80'
  },
  'calcium-hypochlorite': {
    name: 'Calcium Hypochlorite 70% (Chlorine)',
    category: 'Water Treatment Division',
    cas: '7778-54-3',
    einecs: '231-908-7',
    formula: 'Ca(ClO)₂',
    molWeight: '142.98 g/mol',
    assay: '≥ 70.0% Available Chlorine Min',
    appearance: 'White / greyish-white granular solid',
    density: '2.35 g/cm³',
    unNumber: 'UN 2880 (Class 5.1 Oxidizing Substance)',
    packaging: '40kg / 45kg UN-Approved Heavy-Duty Plastic Drums',
    description: 'Potent industrial bleaching and disinfection chemical. Delivers 70% active chlorine for bacterial eradication in water reservoirs, industrial cooling towers, seafood sanitation, and hospital hygiene.',
    applications: ['Municipal Reservoir Water Disinfection', 'Industrial Cooling Tower Biocide', 'Swimming Pool Sanitation', 'Food & Dairy Processing Plant Sanitizing'],
    image: 'https://images.unsplash.com/photo-1603126857599-f6e157fa2fe6?auto=format&fit=crop&w=1000&q=80'
  }
};

document.addEventListener('DOMContentLoaded', function () {
  'use strict';

  // ===== Dynamic Product Details Page Renderer =====
  const params = new URLSearchParams(window.location.search);
  const productId = params.get('id');
  const detailTitle = document.getElementById('detailProductTitle');

  if (detailTitle) {
    const key = (productId && CHEMICAL_DATABASE[productId]) ? productId : 'sulfuric-acid';
    const prod = CHEMICAL_DATABASE[key];

    if (prod) {
      document.title = `${prod.name} | ChemCorp Product Details`;
      detailTitle.textContent = prod.name;

      const breadcrumb = document.getElementById('detailBreadcrumb');
      if (breadcrumb) breadcrumb.textContent = prod.name;

      const formulaEl = document.getElementById('detailFormula');
      if (formulaEl) formulaEl.textContent = `Formula: ${prod.formula} | Molecular Weight: ${prod.molWeight}`;

      const catBadge = document.getElementById('detailCategoryBadge');
      if (catBadge) catBadge.textContent = prod.category;

      const casBadge = document.getElementById('detailCasBadge');
      if (casBadge) casBadge.textContent = `CAS No: ${prod.cas}`;

      const descEl = document.getElementById('detailDescription');
      if (descEl) descEl.textContent = prod.description;

      const mainImg = document.getElementById('mainProductImage');
      if (mainImg) mainImg.src = prod.image;

      // Fill specifications table
      const specTbody = document.getElementById('detailSpecsBody');
      if (specTbody) {
        specTbody.innerHTML = `
          <tr><th>Chemical Name</th><td>${prod.name}</td></tr>
          <tr><th>CAS Number</th><td>${prod.cas}</td></tr>
          <tr><th>EINECS Number</th><td>${prod.einecs || 'N/A'}</td></tr>
          <tr><th>Assay / Purity</th><td>${prod.assay}</td></tr>
          <tr><th>Physical Appearance</th><td>${prod.appearance}</td></tr>
          <tr><th>Density</th><td>${prod.density}</td></tr>
          <tr><th>Regulatory / UN Code</th><td>${prod.unNumber}</td></tr>
          <tr><th>Available Packaging</th><td>${prod.packaging}</td></tr>
        `;
      }

      // Fill applications list
      const appWrap = document.getElementById('detailApplicationsWrap');
      if (appWrap && Array.isArray(prod.applications)) {
        appWrap.innerHTML = prod.applications.map(app => 
          `<span class="badge bg-light text-dark border p-2 px-3 fw-medium">${app}</span>`
        ).join(' ');
      }

      // Update RFQ buttons on detail page
      document.querySelectorAll('.btn-detail-rfq').forEach(btn => {
        btn.setAttribute('data-product-name', prod.name);
        btn.setAttribute('data-product-cas', prod.cas);
      });
    }
  }

  // ===== Navbar Scroll Effect =====
  const navbar = document.querySelector('.navbar');
  window.addEventListener('scroll', function () {
    if (window.scrollY > 40) {
      navbar?.classList.add('scrolled');
    } else {
      navbar?.classList.remove('scrolled');
    }
  });

  // ===== Active Nav Link Highlighting =====
  const currentPage = window.location.pathname.split('/').pop() || 'index.html';
  document.querySelectorAll('.navbar .nav-link').forEach(link => {
    const href = link.getAttribute('href');
    if (href === currentPage || (currentPage === '' && href === 'index.html')) {
      link.classList.add('active');
    } else if (href !== currentPage) {
      link.classList.remove('active');
    }
  });

  // ===== Product Category Filtering & Search =====
  const filterBtns = document.querySelectorAll('.filter-btn');
  const productItems = document.querySelectorAll('.product-item');
  const searchInput = document.getElementById('productSearchInput');
  const noProductsMsg = document.getElementById('noProductsMessage');

  let currentCategory = 'all';
  let currentSearch = '';

  function applyProductFilters() {
    let visibleCount = 0;

    productItems.forEach(item => {
      const category = item.dataset.category || '';
      const text = item.textContent.toLowerCase();
      const matchesCategory = (currentCategory === 'all' || category === currentCategory);
      const matchesSearch = currentSearch === '' || text.includes(currentSearch);

      if (matchesCategory && matchesSearch) {
        item.style.display = 'block';
        item.style.animation = 'fadeIn 0.35s ease';
        visibleCount++;
      } else {
        item.style.display = 'none';
      }
    });

    if (noProductsMsg) {
      noProductsMsg.style.display = visibleCount === 0 ? 'block' : 'none';
    }
  }

  if (filterBtns.length) {
    filterBtns.forEach(btn => {
      btn.addEventListener('click', function () {
        filterBtns.forEach(b => b.classList.remove('active'));
        this.classList.add('active');
        currentCategory = this.dataset.filter || 'all';
        applyProductFilters();
      });
    });
  }

  if (searchInput) {
    searchInput.addEventListener('input', function () {
      currentSearch = this.value.trim().toLowerCase();
      applyProductFilters();
    });
  }

  // ===== RFQ / Quote Modal Auto-fill =====
  const rfqModal = document.getElementById('rfqModal');
  if (rfqModal) {
    rfqModal.addEventListener('show.bs.modal', function (event) {
      const button = event.relatedTarget;
      if (button) {
        const productName = button.getAttribute('data-product-name') || 'Chemical Product';
        const productCas = button.getAttribute('data-product-cas') || '';
        const modalTitle = rfqModal.querySelector('.modal-product-title');
        const inputProduct = rfqModal.querySelector('#rfqProductInput');

        if (modalTitle) {
          modalTitle.textContent = productName + (productCas ? ` (${productCas})` : '');
        }
        if (inputProduct) {
          inputProduct.value = productName + (productCas ? ` - CAS: ${productCas}` : '');
        }
      }
    });

    const rfqForm = document.getElementById('rfqForm');
    if (rfqForm) {
      rfqForm.addEventListener('submit', function (e) {
        e.preventDefault();
        const product = document.getElementById('rfqProductInput')?.value || 'Product';
        alert(`Thank you for your quotation request for "${product}". Our B2B technical sales team will send a full formal quote & TDS within 2-4 hours.`);
        const modalInstance = bootstrap.Modal.getInstance(rfqModal);
        modalInstance?.hide();
        rfqForm.reset();
      });
    }
  }

  // ===== General Contact Form =====
  const contactForm = document.getElementById('contactForm');
  if (contactForm) {
    contactForm.addEventListener('submit', function (e) {
      e.preventDefault();
      alert('Thank you! Your inquiry has been submitted to ChemCorp Bangladesh corporate commercial desk. Our technical sales team will review and contact you within 2 to 4 business hours.');
      this.reset();
    });
  }

  // ===== Back to Top Button =====
  const backToTopBtn = document.getElementById('backToTopBtn');
  if (backToTopBtn) {
    window.addEventListener('scroll', function () {
      if (window.scrollY > 300) {
        backToTopBtn.classList.add('show');
      } else {
        backToTopBtn.classList.remove('show');
      }
    });

    backToTopBtn.addEventListener('click', function () {
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    });
  }

  // ===== Product Details Thumbnail Switcher =====
  const thumbs = document.querySelectorAll('.thumb-switch');
  const mainImg = document.getElementById('mainProductImage');
  if (thumbs.length && mainImg) {
    thumbs.forEach(thumb => {
      thumb.addEventListener('click', function () {
        thumbs.forEach(t => t.classList.remove('active-thumb'));
        this.classList.add('active-thumb');
        const bigUrl = this.getAttribute('data-full-img') || this.src;
        mainImg.src = bigUrl;
      });
    });
  }
});

// ===== Keyframe Style =====
const animStyle = document.createElement('style');
animStyle.textContent = `
  @keyframes fadeIn {
    from { opacity: 0; transform: translateY(12px); }
    to { opacity: 1; transform: translateY(0); }
  }
  .thumb-switch {
    border: 2px solid transparent;
    transition: all 0.25s ease;
  }
  .thumb-switch.active-thumb {
    border-color: #00b4d8 !important;
  }
`;
document.head.appendChild(animStyle);
