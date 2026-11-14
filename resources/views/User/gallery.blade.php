<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
  <title>Photo Gallery & Facilities | ChemCorp Chemical Solutions</title>

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
      <h1>Photo Gallery</h1>
      <div class="breadcrumb-custom">
        <a href="{{ route('home') }}">Home</a> / <span>Media & Facilities Gallery</span>
      </div>
      <p class="mt-3 text-light opacity-75 max-w-600 mx-auto small">
        Explore visual snapshots of our manufacturing infrastructure, chemical testing laboratories, and global warehousing.
      </p>
    </div>
  </section>

  <!-- ===== GALLERY GRID ===== -->
  <section class="section">
    <div class="container">
      <div class="text-center mb-5">
        <span class="badge-tag">Infrastructure</span>
        <h2 class="section-title center">Production Plants & Analytical Labs</h2>
        <p class="section-subtitle mx-auto">Click on any photograph to inspect our facility in high-definition resolution.</p>
      </div>

      <div class="row g-4">
        <!-- Item 1 -->
        <div class="col-md-6 col-lg-4">
          <div class="gallery-item" data-bs-toggle="modal" data-bs-target="#lightboxModal" data-img="https://images.unsplash.com/photo-1581093588401-fbb62a02f120?auto=format&fit=crop&w=1400&q=80">
            <img src="https://images.unsplash.com/photo-1581093588401-fbb62a02f120?auto=format&fit=crop&w=700&q=80" alt="High Tech Chemical Synthesis Laboratory">
          </div>
          <div class="mt-2 text-center">
            <span class="fw-semibold small text-dark">Analytical Synthesis Facility</span>
          </div>
        </div>

        <!-- Item 2 -->
        <div class="col-md-6 col-lg-4">
          <div class="gallery-item" data-bs-toggle="modal" data-bs-target="#lightboxModal" data-img="https://images.unsplash.com/photo-1532187863486-abf9dbad1b69?auto=format&fit=crop&w=1400&q=80">
            <img src="https://images.unsplash.com/photo-1532187863486-abf9dbad1b69?auto=format&fit=crop&w=700&q=80" alt="Spectrometry & Chromatography Testing">
          </div>
          <div class="mt-2 text-center">
            <span class="fw-semibold small text-dark">HPLC & Purity Testing Chamber</span>
          </div>
        </div>

        <!-- Item 3 -->
        <div class="col-md-6 col-lg-4">
          <div class="gallery-item" data-bs-toggle="modal" data-bs-target="#lightboxModal" data-img="https://images.unsplash.com/photo-1603126857599-f6e157fa2fe6?auto=format&fit=crop&w=1400&q=80">
            <img src="https://images.unsplash.com/photo-1603126857599-f6e157fa2fe6?auto=format&fit=crop&w=700&q=80" alt="Bulk Storage & Reactor Vessels">
          </div>
          <div class="mt-2 text-center">
            <span class="fw-semibold small text-dark">Stainless Steel Reaction Vessels</span>
          </div>
        </div>

        <!-- Item 4 -->
        <div class="col-md-6 col-lg-4">
          <div class="gallery-item" data-bs-toggle="modal" data-bs-target="#lightboxModal" data-img="https://images.unsplash.com/photo-1567427017947-545c5f8d16ad?auto=format&fit=crop&w=1400&q=80">
            <img src="https://images.unsplash.com/photo-1567427017947-545c5f8d16ad?auto=format&fit=crop&w=700&q=80" alt="Automated Granulation & Packaging Line">
          </div>
          <div class="mt-2 text-center">
            <span class="fw-semibold small text-dark">Automated Bulk Packaging Line</span>
          </div>
        </div>

        <!-- Item 5 -->
        <div class="col-md-6 col-lg-4">
          <div class="gallery-item" data-bs-toggle="modal" data-bs-target="#lightboxModal" data-img="https://images.unsplash.com/photo-1581093458791-9f3c3900df4b?auto=format&fit=crop&w=1400&q=80">
            <img src="https://images.unsplash.com/photo-1581093458791-9f3c3900df4b?auto=format&fit=crop&w=700&q=80" alt="Chemical Logistics & Dispatch Terminal">
          </div>
          <div class="mt-2 text-center">
            <span class="fw-semibold small text-dark">Logistics Dispatch Terminal</span>
          </div>
        </div>

        <!-- Item 6 -->
        <div class="col-md-6 col-lg-4">
          <div class="gallery-item" data-bs-toggle="modal" data-bs-target="#lightboxModal" data-img="https://images.unsplash.com/photo-1581092918056-0c4c3acd3789?auto=format&fit=crop&w=1400&q=80">
            <img src="https://images.unsplash.com/photo-1581092918056-0c4c3acd3789?auto=format&fit=crop&w=700&q=80" alt="Chemical Engineers on Inspection">
          </div>
          <div class="mt-2 text-center">
            <span class="fw-semibold small text-dark">On-site Quality Audit & Calibration</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== LIGHTBOX MODAL ===== -->
  <div class="modal fade" id="lightboxModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content bg-transparent border-0">
        <div class="modal-body p-0 text-center position-relative">
          <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-3" data-bs-dismiss="modal" style="z-index:10;"></button>
          <img id="lightboxImg" src="" class="img-fluid rounded-4 shadow-lg" alt="Enlarged view">
        </div>
      </div>
    </div>
  </div>

  @include('User.Partials.footer')

  <script>
    // Lightbox modal handler
    var lightboxModal = document.getElementById('lightboxModal');
    if (lightboxModal) {
      lightboxModal.addEventListener('show.bs.modal', function (event) {
        var trigger = event.relatedTarget;
        document.getElementById('lightboxImg').src = trigger.getAttribute('data-img');
      });
    }
  </script>
</body>
</html>
