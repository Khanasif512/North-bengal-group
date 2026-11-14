<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us | ChemCorp Bangladesh - Industrial & Pharma Chemicals</title>

  <!-- Favicon -->
  <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">

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
      <div class="badge-tag mb-2">
        <i class="bi bi-geo-alt-fill"></i> Dhaka • Munshiganj • Chattogram
      </div>
      <h1>Contact North Bengal Group</h1>
      <div class="breadcrumb-custom">
        <a href="{{ route('home') }}">Home</a> / <span>Contact Us</span>
      </div>
      <p class="mt-3 text-light opacity-75 max-w-600 mx-auto small">
        Connect directly with our chemical sales specialists, analytical laboratory, and logistics coordinators for inquiries, bulk supply contracts, and COA dossiers across Bangladesh.
      </p>
    </div>
  </section>

  <!-- ===== DIRECT CONTACT CHANNELS STRIP ===== -->
  <section class="pt-5 pb-3">
    <div class="container">
      <div class="row g-3">
        <!-- Channel 1: Sales Hotline -->
        <div class="col-md-6 col-lg-3">
          <div class="contact-channel-card">
            <div class="contact-channel-icon icon-sales">
              <i class="bi bi-telephone-outbound-fill"></i>
            </div>
            <div>
              <h6>Commercial Sales</h6>
              <a href="tel:+8801711234567" class="channel-value">+880 1711-234567</a>
              <span class="text-muted small">Dhaka HQ: +880 2-9876543</span>
            </div>
          </div>
        </div>

        <!-- Channel 2: WhatsApp -->
        <div class="col-md-6 col-lg-3">
          <div class="contact-channel-card">
            <div class="contact-channel-icon icon-wa">
              <i class="bi bi-whatsapp"></i>
            </div>
            <div>
              <h6>WhatsApp B2B Support</h6>
              <a href="https://wa.me/8801711234567" target="_blank" rel="noopener" class="channel-value">+880 1711-234567</a>
              <span class="text-success small fw-semibold">Instant Quote & Chat</span>
            </div>
          </div>
        </div>

        <!-- Channel 3: Email -->
        <div class="col-md-6 col-lg-3">
          <div class="contact-channel-card">
            <div class="contact-channel-icon icon-lab">
              <i class="bi bi-envelope-at-fill"></i>
            </div>
            <div>
              <h6>Official Quotations</h6>
              <a href="mailto:sales@chemcorp.com.bd" class="channel-value">sales@chemcorp.com.bd</a>
              <span class="text-muted small">info@chemcorp.com.bd</span>
            </div>
          </div>
        </div>

        <!-- Channel 4: Operating Hours -->
        <div class="col-md-6 col-lg-3">
          <div class="contact-channel-card">
            <div class="contact-channel-icon icon-hq">
              <i class="bi bi-clock-history"></i>
            </div>
            <div>
              <h6>Corporate Hours</h6>
              <span class="channel-value" style="font-size:0.96rem;">Sat - Thu: 9 AM - 6 PM</span>
              <span class="text-danger small fw-semibold">Friday: Closed</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== MAIN CONTACT & RFQ SECTION ===== -->
  <section class="section py-5">
    <div class="container">
      <div class="row g-4 g-xl-5">

        <!-- LEFT COLUMN: Bangladesh Corporate Facilities & Logistics Hubs -->
        <div class="col-lg-5">
          <div class="contact-info-box shadow-sm">
            <div class="d-flex justify-content-between align-items-center mb-3">
              <h4 class="mb-0 text-white">Our Facilities in Bangladesh</h4>
              <div class="pulse-badge">
                <span class="pulse-dot"></span> Desk Active
              </div>
            </div>
            <p style="color:#cbd5e1;font-size:0.92rem;line-height:1.6;" class="mb-4">
              ChemCorp operates modern commercial facilities, analytical testing laboratories, and certified bulk storage depots across key industrial corridors of Bangladesh.
            </p>

            <!-- Facility 1: Dhaka HQ -->
            <div class="facility-card">
              <span class="badge-location">Head Office & Central Laboratory</span>
              <h5>Dhaka Central Office</h5>
              <p>Plot 45, Industrial Area, Tejgaon, Dhaka-1208, Bangladesh</p>
              <div class="facility-meta">
                <span><i class="bi bi-telephone me-1 text-info"></i> +880 2-9876543</span>
                <span><i class="bi bi-clock me-1 text-info"></i> Sat - Thu: 9:00 AM - 6:00 PM</span>
              </div>
            </div>

            <!-- Facility 2: Munshiganj Plant -->
            <div class="facility-card">
              <span class="badge-location">Manufacturing & Bulk Tanker Depot</span>
              <h5>Munshiganj Chemical Plant</h5>
              <p>BSCIC Chemical Industrial Estate, Munshiganj, Bangladesh</p>
              <div class="facility-meta">
                <span><i class="bi bi-truck me-1 text-info"></i> Road Tanker & Drum Fleet</span>
                <span><i class="bi bi-shield-check me-1 text-info"></i> UN Storage Certified</span>
              </div>
            </div>

            <!-- Facility 3: Chittagong Port Office -->
            <div class="facility-card">
              <span class="badge-location">Customs & Ocean Terminal Desk</span>
              <h5>Chattogram Port Logistics Office</h5>
              <p>Agrabad Commercial Area, Chattogram-4100, Bangladesh</p>
              <div class="facility-meta">
                <span><i class="bi bi-globe me-1 text-info"></i> Direct Port Clearance</span>
                <span><i class="bi bi-box-seam me-1 text-info"></i> ISO Tank & Container Liaison</span>
              </div>
            </div>

            <!-- Bangladesh Supply Protocol Badge -->
            <div class="p-3 rounded-3 mt-4" style="background: rgba(0, 180, 216, 0.12); border: 1px solid rgba(0, 180, 216, 0.25);">
              <div class="d-flex align-items-center gap-3">
                <i class="bi bi-shield-fill-check fs-3 text-info"></i>
                <div class="small">
                  <strong class="d-block text-white">Nationwide Supply Assurance</strong>
                  <span style="color: #94a3b8;">Supplying to factories across 64 districts in Bangladesh with verified COA & challan.</span>
                </div>
              </div>
            </div>

          </div>
        </div>

        <!-- RIGHT COLUMN: Redesigned Commercial RFQ Form -->
        <div class="col-lg-7">
          <div class="card-premium p-4 p-md-5">

            <!-- Guarantee Notice -->
            <div class="guarantee-bar">
              <i class="bi bi-clock-history"></i>
              <div>
                <strong>Rapid Quotation Service:</strong> Our Dhaka commercial desk will evaluate your chemical requirements and send a proforma quotation within <strong>2 to 4 business hours</strong>.
              </div>
            </div>

            <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-3">
              <div>
                <h3 class="mb-1" style="font-size: 1.7rem;">Submit Commercial RFQ</h3>
                <p class="text-muted small mb-0">Request bulk pricing, TDS/MSDS documents, or laboratory test samples.</p>
              </div>
              <span class="badge bg-light text-primary border px-3 py-2 small fw-semibold">
                <i class="bi bi-shield-check text-success me-1"></i> B2B Corporate Protocol
              </span>
            </div>

            <form id="contactForm">
              <div class="row g-3">
                <div class="col-md-6">
                  <label class="form-label small fw-semibold">Your Full Name *</label>
                  <div class="input-group">
                    <span class="input-group-text bg-light border-end-0"><i class="bi bi-person text-muted"></i></span>
                    <input type="text" class="form-control border-start-0 ps-0" placeholder="e.g. Engr. Tanvir Ahmed" required>
                  </div>
                </div>

                <div class="col-md-6">
                  <label class="form-label small fw-semibold">Company / Mill / Organization *</label>
                  <div class="input-group">
                    <span class="input-group-text bg-light border-end-0"><i class="bi bi-building text-muted"></i></span>
                    <input type="text" class="form-control border-start-0 ps-0" placeholder="e.g. Beximco / Square / Apex Mills" required>
                  </div>
                </div>

                <div class="col-md-6">
                  <label class="form-label small fw-semibold">Corporate Email Address *</label>
                  <div class="input-group">
                    <span class="input-group-text bg-light border-end-0"><i class="bi bi-envelope text-muted"></i></span>
                    <input type="email" class="form-control border-start-0 ps-0" placeholder="tanvir@company.com.bd" required>
                  </div>
                </div>

                <div class="col-md-6">
                  <label class="form-label small fw-semibold">Phone / WhatsApp Number *</label>
                  <div class="input-group">
                    <span class="input-group-text bg-light border-end-0"><i class="bi bi-telephone text-muted"></i></span>
                    <input type="tel" class="form-control border-start-0 ps-0" placeholder="+880 1711-000000" required>
                  </div>
                </div>

                <div class="col-md-6">
                  <label class="form-label small fw-semibold">Chemical Division / Sector *</label>
                  <div class="input-group">
                    <span class="input-group-text bg-light border-end-0"><i class="bi bi-grid text-muted"></i></span>
                    <select class="form-control border-start-0 ps-0" required>
                      <option value="">-- Select Division --</option>
                      <option value="Industrial">Industrial Acids & Base Alkalis</option>
                      <option value="Pharma">Pharmaceutical APIs & Excipients</option>
                      <option value="Textile">Textile Processing & Dyeing Auxiliaries</option>
                      <option value="Agro">Agrochemicals & Fertilizers</option>
                      <option value="Water">Water Treatment & ETP Compounds</option>
                      <option value="Specialty">Specialty Solvents & Reagents</option>
                      <option value="Other">Custom Formulation / Other</option>
                    </select>
                  </div>
                </div>

                <div class="col-md-6">
                  <label class="form-label small fw-semibold">Delivery District / Destination *</label>
                  <div class="input-group">
                    <span class="input-group-text bg-light border-end-0"><i class="bi bi-geo-alt text-muted"></i></span>
                    <input type="text" class="form-control border-start-0 ps-0" placeholder="e.g. Gazipur / Narayanganj / Chattogram" required>
                  </div>
                </div>

                <div class="col-12">
                  <label class="form-label small fw-semibold">Chemical Name & Estimated Quantity</label>
                  <div class="input-group">
                    <span class="input-group-text bg-light border-end-0"><i class="bi bi-box-seam text-muted"></i></span>
                    <input type="text" class="form-control border-start-0 ps-0" placeholder="e.g. Caustic Soda Flakes (10 MT) / Sulfuric Acid 98% (20 MT Tanker)">
                  </div>
                </div>

                <div class="col-12">
                  <label class="form-label small fw-semibold">Message & Technical Specifications *</label>
                  <textarea class="form-control" rows="4" placeholder="Specify technical purity, packaging preferences (drums/IBC totes/bulk tanker), required testing documentation (COA/MSDS), and expected delivery schedule..." required></textarea>
                </div>

                <div class="col-12 pt-2">
                  <button type="submit" class="btn-premium w-100 justify-content-center py-3">
                    <i class="bi bi-send-check-fill me-2 fs-5"></i> Submit Commercial RFQ (দরপত্র পাঠান)
                  </button>
                  <div class="d-flex justify-content-between align-items-center mt-2 flex-wrap text-muted small">
                    <span><i class="bi bi-shield-check text-success me-1"></i> Non-Disclosure Protected</span>
                    <span><i class="bi bi-check2-circle text-info me-1"></i> BDT & L/C Invoicing Accepted</span>
                  </div>
                </div>
              </div>
            </form>

          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ===== INTERACTIVE MAP SECTION WITH FACILITY SWITCHER ===== -->
  <section class="section pt-0">
    <div class="container">
      <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-4">
        <div>
          <span class="badge-tag mb-1">Geographical Locations</span>
          <h2 class="section-title mb-0">Our Bangladesh Locations</h2>
        </div>

        <!-- Location Switcher Buttons -->
        <div class="d-flex gap-2 flex-wrap">
          <button type="button" class="map-switcher-btn active" onclick="switchMap('dhaka', this)">
            <i class="bi bi-building me-1"></i> Dhaka Headquarters
          </button>
          <button type="button" class="map-switcher-btn" onclick="switchMap('munshiganj', this)">
            <i class="bi bi-gear-wide-connected me-1"></i> Munshiganj Plant
          </button>
          <button type="button" class="map-switcher-btn" onclick="switchMap('chittagong', this)">
            <i class="bi bi-water me-1"></i> Chattogram Port Desk
          </button>
        </div>
      </div>

      <!-- Map Container -->
      <div class="rounded-4 overflow-hidden shadow-sm border position-relative" style="height: 420px;">
        <iframe
          id="facilityMapFrame"
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.848043685324!2d90.3995804!3d23.7665241!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7774e1d1571%3A0xc3f600e5e017267a!2sTejgaon%20Industrial%20Area%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1700000000000!5m2!1sen!2sbd"
          width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
        </iframe>

        <!-- Map Info Overlay -->
        <div id="mapInfoOverlay" class="position-absolute bottom-0 start-0 m-3 p-3 bg-white rounded-3 shadow border d-none d-sm-block" style="max-width: 360px;">
          <h6 class="mb-1 text-primary fw-bold" id="mapFacilityTitle">Tejgaon Central Headquarters & Lab</h6>
          <p class="text-muted small mb-1" id="mapFacilityAddress">Plot 45, Industrial Estate, Tejgaon, Dhaka-1208, Bangladesh</p>
          <span class="badge bg-light text-dark border small" id="mapFacilityHours"><i class="bi bi-clock me-1 text-info"></i> Open: Sat - Thu: 9:00 AM - 6:00 PM</span>
        </div>
      </div>
    </div>
  </section>

  @include('User.Partials.footer')


  <!-- Interactive Map Switcher Script -->
  <script>
    const MAP_LOCATIONS = {
      dhaka: {
        title: 'Tejgaon Central Headquarters & Lab',
        address: 'Plot 45, Industrial Area, Tejgaon, Dhaka-1208, Bangladesh',
        hours: 'Sat - Thu: 9:00 AM - 6:00 PM',
        embed: 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.848043685324!2d90.3995804!3d23.7665241!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7774e1d1571%3A0xc3f600e5e017267a!2sTejgaon%20Industrial%20Area%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1700000000000!5m2!1sen!2sbd'
      },
      munshiganj: {
        title: 'Munshiganj Chemical Synthesis & Bulk Storage Plant',
        address: 'BSCIC Chemical Industrial Estate, Munshiganj, Bangladesh',
        hours: 'Dispatch Operations: 24/7 Monitored',
        embed: 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d116933.167!2d90.4500!3d23.5500!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b0a390000001%3A0x86bb66d626359f10!2sMunshiganj!5e0!3m2!1sen!2sbd!4v1700000000001!5m2!1sen!2sbd'
      },
      chittagong: {
        title: 'Chattogram Port Clearing & Logistics Desk',
        address: 'Agrabad Commercial Area, Chattogram-4100, Bangladesh',
        hours: 'Customs Liaison: Sun - Thu: 9:00 AM - 5:00 PM',
        embed: 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d118106.66!2d91.7500!3d22.3300!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30acd89aaa000001%3A0xa549f6583995d30c!2sAgrabad%2C%20Chattogram!5e0!3m2!1sen!2sbd!4v1700000000002!5m2!1sen!2sbd'
      }
    };

    function switchMap(locKey, btn) {
      document.querySelectorAll('.map-switcher-btn').forEach(b => b.classList.remove('active'));
      btn.classList.add('active');

      const loc = MAP_LOCATIONS[locKey];
      if (loc) {
        document.getElementById('facilityMapFrame').src = loc.embed;
        document.getElementById('mapFacilityTitle').textContent = loc.title;
        document.getElementById('mapFacilityAddress').textContent = loc.address;
        document.getElementById('mapFacilityHours').innerHTML = `<i class="bi bi-clock me-1 text-info"></i> ${loc.hours}`;
      }
    }
  </script>

</body>
</html>
